<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use App\Models\Categori;


class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $todos = Todo::with('categori')->get(); 
        $categori=Categori::all();
        return view('front.index', compact('todos','categori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categoris=Categori::all();
        return view('todo.create',compact('categoris'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $file = $request->file('fileimg'); 
        $filename = time() .'-'. $file->getClientOriginalName(); 
        $path = $file->storeAs('/img', $filename);

        Todo::create([
           'images'=>$filename,
           'name'=>$request->title,
           'description'=>$request->description,
           'status'=>'no',
           'categori_id'=>$request->categori_id,
        ]);
        return redirect()->route('todo.index');
        dd($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(Todo $todo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {    
         $todo=Todo::find($id);
         $cat=$todo->categori->title;
         $categoris=Categori::all();
        return view('todo.edit',compact('todo','cat','categoris'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $file = $request->file('fileimg'); 
        $filename = time() .'-'. $file->getClientOriginalName(); 
        $path = $file->storeAs('/img', $filename);
        $todo=Todo::find($id);
        $todo->update([
           'images'=>$filename,
           'name'=>$request->title,
           'description'=>$request->description,
           'status'=>'no',
           'categori_id'=>$request->categori_id,
        ]);
        return redirect()->route('todo.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $todo=Todo::find($id);
        $todo->delete();
        return redirect()->route('todo.index');
    }
}
