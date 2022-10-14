<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\BillingAddress;
use App\Models\Order;
use App\Models\OrderItems;
use App\Models\ShippingAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{
    public function index()
    {
        $cartItems = \Cart::getContent()->sort();

        $shipping = '';
        $billing = '';
        if (Auth::check()) {
            $shipping = ShippingAddress::where('user_id', Auth::user()->id)->first();
            $billing = BillingAddress::where('user_id', Auth::user()->id)->first();
        }
        return view('frontend.checkout.index', compact('cartItems', 'shipping', 'billing'));
    }

    public function store(Request $request)
    {
        $cartItems = \Cart::getContent()->sort();
        if ($cartItems->count() < 1) {
            return redirect()->back()->with('error', 'No items found in cart');
        }

        $total_amount = getTotalAmount();
        $order_number = date('YmdHis');
        $order = Order::create([
            'order_number' => $order_number,
            'payment_method' => '',
            'user_id' => Auth::user()->id ?? 0,
            'total_amount' => $total_amount ?? 0,
            'status' => 'Pending',
            'transaction_id' => '',
            'transaction_status' => '',
            'is_seen' => 0,
            'currency' => Session::get('currency') ?? 'USD',
        ]);

        foreach ($cartItems as $item) {
            OrderItems::create([
                'order_id' => $order->id ?? '',
                'product_id' => $item->attributes->product_id ?? '',
                'quantity' => $item->quantity ?? '',
                'variations' => ($item->attributes->size . ' / ' . $item->attributes->color) ?? '',
                'price' => $item->price ?? '',
            ]);
        }

        $shipping_data = [
            'order_id' => $order->id ?? '',
            'full_name' => $request->shipping_full_name ?? '',
            'email' => $request->shipping_email ?? '',
            'address' => $request->shipping_address ?? '',
            'apartment' => $request->shipping_apartment ?? '',
            'city' => $request->shipping_city ?? '',
            'state' => $request->shipping_state ?? '',
            'postal_code' => $request->shipping_postal_code ?? '',
            'phone' => $request->shipping_phone ?? '',
            'country' => $request->shipping_country ?? '',
        ];

        ShippingAddress::create($shipping_data);

        if ($request->billAddress == 'no') {
            BillingAddress::create($shipping_data);
        } else {
            BillingAddress::create([
                'order_id' => $order->id ?? '',
                'full_name' => $request->billing_full_name ?? '',
                'email' => $request->billing_email ?? '',
                'address' => $request->billing_address ?? '',
                'apartment' => $request->billing_apartment ?? '',
                'city' => $request->billing_city ?? '',
                'state' => $request->billing_state ?? '',
                'postal_code' => $request->billing_postal_code ?? '',
                'phone' => $request->billing_phone ?? '',
                'country' => $request->billing_country ?? '',
            ]);
        }

        \Cart::clear();
        return redirect()->route('checkout.thankyou', $order_number);
    }

    public function thankyou($order_number)
    {
        return view('frontend.checkout.thankyou', compact('order_number'));
    }
}
