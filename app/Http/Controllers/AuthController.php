<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function render(){
        return view("users.login");
    }

    public function auth(Request $req){
        try{
        $Credentials = $req->validate([
            "email" => "string|max:255|required",
            "password" => "string|max:255|required"
        ]);

        if(Auth::attempt(["email"=>$Credentials["email"],"password"=>$Credentials['password']])){
            $req->session()->regenerate();

            return redirect()->route("admin.galeri");
        }   
        
            return redirect()->route("home")->with("Error","Nim atau password salah!");
        
        }catch(\Exception $e){
            dd($e->getMessage());
        }
    }


    public function logout(Request $req){
        Auth::logout();

        $req->session()->invalidate();
        $req->session()->regenerateToken();

        return redirect()->route("home");
    }
}
