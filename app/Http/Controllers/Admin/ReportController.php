<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItems;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ReportController extends Controller
{
    public function index()
    {
        abort_unless(Gate::allows('View Reports'), 403);

        // today
        $todayData = $this->getStats(Carbon::now()->startOfDay(), Carbon::now()->endOfDay());
        $today['productSold'] = $todayData['productSold'];
        $today['numberOfTransaction'] = $todayData['totalTransaction'];
        $today['transactionAmount'] = $todayData['transactionAmount'];
        // ends

        // yesterday + today
        $yesterdayData = $this->getStats(Carbon::now()->subDay(1)->startOfDay(), Carbon::now()->endOfDay());
        $yesterday['productSold'] = $yesterdayData['productSold'];
        $yesterday['numberOfTransaction'] = $yesterdayData['totalTransaction'];
        $yesterday['transactionAmount'] = $yesterdayData['transactionAmount'];
        // ends

        // 1 week
        $weekData = $this->getStats(Carbon::now()->subDay(7)->startOfDay(), Carbon::now()->endOfDay());
        $week['productSold'] = $weekData['productSold'];
        $week['numberOfTransaction'] = $weekData['totalTransaction'];
        $week['transactionAmount'] = $weekData['transactionAmount'];
        // ends

        // 1 month
        $monthData = $this->getStats(Carbon::now()->subDay(30)->startOfDay(), Carbon::now()->endOfDay());
        $month['productSold'] = $monthData['productSold'];
        $month['numberOfTransaction'] = $monthData['totalTransaction'];
        $month['transactionAmount'] = $monthData['transactionAmount'];
        // ends

        // 3 months
        $threeMonthsData = $this->getStats(Carbon::now()->subDay(90)->startOfDay(), Carbon::now()->endOfDay());
        $threeMonth['productSold'] = $threeMonthsData['productSold'];
        $threeMonth['numberOfTransaction'] = $threeMonthsData['totalTransaction'];
        $threeMonth['transactionAmount'] = $threeMonthsData['transactionAmount'];
        // ends

        // 1 year
        $yearData = $this->getStats(Carbon::now()->subDay(365)->startOfDay(), Carbon::now()->endOfDay());
        $year['productSold'] = $yearData['productSold'];
        $year['numberOfTransaction'] = $yearData['totalTransaction'];
        $year['transactionAmount'] = $yearData['transactionAmount'];
        // ends

        createLog('viewed report details'); // activity log

        return view('admin.report.index', compact('today', 'yesterday', 'week', 'month', 'threeMonth', 'year'));
    }

    public function getStats($start, $end)
    {
        $data = Order::whereBetween('created_at', [$start, $end])->where('status', 'Delivered')->get();
        $totalAmount = 0;
        $productSold = 0;
        if ($data) {
            foreach ($data as $item) {
                $orderItems = OrderItems::where('order_id', $item->id)->get();
                if ($orderItems) {
                    foreach ($orderItems as $order) {
                        $productSold += $order->quantity;
                    }
                }
                $totalAmount += $item->total_amount;
            }
        }

        return ['transactionAmount' => $totalAmount, 'productSold' => $productSold, 'totalTransaction' => $data->count()];
    }
}
