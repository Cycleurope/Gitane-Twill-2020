<?php

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

Route::get('/' , 'AppController@home')->name('site.home')  ;
Route::get('lang/{locale}',function($lang){
    \Session::put('locale', $lang);
    \App::setLocale($lang);
    return redirect(app()->getLocale());   
});
Route::group(['prefix' => '{locale}' , 'where' => ['locale' => '[a-zA-Z]{2}'] , 'middleware' => 'setlocale'] , function() {
    Route::get('/' , 'AppController@home')->name('site.home')  ;
    Route::get('/families/{family}' , 'FamilyController@show')->name('site.families.show')  ;
    Route::get('/bikes/{id}' , 'BikeController@show')->name('site.bikes.show')  ;
    Route::get('/stores' , 'StoreController@index')->name('site.stores')  ;
    Route::get('/{page}' , 'PageController@show')->name('site.pages.show')  ;
})  ;
Route::get('/stores/{dep}' , 'StoreController@getStoresForDepartment')->name('site.stores.fordepartment')  ;

