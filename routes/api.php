<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//CLIENTE
Route::get('cliente','App\Http\Controllers\ClienteController@getCliente');
Route::get('cliente/{id}','App\Http\Controllers\ClienteController@getClienteId');
Route::get('nombreCliente','App\Http\Controllers\ClienteController@getClienteNombre');
Route::post('addCliente','App\Http\Controllers\ClienteController@addCliente');
Route::put('updateCliente/{id}','App\Http\Controllers\ClienteController@updateCliente');
Route::delete('deleteCliente/{id}','App\Http\Controllers\ClienteController@deleteCliente');

//SUCURSAL
Route::get('sucursal','App\Http\Controllers\SucursalController@getSucursal');
Route::get('sucursal/{id}','App\Http\Controllers\SucursalController@getSucursalId');
Route::get('filtroSucursal','App\Http\Controllers\SucursalController@filtroSucursal');
Route::post('addSucursal','App\Http\Controllers\SucursalController@addSucursal');
Route::put('updateSucursal/{id}','App\Http\Controllers\SucursalController@updateSucursal');
Route::delete('deleteSucursal/{id}','App\Http\Controllers\SucursalController@deleteSucursal');

//PRODUCTO
Route::get('filtroPrecio','App\Http\Controllers\ProductoController@filtroPrecio');
Route::get('producto','App\Http\Controllers\ProductoController@getProducto');
Route::get('producto/{id}','App\Http\Controllers\ProductoController@getProductoId');
Route::post('addProducto','App\Http\Controllers\ProductoController@addProducto');
Route::put('updateProducto/{id}','App\Http\Controllers\ProductoController@updateProducto');
Route::delete('deleteProducto/{id}','App\Http\Controllers\ProductoController@deleteProducto');

//INVENTARIO
Route::get('inventario','App\Http\Controllers\InventarioController@getInventario');
Route::get('inventario/{id}','App\Http\Controllers\InventarioController@getInventarioId');
Route::get('getCategoria','App\Http\Controllers\InventarioController@getCategoria');
Route::post('addInventario','App\Http\Controllers\InventarioController@addInventario');
Route::put('updateInventario/{id}','App\Http\Controllers\InventarioController@updateInventario');
Route::delete('deleteInventario/{id}','App\Http\Controllers\InventarioController@deleteInventario');

//VENTA
Route::get('venta','App\Http\Controllers\VentaController@getVenta');
Route::get('venta/{id}','App\Http\Controllers\VentaController@getVentaId');
Route::post('addVenta','App\Http\Controllers\VentaController@addVenta');
Route::put('updateVenta/{id}','App\Http\Controllers\VentaController@updateVenta');
Route::delete('deleteVenta/{id}','App\Http\Controllers\VentaController@deleteVenta');



