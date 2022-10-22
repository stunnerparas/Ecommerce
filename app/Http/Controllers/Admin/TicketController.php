<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
        $tickets = Ticket::latest()->paginate(20);
        createLog('viewed ticket details'); // activity log
        return view('admin.ticket.index', compact('tickets'));
    }

    public function show(Ticket $ticket)
    {
        return view('admin.ticket.show', compact('ticket'));
    }

    public function completeTicket(Ticket $ticket)
    {
        $ticket->update([
            'status' => 'Complete'
        ]);

        createLog('changed ticket status'); // activity log
        return redirect()->back()->with('success', 'Marked as Complete');
    }
}
