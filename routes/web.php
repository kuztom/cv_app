<?php

use App\Http\Controllers\EducationController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\WorkExperienceController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/print/{id}', [HomeController::class, 'print'])->name('print');

Route::get('/search', [SearchController::class, 'index'])->name('search');
Route::get('/search/all', [SearchController::class, 'showAll'])->name('search.all');
Route::get('/search/unique', [SearchController::class, 'showUnique'])->name('search.unique');
Route::get('/search/oneSpecific', [SearchController::class, 'showOneSpecific'])->name('search.oneSpecific');
Route::get('/search/countSpecific', [SearchController::class, 'showCountSpecific'])->name('search.countSpecific');

Route::get('/create', [ProfilesController::class, 'create'])->name('profile.create');
Route::post('/create/store', [ProfilesController::class, 'store'])->name('profile.store');
Route::get('/profile/edit/{id}', [ProfilesController::class, 'edit'])->name('profile.edit');
Route::post('/profile/update/{id}', [ProfilesController::class, 'update'])->name('profile.update');
Route::post('/profile/delete/{id}', [ProfilesController::class, 'delete'])->name('profile.delete');

Route::get('/education', [EducationController::class, 'create'])->name('education.create');
Route::post('/education/store', [EducationController::class, 'store'])->name('education.store');
Route::get('/education/edit/{id}', [EducationController::class, 'edit'])->name('education.edit');
Route::post('/education/update/{id}', [EducationController::class, 'update'])->name('education.update');
Route::post('/education/delete/{id}', [EducationController::class, 'delete'])->name('education.delete');

Route::get('/work', [WorkExperienceController::class, 'create'])->name('work.create');
Route::post('/work/store', [WorkExperienceController::class, 'store'])->name('work.store');
Route::get('/work/edit/{id}', [WorkExperienceController::class, 'edit'])->name('work.edit');
Route::post('/work/update/{id}', [WorkExperienceController::class, 'update'])->name('work.update');
Route::post('/work/delete/{id}', [WorkExperienceController::class, 'delete'])->name('work.delete');

Route::get('/skill', [SkillsController::class, 'create'])->name('skill.create');
Route::post('/skill/store', [SkillsController::class, 'store'])->name('skill.store');
Route::get('/skill/edit/{id}', [SkillsController::class, 'edit'])->name('skill.edit');
Route::post('/skill/update/{id}', [SkillsController::class, 'update'])->name('skill.update');
Route::post('/skill/delete/{id}', [SkillsController::class, 'delete'])->name('skill.delete');


