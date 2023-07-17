<?php

namespace App\Http\Controllers;

use App\Models\Games;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    //
    public function index(){
        return view('games',[
            'title'=>'Permainan',
            'games'=>Games::latest()->filter(request(['search']))->paginate(5)
        ]);
    }

    public function show(Games $games){
        return view('game',[
            'title'=>'Detail Permainan',
            'game'=>$games,
            'games'=>Games::latest()->paginate(3)
        ]);
    }
}
