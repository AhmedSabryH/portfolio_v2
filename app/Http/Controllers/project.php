<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\project as prj;

use App\Models\categorie;

use App\Models\categorie_project;

class project extends Controller
{
    public function index()
    {if (Auth::check()) {
        return view('dashboard')->with([
            'projects' => prj::all(),
            'cats'=> categorie::all()
        ]);
    }else {
        return view('project.index',[
            'projects' => prj::all()
        ]);   
    }
    }
    public function create()
    {
        return view('project.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|max:255',
            'text'=>'required',
            'link'=>'required',
            'tools'=>'required',
            'type'=>'required',
            'img'=>'required|mimes:jpeg,png,jpg|max:5048',
        ]);
        $newImage= 'assets/projects/'. uniqid().'-'. $request->name . '.' .$request->img->extension();
        $request->img->move(public_path('assets/projects'),$newImage);
        prj::create(
            [
                'name'=>$request->name,
                'text'=>$request->text,
                'link'=>$request->link,
                'type'=>$request->type,
                'main_img'=>$newImage,
                ]
            );
            $tools = explode(',' , $request->tools );
            foreach ($tools as $tool){
                categorie_project::create([
                    'project_id'=>Prj::latest()->first()->id,
                    'categorie_id'=>categorie::where('cat',$tool)->first()->id
                ]);
            }
    }
    public function show(string $id)
    {
        return view('project.show',[
            'project'=> prj::findOrFail($id)
        ]);
    }
    public function edit(string $id)
    {
        if (Auth::check()) {
            $cat_prj=project_tool::Where('project_id',$id)->get();
            dump($cat_prj);
            return view('dashboard',[
                'projects' => prj::all(),
                'cats'=> categorie::all(),
                'cat_prj'=>$cat_prj,
                'project_edit' => prj::findOrFail($id)
            ]);
        }else {
            return abort(404);
        }
    }
    public function update(Request $request, string $id)
    {
        $post = prj::findOrFail($id);
        $request->validate([
            'name'=>'required|max:255',
            'text'=>'required',
            'link'=>'required',
            'tools'=>'required',
            'type'=>'required',
            'img'=>'required|mimes:jpeg,png,jpg|max:5048',
        ]);
        unlink(public_path().'/'.$post->main_img);
        $newImage= 'assets/projects/'. uniqid().'-'. $request->name . '.' .$request->img->extension();
        $request->img->move(public_path('assets/projects'),$newImage);
        $post->update(
            [
                'name'=>$request->name,
                'text'=>$request->text,
                'type'=>$request->type,
                'main_img'=>$newImage
                ]
            );
    }
    public function destroy(string $id)
    {
        $post = prj::findOrFail($id);
        unlink(public_path().'/'.$post['main_img']);
        $post->delete();
        return redirect()->to('/project');
    }
}
