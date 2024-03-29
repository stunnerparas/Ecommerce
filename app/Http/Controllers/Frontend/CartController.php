<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Attribute as ModelsAttribute;
use App\Models\Product;
use Attribute;
use Illuminate\Http\Request;
use Cart;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cartItems = \Cart::getContent();
        // dd($cartItems);
        return view('frontend.cart.index', compact('cartItems'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = Product::where('id', $request->product_id)->first();
        $color = ModelsAttribute::where('id', $request->color)->first();
        $size = ModelsAttribute::where('id', $request->size)->first();

        $price = $product->price ?? 0;
        if (Session::get('business')) {
            $price = $product->business_price ?? 0;
            if ($request->min_quantity < $product->min_quantity) {
                $request->min_quantity = $product->min_quantity;
            }
        }

        \Cart::add([
            'id' => $product->id . '-' . $request->size . '-' . $request->color,
            'name' => $product->name,
            'price' => $price,
            'quantity' => $request->min_quantity,
            'attributes' => array(
                'image' => $product->featured_image,
                'color' => $color->name,
                'size' => $size->name,
                'color_id' => $request->color,
                'size_id' => $request->size,
                'product_id' => $request->product_id,
            )
        ]);
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function cartItems()
    {
        $cartItems = \Cart::getContent()->sort();
        return view('frontend.cart.component', compact('cartItems'));
    }

    public function cartItemsIncrease($id)
    {
        $row = \Cart::get($id);
        $qty = $row->quantity + 1;
        \Cart::update($id, [
            'quantity' => [
                'relative' => false,
                'value' => $qty
            ],
        ]);
    }

    public function cartItemsDecrease($id)
    {
        $product = Product::where('id', $id)->first();

        $row = \Cart::get($id);
        $qty = $row->quantity - 1;
        if ($qty < 1) {
            $qty = 1;
        }

        // if logged in as business
        if (Session::get('business')) {
            if ($qty < $product->min_quantity) {
                $qty = $product->min_quantity;
            }
        }

        \Cart::update($id, [
            'quantity' => [
                'relative' => false,
                'value' => $qty
            ],
        ]);
    }

    public function cartItemsRemove($id)
    {
        \Cart::remove($id);
    }
}
