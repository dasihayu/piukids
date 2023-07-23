<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use App\Models\Categories;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    //
    public function index(){
        return view('articles',[
            'title'=>'Artikel',
            'articles'=>Articles::latest()->paginate(5),
            'categories'=>Categories::get()
        ]);
    }

    public function show(Articles $articles){
        return view('article',[
            'title'=>'Detail Artikel',
            'article'=>$articles,
            'articles'=>Articles::latest()->paginate(3)
        ]);
    }   
}
