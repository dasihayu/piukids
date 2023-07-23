<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use App\Models\Categories;
use App\Models\Shops;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        return view('home',[
            'title'=>'PIUKIDS',
            'shops'=>Shops::latest()->paginate(3),
            'articles'=>Articles::latest()->paginate(3)
        ]);
    }
}
