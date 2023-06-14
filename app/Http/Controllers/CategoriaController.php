<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;


class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Categoria=Categoria::all();
        return response()->json($Categoria);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Categoria=new Categoria;
        $Categoria->estado=$request->estado;
        $Categoria->nombre=$request->nombre;
        $Categoria->save();
        return response()->json($Categoria);
       

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Categoria=Categoria::where('id','=',$id)->get();
        return response()->json($Categoria);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Categoria=Categoria::findOrFail($request->id);
        $Categoria->estado=$request->estado;
        $Categoria->nombre=$request->nombre;
        $Categoria->save();
        return response()->json($Categoria);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Categoria=Categoria::destroy($id);
        return response()->json($Categoria);
    }
}
