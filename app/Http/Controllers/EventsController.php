<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    //
    public function index(){
        return view('events',[
            'title'=>'Events',
            'events'=>Events::latest()->filter(request(['search']))->get()
        ]);
    }
}
