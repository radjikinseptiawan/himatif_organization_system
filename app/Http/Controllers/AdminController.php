<?php

namespace App\Http\Controllers;

use App\Models\Events;
use App\Models\Galeri;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function renderGaleri(){
       try{
        $galeri = Galeri::all();
        return view("admin.galeriAdmin",[
            "data" => $galeri
        ]);
        }catch(\Exception $e){
            dd($e->getMessage());
        }
    }

    public function renderEvent(){
        try{
        $event = Events::all();
        return view("admin.eventAdmin",[
            "data" => $event
        ]);
        }catch(\Exception $e){
            dd($e->getMessage());
        }
    }
}
