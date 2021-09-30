<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Importaciones de modelo
use App\Models\Categoria\CategoriaModel;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categoria = CategoriaModel::all();
        return $categoria;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:categoria_models',
        ]);

        $categoria = CategoriaModel::create([
            'name' => $request->get('name')
        ]);

        return response($categoria, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categoria = CategoriaModel::findOrFail($id);
        return $categoria;
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
        $categoria = CategoriaModel::findOrFail($id);

        $formato = [
            'name' => 'required|string|max:255'
        ];

        $this->validate($request, $formato);

        if ($request->has('name')) {
            $categoria->name = $request->name;
        }

        if (!$categoria->isDirty()) {
            return response()->json(['data' => 'No hay cambios'], 422);
        }

        $categoria->save();

        return response()->json(['data' => $categoria], 200);
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
