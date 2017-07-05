<?php


//Route::get('empleados', 'EmpleadosController@list');

//Route::get('empleado/{id}', 'EmpleadosController@show');

//Route::get('nuevoempleado', 'EmpleadosController@create');

//Route::post('nuevoempleado', 'EmpleadosController@store') ;

Route::get('empresa/empleados', 'EmpresasController@listEmpleados');

Route::get('empleado/{id}', 'EmpleadosController@show');


Route::get('empresa/nuevoempleado', 'EmpresasController@createEmpleado');

Route::post('empresa/nuevoempleado', 'EmpresasController@storeEmpleado') ;

Route::get('empresa/promedioedad', 'EmpresasController@getPromedioEdad') ;

