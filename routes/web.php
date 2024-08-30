<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\BusinessController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\InformationController;
use App\Http\Controllers\Admin\PartController;
use App\Http\Controllers\Admin\ProductCategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\PostTaskController;
use App\Http\Controllers\Admin\ProjectCategoryController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\StrengthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();
Route::group(['middleware' => ['language', 'site_settings']], function () {
    Route::get('set-language/{locale}', function($locale){
        Session::put('locale', $locale);
        Session::save();
        return back()->withInput();
	})->name('set-language');

    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/business', [App\Http\Controllers\BusinessController::class, 'index'])->name('business');
    Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');
    Route::get('/privacy_policy', [App\Http\Controllers\HomeController::class, 'privacyPolicy'])->name('privacy_policy');
    Route::get('/site_map', [App\Http\Controllers\HomeController::class, 'siteMap'])->name('site_map');



    Route::get('/products', [App\Http\Controllers\ProductController::class, 'index'])->name('products');
    Route::get('/products/{slug}', [App\Http\Controllers\ProductController::class, 'show'])->name('products.show');
    Route::get('/product-category/{slug}', [App\Http\Controllers\ProductController::class, 'productCategory'])->name('productCategory');
    Route::get('/projects', [App\Http\Controllers\ProjectController::class, 'index'])->name('projects');
    Route::get('/project-category/{slug}', [App\Http\Controllers\ProjectController::class, 'projectCategory'])->name('projectCategory');
    Route::get('/check-product', [App\Http\Controllers\PartController::class, 'index'])->name('part');
    Route::get('/contact-us', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');
    Route::post('/contact-us', [App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');
    Route::get('/about-us', [App\Http\Controllers\HomeController::class, 'aboutUs'])->name('about');
});


Route::group(['prefix' => 'fe-admin', 'middleware' => 'auth'], function () {

    Route::group(array('namespace' => 'Admin'), function() {

        // Route::post('/upload/post-image', 'PostTaskController@uploadImage')->name('upload-post-image');
        Route::post('/upload/post-tinymce-image', [PostTaskController::class, 'uploadTinyMCEImage'])->name('upload-post-image');

        Route::get('/', [DashboardController::class, 'index'])->name('manage');

        // Banner
        Route::group(['prefix' => 'banner'], function () {
            Route::get('/', [BannerController::class, 'index'])->name('list-banner');
            Route::get('create', [BannerController::class, 'create'])->name('create-banner');
            Route::post('store', [BannerController::class, 'store'])->name('store-banner');
            Route::get('edit/{id}', [BannerController::class, 'edit'])->name('edit-banner');
            Route::put('update/{id}', [BannerController::class, 'update'])->name('update-banner');
            Route::get('delete-row', [BannerController::class, 'delete'])->name('delete-banner');
            Route::get('change-status', [BannerController::class, 'changeStatus'])->name('change-banner-status');
        });

        // Information
        Route::group(['prefix' => 'information'], function () {
            Route::get('/', [InformationController::class, 'index'])->name('list-information');
            Route::get('create', [InformationController::class, 'create'])->name('create-information');
            Route::post('store', [InformationController::class, 'store'])->name('store-information');
            Route::get('edit/{id}', [InformationController::class, 'edit'])->name('edit-information');
            Route::put('update/{id}', [InformationController::class, 'update'])->name('update-information');
            Route::get('delete-row', [InformationController::class, 'delete'])->name('delete-information');
            Route::get('change-status', [InformationController::class, 'changeStatus'])->name('change-information-status');
        });

        // About
        Route::group(['prefix' => 'about'], function () {
            Route::get('/', [AboutController::class, 'index'])->name('list-about');
            Route::get('edit/{id}', [AboutController::class, 'edit'])->name('edit-about');
            Route::put('update/{id}', [AboutController::class, 'update'])->name('update-about');
        });

        // Product category
        Route::group(['prefix' => 'product-category'], function () {
            Route::get('/', [ProductCategoryController::class, 'index'])->name('list-product-category');
            Route::get('create', [ProductCategoryController::class, 'create'])->name('create-product-category');
            Route::post('store', [ProductCategoryController::class, 'store'])->name('store-product-category');
            Route::get('edit/{id}', [ProductCategoryController::class, 'edit'])->name('edit-product-category');
            Route::put('update/{id}', [ProductCategoryController::class, 'update'])->name('update-product-category');
            Route::get('delete-row', [ProductCategoryController::class, 'delete'])->name('delete-product-category');
            Route::get('change-status', [ProductCategoryController::class, 'changeStatus'])->name('change-product-category-status');
        });

        // Product
        Route::group(['prefix' => 'product'], function () {
            Route::get('/', [ProductController::class, 'index'])->name('list-product');
            Route::get('create', [ProductController::class, 'create'])->name('create-product');
            Route::post('store', [ProductController::class, 'store'])->name('store-product');
            Route::get('edit/{id}', [ProductController::class, 'edit'])->name('edit-product');
            Route::put('update/{id}', [ProductController::class, 'update'])->name('update-product');
            Route::get('delete-row', [ProductController::class, 'delete'])->name('delete-product');
            Route::get('change-status', [ProductController::class, 'changeStatus'])->name('change-product-status');
        });

        // Business
        Route::group(['prefix' => 'business'], function () {
            Route::get('/', [BusinessController::class, 'index'])->name('list-business');
            Route::get('create', [BusinessController::class, 'create'])->name('create-business');
            Route::post('store', [BusinessController::class, 'store'])->name('store-business');
            Route::get('edit/{id}', [BusinessController::class, 'edit'])->name('edit-business');
            Route::put('update/{id}', [BusinessController::class, 'update'])->name('update-business');
            Route::get('delete-row', [BusinessController::class, 'delete'])->name('delete-business');
            Route::get('change-status', [BusinessController::class, 'changeStatus'])->name('change-business-status');
        });

        // Strength
        Route::group(['prefix' => 'strength'], function () {
            Route::get('/', [StrengthController::class, 'index'])->name('list-strength');
            Route::get('create', [StrengthController::class, 'create'])->name('create-strength');
            Route::post('store', [StrengthController::class, 'store'])->name('store-strength');
            Route::get('edit/{id}', [StrengthController::class, 'edit'])->name('edit-strength');
            Route::put('update/{id}', [StrengthController::class, 'update'])->name('update-strength');
            Route::get('delete-row', [StrengthController::class, 'delete'])->name('delete-strength');
            Route::get('change-status', [StrengthController::class, 'changeStatus'])->name('change-strength-status');
        });


        // Part
        Route::group(['prefix' => 'part'], function () {
            Route::get('/', [PartController::class, 'index'])->name('list-part');
            Route::get('create', [PartController::class, 'create'])->name('create-part');
            Route::post('store', [PartController::class, 'store'])->name('store-part');
            Route::get('edit/{id}', [PartController::class, 'edit'])->name('edit-part');
            Route::put('update/{id}', [PartController::class, 'update'])->name('update-part');
            Route::get('delete-row', [PartController::class, 'delete'])->name('delete-part');
            Route::get('change-status', [PartController::class, 'changeStatus'])->name('change-part-status');
            Route::get('get-part-serials', [PartController::class, 'getPartSerials'])->name('get-part-serials');
            Route::post('add-part-serial', [PartController::class, 'addPartSerial'])->name('add-part-serial');
            Route::post('change-part-serials', [PartController::class, 'changePartSerials'])->name('change-part-serials');
        });

        // Project category
        Route::group(['prefix' => 'project-category'], function () {
            Route::get('/', [ProjectCategoryController::class, 'index'])->name('list-project-category');
            Route::get('create', [ProjectCategoryController::class, 'create'])->name('create-project-category');
            Route::post('store', [ProjectCategoryController::class, 'store'])->name('store-project-category');
            Route::get('edit/{id}', [ProjectCategoryController::class, 'edit'])->name('edit-project-category');
            Route::put('update/{id}', [ProjectCategoryController::class, 'update'])->name('update-project-category');
            Route::get('delete-row', [ProjectCategoryController::class, 'delete'])->name('delete-project-category');
            Route::get('change-status', [ProjectCategoryController::class, 'changeStatus'])->name('change-project-category-status');
        });

        // Project
        Route::group(['prefix' => 'project'], function () {
            Route::get('/', [ProjectController::class, 'index'])->name('list-project');
            Route::get('create', [ProjectController::class, 'create'])->name('create-project');
            Route::post('store', [ProjectController::class, 'store'])->name('store-project');
            Route::get('edit/{id}', [ProjectController::class, 'edit'])->name('edit-project');
            Route::put('update/{id}', [ProjectController::class, 'update'])->name('update-project');
            Route::get('delete-row', [ProjectController::class, 'delete'])->name('delete-project');
            Route::get('change-status', [ProjectController::class, 'changeStatus'])->name('change-project-status');
        });
    });
});

