<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class NewsletterController extends Controller
{
    public function index()
    {
        abort_unless(Gate::allows('View Newsletter'), 403);

        $newsletters = Newsletter::latest()->paginate(20);
        createLog('viewed newsletter details'); // activity log
        return view('admin.newsletter.index', compact('newsletters'));
    }
}
