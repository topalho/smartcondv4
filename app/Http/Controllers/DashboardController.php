<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('portal.dashboard.index');
    }
    public function dashboardv2()
    {
        return view('portal.dashboard.index2');
    }
}
