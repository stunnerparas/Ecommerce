<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCommentRequest;
use App\Models\Attribute;
use App\Models\Comment;
use App\Models\Product;
use App\Models\ProductAttribute;
use App\Models\ProductGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function product(Product $product)
    {
        $sizes = $this->getAttribute($product->id, 'Size');
        $colors = $this->getAttribute($product->id, 'Color');

        $images = ProductGallery::where('product_id', $product->id)->get();
        $menCollections = getProductsFromCategory('men', 3);
        $womenCollections = getProductsFromCategory('women', 3);

        $comments = Comment::where('product_id', $product->id)->where('parent_id', 0)->latest()->get();

        return view('frontend.product.single', compact('comments', 'product', 'colors', 'sizes', 'images', 'menCollections', 'womenCollections'));
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

    public function storeComments(Product $product, $parent_id, StoreCommentRequest $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        Comment::create([
            'user_id' => Auth::user()->id,
            'comment' => $request->comment,
            'parent_id' => $parent_id,
            'product_id' => $product->id,
            'date_time' => now(),
            'status' => 'Pending'
        ]);

        return redirect()->back()->with('success', 'Thank you for your feedback.');
    }
}
