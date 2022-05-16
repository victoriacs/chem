<?php

namespace App\Http\Controllers;

use App\Models\Elemento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ElementosController extends Controller
{
    public function index(Request $request) {
            $busqueda = trim($request->get('busqueda'));

            $elementos = Elemento::where("nombre", "LIKE", "%{$request->get('busqueda')}%")->paginate(8);
            return view('elementos.index', [
                "elementos"=>$elementos,
                "busqueda"=>$busqueda
                ]);
    }

}
