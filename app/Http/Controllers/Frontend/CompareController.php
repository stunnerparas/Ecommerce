<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\Product;
use App\Models\ProductAttribute;
use Illuminate\Http\Request;

class CompareController extends Controller
{
    public function index()
    {
        $product1 = [];
        $product2 = [];
        $sizes1 = '';
        $sizes2 = '';
        $colors1 = '';
        $colors2 = '';
        $category1 = '';
        $category2 = '';

        if (request('product1')) {
            $product1 = Product::where('name', request('product1'))->latest()->first();
            $category_id = $product1->categories[0]->parent_id ?? '';
            $category1 = getPatentCategory($category_id);

            $sizes1 = $this->getAttribute($product1->id, 'Size');
            $colors1 = $this->getAttribute($product1->id, 'Color');
        }

        if (request('product2')) {
            $product2 = Product::where('name', request('product2'))->latest()->first();
            $category_id = $product2->categories[0]->parent_id ?? '';
            $category2 = getPatentCategory($category_id);
            $sizes2 = $this->getAttribute($product2->id, 'Size');
            $colors2 = $this->getAttribute($product2->id, 'Color');
        }

        return view('frontend.compare.index', compact('product1', 'product2', 'category1', 'category2', 'sizes1', 'colors1', 'sizes2', 'colors2'));
    }

    public function getAttribute($product_id, $attribute)
    {
        $attribute = Attribute::where('name', $attribute)->first();

        $attributes = ProductAttribute::join('attributes', 'attributes.id', '=', 'product_attributes.attribute_id')
            ->where('product_attributes.product_id', $product_id)
            ->where('attributes.parent_id', $attribute->id)
            ->get();

        return $attributes;
    }

    public function globalSearch()
    {
        return Product::where('name', 'LIKE', '%' . request('query') . '%')->get();
    }
}
