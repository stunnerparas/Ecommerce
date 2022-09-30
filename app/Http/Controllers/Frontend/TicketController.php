<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTicketRequest;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function helpDesk()
    {
        return view('frontend.help-desk.index');
    }

    public function ticketGenerator(StoreTicketRequest $request)
    {
        return view('frontend.ticket-Generator.index', compact('request'));
    }

    public function generateTicket(Request $request)
    {
        $input = $request->all();
        $input['status'] = 'Pending';
        $input['ticket_no'] = date('ymdHis');
        $ticket = Ticket::create($input);

        return redirect()->route('thankYou', $ticket->ticket_no);
    }

    public function thankYou($ticket)
    {
        return view('frontend.ticket-Generator.thankyou', compact('ticket'));
    }
}
