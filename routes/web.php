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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes([
    'register' => false
]);

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('restrito')->group(function () {
    
    Route::namespace('Restrito')->name('restrito.')->group(function () {
        Route::resource('smartphones', 'SmartphoneController');
        Route::resource('tsssamples', 'SampletssController');

        // Route::get('index', 'SmartphoneController@index')->name('restrito.smartphones');
        // Route::post('store', 'SmartphoneController@store')->name('restrito.smartphones');
        // Route::put('update', 'SmartphoneController@update')->name('restrito.smartphones');
        // Route::delete('destroy', 'SmartphoneController@destroy')->name('restrito.smartphones');
        
        Route::get('lista-tss-samples','SampletssController@listaTssSample')->name('lista.tss-samples');
        
    });

}); 