<?php

// Register Twill routes here (eg. Route::module('posts'))
Route::group(['prefix' => 'book'] , function() {
    Route::module('families');
    Route::module('bikes');
    Route::module('colors');
    Route::module('sizes');
    Route::module('geometries');
    Route::module('accessories');
    Route::module('certificates');
});
Route::module('slides');
Route::module('stores');
Route::module('pages');

Route::module('families' , ['as' => 'admin'] , ['only' => ['edit']]);
Route::module('colors' , ['as' => 'admin'] , ['only' => ['edit']]);
Route::module('sizes' , ['as' => 'admin'] , ['only' => ['edit']]);
Route::module('accessories' , ['as' => 'admin'] , ['only' => ['edit']]);
Route::module('geometries' , ['as' => 'admin'] , ['only' => ['edit']]);
Route::module('bikes' , ['as' => 'admin'] , ['only' => ['edit']]);