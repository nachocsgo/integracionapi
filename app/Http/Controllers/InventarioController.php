<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\inventario;

class InventarioController extends Controller
{
    public function getInventario(){
        return response()->json(inventario::all(), 200);
    }

    public function getInventarioId($id){

        $inventario = inventario::find($id);
        if(is_null($inventario)){
            return response()->json(['Mensaje' => 'Registro no encontrado 😫'],404);
        }
        return response()->json($inventario,200);
    }

    public function getCategoria(Request $request)
    {
        $categoria = $request->query('categoria');
        if(empty($categoria)){
            return response()->json(['Mensaje' => 'Categoria no encontrado 😫'],400);
        }
        $inventario = inventario::where('categoria', $categoria)
        ->orderBy('categoria')
        ->take(10)
        ->get();
        if(is_null($inventario)){
            return response()->json(['Mensaje' => 'Inventario no encontrado 😫'],404);
        }
        return response()->json($inventario,200);
    }

    public function addInventario(Request $request){
        $inventario = inventario::create($request->all());
        return response($inventario, 200);
    }

    public function updateInventario(Request $request, $id){
        $inventario = inventario::find($id);
        if(is_null($inventario)){
            return response()->json(['Mensaje' => 'Registro no encontrado 😫'],404);
        }
        $inventario->update($request->all());
        return response($inventario, 200);
    }

    public function deleteInventario($id){
        $inventario = inventario::find($id);  
        if(is_null($inventario)){
            return response()->json(['Mensaje' => 'Registro no encontrado 😫'],404);
        }
        $inventario->delete();
        return response()->json(['Mensaje' => 'Registro Eliminado con éxito 😉']);
    }
}
