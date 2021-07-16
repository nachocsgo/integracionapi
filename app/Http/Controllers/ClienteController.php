<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cliente;
use App\Models\filtroNombres;

class ClienteController extends Controller
{
    public function getClienteId($id){
        $cliente = cliente::find($id);
        if(is_null($cliente)){
            return response()->json(['Mensaje' => 'Registro no encontrado '],404);
        }
        return response()->json($cliente,200);
    }


    public function getClienteNombre(Request $request)
    {
        $nombre = $request->query('nombre');
        if(empty($nombre)){
            return response()->json(['Mensaje' => 'Nombre cliente no encontrado '],400);
        }
        $cliente = cliente::where('nombre', $nombre)
        ->orderBy('nombre')
        ->take(10)
        ->get();
        if(is_null($cliente)){
            return response()->json(['Mensaje' => 'cliente no encontrado '],404);
        }
        return response()->json($cliente,200);
    }


    public function addCliente(Request $request){
        $cliente = cliente::create($request->all());
        return response($cliente, 200);
    }


    public function updateCliente(Request $request, $id){
        $cliente = cliente::find($id);
        if(is_null($cliente)){
            return response()->json(['Mensaje' => 'Registro no encontrado '],404);
        }
        $cliente->update($request->all());
        return response($cliente, 200);
    }


    public function deleteCliente($id){
        $cliente = cliente::find($id);  
        if(is_null($cliente)){
            return response()->json(['Mensaje' => 'Registro no encontrado '],404);
        }
        $cliente->delete();
        return response()->json(['Mensaje' => 'Cliente Eliminado con éxito ']);
    }

    public function getCliente(Request $request){

        $nombre = $request->query('nombre');
        $genero = $request->query('genero');
        $run = $request->query('run');

        if(empty($nombre) && empty($genero) && empty($run)){
            return response()->json(cliente::all(), 200);
        }

        $query = cliente::query();

        if (!empty($nombre)) {
        $query = $query->where('nombre', $nombre);
        }
        if (!empty($genero)) {
        $query = $query->where('genero', $genero);
        }
        if (!empty($run)) {
        $query = $query->where('run', $run);
        }
        
        $results = $query->get();

        if(count($results)==0){
            return response()->json(['Mensaje' => 'Cliente no encontrado '],404);
        }
        return response()->json($results,200);
    }

}
