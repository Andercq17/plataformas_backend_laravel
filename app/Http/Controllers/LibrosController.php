<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use App\Models\Libro;

class LibrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("libros",["libros"=>Libro::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo '<form method="POST" action="/libro">
                <input type="text" name="nombre" placeholder="Nombre"><br>
                <input type="text" name="autor" placeholder="Autor"><br>
                <input type="text" name="descripcion" placeholder="Descripcion"><br>
                <input type="text" name="precio" placeholder="Precio"><br>
                <input type="text" name="descuento" placeholder="Descuento"><br>
                <input type="hidden" name="_token" value="' . csrf_token() . '">
                <input type="submit" value="Crear Registro">
            </form>';
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
        $libro = Libro::create([
            'nombre'=>$request->nombre,
            'autor'=>$request->autor,
            'descripcion'=>$request->descripcion,
            'precio'=>$request->precio,
            'descuento'=>$request->descuento
        ]);
        dd($libro);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        return Libro::find($id);
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
