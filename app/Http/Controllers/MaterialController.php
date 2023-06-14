<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Material;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Material=Material::all();
        return response()->json($Material);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Material=new Material;
        $Material->estado=$request->estado;
        $Material->nombre=$request->nombre;
        $Material->descripcion=$request->descripcion;
        $Material->stock_minimo=$request->stock_minimo;
        $Material->categoria_id=$request->categoria_id;
        $Material->save();
        return response()->json($Material);
       

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Material=Material::where('id','=',$id)->get();
        return response()->json($Material);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Material=Material::findOrFail($request->id);
        $Material->estado=$request->estado;
        $Material->nombre=$request->nombre;
        $Material->descripcion=$request->descripcion;
        $Material->stock_minimo=$request->stock_minimo;
        $Material->categoria_id=$request->categoria_id;
        $Material->save();
        return response()->json($Material);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Material=Material::destroy($id);
        return response()->json($Material);
    }
}
