<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PortfolioContentController;
use App\Http\Controllers\PortfolioController;

Route::get('/', [PortfolioController::class, 'index']);

// Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    
    // Portfolio Content (Hero, About, Skills)
    Route::get('/portfolio/{section}/edit', [PortfolioContentController::class, 'edit'])->name('portfolio.edit');
    Route::put('/portfolio/{section}', [PortfolioContentController::class, 'update'])->name('portfolio.update');
    
    // Projects
    Route::resource('projects', \App\Http\Controllers\Admin\ProjectController::class);
    
    // Experiences
    Route::resource('experiences', \App\Http\Controllers\Admin\ExperienceController::class);
    
    // Certificates
    Route::resource('certificates', \App\Http\Controllers\Admin\CertificateController::class);
});
