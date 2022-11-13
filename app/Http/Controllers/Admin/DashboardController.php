<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\Ticket;
use App\Models\User;
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
        $orders = Order::where('is_seen', 0)->get()->count();
        $customers = User::where('user_type', 'customer')->get()->count();
        $business = User::where('user_type', 'business')->get()->count();
        $tickets = Ticket::where('status', 'Pending')->get()->count();
        $products = Product::all()->count();

        return view('admin.dashboard.index', compact('orders', 'customers', 'business', 'tickets', 'products'));
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
        return view('admin.global-search.index', compact('products'));
    }
}
