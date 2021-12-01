<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
class ArticleController extends Controller
{
    //


    public function index(){
        $article = Article::all();

        $page_tile = "INDEX ARTICLESss";
        return view('index',compact('article','page_tile'));

    }
}
