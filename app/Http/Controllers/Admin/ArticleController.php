<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
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


    public function insert(ArticleRequest $request)
    {


        $validator  = $request->validate();


        Article::create([
            'title' => $validator['title'],
            'slug' => $validator['title'],
            'body' => $validator['body'],
        ]);

        return redirect('/admin/articles/create');
    }

    public function edit(Article $article)
    {
        return view('admin.articles.edit', compact('article'));
    }


    public function update(ArticleRequest $request, Article $art)
    {
        $validator  = $request->validate();
        $art->update($validator);
        return back();
    }

    public function delete(Article $article)
    {
        $article->delete();

        return back();
    }
}
