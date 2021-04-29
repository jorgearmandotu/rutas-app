<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Route;
class RouterController extends Controller
{

    public function create(Request $request){
        if($request == null)
            return view('router');
        if($request->estado == 'en_ruta')
            return 'enruta';
        if($request->estado == 'con_cliente')
            return 'concliente';
    }
    public function enrutar(Request $request  = null){


        if($request == null)
            return view('router');
        if($request != null)
            $route = Route::create([
                'cliente' => $request->cliente,
                'estado' => $request->estado,
            ]);
            return $route;
    }
}
