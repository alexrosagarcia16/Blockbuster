<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pelicula;

class PeliculasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $peliculas = Pelicula::get();
        return view('listado',compact('peliculas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('crearpelicula');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $pelicula = new Pelicula();
        $pelicula->title = $request->get('title');
        $pelicula->year = $request->get('year');
        $pelicula->director = $request->get('director');
        $pelicula->poster = $request->get('poster');
        $pelicula->rented = $request->get('rented');
        $pelicula->synopsis = $request->get('synopsis');
        $pelicula->save();
        return redirect()->route('peliculas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $pelicula = Pelicula::findOrFail($id);
        return view('detalles', compact('pelicula'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }




}
