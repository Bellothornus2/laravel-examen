<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostModel;

class PostController extends Controller
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
    public function create(Request $request)
    {
        // store
        //$name = $request->input('name');
        $posts = new PostModel;
        $posts->name       = $request->input('name');
        $posts->email      = $request->input('email');
        $posts->caducable = $request->input('caducable');
        $posts->comentable = $request->input('comentable');
        $posts->acceso = $request->input("acceso");
        $posts->extracto = $request->input("extracto");
        $posts->titulo = $request->input("titulo");
        $posts->contenido = $request->input("contenido");
        $posts->save();
        // redirect
        Session::flash('message', 'Successfully created posts!');
        return Redirect::to('/');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Post::create( $request->validated() );

        return redirect()->route('posts.index')->with('status', 'El proyecto fue creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
