<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Models\Attribute;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductAttribute;
use App\Models\ProductCategory;
use App\Models\ProductGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->paginate(10);
        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        $product = Product::create($request->all());
        return redirect()->route('admin.products.edit', $product->id);
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
    public function edit(Product $product)
    {
        $categories = Category::where('parent_id', 0)->get();
        $attributes = Attribute::where('parent_id', 0)->where('show', 'Yes')->get();
        $gallery = ProductGallery::where('product_id', $product->id)->get();

        $productCategories = ProductCategory::where('product_id', $product->id)->pluck('category_id')->toArray();
        $productAttributes = ProductAttribute::where('product_id', $product->id)->pluck('attribute_id')->toArray();
        return view('admin.product.edit', compact('product', 'categories', 'attributes', 'productCategories', 'productAttributes', 'gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $input = $request->all();
        $input['slug'] = Str::slug($request->name);
        $product->update($input);

        $product->categories()->detach();
        $product->categories()->attach($request->category);
        $product->attributes()->detach();
        $product->attributes()->attach($request->attribute);

        return redirect()->back()->with('success', 'Product Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();     // soft delete
        return redirect()->back()->with('success', 'Product Deleted');
    }

    public function featuredImage(Request $request, Product $product)
    {
        $featured_image = $this->fileUpload($request, 'file');
        if ($featured_image) {
            $this->removeFile($product->featured_image);
            $input['featured_image'] = $featured_image;
            $product->update($input);
        }

        return 'success';
    }

    public function gallery(Request $request, Product $product)
    {
        $image = $this->fileUpload($request, 'file');
        if ($image) {
            $this->removeFile($product->image);
            $input['image'] = $image;
            $input['product_id'] = $product->id;
            ProductGallery::create($input);
        }

        return 'success';
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

    public function imageDelete($id, $type)
    {
        if ($type == 'featured') {
            $product = Product::where('id', $id)->first();
            $this->removeFile($product->featured_image);
            $product->update(['featured_image' => '']);
        }

        if ($type == 'gallery') {
            $productGallery = ProductGallery::where('id', $id)->first();
            $this->removeFile($productGallery->image);
            $productGallery->delete();
        }

        return redirect()->back()->with('success', 'Image Deleted');
    }
}
