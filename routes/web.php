<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GatController;
use App\Models\Computer;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ricardo', function () {
    return view('miprimeravista');
});
Route::get('/gatitos', function () {
    return view('migatito');
});
Route::get('/capibara', function () {
    return view('micapibara');
});
Route::get('/loros', function () {
    return view('miloro');
});

Route::get('/gatocontrolador', [GatController::class, 'index']);
Route::get('/otrogatocontrolador', [GatController::class, 'index1']);
Route::get('/lorocontrolador', [GatController::class, 'index2']);
Route::get('/capibaracontrolador', [GatController::class, 'index3']);

Route::get('/gat', function () {
    return view('gat');
});

Route::get('/capi', function () {
    return view('capi');
});

Route::get('/lor', function () {
    return view('lor');
});

Route::get('/miplantillaprimeragatito', function () {
    return view('primeraformagatito');
});

Route::get('/miplantillaprimeralorito', function () {
    return view('primeraformalorito');
});

Route::get('/miplantillaprimeracapibara', function () {
    return view('primeraformacapibara');
});


Route::get('/insert', function () {
    //insertar valores
    /*
    $computer = new Computer;
    $computer->model='Jose Ricardo Couoh Ruiz';
    $computer->mark='HP';
    $computer->size=15;
    $computer->published_at='2024-10-27 13:11:00';//dato agregado
    $computer->is_active=true; //dato agregado
    $computer->save();
    return $computer;
    */
    
    /*
    $computer = new Computer;
    $computer->model='Legion';
    $computer->mark='Lenovo';
    $computer->size=16;
    $computer->save();
    return $computer;
    */
    /*
    $computer = new Computer;
    $computer->model='Aspire v3';
    $computer->mark='Acer';
    $computer->size=14;
    $computer->save();
    return $computer;
    */

    //seleccionar datos
    /*
    $computer = Computer::find(1);
    return $computer;
    */

    //seleccionar con where
    /*
    $computer = Computer::where('model','Aspire v3')->first();
    return $computer;
    */








    //modificar
    /*
    $computer = Computer::where('model','Pavilion')->first();
    $computer->model ='Pavilio12';
    $computer->save();
    return $computer;
    */






    //multiples registros
    /*
    $computer = Computer::all();
    return $computer;
    */

    
    


























    //mostrar una parte de los registros
    /*
    $computer = Computer::where('id','>=',2)->get();
    return $computer;
    */


   
    //mostrar una parte y ordenar
    /*
    $computer = Computer::where('id','>=',2)->orderBy('id','desc')->get();
    return $computer;
    */
    /*
     //SE ACCEDE AL VALOR DE published_at

     $computer = Computer::find(1);
     return $computer->published_at;
    */





    //SE ESTABLECE UN FORMATO PARA EL DESPLIEGUE DE FECHA

    $computer = Computer::find(1);

    //EJEMPLO 1 - despliega la fecha en el formato que le indiquemos
    //return $computer->published_at->format('d-m-Y');
    //EJEMPLO 2 - despliega cuanto tiempo pasó despues de publicado
    return $computer->published_at->diffForHumans();























































    //mostrar una parte ordenada con algunas columnas
    /*
    $computer = Computer::where('id','>=',2)
                        ->select('id','model')
                        ->orderBy('id','desc')
                        ->get();
    return $computer;
    */




















    //borrar registros
    /*
    $computer = Computer::find(3);
    $computer->delete();
    */
});