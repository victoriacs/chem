<?php
namespace App\Http\Composers;
use App\Models\Favourites;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class FavouritesComposer
{
        public function compose(View $view)
        {
        $favourites = DB::table('formulas_favoritas')->whereUserId(Auth::user()->id)->pluck('formula_id');
        $favourites = $favourites->toArray();
        $view->with('favourites', $favourites);
        }
    }