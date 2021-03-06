<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
// use Nexmo\Client\Exception\Request;

class ArticleController extends Controller
{
    //
    public function index()
    {
        return Article::all();
    }

    public function show(Article $article)
    {
        return $article;
    }

    public function store(Request $request)
    {
        $article = Article::create($request->all());
        return response()->json($article, 201); // trả về dữ liệu $article theo kiểu json, với thông báo 201
    }

    public function update(Request $request, Article $article)
    {
        $article->update($request->all());
        return response()->json($article, 200);
    }

    // I commit on master branch
    // Another commit on master branch

    public function delete (Article $article)
    {
        $article->delete();

        return response()->json(null, 204);
    }
}
