<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CastController extends Controller
{
    public function index()
    {
        $cast = DB::table('casts')->get();
        return view('cast.index', compact('cast'));
    }

    public function create()
    {
        return view('cast.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required',
            'bio' => 'required',
        ]);

        $query = DB::table('casts')->insert([
            'name' => $request->name,
            'age' => $request->age,
            'bio' => $request->bio,
        ]);

        return redirect('/cast');
    }

    public function show($cast_id)
    {
        $cast = DB::table('casts')->where('id', $cast_id)->first();
        return view('cast.show', compact('cast'));
    }

    public function edit($cast_id)
    {
        $cast = DB::table('casts')->where('id', $cast_id)->first();
        return view('cast.edit', compact('cast'));
    }

    public function update($cast_id, Request $request)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required',
            'bio' => 'required',
        ]);

        $query = DB::table('casts')
            ->where('id', $cast_id)
            ->update([
                'name' => $request->name,
                'age' => $request->age,
                'bio' => $request->bio,
            ]);

        return redirect('/cast');
    }

    public function destroy($cast_id)
    {
        $query = DB::table('casts')->where('id', $cast_id)->delete();
        return redirect('/cast');
    }
}
