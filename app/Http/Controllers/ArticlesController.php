<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ArticlesController extends Controller
{
    //
    public function index()
    {
        //
        return view('articles',[
            'title'=>'Artikel',
            'articles'=>Articles::latest()->paginate(5),
            'categories'=>Categories::get()
        ]);
    }

    public function show(Articles $articles)
    {
        //
        return view('article',[
            'title'=>'Detail Artikel',
            'article'=>$articles,
            'articles'=>Articles::latest()->paginate(3)
        ]);
    }

    public function create(){
        return view('admin.create',[
            'title'=>'Tambah Artikel',
            'categories'=>Categories::all()
        ]);
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'title'=>'required',
            'category_id'=>'required',
            'author'=>'required',
            'image'=>'image|file|max:1024',
            'content'=>'required',
        ]);

        if ($request->file('image')) {
            $validateData['image'] = $request->file('image')->store('artikel-image');
        }

        // Articles::create([
        //     'title' => $request->title,
        //     'category_id' => $request->category_id,
        //     'author' => $request->author,
        //     'image'=>$request->image,
        //     'content' => $request->content
        // ]);

        Articles::create($validateData);


        return redirect('admin/post');
    }

    public function edit($id){
        return view('admin.edit', [
            'title'=>'Edit Artikel',
            'categories'=>Categories::all(),
            'article'=>Articles::findorfail($id)
        ]);
    }

    public function update(Request $request, $id){
        $validateData = $request->validate([
            'title'=>'required',
            'category_id'=>'required',
            'author'=>'required',
            'image'=>'image|file|max:1024',
            'content'=>'required',
        ]);

        if ($request->file('image')) {
            $validateData['image'] = $request->file('image')->store('artikel-image');
        }

        $article = Articles::findorfail($id);
        $article->update($validateData);

        return redirect('admin/post');
    }

    public function destroy($id){
        $article = Articles::findorfail($id);
        $article->delete();

        return back();
    }
}
