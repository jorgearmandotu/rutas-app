<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Models\Route;
class RouterController extends Controller
{

    public function create(Request $request){
        if(!$request ->has('cliente'))
            return view('router');
        return 'routeController -> create';
    }
    public function enrutar(Request $request ){
        if(!$request -> has('cliente'))
            return view('router');

        //consulta datos de clientes y agrga a la vista router 
        $client_id = $request->cliente;
        $client = Client::where('id', 1);
        
        return view('router', compact('client'));
        /*$route = Route::create([
            'cliente' => $request->cliente,
            'estado' => $request->estado,
        ]);
        return $route;*/
    }
}
