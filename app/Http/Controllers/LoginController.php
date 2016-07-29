<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\User;

class LoginController extends Controller
{
    public function login(Request $request){

        if($request->isMethod('post')){
            $this->validate($request, [
                'username' => 'required',
                'password' => 'required',
                'remember' => 'in:remember'
            ]);

            $remember = !empty($request->input('remember')) ? true:false;

            $credentials = $request->only('username', 'password');

            if(Auth::attempt($credentials, $remember)){

                if (Auth::user()->role == 'teacher'){

                    return redirect('teacher')->with(['message' => 'Vous êtes maintenant connecté !']);
                }else{
                    return redirect('student')->with(['message' => 'Vous êtes maintenant connecté !']);
                }
            }else{
                return back()->withInput($request->only('username', 'password'))->with(['message' => 'Erreur lors de l\'authentification, veuillez vérifier votre nom ou votre mot de passe !']);
            }
        }else{
            return view('auth.login');
        }

    }

    public function logout(){
        Auth::logout();

        return redirect('/')->with(['success','Vous êtes déconnecté !']);
    }
}
