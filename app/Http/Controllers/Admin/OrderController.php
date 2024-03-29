<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BillingAddress;
use App\Models\Order;
use App\Models\OrderItems;
use App\Models\ShippingAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        abort_unless(Gate::allows('View Order'), 403);

        $orders = Order::latest()->paginate(10);
        createLog('viewed order details'); // activity log

        return view('admin.order.index', compact('orders'));
    }

    public function orderItems(Order $order)
    {
        abort_unless(Gate::allows('View Order Details'), 403);

        $order->update([
            'is_seen' => 1
        ]);
        $orderItems = OrderItems::where('order_id', $order->id)->get();
        $shipping = ShippingAddress::where('order_id', $order->id)->first();
        $billing = BillingAddress::where('order_id', $order->id)->first();
        createLog('viewed orderitem details'); // activity log

        return view('admin.order.order-items', compact('order', 'orderItems', 'shipping', 'billing'));
    }

    public function changeOrderStatus(Request $request, Order $order)
    {
        abort_unless(Gate::allows('Edit Order Status'), 403);

        if ($order->status == 'Delivered') {
            return redirect()->back()->with('error', 'This order has already been delivered');
        }
        $order->update([
            'status' => $request->status
        ]);
        createLog('changed status of an order'); // activity log


        return redirect()->back()->with('message', 'Order status changed');
    }

    public function destroy(Order $order)
    {
        abort_unless(Gate::allows('Delete Order'), 403);

        $order->delete();
        createLog('deleted an order'); // activity log

        return redirect()->back()->with('success', 'Order Deleted');
    }
}
