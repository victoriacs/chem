<?php

namespace App\Http\Controllers;

use App\Models\Formula;
use Illuminate\Http\Request;
use App\Models\FormulasFavorita;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Console\Input\Input;

class FavoritosController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Guarda en la tabla las fórmulas favoritas del usuario
     * @param Request $request
     * 
     * @return array
     */
    public function store(Request $request)
    {
        $user = auth()->user();
        $formulaId = Formula::get('formula_id');
        $formula = Formula::find($formulaId);

        $formulaFav = new FormulasFavorita([
            'user_id' => $user->id,
            'formula_id' => $formulaId
        ]);

        $formulaFav->save();
    }

    /**
     * Quita de la tabla las fórmulas favoritas del usuario
     * @param mixed $formulaId
     * 
     * @return array
     */
    public function destroy($formulaId)
    {
        $formulafav = FormulasFavorita::where('formula_id','=',$formulaId);     
        $formulafav->delete();  
    }
}
