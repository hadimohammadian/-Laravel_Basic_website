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

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});


Route::prefix('admin')->group(function(){

    Route::get('/articles/create', function () {

        return view('admin.articles.create');
    });

    Route::post('/articles/create', function () {

        // $article = new Article();
        // $article->title = request('title');
        // $article->slug = request('title');
        // $article->body = request('body');
        // $article->save();

         Article::create([
             'title' => request('title'),
             'slug' => request('title'),
             'body' => request('body'),
         ]);

         return redirect('/admin/articles/create');

    });

});

