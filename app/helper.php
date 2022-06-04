<?php

use App\Models\Attribute;
use App\Models\Category;
use App\Models\Product;

function getChildCategories($parent_id)
{
    return Category::where('parent_id', $parent_id)->get();
}

function getAttributeValues($attribute_id)
{
    return Attribute::where('show', 'Yes')->where('parent_id', $attribute_id)->get();
}

function getProductsFromType($type, $limit)
{
    return Product::select('products.*')->join('product_types', 'product_types.product_id', '=', 'products.id')
        ->join('types', 'types.id', '=', 'product_types.type_id')
        ->where('types.slug', $type)->limit($limit)->latest()->get();
}

function getProductsFromCategory($category, $limit)
{
    $category_ids = getAllChildCategories($category);
    return Product::select('products.*')->distinct()->join('product_categories', 'product_categories.product_id', '=', 'products.id')
        ->join('categories', 'categories.id', '=', 'product_categories.category_id')
        ->whereIn('product_categories.category_id', $category_ids)->limit($limit)->latest()->get();
}

function getAllChildCategories($slug)
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
