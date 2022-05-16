<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Formula;
use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function index($username)
    {
            $user = User::where("user",$username)->firstOrFail();
            $formulas = Formula::where('user_id',$user->id)->get();
            return view('user.index', 
            ["user" => $user,
            "formulas" => $formulas]);

    }
}
