<?php

namespace App\Http\Controllers;

use App\Models\PortfolioContent;
use App\Models\Project;
use App\Models\Experience;
use App\Models\Certificate;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        // Ambil konten dari portfolio_contents (Hero, About, Skills)
        $hero = PortfolioContent::getSectionContent('hero');
        $about = PortfolioContent::getSectionContent('about');
        $skills = PortfolioContent::getSectionContent('skills');
        
        // Ambil data dari tabel terpisah
        $experiences = Experience::orderBy('order')->get();
        $projects = Project::orderBy('order')->get();
        $certificates = Certificate::orderBy('order')->get();
        
        return view('pages.portofolio.index', compact('hero', 'about', 'skills', 'experiences', 'projects', 'certificates'));
    }
}
