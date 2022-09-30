<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $categories = Category::where('parent_id', 0)->where('featured', 'Yes')->get();
        $blogs = Blog::orderBy('date', 'DESC')
            ->whereHas('category', function ($query) {
                $query->when(request('category'), function ($query) {
                    $query->where('slug', request('category'));
                });
            })->get();

        $cat_name = 'All';
        $cat_desc = '';
        if (request('category')) {
            $cat = Category::where('slug', request('category'))->first();
            $cat_name = $cat->name ?? '';
            $cat_desc = $cat->description ?? '';
        }
        return view('frontend.blog.index', compact('blogs', 'categories', 'cat_name', 'cat_desc'));
    }

    public function single(Blog $blog)
    {
        return view('frontend.blog.show', compact('blog'));
    }
}
