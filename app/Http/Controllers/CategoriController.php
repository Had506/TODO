<?php

namespace App\Http\Controllers;

use App\Models\Categori;
use Illuminate\Http\Request;

class CategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categori=Categori::latest()->get();
        return view('categori.index',compact('categori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Categori::create([
           'title'=>$request->title,
        ]);
        return redirect()->route('categori.index');
      
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
       $categori=Categori::with('todos')->findOrFail($request->categori);
       $todos=$categori->todos;
       $categoris=Categori::latest()->get();
       return view('categori.show',compact('todos','categoris'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $categori=Categori::find($id);
        return view('categori.edit',compact('categori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $categori=Categori::find($id);
        $categori->update([
          'title'=>$request->title,
        ]);
        return redirect()->route('categori.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $categori=Categori::find($id);
        $categori->delete();
        return redirect()->route('categori.index');
    }
}
