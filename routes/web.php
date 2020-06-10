<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//EmpleadoController
Route::get('/empleado','EmpleadoController@create');
Route::get('/empleado/display','EmpleadoController@index');
Route::post('/create/empleado','EmpleadoController@store');
Route::get('/empleado/{id}/edit','EmpleadoController@show');
Route::post('/empleado/{id}','EmpleadoController@update');
Route::get('/empleado/{id}/confirmDelete','EmpleadoController@confirmDelete');
Route::post('/empleado/{id}/confirm','EmpleadoController@destroy');

//ClienteController
Route::get('/cliente/{id}/edit','ClienteController@show');
Route::post('/cliente/{id}','ClienteController@update');
Route::get('/cliente','ClienteController@create');
Route::get('/cliente/display','ClienteController@index');
Route::post('/create/client', 'ClienteController@store');
Route::get('/cliente/{id}/confirmDelete','ClienteController@confirmDelete');
Route::post('/cliente/{id}/confirm','ClienteController@destroy');

//ProductoController
Route::get('/producto','ProductoController@create');
Route::get('/producto/display','ProductoController@index');
Route::post('/create/producto','ProductoController@store');
Route::get('/producto/{id}/confirmDelete','ProductoController@confirmDelete');
Route::post('/producto/{id}/confirm','ProductoController@destroy');
Route::get('/producto/{id}/edit','ProductoController@show');


//VentaController
Route::get('/venta','VentaController@index');
Route::get('/venta/desplegar','VentaController@display');
Route::get('/venta/display/find','VentaController@encontrar');
Route::get('/venta/{id}/confirm','VentaController@show');
Route::post('/venta/save','VentaController@store');
Route::get('/venta/{id}','VentaController@details');
Route::get('/venta/empleado/{id}','VentaController@ventas_empleado');
Route::get('/venta/cliente/{id}','VentaController@ventas_cliente');
Route::get('/venta/producto/{id}','VentaController@ventas_producto');
Route::get('/venta/{id}/devolucion','VentaController@edit');


//DevolucionController
Route::get('/devolucion','DevolucionController@index');
Route::get('/devolucion/crear','DevolucionController@create');
Route::post('/devolucion/guardar','DevolucionController@store');
Route::get('/devolucion/display','DevolucionController@find');
Route::get('/devolucion/empleado/{id}','DevolucionController@devolucion_empleado');
Route::get('/devolucion/cliente/{id}','DevolucionController@devolucion_cliente');
Route::get('/devolucion/{id}','DevolucionController@show');



Route::get('/venta/devolucion',function(){
    return view('venta.devolucion');
});
Route::get('/venta/devolucion/confirm',function(){
    return view('venta.devolucion-confirm');
});
Route::get('/movimientos',function(){
    return view('almacen.movimientos');
});
Route::get('/flujoEfectivo',function(){
    return view('venta.efectivo');
});
Route::get('/corteCaja',function(){
    return view('venta.corte');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
