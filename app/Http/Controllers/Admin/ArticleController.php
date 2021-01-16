<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();

        return view('admin.articles.index', compact('articles'));
    }


    public function create()
    {
        return view('admin.articles.create');
    }


    public function insert()
    {
        // $article = new Article();
        // $article->title = request('title');
        // $article->slug = request('title');
        // $article->body = request('body');
        // $article->save();

        $validator  = Validator::make(request()->all(), [
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
    }

    public function edit($id)
    {
        $article = Article::find($id);
        return view('admin.articles.edit', compact('article'));
    }


    public function update($id)
    {
        $validator  = Validator::make(request()->all(), [
            'title' => 'required',
            'body' => 'required'
        ])->validated();

        $article = Article::findOrFail($id);

        // $article->update([
        //     'title' => $validator['title'],
        //     'slug' => $validator['title'],
        //     'body' => $validator['body'],
        // ]);

        $article->update($validator);

        return back();
    }

    public function delete($id)
    {
        $article = Article::findOrFail($id);

        $article->delete();

        return back();
    }
}
