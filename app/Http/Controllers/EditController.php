<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditController extends Controller
{
    public function index(){
        return view('admin.edit', [
            'title'=>'Edit Artikel'
        ]);
    }
}
