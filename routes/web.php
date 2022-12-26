<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactContoller;
use App\Http\Controllers\FteureController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\StripePaymentController;
use App\Http\Controllers\WhyUsController;
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

Route::get('/','App\Http\Controllers\HomeController@home')->name('homee');
Route::get('/product/{id}','App\Http\Controllers\HomeController@product')->name('product');

Route::get('/get_product/{id}','App\Http\Controllers\HomeController@get_product')->name('get_product');


Route::get('/home','App\Http\Controllers\HomeController@home')->name('home');
Route::get('login','App\Http\Controllers\HomeController@login_dashboard')->name('login');
Route::post('login','App\Http\Controllers\HomeController@login_dashboard_post')->name('login_dashboard_post');
Route::post('store_message','App\Http\Controllers\HomeController@store_message')->name('store_message');
Route::get('register','App\Http\Controllers\HomeController@register')->name('register');
Route::get('خدماتنا','App\Http\Controllers\HomeController@services')->name('service.front');
Route::get('المدونة','App\Http\Controllers\HomeController@blogs')->name('blogs.front');
Route::get('التدوينة/{slug}','App\Http\Controllers\HomeController@single_blog')->name('single_blog');

Route::get('الحدمة/{slug}','App\Http\Controllers\HomeController@singe_services')->name('singe_services');

Route::post('register','App\Http\Controllers\HomeController@post_register')->name('post_register');

Route::post('add_to_cart','App\Http\Controllers\CartController@addItem')->name('addItem');
Route::post('update_item','App\Http\Controllers\CartController@update_item')->name('update_item');
Route::delete('delete_cart/{id}','App\Http\Controllers\CartController@destroy')->name('carts.destroy');


    Route::group(['middleware' => ['auth'], 'prefix' => 'dashboard'], function () {
    Route::get('/','App\Http\Controllers\HomeController@dashboard')->name('dashboard');
    Route::get('logout','App\Http\Controllers\HomeController@logout')->name('logout');
    Route::get('sliders',[SliderController::class,'index'])->name('sliders.index');
    Route::post('sliders',[SliderController::class,'store'])->name('sliders.store');
    Route::resource('services',ServiceController::class);
    Route::resource('clients',ClientController::class);
    Route::resource('whyus',WhyUsController::class);
    Route::resource('blogs',BlogController::class);
    Route::resource('contacts',ContactContoller::class);
    Route::get('about',[AboutController::class,'index'])->name('about.index');
    Route::post('about',[AboutController::class,'store'])->name('about.store');
    Route::get('setting',[HomeController::class,'get_setting'])->name('get_setting');
    Route::get('social',[HomeController::class,'social'])->name('social');
    Route::post('get_setting_post',[HomeController::class,'get_setting_post'])->name('get_setting_post');

    

    Route::get('edit_profile','App\Http\Controllers\HomeController@edit_profile')->name('edit_profile');
    Route::post('update_profile','App\Http\Controllers\HomeController@update_profile')->name('update_profile');
    

   
});