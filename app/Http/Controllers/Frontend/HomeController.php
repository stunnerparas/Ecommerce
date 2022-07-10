<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Attribute as ModelsAttribute;
use App\Models\Category;
use App\Models\Company;
use App\Models\Faq;
use App\Models\Newsletter;
use App\Models\Page;
use App\Models\Product;
use App\Models\ProductAttribute;
use App\Models\Slider;
use App\Models\WeeklyDeal;
use Attribute;
use Illuminate\Http\Request;

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

    public function page(Page $page)
    {
        return view('frontend.pages.index', compact('page'));
    }

    public function faq()
    {
        $faqs = Faq::latest()->get();
        return view('frontend.pages.faq', compact('faqs'));
    }

    public function filter($type = '', $slug = '')
    {
        $products = Product::select('products.*')->distinct('products.id');
        $data = '';
        $filterBy = '';
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
                $filterBy = 'search results for "' . $_GET['search'] . '"';
                $products = $products->where('name', 'LIKE', '%' . $_GET['search'] . '%');
            }
        }

        // dropdown filter
        if (isset($_GET['order']) && $_GET['order']) {
            if ($_GET['order'] == 'high-price') {
                $products = $products->orderBy('price', 'DESC');
            }
            if ($_GET['order'] == 'low-price') {
                $products = $products->orderBy('price', 'ASC');
            }
            if ($_GET['order'] == 'latest') {
                $products = $products->orderBy('created_at', 'DESC');
            }
        } else {
            $products = $products->orderBy('created_at', 'DESC');
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
                $products = $products->whereIn('product_attributes.attribute_id', $_GET['color']);
            } else {
                $colorProducts = ProductAttribute::whereIn('attribute_id', $_GET['color'])->pluck('product_id')->toArray();
            }
        }
        if (isset($_GET['size']) && $_GET['size']) {
            if($flag == 0){
                $products = $products->whereIn('product_attributes.attribute_id', $_GET['size']);
            }else{
                $sizeProducts = ProductAttribute::whereIn('attribute_id', $_GET['size'])->pluck('product_id')->toArray();
            }
        }

        if($flag == 1){
            $a = array_intersect($colorProducts, $sizeProducts);
            $products = $products->whereIn('products.id', $a);
        }

        // dd($a);

        // price filter
        if (isset($_GET['min-price']) && $_GET['min-price']) {
            $products = $products->where('products.price', '>=', $_GET['min-price']);
        }
        if (isset($_GET['max-price']) && $_GET['max-price']) {
            $products = $products->where('products.price', '<=', $_GET['max-price']);
        }

        $products = $products->paginate(10);

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
}
