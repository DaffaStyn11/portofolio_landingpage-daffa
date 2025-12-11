<?php

namespace App\Http\Controllers;

use App\Models\PortfolioContent;
use App\Models\Hero;
use App\Models\About;
use App\Models\Project;
use App\Models\Experience;
use App\Models\Certificate;
use App\Models\Skill;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        // Ambil konten dari tabel heroes dan abouts (NEW METHOD)
        $heroData = Hero::orderBy('order')->first();
        $aboutData = About::orderBy('order')->first();
        
        // Fallback ke portfolio_contents jika tabel baru masih kosong
        if (!$heroData) {
            $hero = PortfolioContent::getSectionContent('hero');
            $typingTitles = [];
        } else {
            $hero = [
                'welcome_badge' => $heroData->welcome_badge,
                'name' => $heroData->name,
                'title' => $heroData->title,
                'description' => $heroData->description,
                'github_url' => $heroData->github_url,
                'linkedin_url' => $heroData->linkedin_url,
                'instagram_url' => $heroData->instagram_url,
            ];
            $typingTitles = $heroData->typing_titles ?? [];
        }
        
        if (!$aboutData) {
            $about = PortfolioContent::getSectionContent('about');
        } else {
            $about = [
                'title' => $aboutData->title,
                'description' => $aboutData->description,
                'years_experience' => $aboutData->years_experience,
                'projects_completed' => $aboutData->projects_completed,
                'image' => $aboutData->image,
            ];
        }
        
        // Ambil data dari tabel terpisah
        $skills = Skill::orderBy('order')->get();
        $experiences = Experience::orderBy('order')->get();
        $projects = Project::orderBy('order')->get();
        $certificates = Certificate::orderBy('order')->get();
        
        return view('pages.portofolio.index', compact('hero', 'about', 'skills', 'experiences', 'projects', 'certificates', 'typingTitles'));
    }
}
