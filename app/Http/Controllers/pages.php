<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\project as prj;
use App\Models\post;
use App\Models\categorie;
use App\Models\categorie_project;

class pages extends Controller
{
    public function index() {
        return view('welcome',[
            "posts" => post::orderBy('created_at', 'desc')->take(2)->get(),
            "skills" => categorie::orderBy('created_at', 'desc')->take(4)->get(),
            "projects" => prj::orderBy('created_at', 'desc')->take(2)->get()
        ]);
    }
    public function search($id){
        $res = prj::where("text", "like", "%".$id."%")->get();
        return $res;
    }
    public function filter($sea,$word){
        if ($sea=='type') {
            $res = prj::where($sea, $word)->get();
            return view('filter.index',[
                'res'=>$res,
            ]);
        }else{
            $res = categorie::where('id', $word)->get();
            return view('filter.index',[
                'res'=>json_decode($res->implode('projects'))
            ]);
        }
    }
}