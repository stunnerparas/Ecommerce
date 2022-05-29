<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $signatureCollections = $this->getProductsFromType('signature', 3);
        $classicCollections = $this->getProductsFromType('classic', 3);
        $accessoriesCollections = $this->getProductsFromType('accessories', 3);
        $superfineCollections = $this->getProductsFromType('superfine', 3);

        $menCollections = $this->getProductsFromCategory('men', 3);
        $womenCollections = $this->getProductsFromCategory('women', 3);

        return view('frontend.index', compact('signatureCollections', 'classicCollections', 'superfineCollections', 'accessoriesCollections', 'menCollections', 'womenCollections'));
    }

    public function getProductsFromType($type, $limit)
    {
        return Product::select('products.*')->join('product_types', 'product_types.product_id', '=', 'products.id')
            ->join('types', 'types.id', '=', 'product_types.type_id')
            ->where('types.slug', $type)->limit($limit)->latest()->get();
    }

    public function getProductsFromCategory($category, $limit)
    {
        $category_ids = $this->getChildCategories($category);
        return Product::select('products.*')->join('product_categories', 'product_categories.product_id', '=', 'products.id')
            ->join('categories', 'categories.id', '=', 'product_categories.category_id')
            ->whereIn('product_categories.category_id', $category_ids)->limit($limit)->latest()->get();
    }

    public function getChildCategories($slug)
    {
        $mainCategory = Category::where('slug', $slug)->first();
        $parent_id = $mainCategory->id;
        $main = Category::where('parent_id', $parent_id)->get();
        $emp = [];
        foreach ($main as $m1) {
            $emp[$parent_id][] = $m1->id;

            if ($m1) {
                $main1 = Category::where('parent_id', $m1->id)->get();

                foreach ($main1 as $m) {
                    $emp[$parent_id][] = $m->id;
                }
            }
        }
        return $emp[$parent_id];
    }
}
