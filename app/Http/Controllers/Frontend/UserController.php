<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreChangePasswordRequest;
use App\Models\BillingAddress;
use App\Models\Order;
use App\Models\OrderItems;
use App\Models\ShippingAddress;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function myAccount()
    {
        $user = Auth::user();
        // dd($user);
        $orders = Order::where('user_id', $user->id)->latest()->get();
        return view('frontend.user.my-account', compact('orders'));
    }

    public function orderDetails(Order $order)
    {
        // dd($order);
        $orderItems = OrderItems::where('order_id', $order->id)->get();
        $shipping = ShippingAddress::where('order_id', $order->id)->first();
        $billing = BillingAddress::where('order_id', $order->id)->first();
        return view('frontend.user.order-details', compact('order', 'orderItems', 'shipping', 'billing'));
    }

    public function changePassword()
    {
        return view('frontend.user.change-password');
    }

    public function changePasswordStore(StoreChangePasswordRequest $request)
    {
        $user = User::findorFail(Auth::user()->id);
        if (Hash::check($request->current_password, $user->password)) {
            $user->update([
                'password' => $request->new_password
            ]);
            Auth::logout();
            return redirect()->route('login')->with('success', 'Password Changed Successfully');
        } else {
            return redirect()->back()->with('error', 'Invaild Current Password!');
        }
    }
}
