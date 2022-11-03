<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Log;
use Illuminate\Http\Request;

class LogController extends Controller
{
    public function index()
    {
        $logs = Log::latest()->paginate(20);
        createLog('viewed activity log details'); // activity log
        return view('admin.log.index', compact('logs'));
    }
}
