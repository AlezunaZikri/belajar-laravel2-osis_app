<?php

namespace App\Http\Controllers;

use App\Models\Osis;
use Illuminate\Http\Request;

class OsisController extends Controller
{
    // function buat read data
    public function read()
    {
        $osis = Osis::all();
        return view('table',compact(['osis']));
    }

    // buat nampilin input/form
    public function input()
    {
        return view('input');
    }

    // proses create
    public function store(Request $request)
    {
        
        $osis = Osis::create($request->except(['_token']));
        return redirect('/');
    }

    // nampilin data edit
    public function edit($id)
    {
        $osis = Osis::find($id);
        return view('update.edit',compact(['osis']));
    }

    // proses edit
    public function update($id, Request $request)
    {
        $osis = Osis::find($id);
        $osis->update($request->except(['_token']));
        return redirect('/');
    }

    // proses delete
    public function destroy($id)
    {
        $osis = Osis::find($id);
        $osis->delete();
        return redirect('/');
    }

}
