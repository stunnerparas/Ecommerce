<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CatalogueRequest;
use App\Models\ColorCard;
use App\Models\CustomMade;
use App\Models\MadeToOrder;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function colorCards()
    {
        $colorCards = ColorCard::latest()->paginate(20);
        createLog('viewed color card requests'); // activity log
        return view('admin.requests.color-cards.index', compact('colorCards'));
    }

    public function colorCardShow(ColorCard $colorCard)
    {
        return view('admin.requests.color-cards.show', compact('colorCard'));
    }

    public function completeColorCard(ColorCard $colorCard)
    {
        $colorCard->update([
            'status' => 'Complete'
        ]);

        createLog('changed color card request status'); // activity log
        return redirect()->back()->with('success', 'Marked as Complete');
    }

    public function catalogue()
    {
        $catalogues = CatalogueRequest::latest()->paginate(20);
        createLog('viewed catalogue requests'); // activity log
        return view('admin.requests.catalogue.index', compact('catalogues'));
    }

    public function catalogueShow(CatalogueRequest $catalogueRequest)
    {
        return view('admin.requests.catalogue.show', compact('catalogueRequest'));
    }

    public function completeCatalogue(CatalogueRequest $catalogueRequest)
    {
        $catalogueRequest->update([
            'status' => 'Complete'
        ]);

        createLog('changed catalogue request status'); // activity log
        return redirect()->back()->with('success', 'Marked as Complete');
    }

    public function custom()
    {
        $customMades = CustomMade::latest()->paginate(20);
        createLog('viewed custom made requests'); // activity log
        return view('admin.requests.custom.index', compact('customMades'));
    }

    public function customShow(CustomMade $customMade)
    {
        return view('admin.requests.custom.show', compact('customMade'));
    }

    public function customCatalogue(CustomMade $customMade)
    {
        $customMade->update([
            'status' => 'Complete'
        ]);

        createLog('changed custom made status'); // activity log
        return redirect()->back()->with('success', 'Marked as Complete');
    }

    public function madeToOrder()
    {
        $madeToOrders = CustomMade::latest()->paginate(20);
        createLog('viewed made to order requests'); // activity log
        return view('admin.requests.made-to-order.index', compact('madeToOrders'));
    }

    public function madeToOrderShow(MadeToOrder $madeToOrder)
    {
        return view('admin.requests.made-to-order.show', compact('madeToOrder'));
    }

    public function madeToOrderComplete(MadeToOrder $madeToOrder)
    {
        $madeToOrder->update([
            'status' => 'Complete'
        ]);

        createLog('changed made to order status'); // activity log
        return redirect()->back()->with('success', 'Marked as Complete');
    }
}
