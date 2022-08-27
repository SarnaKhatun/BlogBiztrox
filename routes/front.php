<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Front\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('/');
Route::get('/service-detail/{id}', [HomeController::class, 'serviceDetail'])->name('service.details');
Route::get('/blog-detail/{id}', [HomeController::class, 'blogDetail'])->name('blog.details');
Route::get('/project-detail/{id}', [HomeController::class, 'projectDetail'])->name('project.details');
Route::get('/team-detail/{id}', [HomeController::class, 'teamDetail'])->name('team.details');
Route::get('/service-all', [HomeController::class, 'serviceAll'])->name('show.service');
Route::get('/blog-all', [HomeController::class, 'blogAll'])->name('show.blog');
Route::get('/project-all', [HomeController::class, 'projectAll'])->name('show.project');
Route::get('/team-all', [HomeController::class, 'teamAll'])->name('show.team');
