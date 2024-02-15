<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\categorie;

class cat extends Controller
{
    public function index()
    {
        if (Auth::check()) {
                    return view('dashboard')->with([
                        'tools' => categorie::all(),
                    ]);
                }else {
                    return view('skill.index')->with([
                    'tools' => categorie::all(),
                    ]);
                }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Auth::check()) {
                    return view('message.view');
                }else {
                    return abort(404);
                }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'cat'=>'required|max:255',
            'icon'=>'required|mimes:jpeg,png,jpg|max:5048',
        ]);
        $newIcon= 'assets/skill/'.$request->cat.'.'.$request->icon->extension();
        $request->icon->move(public_path('assets/skill'),$newIcon);
        categorie::create(
            [
                'icon'=>$newIcon,
                'cat'=>$request->cat
                ]
            );
            return redirect()->to('/categorie');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        if (Auth::check()) {
                    return view('message.view');
                }else {
                    return abort(404);
                }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if (Auth::check()) {
                    return view('message.view');
                }else {
                    return abort(404);
                }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if (Auth::check()) {
                    return view('message.view');
                }else {
                    return abort(404);
                }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (Auth::check()) {
                    return view('message.view');
                }else {
                    return abort(404);
                }
    }
}
