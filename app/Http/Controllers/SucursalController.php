<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sucursal;


class SucursalController extends Controller
{
    public function getSucursal(){
        return response()->json(sucursal::all(), 200);
    }

    public function getSucursalId($id){

        $sucursal = sucursal::find($id);
        if(is_null($sucursal)){
            return response()->json(['Mensaje' => 'Sucursal no encontrada '],404);
        }
        return response()->json($sucursal,200);
    }


    public function addSucursal(Request $request){
        $sucursal = sucursal::create($request->all());
        return response($sucursal, 200);
    }

    public function updateSucursal(Request $request, $id){
        $sucursal = sucursal::find($id);
        if(is_null($sucursal)){
            return response()->json(['Mensaje' => 'Sucursal no encontrada'],404);
        }
        $sucursal->update($request->all());
        return response($sucursal, 200);
    }

    public function deleteSucursal($id){
        $sucursal = sucursal::find($id);  
        if(is_null($sucursal)){
            return response()->json(['Mensaje' => 'Sucursal no encontrada'],404);
        }
        $sucursal->delete();
        return response()->json(['Mensaje' => 'Sucursal Eliminada con éxito'],200);
    }

    public function filtroSucursal(Request $request){

        $nombre_sucursal = $request->query('nombre_sucursal');
        $sigla_sucursal = $request->query('sigla_sucursal');

        if(empty($nombre_sucursal) && empty($sigla_sucursal)){
            return response()->json(sucursal::all(), 200);
        }
        $query = sucursal::query();

        if (!empty($nombre_sucursal)) {
        $query = $query->where('nombre_sucursal', $nombre_sucursal);
        }
        if (!empty($sigla_sucursal)) {
        $query = $query->where('sigla_sucursal', $sigla_sucursal);
        }

        $results = $query->get();

        if(count($results)==0){
            return response()->json(['Mensaje' => 'Registro no encontrado 😫'],404);
        }
        return response()->json($results,200);
    }
}
