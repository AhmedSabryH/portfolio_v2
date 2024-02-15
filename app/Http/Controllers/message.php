<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Carbon;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Redirect;

use App\Models\message as msg;


class message extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return view('dashboard')->with([
                'messages' => msg::all(),
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
    public function create()
    {
        return redirect()->to('/#contact')->with([
            'msg'=>'put Your message here please!',
            'color'=>[
                'bg'=>'rgb(168, 39, 39)',
                'box'=>'rgb(210, 72, 72)',
                'icon'=>'rgb(179, 0, 0)'
                ]
        ]);
    }
    public function store(Request $request)
    {
        $request->validate(
            [
                'name'=>'required|max:255',
                'email'=>'required|email',
                'message'=>'required|min:3'
                ]
            );
        msg::create(
            [
                'name'=>$request->name,
                'email'=>$request->email,
                'msg'=>$request->message
                ]
            );
            return redirect()->to('/#contact')->with([
                'msg'=>'Your message has been sent',
                'color'=>[
                    'bg'=>'rgb(4, 110, 43)',
                    'box'=>'rgb(26, 155, 74)',
                    'icon'=>'rgb(34,197,94)'
                    ]
            ]);
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return redirect()->to('/#contact')->with([
            'msg'=>'put Your message here please!',
            'color'=>[
                'bg'=>'rgb(168, 39, 39)',
                'box'=>'rgb(210, 72, 72)',
                'icon'=>'rgb(179, 0, 0)'
                ]
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return redirect()->to('/#contact')->with([
            'msg'=>'put Your message here please!',
            'color'=>[
                'bg'=>'rgb(168, 39, 39)',
                'box'=>'rgb(210, 72, 72)',
                'icon'=>'rgb(179, 0, 0)'
                ]
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return redirect()->to('/#contact')->with([
            'msg'=>'put Your message here please!',
            'color'=>[
                'bg'=>'rgb(168, 39, 39)',
                'box'=>'rgb(210, 72, 72)',
                'icon'=>'rgb(179, 0, 0)'
                ]
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
