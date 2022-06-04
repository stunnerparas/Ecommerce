<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\Product;
use App\Models\ProductAttribute;
use App\Models\ProductGallery;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product(Product $product)
    {
        $sizes = $this->getAttribute($product->id, 'Size');
        $colors = $this->getAttribute($product->id, 'Color');

        $images = ProductGallery::where('product_id', $product->id)->get();
        $menCollections = getProductsFromCategory('men', 3);
        $womenCollections = getProductsFromCategory('women', 3);

        return view('frontend.product.single', compact('product', 'colors', 'sizes', 'images', 'menCollections', 'womenCollections'));
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
}
