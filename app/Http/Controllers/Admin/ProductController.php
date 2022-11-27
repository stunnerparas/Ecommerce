<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Attribute;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductAttribute;
use App\Models\ProductCategory;
use App\Models\ProductGallery;
use App\Models\ProductType;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use File;
use Illuminate\Support\Facades\Gate;

class ProductController extends Controller
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
        abort_unless(Gate::allows('View Product'), 403);

        $products = Product::latest()->paginate(10);
        createLog('viewed product details'); // activity log

        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort_unless(Gate::allows('Create Product'), 403);

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
        abort_unless(Gate::allows('Create Product'), 403);

        $product = Product::create($request->all());
        createLog('created a new product'); // activity log

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
        abort_unless(Gate::allows('Edit Product'), 403);

        $categories = Category::where('parent_id', 0)->get();
        $attributes = Attribute::where('parent_id', 0)->where('show', 'Yes')->get();
        $gallery = ProductGallery::where('product_id', $product->id)->get();
        $types = Type::latest()->get();

        $productCategories = ProductCategory::where('product_id', $product->id)->pluck('category_id')->toArray();
        $productAttributes = ProductAttribute::where('product_id', $product->id)->pluck('attribute_id')->toArray();
        $productTypes = ProductType::where('product_id', $product->id)->pluck('type_id')->toArray();

        return view('admin.product.edit', compact('product', 'categories', 'attributes', 'productCategories', 'productAttributes', 'gallery', 'types', 'productTypes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        abort_unless(Gate::allows('Edit Product'), 403);

        $input = $request->all();
        $input['slug'] = Str::slug($request->name);
        $product->update($input);

        $product->categories()->detach();
        $product->categories()->attach($request->category);
        $product->attributes()->detach();
        $product->attributes()->attach($request->attribute);
        $product->types()->detach();
        $product->types()->attach($request->types);

        createLog('edited a product'); // activity log

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
        abort_unless(Gate::allows('Delete Product'), 403);

        $product->delete();     // soft delete
        createLog('deleted a product'); // activity log

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
