<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        // Minimal skeleton - real implementation will compute totals, breakdowns etc.
        return view('dashboard.index');
    }
}
