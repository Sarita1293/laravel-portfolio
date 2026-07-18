<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ExperienceController;
use App\Http\Controllers\Admin\personalDetailsController;
use App\Http\Controllers\Admin\EducationController;
use App\Http\Controllers\Admin\SkillCategoryController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FAQController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\CurrentLearningController;
use App\Http\Controllers\ResumeController;



Route::get('/', [HomeController::class, 'index']);


Route::prefix('admin')
    ->name('admin.')
    ->middleware(['auth','admin'])
    ->group(function () {

        // Dashboard
        Route::get('/dashboard', [DashboardController::class, 'index'])
            ->name('dashboard');

        // Projects
        Route::resource('projects', ProjectController::class);

        // Experiences
        Route::resource('experiences', ExperienceController::class);

        // Skill Categories
        Route::resource('skill-categories', SkillCategoryController::class);

        // Skill 
        Route::resource('skills', SkillController::class);

        // Personal Details
        Route::resource('personalDetails', personalDetailsController::class);

        // Education
        Route::resource('educations', EducationController::class);

        // FAQ
        Route::resource('faqs', FAQController::class);

        // Services
        Route::resource('services', ServiceController::class);

        // Current Learnings
        Route::resource('currentLearnings', CurrentLearningController::class);
    });


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/resume/download', [ResumeController::class, 'download'])
    ->name('resume.download');


require __DIR__.'/auth.php';
