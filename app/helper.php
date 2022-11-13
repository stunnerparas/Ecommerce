<?php

use App\Mail\SendAdminMail;
use App\Mail\SendCustomerMail;
use App\Mail\SendMail;
use App\Models\Attribute;
use App\Models\Category;
use App\Models\Company;
use App\Models\Currency;
use App\Models\Log;
use App\Models\Product;
use App\Models\Type;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

function getParentCategories()
{
    return Category::where('parent_id', 0)->where('featured', 'yes')->orderBy('order', 'ASC')->get();
}

function getChildCategories($parent_id)
{
    return Category::where('parent_id', $parent_id)->get();
}

function getAttributeValues($attribute_id)
{
    return Attribute::where('show', 'Yes')->where('parent_id', $attribute_id)->get();
}

function getProductsFromType($type, $limit)
{
    return Product::select('products.*')->join('product_types', 'product_types.product_id', '=', 'products.id')
        ->join('types', 'types.id', '=', 'product_types.type_id')
        ->where('types.slug', $type)->limit($limit)->latest()->get();
}

function getProductsFromCategory($category, $limit)
{
    $category_ids = getAllChildCategories($category);
    return Product::select('products.*')->distinct()->join('product_categories', 'product_categories.product_id', '=', 'products.id')
        ->join('categories', 'categories.id', '=', 'product_categories.category_id')
        ->whereIn('product_categories.category_id', $category_ids)->limit($limit)->latest()->get();
}

function getAllChildCategories($slug)
{
    $mainCategory = Category::where('slug', $slug)->first();
    if ($mainCategory) {
        $parent_id = $mainCategory->id;
        $main = Category::where('parent_id', $parent_id)->get();
        $emp = [];
        $emp[$parent_id][] = $mainCategory->id;
        if ($main->count() > 0) {
            foreach ($main as $m1) {
                $emp[$parent_id][] = $m1->id;

                if ($m1) {
                    $main1 = Category::where('parent_id', $m1->id)->get();

                    foreach ($main1 as $m) {
                        $emp[$parent_id][] = $m->id;
                    }
                }
            }
        }
        return $emp[$parent_id];
    }
}

function getCategoryFromSlug($slug)
{
    return Category::where('slug', $slug)->first();
}

function getCollectionFromSlug($slug)
{
    return Type::where('slug', $slug)->first();
}

function getTotalAmount()
{
    $total_amount = Cart::getTotal();
    return $total_amount ?? 0;
}

function createLog($details)
{
    Log::create([
        'log' => Auth::user()->name . ' ' . $details
    ]);
}

function company()
{
    return Company::latest()->first();
}

function convertPrice($price = 1)
{
    $currency = Session::get('currency') ?? 'USD';

    // $url = "https://api.currencyapi.com/v3/latest?apikey=EUBC0OsS2c2xk8GL1x4VXLuZhirHV3ilMm4SNARi&base_currency=USD";
    // $ch = curl_init();
    // curl_setopt($ch, CURLOPT_URL, $url);
    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    // curl_setopt($ch, CURLOPT_HEADER, FALSE);
    // curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    // $response = curl_exec($ch);
    // curl_close($ch);

    // $data = json_decode($response);
    // print_r($data);
    // die;

    $currency = Currency::where('currency', $currency)->first();
    $rate = $currency->rate ?? 1;
    $net_amount = $price * $rate;
    return round($net_amount, 2);
}

function currencies()
{
    return Currency::all();
}

function currencySymbol()
{
    $currency = Session::get('currency') ?? 'USD';
    return Company::currency[$currency];
}

function currencyDBSymbol($currency)
{
    $currency = Currency::where('currency', $currency)->first();
    return $currency->symbol;
}

function sendAdminMail($subject, $message)
{
    $company = Company::latest()->first();

    $to = '';
    if ($company) {
        $to = explode(',', $company->email);
    }

    // dd($to);
    $details = [
        'subject' => $subject,
        'message' => $message,
    ];

    $details = (object) $details;
    if ($to) {
        Mail::to($to)->send(new SendAdminMail($details));
    }
}

function sendCustomerMail($to, $subject, $message)
{
    $details = [
        'subject' => $subject,
        'message' => $message,
    ];

    $details = (object) $details;
    if ($to) {
        Mail::to($to)->send(new SendCustomerMail($details));
    }
}

function shippingCharge()
{
    $company = Company::latest()->first();
    if($company){
        return $company->shipping_charge ?: 0;
    }
    return 0;
}

