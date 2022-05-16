<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index() {

        $series = Serie::paginate();
        return view('elementos.index', compact('series',));
    }
}
