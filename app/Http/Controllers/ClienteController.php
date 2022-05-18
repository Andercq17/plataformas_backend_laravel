<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $texto=trim($request->get('texto'));
        $clientes=DB::table('cliente')
        ->select('id','apellidos','nombres','documento','direccion','telefono','email')//obtener todos los clientes
        ->where('apellidos', 'LIKE','%'.$texto.'%')
        ->orWhere('documento', 'LIKE','%'.$texto.'%')
        ->orderBy('apellidos','asc')
        ->paginate(10);
        return view('cliente.index',compact('clientes', 'texto'));//compact, recibiendo clientes de la vble clientes
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cliente=new Cliente;
        $cliente->apellidos=$request->input('apellidos');
        $cliente->nombres=$request->input('nombres');
        $cliente->documento=$request->input('documento');
        $cliente->direccion=$request->input('direccion');
        $cliente->telefono=$request->input('telefono');
        $cliente->email=$request->input('email');
        $cliente->save();
        return redirect()->route('cliente.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente=Cliente::findOrFail($id);
        return view('cliente.edit', compact('cliente'));
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
        $cliente=Cliente::findOrFail($id);
        $cliente->apellidos=$request->input('apellidos');
        $cliente->nombres=$request->input('nombres');
        $cliente->documento=$request->input('documento');
        $cliente->direccion=$request->input('direccion');
        $cliente->telefono=$request->input('telefono');
        $cliente->email=$request->input('email');
        $cliente->save();
        return redirect()->route('cliente.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente=Cliente::findOrFail($id);
        $cliente->delete();
        return redirect()->route('cliente.index');
    }
}
