<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GatController extends Controller
{
    public function index(){
        //return "Este es mi primer controlador!!";
        $nombre='Ricardo Couoh';
        return view('Mascotas.gato',[
            'elnombre'=>$nombre
        ]);
    }

    public function index1(){
        $nombre='Jose Ricardo';
        $apellido='Couoh Ruiz';
        return view('Mascotas.otrogato')
            ->with('elnombre' , $nombre)
            ->with('elapellido' , $apellido);
    }

    public function index2(){
        $nombre='Ricardo Couoh';
        return view('Mascotas.loro',[
            'elnombre'=>$nombre
        ]);
    }

    public function index3(){
        $nombre='Jose Ricardo';
        $apellido='Couoh Ruiz';
        return view('Mascotas.capibara')
            ->with('elnombre' , $nombre)
            ->with('elapellido' , $apellido);
    }
}
