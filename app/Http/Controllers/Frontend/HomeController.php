<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Company;
use App\Models\Newsletter;
use App\Models\Page;
use App\Models\Product;
use App\Models\Slider;
use App\Models\WeeklyDeal;
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
}
