<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\post;

use Illuminate\Support\Facades\Auth;

class blog extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return view('dashboard')->with([
                'blogs' => post::all(),
            ]);
        }else {
            return view('blog.index',[
                'blogs' => post::all(),
            ]);
        }
    }
    public function create()
    {
        if (Auth::check()) {
            return view('dashboard',[
                'blogs' => post::all()
            ]);
        }else {
            return redirect()->to('/#contact')->with([
                'msg'=>'put Your message here please!',
                'color'=>[
                    'bg'=>'rgb(168, 39, 39)',
                    'box'=>'rgb(210, 72, 72)',
                    'icon'=>'rgb(179, 0, 0)'
                    ]
                ]);
        }
    }
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|max:255',
            'text'=>'required',
            'img'=>'required|mimes:jpeg,png,jpg|max:5048',
        ]);
        $newImage= 'assets/blog/'. uniqid().'-'. $request->name . '.' .$request->img->extension();
        $request->img->move(public_path('assets/blog'),$newImage);
        post::create(
            [
                'name'=>$request->name,
                'text'=>$request->text,
                'main_img'=>$newImage,
                ]
            );
        }
    public function show(string $id)
    {   
        return view('blog.show',[
            'blog'=>post::findOrFail($id)
        ]);
    }
    public function edit(string $id)
    {
        if (Auth::check()) {
            return view('dashboard',[
                'blogs' => post::all(),
                'blog_edit' => post::findOrFail($id)
            ]);
        }else {
            return abort(404);
        }
    }
    public function update(Request $request, string $id)
    {
        $post = post::findOrFail($id);
        $request->validate([
            'name'=>'required|max:255',
            'text'=>'required',
            'img'=>'required|mimes:jpeg,png,jpg|max:5048',
        ]);
        unlink(public_path().'/'.$post->main_img);
        $newImage= 'assets/blog/'. uniqid().'-'. $request->name . '.' .$request->img->extension();
        $request->img->move(public_path('assets/blog'),$newImage);
        $post->update(
            [
                'name'=>$request->name,
                'text'=>$request->text,
                'main_img'=>$newImage,
                ]
            );
    }
    public function destroy(string $id)
    {
        $post = post::findOrFail($id);
        unlink(public_path().'/'.$post['main_img']);
        $post->delete();
    }
}
