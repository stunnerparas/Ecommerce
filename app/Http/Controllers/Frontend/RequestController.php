<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\CatalogueRequest;
use App\Models\ColorCard;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function colorCard(Request $request)
    {
        $input = $request->all();
        $input["status"] = "Pending";
        ColorCard::create($input);
        return redirect()->back()->with("message", "Your request has been sent");
    }

    public function catalogueRequest(Request $request)
    {
        $input = $request->all();
        $input["status"] = "Pending";
        CatalogueRequest::create($input);
        return redirect()->back()->with("message", "Your request has been sent");
    }
}
