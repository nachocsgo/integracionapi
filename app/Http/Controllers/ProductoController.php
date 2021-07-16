<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\producto;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{
    public function getProducto(){
        return response()->json(producto::all(), 200);
    }

    public function getProductoId($id){

        $producto = producto::find($id);
        if(is_null($producto)){
            return response()->json(['Mensaje' => 'Producto no encontrado '],404);
        }
        return response()->json($producto,200);
    }

    public function addProducto(Request $request){
        $producto = producto::create($request->all());
        return response($producto, 200);
    }

    public function updateProducto(Request $request, $id){
        $producto = producto::find($id);
        if(is_null($producto)){
            return response()->json(['Mensaje' => 'Producto no encontrado '],404);
        }
        $producto->update($request->all());
        return response($producto, 200);
    }

    public function deleteProducto($id){
        $producto = producto::find($id);  
        if(is_null($producto)){
            return response()->json(['Mensaje' => 'Registro no encontrado '],404);
        }
        $producto->delete();
        return response()->json(['Mensaje' => 'Producto Eliminado con éxito ']);
    }

    
    public function filtroPrecio(Request $request)
    {       
        $limit = $request->query('limit',10);
        $producto = producto::orderByDesc('precio')
        ->take($limit)
        ->get();
        if(is_null($producto)){
            return response()->json(['Mensaje' => 'Precio no encontrado '],404);
        }
        return response()->json($producto, 200);
    }
}
