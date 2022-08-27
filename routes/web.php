<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Front\HomeController;

use App\Http\Controllers\Admin\DashboardController;

use App\Http\Controllers\Admin\UserController;

use App\Http\Controllers\Admin\AdminController;

use App\Http\Controllers\Admin\SliderCategoryController;

use App\Http\Controllers\Admin\SliderController;

use App\Http\Controllers\Admin\BlogCategoryController;

use App\Http\Controllers\Admin\BlogController;

use App\Http\Controllers\Admin\ServiceCategoryController;

use App\Http\Controllers\Admin\ServiceController;

use App\Http\Controllers\Admin\ProjectCategoryController;

use App\Http\Controllers\Admin\ProjectController;



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');


    Route::middleware('is_admin')->group(function () {
        Route::resource('users', UserController::class);

        Route::get('/user-change-status/{id}', [AdminController::class, 'userStatus'])->name('users.change-status');
    });


   Route::middleware('is_aacc')->group(function () {
       Route::get('/edit-profile', [UserController::class, 'editProfile'])->name('edit.profile');
       Route::post('/update-profile', [UserController::class, 'updateProfile'])->name('update.profile');
   });


   Route::middleware('is_admin_ceo')->group(function () {
       Route::get('/sliderCategory-change-status/{id}', [AdminController::class, 'sliderCategoryStatus'])->name('sliderCategories.change-status');
       Route::get('/blogCategory-change-status/{id}', [AdminController::class, 'blogCategoryStatus'])->name('blogCategories.change-status');
       Route::get('/serviceCategory-change-status/{id}', [AdminController::class, 'serviceCategoryStatus'])->name('serviceCategories.change-status');
       Route::get('/projectCategory-change-status/{id}', [AdminController::class, 'projectCategoryStatus'])->name('projectCategories.change-status');
       Route::get('/slider-change-status/{id}', [AdminController::class, 'sliderStatus'])->name('sliders.change-status');
       Route::get('/blog-change-status/{id}', [AdminController::class, 'blogStatus'])->name('blogs.change-status');
       Route::get('/service-change-status/{id}', [AdminController::class, 'serviceStatus'])->name('services.change-status');
       Route::get('/project-change-status/{id}', [AdminController::class, 'projectStatus'])->name('projects.change-status');



       Route::resource('sliderCategories', SliderCategoryController::class);
       Route::resource('sliders', SliderController::class);

       Route::resource('blogCategories', BlogCategoryController::class);
       Route::resource('blogs', BlogController::class);

       Route::resource('serviceCategories', ServiceCategoryController::class);
       Route::resource('services', ServiceController::class);

       Route::resource('projectCategories', ProjectCategoryController::class);
       Route::resource('projects', ProjectController::class);
   });

});
