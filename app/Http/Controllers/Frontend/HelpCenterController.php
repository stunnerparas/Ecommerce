<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\HelpCenter;
use Illuminate\Http\Request;

class HelpCenterController extends Controller
{
    public function index()
    {
        $helpcenters = HelpCenter::latest()->get();
        return view('frontend.helpcenter.index', compact('helpcenters'));
    }

    public function single(HelpCenter $helpcenter)
    {
        return view('frontend.helpcenter.single', compact('helpcenter'));
    }
}
