<?php

use App\Http\Controllers\FontendController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', 'HomeController@master');


Route::get('dang-ky', 'AuthController@getRegister')->name('get.register');
Route::post('dang-ky', 'AuthController@postRegister')->name('post.register');
Route::get('dang-nhap', 'AuthController@getLogin')->name('get.login');
Route::post('dang-nhap', 'AuthController@postLogin')->name('post.login');
Route::get('admin/dang-nhap', 'AuthController@getLoginadmin')->name('get.loginadmin');
Route::post('admin/dang-nhap', 'AuthController@postLoginadmin')->name('post.loginadmin');

Route::get('category/{id}/{slug}.html', 'FontendController@getcategory');
Route::get('brand/{id}/{slug}.html', 'FontendController@getbrand');
Route::get('blog', 'FontendController@getblog');
Route::get('blog/{id}/{slug}.html', 'FontendController@getBlogFootball');
Route::get('ite/{id}/{slug}.html', 'FontendController@getitem');

Route::group(['middleware'=> 'adult'], function(){

    Route::post('/vnpay_payment', 'CheckoutController@postcheckout');
    Route::get('complete', 'CartController@getcomplete')->name('get.complete');
    Route::post('detail/{id}/{slug}.html', 'FontendController@postdetail')->name('post.detail');
    Route::group(['prefix' => 'cart'],
     function(){
       Route::get('add/{id}', 'CartController@getaddcart');
       Route::get('show', 'CartController@getshowcart');
       Route::get('delete/{id}', 'CartController@getdeletecart');
       Route::patch('update/{id}', 'CartController@getupdatecart');
       Route::post('show', 'CartController@postComplete')->name('post.complete');

    });
});
   


Route::get('search', 'FontendController@getsearch');



Route::get('/', 'FontendController@getmaster')->name('admin.master');

Route::get('detail/{id}/{slug}.html', 'FontendController@getdetail')->name('get.detail');
Route::get('comment/index', 'FontendController@index')->name('comment.index');
Route::delete('comment/{comment}', 'FontendController@destroy')->name('comment.destroy');
Route::get('accessory/{id}/{slug}.html', 'FontendController@getaccessory');

Route::get('contact', 'FontendController@getcontact');
Route::group(['middleware'=> 'auth'], function(){

    Route::get('order/index', 'CartController@index');
    Route::post('admin/dang-xuat', 'AuthController@logout')->name('logout');
    Route::get('/home', function(){
        return view ('home');
    })->name('admin.home');

    Route::group([
    
        'prefix' => 'category',
        'as' => 'category.' //=>name
    ], function(){
    
    Route::get('create', 'CategoryController@create');
    Route::get('index', 'CategoryController@index')->name('index');
    Route::post('store-1', 'CategoryController@store')
    ->name('store');
    
    Route::delete('{category}', 'CategoryController@destroy')
    ->name('destroy');
    Route::get('{category}/edit', 'CategoryController@edit')
    ->name('edit');
    Route::put('{category}', 'CategoryController@update')
    ->name('update');
    });

    Route::group([
    
        'prefix' => 'user',
        'as' => 'user.' //=>name
    ], function(){
    
   
    Route::get('index', 'AuthController@index')->name('index');
   
    
    Route::delete('{user}', 'AuthController@destroy')
    ->name('destroy');
    
    });

    Route::group([
    
        'prefix' => 'blog',
        'as' => 'blog.' //=>name
    ], function(){
    
    Route::get('create', 'BlogController@create');
    Route::get('index', 'BlogController@index')->name('index');
    Route::post('store-1', 'BlogController@store')
    ->name('store');
    
    Route::delete('{blog}', 'BlogController@destroy')
    ->name('destroy');
    Route::get('{blog}/edit', 'BlogController@edit')
    ->name('edit');
    Route::put('{blog}', 'BlogController@update')
    ->name('update');
    });

    Route::group([
    
        'prefix' => 'banner',
        'as' => 'banner.' //=>name
    ], function(){
    
    Route::get('create', 'BannerController@create');
    Route::get('index', 'BannerController@index')->name('index');
    Route::post('store-1', 'BannerController@store')
    ->name('store');
    
    Route::delete('{banner}', 'BannerController@destroy')
    ->name('destroy');
    Route::get('{banner}/edit', 'BannerController@edit')
    ->name('edit');
    Route::put('{banner}', 'BannerController@update')
    ->name('update');
    });

    Route::group([
    
        'prefix' => 'product',
        'as' => 'product.' //=>name
    ], function(){
        Route::get('abc', 'CategoryController@abc');
    Route::get('create', 'productController@create');
    Route::get('index', 'productController@index')
    ->name('index');
    Route::post('store', 'productController@store')
    ->name('store');
    
    Route::delete('{product}', 'productController@destroy')
    ->name('destroy');
    Route::get('{product}/edit', 'productController@edit')
    ->name('edit');
    Route::put('{product}', 'productController@update')
    ->name('update');
    });
    Route::group([
    
        'prefix' => 'brand',
        'as' => 'brand.' //=>name
    ], function(){

    Route::get('create', 'BrandController@create');
    Route::get('index', 'BrandController@index')
    ->name('index');
    Route::post('store', 'BrandController@store')
    ->name('store');
    
    Route::delete('{brand}', 'BrandController@destroy')
    ->name('destroy');
    Route::get('{brand}/edit', 'BrandController@edit')
    ->name('edit');
    Route::put('{brand}', 'BrandController@update')
    ->name('update');
    });
    Route::group([
    
        'prefix' => 'accessory',
        'as' => 'accessory.' //=>name
    ], function(){
       
    Route::get('create', 'AccessoryController@create');
    Route::get('index', 'AccessoryController@index')
    ->name('index');
    Route::post('store', 'AccessoryController@store')
    ->name('store');
    
    Route::delete('{accessory}', 'AccessoryController@destroy')
    ->name('destroy');
    Route::get('{accessory}/edit', 'AccessoryController@edit')
    ->name('edit');
    Route::put('{accessory}', 'AccessoryController@update')
    ->name('update');
    });
    Route::group([
    
        'prefix' => 'item',
        'as' => 'item.' //=>name
    ], function(){
    
    Route::get('create', 'ItemController@create');
    Route::get('index', 'ItemController@index')->name('index');
    Route::post('store-1', 'ItemController@store')
    ->name('store');
    
    Route::delete('{item}', 'ItemController@destroy')
    ->name('destroy');
    Route::get('{item}/edit', 'ItemController@edit')
    ->name('edit');
    Route::put('{item}', 'ItemController@update')
    ->name('update');
    });

});
