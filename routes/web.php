<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group whichAboutUsController
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();

Route::get('/', [App\Http\Controllers\Frontend\FrontendController::class, 'home']);



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.home');
Route::get('/admin/profile', [App\Http\Controllers\Admin\DashboardController::class, 'adminProfile'])->name('admin.profile');
Route::get('/admin/profile-update', [App\Http\Controllers\Admin\DashboardController::class, 'adminProfileUpdate'])->name('admin.ProfileUpdate');
Route::post('/admin/profile-update', [App\Http\Controllers\Admin\DashboardController::class, 'adminProfileUpdateSubmit'])->name('admin.ProfileUpdate');

Route::post('/admin/admin-update-password', [App\Http\Controllers\Admin\DashboardController::class, 'adminUpdatePassword'])->name('admin.adminUpdatePassword');

Route::post('/admin/email-update', [App\Http\Controllers\Admin\DashboardController::class, 'adminEmailUpdate'])->name('admin.email.update');

Route::get('/admin/logout', [App\Http\Controllers\Admin\DashboardController::class, 'logout'])->name('admin.logout');
// login controler
Route::get('/admin/login', [App\Http\Controllers\Admin\LoginController::class, 'login'])->name('admin.login');
Route::post('/admin/login', [App\Http\Controllers\Admin\LoginController::class, 'loginSubmit'])->name('admin.login');
// settings controller
Route::get('/admin/company-information', [App\Http\Controllers\Admin\SettingsController::class, 'companyInformation'])->name('admin.companyInformation');
Route::post('/admin/company-information', [App\Http\Controllers\Admin\SettingsController::class, 'companyInformationSubmit'])->name('admin.companyInformation');

Route::get('/admin/seo-information', [App\Http\Controllers\Admin\SettingsController::class, 'seoInformation'])->name('admin.seoInformation');
Route::post('/admin/seo-information', [App\Http\Controllers\Admin\SettingsController::class, 'seoInformationSubmit'])->name('admin.seoInformation');

Route::get('/admin/social-information', [App\Http\Controllers\Admin\SettingsController::class, 'socialInformation'])->name('admin.socialInformation');
Route::post('/admin/social-information', [App\Http\Controllers\Admin\SettingsController::class, 'socialInformationSubmit'])->name('admin.socialInformation');
// slider Create
Route::get('/admin/slider/create', [App\Http\Controllers\Admin\SliderController::class, 'create'])->name('admin.slider.create');
Route::post('/admin/slider/store', [App\Http\Controllers\Admin\SliderController::class, 'store'])->name('admin.slider.create');
Route::post('/admin/slider/update', [App\Http\Controllers\Admin\SliderController::class, 'update'])->name('admin.slider.update');
Route::get('/admin/slider/index', [App\Http\Controllers\Admin\SliderController::class, 'index'])->name('admin.slider.index');

Route::get('/admin/slider/active/{id}', [App\Http\Controllers\Admin\SliderController::class, 'active']);
Route::get('/admin/slider/deactive/{id}', [App\Http\Controllers\Admin\SliderController::class, 'deactive']);
Route::get('/admin/slider/edit/{id}', [App\Http\Controllers\Admin\SliderController::class, 'edit']);
Route::get('/admin/slider/delete/{id}', [App\Http\Controllers\Admin\SliderController::class, 'delete']);

// about us
Route::get('/admin/about-us/update', [App\Http\Controllers\Admin\AboutUsController::class, 'update'])->name('admin.about-us.update');
Route::post('/admin/about-us/update', [App\Http\Controllers\Admin\AboutUsController::class, 'updateSubmit'])->name('admin.about-us.update');

//ProductController

// slider Create
Route::get('/admin/product/create', [App\Http\Controllers\Admin\ProductController::class, 'create'])->name('admin.product.create');
Route::post('/admin/product/store', [App\Http\Controllers\Admin\ProductController::class, 'store'])->name('admin.product.create');
Route::post('/admin/product/update', [App\Http\Controllers\Admin\ProductController::class, 'update'])->name('admin.product.update');
Route::get('/admin/product/index', [App\Http\Controllers\Admin\ProductController::class, 'index'])->name('admin.product.index');



// category
Route::get('/admin/category/create', [App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin.category.create');
Route::post('/admin/category/create', [App\Http\Controllers\Admin\CategoryController::class, 'store'])->name('admin.category.create');
Route::post('/admin/category/update', [App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin.category.update');
Route::get('/admin/category/index', [App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin.category.index');
Route::get('/admin/category/active/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'active']);
Route::get('/admin/category/deactive/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'deactive']);
Route::get('/admin/category/edit/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'edit']);
Route::get('/admin/category/delete/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'delete']);


// Sub category
Route::get('/admin/subcategory/create', [App\Http\Controllers\Admin\SubCategoryController::class, 'create'])->name('admin.subcategory.create');
Route::post('/admin/subcategory/create', [App\Http\Controllers\Admin\SubCategoryController::class, 'store'])->name('admin.subcategory.create');
Route::post('/admin/subcategory/update', [App\Http\Controllers\Admin\SubCategoryController::class, 'update'])->name('admin.subcategory.update');
Route::get('/admin/subcategory/index', [App\Http\Controllers\Admin\SubCategoryController::class, 'index'])->name('admin.subcategory.index');
Route::get('/admin/subcategory/active/{id}', [App\Http\Controllers\Admin\SubCategoryController::class, 'active']);
Route::get('/admin/subcategory/deactive/{id}', [App\Http\Controllers\Admin\SubCategoryController::class, 'deactive']);
Route::get('/admin/subcategory/edit/{id}', [App\Http\Controllers\Admin\SubCategoryController::class, 'edit']);
Route::get('/admin/subcategory/delete/{id}', [App\Http\Controllers\Admin\SubCategoryController::class, 'delete']);

// Re Sub category
Route::get('/admin/resubcategory/create', [App\Http\Controllers\Admin\ResubCategoryController::class, 'create'])->name('admin.resubcategory.create');
Route::post('/admin/resubcategory/create', [App\Http\Controllers\Admin\ResubCategoryController::class, 'store'])->name('admin.resubcategory.create');
Route::post('/admin/resubcategory/update', [App\Http\Controllers\Admin\ResubCategoryController::class, 'update'])->name('admin.resubcategory.update');
Route::get('/admin/resubcategory/index', [App\Http\Controllers\Admin\ResubCategoryController::class, 'index'])->name('admin.resubcategory.index');
Route::get('/admin/resubcategory/active/{id}', [App\Http\Controllers\Admin\ResubCategoryController::class, 'active']);

Route::get('/admin/resubcategory/deactive/{id}', [App\Http\Controllers\Admin\ResubCategoryController::class, 'deactive']);
Route::get('/admin/resubcategory/edit/{id}', [App\Http\Controllers\Admin\ResubCategoryController::class, 'edit']);
Route::get('/admin/resubcategory/delete/{id}', [App\Http\Controllers\Admin\ResubCategoryController::class, 'delete']);


Route::get('/get/subcategory/all/{cate_id}', [App\Http\Controllers\Api\ApiController::class, 'subcatagory']);

Route::get('/get/resubcategory/all/{cate_id}', [App\Http\Controllers\Api\ApiController::class, 'resubcatagory']);
