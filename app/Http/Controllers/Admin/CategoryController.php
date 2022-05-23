<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use File;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        return view('admin.category.index', compact('categories', 'parent', 'parentCategory', 'params'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        $input = $request->except('image', 'banner');
        $input['image'] = $this->fileUpload($request, 'image');
        $input['banner'] = $this->fileUpload($request, 'banner');
        $input['slug'] = Str::slug($request->name);
        Category::create($input);

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
        $input['slug'] = Str::slug($request->name);
        $category->update($input);

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
        // $this->removeFile($category->image); // soft delete
        $category->delete();
        return redirect()->route('admin.categories.index')->with('success', 'Category Deleted');
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
}
