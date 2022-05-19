<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    /**
     * Muestra los elementos
     * @return array
     */
    public function index() {
        $seriesMetales = Serie::where('grupo','metales')->get();
        $seriesOtros = Serie::where('grupo','otros')->get();
        $seriesNoMetales = Serie::where('grupo','no metales')->get();
        return view('elementos.index', compact('seriesMetales','seriesOtros','seriesNoMetales'));
    }
}
