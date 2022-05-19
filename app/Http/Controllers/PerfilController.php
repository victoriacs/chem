<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Formula;
use App\Models\FormulasFavorita;
use Illuminate\Http\Request;

class PerfilController extends Controller
{
    /**
     * Muestra la información del usuario, sus fórmulas y las favoritas
     * @param mixed $username
     * 
     * @return array
     */
    public function index($username)
    {
            $user = User::where("user",$username)->firstOrFail();
            $formulas = Formula::where('user_id',$user->id)->get();
            $formulasFav = FormulasFavorita::where('user_id',$user->id)->get();

            return view('user.index', 
            ["user" => $user,
            "formulas" => $formulas,
            "formulasFav" => $formulasFav
            ]);

    }
}
