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

use App\models\Article;
use Illuminate\Support\Facades\Route;
 

use function Ramsey\Uuid\v1;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});


Route::prefix('admin')->group(function () {
    Route::get('/articles', 'Admin\ArticleController@index');
    Route::get('/articles/create', 'Admin\ArticleController@create');
    Route::post('/articles/create', 'Admin\ArticleController@insert');
    Route::get('/articles/{id}/edit', 'Admin\ArticleController@edit');
    Route::put('/articles/{id}/edit', 'Admin\ArticleController@update');
    Route::delete('/articles/{id}', 'Admin\ArticleController@delete');
});
