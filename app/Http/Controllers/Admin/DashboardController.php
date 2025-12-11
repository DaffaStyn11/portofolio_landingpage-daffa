<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PortfolioContent;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalContents = PortfolioContent::count();
        $sections = PortfolioContent::distinct('section')->count('section');
        
        return view('admin.dashboard', compact('totalContents', 'sections'));
    }
}
