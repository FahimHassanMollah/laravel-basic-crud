<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        echo"<pre>";
        // print_r($request->all());
         echo"<pre/>";
         $res= new Todo;
         $res->name = $request->input('name');
         $res->save();
         $request->session()->flash('msg','data inserted');
         return redirect('/');
        // dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $allTodo = Todo::all();
        return view('home',['allTodo'=>$allTodo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function edit(Todo $todo,$id)
    {
        //
        $todo = Todo::find($id);
        return view('update',['todo'=>$todo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Todo $todo,$id)
    {
        //
        // dd($todo);
          $res= Todo::find($id);
         $res->name = $request->input('name');
         $res->save();
         $request->session()->flash('msg','data inserted');
         return redirect('/');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Todo $todo,$id)
    {
        //
        Todo::destroy([$id]);
        return redirect('/');
        // dd($todo);
    }
}
