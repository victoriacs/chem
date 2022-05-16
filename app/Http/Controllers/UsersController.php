<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Models\User;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Auth;
use Hash;


class UsersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('user.cuenta');
    }

    public function upload(Request $request)
    {
        return $request;
        $this->validate($request, [
            'name' => 'required|string|min:2|max:20',
            'bio' => 'string|max:120',
            'location' => 'string|max:45'
        ]);
        
        $user = Auth::user();

        if ($request->hasFile('image')) {
            $filename = $request->image->getClientOriginalName();
            $request->image->storeAs('images', $filename, 'public');
            Auth()->user()->update(['image' => $filename]);
        }

        Auth()->user()->update([
            'name' => $request->name,
            'bio' => $request->bio,
            'location' => $request->location
        ]);
    
        return redirect()->route('user.upload');
    }

    public function destroy()
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        $user->delete();
        return redirect()->route('home');
    }

    public function updateUser(Request $request)
    {
        //  return $request;
        if ($request->has('newPwd') || $request->has('confirmNewPwd') || $request->has('currentPwd')) {
            $this->validate($request, [
                'currentPwd' => 'required',
                'newPwd' => 'required|string|min:8',
                'confirmNewPwd' => 'required|same:newPwd'
            ]);

            if (!(Hash::check($request->get('currentPwd'), Auth::user()->password))) {
                // The passwords matches
                return redirect()->back()->with("currentPwd", "La contraseña no coincide.");
            }

            if (strcmp($request->get('currentPwd'), $request->get('newPwd')) == 0) {
                //Current password and new password are same
                return redirect()->back()->with("currentPwd", "La nueva contraseña no puede ser igual.");
            }

            //Change Password
            $user = Auth::user();
            $user->password = bcrypt($request->get('newPwd'));
            $user->save();
            return redirect()->back()->with("success", "Password changed successfully !");

        } else if ($request->has('user')) {
            $this->validate($request, [
                'user' => 'required|string|min:3'
            ]);

            $users = User::where('user', '=', $request->get('user'))->first();
            if ($users === null) { // no existe
                $user = Auth::user();
                $user->user = $request->get('user');
                $user->save();
                return redirect()->back()->with("succes", "USER CAMBIADO.");
            } else { // si existe
                if($request->get('user') == Auth::user()->user) {
                    return redirect()->back();
                } else {
                    return redirect()->back()->with("user", "Este nombre de usuario ya existe.");
                }
            }
        } else if ($request->has('email')) {
            $this->validate($request,[
                'email' => 'required|email'
            ]);

            $emails = User::where('email','=',$request->get('email'))->first();
            if ($emails === null) {
                $user = Auth::user();
                $user->email = $request->get('email');
                $user->save();
                return redirect()->back()->with('succes','CORREO CAMBIADO.');
            } else {
                return redirect()->back()
                ->with('email','Este correo electrónico ya está en uso.')
                ->with('emailInput',$request->get('email'));
            }
        }
    }
}
