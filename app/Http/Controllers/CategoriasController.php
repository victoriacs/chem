<?php

namespace App\Http\Controllers;

use App\Models\Formula;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    public function show(Categoria $categoria, Request $request)
    {
        $busqueda = trim($request->get('busqueda'));
        $formulas = Formula::where("nombre_comun", "LIKE", "%{$request->get('busqueda')}%")->where('tipo','=',$categoria->id)->paginate(3);

        return view('formulas.index', [
            'categoria' => $categoria,
            "busqueda"=> $busqueda,
            'formulas' => $formulas
        ]);
    }
}
