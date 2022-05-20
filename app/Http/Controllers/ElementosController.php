<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use App\Models\Elemento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ElementosController extends Controller
{
    /**
     * Muestra los elementos y los filtra por el buscador o por serie
     * @param Request $request
     * 
     * @return array
     */
    public function index(Request $request)
    {
        $seriesMetales = Serie::where('grupo', 'metales')->get();
        $seriesOtros = Serie::where('grupo', 'otros')->get();
        $seriesNoMetales = Serie::where('grupo', 'no metales')->get();
        $busqueda = trim($request->get('busqueda'));
        $series = $request->get('series');

        if ($request->get('busqueda')) {
            $elementos = Elemento::where("nombre", "LIKE", "%{$request->get('busqueda')}%")->paginate(14);
        } else if ($request->get('series')) {
            $elementos = Elemento::whereIn('serie_id', $series)->paginate(14);
        } else if ($request->get('busqueda') && $request->get('series')) {
            $elementos = Elemento::where("nombre", "LIKE", "%{$request->get('busqueda')}%")->whereIn('serie_id', $series)->paginate(14);
        } else if (!$request->get('busqueda') && !$request->get('series')) {
            $elementos = Elemento::paginate(14);
        }

        return view('elementos.index',  compact('seriesMetales', 'seriesOtros', 'seriesNoMetales', 'elementos', 'busqueda', 'series'));
    }
}
