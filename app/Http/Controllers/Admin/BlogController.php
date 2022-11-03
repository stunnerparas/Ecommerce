<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use File;
use Illuminate\Support\Facades\Gate;

class BlogController extends Controller
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
        abort_unless(Gate::allows('View Blog'), 403);

        $blogs = Blog::latest()->paginate(10);
        createLog('viewed blog details'); // activity log

        return view('admin.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort_unless(Gate::allows('Create Blog'), 403);

        $categories = Category::where('parent_id', 0)->where('featured', 'Yes')->get();
        return view('admin.blog.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBlogRequest $request)
    {
        abort_unless(Gate::allows('Create Blog'), 403);

        $input = $request->except('image');
        $input['image'] = $this->fileUpload($request, 'image');
        $input['slug'] = Str::slug($request->title);
        Blog::create($input);
        createLog('created a new blog'); // activity log

        return redirect()->route('admin.blogs.index')->with('success', 'New Blog Created');
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
    public function edit(Blog $blog)
    {
        abort_unless(Gate::allows('Edit Blog'), 403);

        $categories = Category::where('parent_id', 0)->where('featured', 'Yes')->get();
        return view('admin.blog.edit', compact('blog', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        abort_unless(Gate::allows('Edit Blog'), 403);

        $input = $request->except('image');
        $image = $this->fileUpload($request, 'image');
        if ($image) {
            $this->removeFile($blog->image);
            $input['image'] = $image;
        }
        $input['slug'] = Str::slug($request->title);
        $blog->update($input);
        createLog('edited a blog'); // activity log

        return redirect()->route('admin.blogs.index')->with('success', 'Blog Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        abort_unless(Gate::allows('Delete Blog'), 403);

        $this->removeFile($blog->image);
        $blog->delete();
        createLog('deleted a blog'); // activity log

        return redirect()->route('admin.blogs.index')->with('success', 'Blog Deleted');
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
