<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use Illuminate\Support\Facades\Auth;
class Auth_adminController extends Controller
{
    public function index()
    {
        return view('auth.loginAdmin');
    }  
      
    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => ['bail','required','email'],
            'password' => ['bail','required']
        ]);
        
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return view('admin')
                        ->withSuccess('connexion reussi!!');
        }
  
        return redirect("admin")->withSuccess('Veillez revoir vos informations');
    }
  
    
    public function dashboard()
    {
        if(Auth::check()){
            return view('admin');
        }
  
        return redirect("admin")->withSuccess('Vous devez vous connecter avant');
    }
    
    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('admin');
    }
}