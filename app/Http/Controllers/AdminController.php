<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminController extends Controller
{
    public function index(){
        return view('admin.post', [
            'title'=>'Admin',
            'articles'=>Articles::latest()->paginate(5),
            'categories'=>Categories::get()
        ]);
    }
}
