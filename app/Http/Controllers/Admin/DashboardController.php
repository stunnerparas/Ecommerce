<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        // return convertPrice();

        return view('admin.dashboard.index');
    }

    public function globalSearch()
    {
        $query = request('query');
        $category = Category::select('id', 'name', 'image', DB::raw('0 as price'), DB::raw('"Category" as type'))->where('name', 'LIKE', '%' . $query . '%');
        $products = Product::select('id', 'name', 'featured_image as image', 'price', DB::raw('"Product" as type'))->where('name', 'LIKE', '%' . $query . '%');
        $results = $category->union($products)->get();

        return $results;
    }

    public function globalSearchPage()
    {
        $products = $this->globalSearch();
        return view('admin.global-search.index',compact('products'));
    }
}
