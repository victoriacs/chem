<?php

namespace App\Http\Controllers;

use App\Models\Elemento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListaController extends Controller
{
    public function index(Request $request) {
        $busqueda = trim($request->get('busqueda'));

        $elementos = Elemento::where("nombre","LIKE","%{$request->get('busqueda')}%")->paginate();
        return view('elementos.index', [
            "elementos" => $elementos,
            "busqueda" => $busqueda
        ]);

// //        $elementos = DB::select('select * from elementos')->getPaginated();

// //        $elementos = $this->element->getPaginated();
//         return view('elementos.lista', [
//            'elementos' => DB::table('elementos')->paginate(6)
//         ]);
    }
}
