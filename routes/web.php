<?php

use GuzzleHttp\Psr7\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Request as FacadesRequest;
use Illuminate\Support\Facades\Route;
use Laravel\Ui\Presets\React;
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
    return view('home');
    
});

Route::get('/about', function () {
    
    return view('about');
    
});

Route::get('/contact', function () {
    return view('contact');
    
});



Route::get('/home', 'HomeController@index')->name('home');

Route::post('contact/submit', 'contactController@submit')->name('contact-form-submit');

Route::get('contact/messages', "contactController@getMessages")->name('get-messages');
Auth::routes();