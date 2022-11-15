<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Attribute as ModelsAttribute;
use App\Models\BillingAddress;
use App\Models\Category;
use App\Models\Company;
use App\Models\Faq;
use App\Models\Newsletter;
use App\Models\Order;
use App\Models\OrderItems;
use App\Models\Page;
use App\Models\Product;
use App\Models\ProductAttribute;
use App\Models\ShippingAddress;
use App\Models\Slider;
use App\Models\WeeklyDeal;
use Attribute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index()
    {
        $signatureCollections = getProductsFromType('signature', 3);
        $classicCollections = getProductsFromType('classic', 3);
        $accessoriesCollections = getProductsFromType('accessories', 3);
        $superfineCollections = getProductsFromType('superfine', 3);
        $luxuryCollections = getProductsFromType('luxury', 8);


        $menCollections = getProductsFromCategory('men', 3);
        $womenCollections = getProductsFromCategory('women', 3);

        // banners
        $mainBanner = $this->banner('main-banner');
        $signatureBanner = $this->banner('signature');
        $classicBanner = $this->banner('classic');
        $accessoriesBanner = $this->banner('accessories');
        $menBanner = $this->banner('men');
        $womenBanner = $this->banner('women');
        $superfineBanner = $this->banner('superfine');

        // footer banners
        $footerTop = $this->banner('footer-top-image');
        $footerLeft = $this->banner('footer-left-image');
        $footerCenter = $this->banner('footer-center-image');
        $footerRight = $this->banner('footer-right-image');

        // top banners
        $topLeft = $this->banner('top-left-image');
        $topAbove = $this->banner('top-above-image');
        $topCenter = $this->banner('top-center-image');
        $topBelow = $this->banner('top-below-image');

        // luxury top
        $luxuryLeft = $this->banner('luxury-cashmere-left-image');
        $luxuryRight = $this->banner('luxury-cashmere-right-image');

        $dealOfTheWeek = WeeklyDeal::latest()->first();

        return view('frontend.index', compact('dealOfTheWeek', 'luxuryLeft', 'luxuryRight', 'topLeft', 'topAbove', 'topCenter', 'topBelow', 'luxuryCollections', 'mainBanner', 'footerTop', 'footerLeft', 'footerCenter', 'footerRight', 'signatureBanner', 'classicBanner', 'accessoriesBanner', 'menBanner', 'womenBanner', 'superfineBanner', 'signatureCollections', 'classicCollections', 'superfineCollections', 'accessoriesCollections', 'menCollections', 'womenCollections'));
    }

    public function banner($category)
    {
        return Slider::where('category', $category)->latest()->first();
    }

    public function aboutUs()
    {
        return view('frontend.about.index');
    }

    public function autocompleteSearch(Request $request)
    {
        $query = $request->get('query');
        $filterResult = Product::where('name', 'LIKE', '%' . $query . '%')->get();
        return response()->json($filterResult);
    }

    public function newsletter(Request $request)
    {
        Newsletter::create($request->all());
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }

    public function orderTracking()
    {
        return view('frontend.order-tracking.index');
    }

    public function orderTrackingOther()
    {
        return view('frontend.order-tracking.other');
    }

    public function myOrders()
    {
        return view('frontend.myOrders.index');
    }
    public function myProfile()
    {
        return view('frontend.myProfile.index');
    }

    public function page(Page $page)
    {
        return view('frontend.pages.index', compact('page'));
    }
    public function changeProfile()
    {
        return view('frontend.myProfile.setting');
    }
    public function detailYarn()
    {
        return view('frontend.detail.yarn');
    }
    public function detailKnit()
    {
        return view('frontend.detail.knit');
    }
    public function Typecashmere()
    {
        return view('frontend.cashmeretype.vicuna');
    }
    public function detailColor()
    {
        return view('frontend.detail.color');
    }
    public function colorRequest()
    {
        return view('frontend.Request.colorcard');
    }
    public function catalogueRequest()
    {
        return view('frontend.Request.catalogue');
    }
    public function customMade()
    {
        return view('frontend.Request.custom');
    }
    public function orderRequest()
    {
        return view('frontend.Request.order');
    }
    public function privateLabel()
    {
        return view('frontend.Request.private');
    }
    public function termCondition()
    {
        return view('frontend.terms.term');
    }
    public function organicCashmere()
    {
        return view('frontend.cashmeretype.organic');
    }

    public function faq()
    {
        $faqs = Faq::latest()->get();
        return view('frontend.pages.faq', compact('faqs'));
    }
    public function compare()
    {
        return view('frontend.compare.index');
    }

    public function filter($type = '', $slug = '')
    {
        $data = '';
        $filterBy = '';

        $products = Product::select('products.*')->distinct('products.id');
        if ($type == 'category') {
            $category = getCategoryFromSlug($slug);
            if ($category) {
                $filterBy = $category->name . ' Products';
            }

            $category_ids = getAllChildCategories($slug);
            if ($category_ids) {
                // dd($category_ids);
                $data = 1;
                $products = $products->join('product_categories', 'product_categories.product_id', '=', 'products.id')
                    ->join('categories', 'categories.id', '=', 'product_categories.category_id')
                    ->whereIn('product_categories.category_id', $category_ids);
            }
        } else if ($type == 'collection') {
            $data = 1;
            $collection = getCollectionFromSlug($slug);
            if ($collection) {
                $filterBy = $collection->type . ' Collection';
            }
            $products = $products->join('product_types', 'product_types.product_id', '=', 'products.id')
                ->join('types', 'types.id', '=', 'product_types.type_id')
                ->where('types.slug', $slug);
        } else {
            if (isset($_GET['search']) && $_GET['search']) {
                $data = 1;
                $filterBy = 'Search results for "' . $_GET['search'] . '"';
                $products = $products->where('products.name', 'LIKE', '%' . $_GET['search'] . '%');
            }
        }

        // dropdown filter
        if (isset($_GET['order']) && $_GET['order']) {
            if ($_GET['order'] == 'high-price') {
                $products = $products->orderBy('products.price', 'DESC');
            }
            if ($_GET['order'] == 'low-price') {
                $products = $products->orderBy('products.price', 'ASC');
            }
            if ($_GET['order'] == 'latest') {
                $products = $products->orderBy('products.created_at', 'DESC');
            }
        } else {
            $products = $products->orderBy('products.created_at', 'DESC');
        }

        // attributes filter
        if ((isset($_GET['color']) && $_GET['color']) || (isset($_GET['size']) && $_GET['size'])) {
            $products = $products->join('product_attributes', 'product_attributes.product_id', '=', 'products.id');
        }

        $flag = 0;
        if ((isset($_GET['color']) && $_GET['color']) && (isset($_GET['size']) && $_GET['size'])) {
            $flag = 1;
        }

        $ids = [];
        if (isset($_GET['color']) && $_GET['color']) {
            if ($flag == 0) {
                $products = $products->where('product_attributes.attribute_id', $_GET['color']);
            } else {
                $colorProducts = ProductAttribute::where('attribute_id', $_GET['color'])->pluck('product_id')->toArray();
            }
        }
        if (isset($_GET['size']) && $_GET['size']) {
            if ($flag == 0) {
                $products = $products->where('product_attributes.attribute_id', $_GET['size']);
            } else {
                $sizeProducts = ProductAttribute::where('attribute_id', $_GET['size'])->pluck('product_id')->toArray();
            }
        }

        if ($flag == 1) {
            $a = array_intersect($colorProducts, $sizeProducts);
            $products = $products->whereIn('products.id', $a);
        }

        // dd($a);

        // price filter
        // if (isset($_GET['min-price']) && $_GET['min-price']) {
        //     $products = $products->where('products.price', '>=', $_GET['min-price']);
        // }
        // if (isset($_GET['max-price']) && $_GET['max-price']) {
        //     $products = $products->where('products.price', '<=', $_GET['max-price']);
        // }

        $products = $products->paginate(10);
        // return $products;

        $params = $_GET;
        // dd($products);

        $colors = ModelsAttribute::where('parent_id', $this->getAttributeByName('Color'))->get();
        $sizes = ModelsAttribute::where('parent_id', $this->getAttributeByName('Size'))->get();
        return view('frontend.filter.index', compact('products', 'data', 'filterBy', 'params', 'colors', 'sizes'));
    }

    public function getAttributeByName($name)
    {
        return ModelsAttribute::where('name', $name)->pluck('id');
    }

    public function orderTracker()
    {
        $data = '';
        $order = '';
        $orderItems = '';
        $shipping = '';
        $billing = '';

        if (isset($_GET['order_number']) && $_GET['order_number']) {
            $data = 'no-data';
            $order = Order::where('order_number', $_GET['order_number'])->first();
            if ($order) {
                $data = 1;
                $orderItems = OrderItems::where('order_id', $order->id)->get();
                $shipping = ShippingAddress::where('order_id', $order->id)->first();
                $billing = BillingAddress::where('order_id', $order->id)->first();
            }
        }
        return view('frontend.track-order.index', compact('data', 'order', 'orderItems', 'shipping', 'billing'));
    }



    public function setCurrency(Request $request)
    {
        Session::put('currency', $request->currency);
        \Cart::clear();
        return redirect()->back();
    }
}
