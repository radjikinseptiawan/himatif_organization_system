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
            "nim" => "string|max:255|required",
            "password" => "string|max:255|required"
        ]);

        if(Auth::attempt(["name"=>$Credentials["nim"],"password"=>$Credentials['password']])){
            $req->session()->regenerate();

            return redirect(route("dashboard"));
        }   
        

        
        }catch(\Exception $e){
            dd($e->getMessage());
        }
    }
}
