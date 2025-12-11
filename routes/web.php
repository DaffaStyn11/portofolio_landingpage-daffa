<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PortfolioContentController;
use App\Http\Controllers\PortfolioController;

Route::get('/', [PortfolioController::class, 'index']);

// Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    
    // Portfolio Content (Hero, About, Skills) - OLD METHOD (will be deprecated)
    Route::get('/portfolio/{section}/edit', [PortfolioContentController::class, 'edit'])->name('portfolio.edit');
    Route::put('/portfolio/{section}', [PortfolioContentController::class, 'update'])->name('portfolio.update');
    
    // Heroes - NEW CRUD
    Route::resource('heroes', \App\Http\Controllers\Admin\HeroController::class);
    
    // Abouts - NEW CRUD
    Route::resource('abouts', \App\Http\Controllers\Admin\AboutController::class);
    
    // Skills
    Route::resource('skills', \App\Http\Controllers\Admin\SkillController::class);
    
    // Experiences
    Route::resource('experiences', \App\Http\Controllers\Admin\ExperienceController::class);
    
    // Projects
    Route::resource('projects', \App\Http\Controllers\Admin\ProjectController::class);
    
    // Certificates
    Route::resource('certificates', \App\Http\Controllers\Admin\CertificateController::class);
});
