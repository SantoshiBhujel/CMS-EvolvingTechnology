<?php

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

Route::get('/', 'PublicViewController@welcome')->name('welcome');

Auth::routes([
        'register' => false,
        'reset' => false
]);


Route::get('/admin', 'HomeController@index')->name('adminDashboard')->middleware('auth');

//  -----------------
//  ROUTE FOR CONTACT US
//  ------------------
Route::get('/contact','PublicViewController@contact')->name('contact');
//  --------------------------
//  ROUTE FOR FREE CONSULTING
//  --------------------------
Route::post('/free/consult','PublicViewController@freeConsult')->name('freeConsult');

//  -----------------
//  ROUTE FOR BLOGS
//  ------------------
Route::get('/blogs/news','PublicViewController@blogs')->name('blogs');
//  --------------------------
//  ROUTE FOR PARTICULAR BLOG
//  --------------------------
Route::get('/blog/{id}/single','PublicViewController@singleBlog')->name('singleBlog');
//  -----------------------------
//  ROUTE FOR PARTICULAR PROJECT
//  -----------------------------
Route::get('/projects/{id}','PublicViewController@singleProject')->name('singleProject');
//  -----------------------------
//  ROUTE FOR PARTICULAR PRODUCT
//  -----------------------------
Route::get('/products/{id}','PublicViewController@singleProduct')->name('singleProduct');
//  -----------------
//  ROUTE FOR ABOUT US
//  ------------------
Route::get('/about','PublicViewController@about')->name('about');
//  -----------------
//  ROUTE FOR TEAMS
//  ------------------
Route::get('/team/members','PublicViewController@teams')->name('teams');

//  --------------------------------------------------------------------
//  ---------------------ROUTE WITH AUTH MIDDLEWARE---------------------
//  --------------------------------------------------------------------
Route::group(['middleware' => ['auth'] ], function() {
        //  -----------------------------
        //  ROUTE FOR USER CONTROLLER
        //  -----------------------------
        Route::resource('admins', 'UserController');
        //  -----------------------------
        //  ROUTE FOR BANNER CONTROLLER
        //  -----------------------------
        Route::resource('banner', 'BannerController');
        //  -----------------------------
        //  ROUTE FOR BLOG CONTROLLER
        //  -----------------------------
        Route::resource('blog', 'BlogController');
        //  -----------------------------
        //  ROUTE FOR PROJECT CONTROLLER
        //  -----------------------------
        Route::resource('project', 'ProjectController');
        //  -----------------------------
        //  ROUTE FOR PRODUCT CONTROLLER
        //  -----------------------------
        Route::resource('product', 'ProductController');
        //  -----------------------------
        //  ROUTE FOR TEAM CONTROLLER
        //  -----------------------------
        Route::resource('team', 'TeamController');
        //  -----------------------------
        //  ROUTE FOR CLIENT CONTROLLER
        //  -----------------------------
        Route::resource('client', 'ClientController');

});