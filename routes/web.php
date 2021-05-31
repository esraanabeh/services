<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubcatController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DataController;
use Illuminate\Support\Facades\App;


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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/admin', function () {
//     return view('admin.index');
// });

Route::get('/user', function () {
    return view('user.index');
});

Route::get('/user.indexen', function () {
    return view('user.indexen');
});

Route::get('/complete', function () {
    return view('user.complete');
});

Route::get('/completeen', function () {
    return view('user.completeen');
});

Route::get('/order', function () {
    return view('order');
});

Route::group(['middleware' => ['auth']], function() { 
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

    Route::group(['prefix' => LaravelLocalization::setLocale(),'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]],function(){

        Route::resource('category', 'CategoryController');
        Route::resource('subcat', 'SubcatController');
        Route::resource('service', 'ServiceController');
    
    
    });
    Route::get('/add_to_cart','SubcatController@addToCart');
    Route::get('/data_store','DataController@store');
    Route::get('/add_to_order','ServiceController@addToOrder');
    
   
    
   
});


require __DIR__.'/auth.php';

















 

