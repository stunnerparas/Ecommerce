<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function index()
    {
        $wishlist = '';
        if (Auth::check()) {
            $wishlist = Wishlist::latest()->where('user_id', Auth::user()->id)->get();
        }
        return view('frontend.wishlist.index', compact('wishlist'));
    }

    public function store(Request $request)
    {
        if (!Auth::check()) {
            return 'not-logged-in';
            die;
        }

        $checkIfAlreadyExist = Wishlist::where('user_id', Auth::user()->id ?? 0)->where('product_id', $request->product_id)->where('size_id', $request->size)->where('color_id', $request->color)->first();
        if ($checkIfAlreadyExist) {
            return 'already-added';
            die;
        }

        Wishlist::create([
            'user_id' => Auth::user()->id ?? 0,
            'product_id' => $request->product_id,
            'size_id' => $request->size,
            'color_id' => $request->color
        ]);
        return 'success';
        die;
    }

    public function destroy(Wishlist $wishlist)
    {
        $wishlist->delete();
        return redirect()->back();
    }

    public function addToCart()
    {
        $wishlist = Wishlist::latest()->where('user_id', Auth::user()->id)->get();
        if ($wishlist->count() > 0) {
            foreach ($wishlist as $request) {
                $product = Product::where('id', $request->product_id)->first();
                $color = Attribute::where('id', $request->color_id)->first();
                $size = Attribute::where('id', $request->size_id)->first();
                \Cart::add([
                    'id' => $product->id . '-' . $request->size . '-' . $request->color,
                    'name' => $product->name,
                    'price' => $product->price,
                    'quantity' => 1,
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
        }

        return redirect()->route('cart.index');
    }
}
