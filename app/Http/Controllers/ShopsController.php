<?php

namespace App\Http\Controllers;

use App\Models\Shops;
use Illuminate\Http\Request;

class ShopsController extends Controller
{
    //
    public function index(){
        return view('shops',[
            'title'=>'Belanja',
            'shops'=>Shops::latest()->filter(request(['search']))->get()
        ]);
    }

    public function show(Shops $shops){
        return view('shopdetail',[
            'title'=>'Detail Belanja',
            'shop'=>$shops
        ]);
    }
}
