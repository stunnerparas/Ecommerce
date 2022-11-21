<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreChangePasswordRequest;
use App\Models\BillingAddress;
use App\Models\ManageShipping;
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
        $shipping = ShippingAddress::where('user_id', Auth::user()->id)->first();
        $billing = BillingAddress::where('user_id', Auth::user()->id)->first();
        $orders = Order::where('user_id', $user->id)->latest()->get();
        return view('frontend.user.my-account', compact('orders', 'user', 'shipping', 'billing'));
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

    public function editProfile()
    {
        $user = User::findorFail(Auth::user()->id);
        return view('frontend.user.edit-profile', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $user = User::findorFail(Auth::user()->id);
        $user->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'gender' => $request->gender
        ]);
        return redirect()->back()->with('success', 'Profile Updated');
    }

    public function shippingDetails()
    {
        $shipping = ShippingAddress::where('user_id', Auth::user()->id)->first();
        return view('frontend.user.shipping-details', compact('shipping'));
    }

    public function billingDetails()
    {
        $billing = BillingAddress::where('user_id', Auth::user()->id)->first();
        return view('frontend.user.billing-details', compact('billing'));
    }

    public function shippingDetailsUpdate(Request $request)
    {
        ShippingAddress::updateOrCreate(
            [
                'user_id'   => Auth::user()->id,
            ],
            $request->all()
        );
        return redirect()->back()->with('success', 'Shipping Address Updated');
    }

    public function billingDetailsUpdate(Request $request)
    {
        BillingAddress::updateOrCreate(
            [
                'user_id'   => Auth::user()->id,
            ],
            $request->all()
        );
        return redirect()->back()->with('success', 'Billing Address Updated');
    }

    public function dhlTracker()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        $shippings = ManageShipping::where('user_id', Auth::user()->id)->get();
        return view('frontend.track-order.dhl-tracker', compact('shippings'));
    }

    public function myOrders()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $orders = Order::where('user_id', Auth::user()->id)->latest()->get();
        return view('frontend.myOrders.index', compact('orders'));
    }
}
