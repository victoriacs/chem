<?php

namespace App\Http\Controllers;

use App\Models\Formula;
use App\Models\FormulasFavorita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

class FavoritosController extends Controller
{
    /**
     * FavouritesController constructor.
     * Initialise the auth middleware used to
     * secure the Favourites routes.
     *
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Grab the letting id and toggle the favourites button
     * find the letting object and record the activity.
     * @return \Illuminate\Http\RedirectResponse
     * @throws FavouriteNotFoundException
     */
    public function store()
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
     * Grab the lettingId and detach it from the likes and then find the Letting
     * and record the activity.
     *
     * @param $lettingId
     * @return \Illuminate\Http\RedirectResponse
     * @throws FavouriteNotFoundException
     */
    public function destroy($formulaId)
    {
        $formulafav = FormulasFavorita::where('formula_id','=',$formulaId);     
        $formulafav->delete();  
    }
}
