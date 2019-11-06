<?php

use Illuminate\Http\Request;

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

/*Route::middleware('auth:empresa')->get('/empresa', function (Request $request) {
    return $request->empresa();
});*/

Route::middleware('auth:api')->get('/empleado', function (Request $request) {
    return $request->empleado();
});

//Route::resource('empleados', 'Empleado\EmpleadoController', ['except' => ['create','edit']]);
//Route::resource('empresas', 'Empresa\EmpresaController', ['except' => ['create','edit']]);

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/
