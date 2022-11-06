<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class LogController extends Controller
{
    public function index()
    {
        abort_unless(Gate::allows('View Activity Log'), 403);

        $logs = Log::latest()->paginate(20);
        createLog('viewed activity log details'); // activity log
        return view('admin.log.index', compact('logs'));
    }
}
