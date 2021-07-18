<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\venta;
use Illuminate\Support\Facades\DB;

class VentaController extends Controller
{
    public function getVenta(){
        return response()->json(venta::all(), 200);
    }

    public function getVentaId($id){

        $venta = venta::find($id);
        if(is_null($venta)){
            return response()->json(['Mensaje' => 'Venta no encontrada '],404);
        }
        return response()->json($venta,200);
    }

    public function addVenta(Request $request){
        $venta = venta::create($request->all());
        return response($venta, 200);
    }

    public function updateVenta(Request $request, $id){
        $venta = venta::find($id);
        if(is_null($venta)){
            return response()->json(['Mensaje' => 'Venta no encontrada '],404);
        }
        $venta->update($request->all());
        return response($venta, 200);
    }

    public function deleteVenta($id){
        $venta = venta::find($id);  
        if(is_null($venta)){
            return response()->json(['Mensaje' => 'Venta no encontrada '],404);
        }
        $venta->delete();
        return response()->json(['Mensaje' => 'Venta Eliminada con éxito ']);
    }

}
