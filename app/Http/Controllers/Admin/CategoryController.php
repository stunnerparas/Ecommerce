<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use File;
use Illuminate\Support\Facades\Gate;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort_unless(Gate::allows('View Category'), 403);

        $categories = Category::latest();
        $parent = 0;
        $parentCategory = '';
        if (isset($_GET['parent']) && $_GET['parent']) {
            $categories = $categories->where('parent_id', $_GET['parent']);
            $parent = $_GET['parent'];
            $parentCategory = Category::findOrFail($parent);
        } else {
            $categories = $categories->where('parent_id', 0);
        }

        $categories = $categories->paginate(10);

        $params = array('parent' => $parent); // for sub categories pagination
        createLog('viewed categories'); // activity log

        return view('admin.category.index', compact('categories', 'parent', 'parentCategory', 'params'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort_unless(Gate::allows('Create Category'), 403);

        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        abort_unless(Gate::allows('Create Category'), 403);

        $input = $request->except('image', 'banner');
        $input['image'] = $this->fileUpload($request, 'image');
        $input['banner'] = $this->fileUpload($request, 'banner');

        // for unique slug
        $slug = $request->name;
        if ($request->parent_id) {
            $parentId = $this->getParentCategoryId($request->parent_id);
            $parentCategory = Category::where('id', $parentId)->first();
            $slug = $parentCategory->name . '-' . $request->name;
        }
        $input['slug'] = Str::slug($slug);
        Category::create($input);
        createLog('created new category'); // activity log

        if ($request->parent_id) {
            return redirect()->route('admin.categories.index', ['parent' => $request->parent_id])->with('success', 'New Category Created');
        }
        return redirect()->route('admin.categories.index')->with('success', 'New Category Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        abort_unless(Gate::allows('Edit Category'), 403);

        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        abort_unless(Gate::allows('Edit Category'), 403);

        $input = $request->except('image', 'banner');
        $image = $this->fileUpload($request, 'image');
        if ($image) {
            $this->removeFile($category->image);
            $input['image'] = $image;
        }
        $banner = $this->fileUpload($request, 'banner');
        if ($banner) {
            $this->removeFile($category->banner);
            $input['banner'] = $banner;
        }

        // for unique slug
        $slug = $request->name;
        if ($request->parent_id) {
            $parentId = $this->getParentCategoryId($request->parent_id);
            $parentCategory = Category::where('id', $parentId)->first();
            $slug = $parentCategory->name . '-' . $request->name;
        }
        $input['slug'] = Str::slug($slug);
        $category->update($input);
        createLog('edited a category'); // activity log

        if ($request->parent_id) {
            return redirect()->route('admin.categories.index', ['parent' => $request->parent_id])->with('success', 'Category Updated');
        }
        return redirect()->route('admin.categories.index')->with('success', 'Category Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        abort_unless(Gate::allows('Delete Category'), 403);

        // $this->removeFile($category->image); // soft delete
        $category->delete();
        createLog('deleted a category'); // activity log

        return redirect()->back()->with('success', 'Category Deleted');
    }

    public function fileUpload(Request $request, $name)
    {
        $imageName = '';
        if ($image = $request->file($name)) {
            $destinationPath = public_path() . '/images/';
            $imageName = date('YmdHis') . $name . "." . $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $image = $imageName;
        }
        return $imageName;
    }

    public function removeFile($file)
    {
        $path = public_path() . '/images/' . $file;
        if (File::exists($path)) {
            File::delete($path);
        }
    }

    public function getParentCategoryId($parent_id)
    {
        $category = Category::where('id', $parent_id)->first();

        if ($category->parent_id != 0) {
            return $this->getParentCategoryId($category->parent_id);
        }

        return $category->id;
    }
}
