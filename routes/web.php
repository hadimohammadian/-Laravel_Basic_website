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
use Illuminate\Support\Facades\Validator;

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

        $validator  = Validator::make(request()->all(),[
            'title' => 'required',
            'body' => 'required'
        ])->validated();



        // if($validator->fails()){
        //     return redirect()->back()->withErrors($validator);
        // }

        //  Article::create([
        //      'title' => request('title'),
        //      'slug' => request('title'),
        //      'body' => request('body'),
        //  ]);

         Article::create([
            'title' => $validator['title'],
            'slug' => $validator['title'],
            'body' => $validator['body'],
        ]);

         return redirect('/admin/articles/create');

    });


    Route::get('/articles/{id}/edit' , function($id){

        $article = Article::find($id);
        return view('admin.articles.edit',compact('article'));

    });

});

