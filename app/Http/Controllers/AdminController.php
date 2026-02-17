<?php

namespace App\Http\Controllers;

use App\Models\Events;
use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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


    public function addGaleri(Request $req){
    try{
        $validasi = $req->validate([
            "cover" => "image|mimes:jpg,jpeg,png,webp|max:20000|required",
            "album" => "string|max:255|min:1|required",
            "gdrive" => "string|max:20000|required"
        ]);

        $path = $req->file("cover")->store("galeri","public");

        Galeri::create([
            "google_link" => $validasi["gdrive"],
            "cover_link" => $path,
            "judul_album" => $validasi["album"]
        ]);

        return redirect()->back()->with("success","berhasil menyimpan galeri");
     }catch(\Exception $e){
        dd($e->getMessage());
     }   
     }

    public function selectGaleri($id){
        $data = Galeri::all();
        $selectData = Galeri::where("galeri_id",$id)->firstOrFail();

        return view("admin.galeriAdmin",[
        "data" => $data,
        "dataSelected" => $selectData
        ]);
    }

    public function deleteGaleri($id){
        try{
            $data = Galeri::where("galeri_id",$id)->firstOrFail();

            if($data->cover_link){
                Storage::disk("public")->delete($data->cover_link);
            }

            $data->delete();
            
            return redirect()->back()->with("success","Berhasil menghapus data");
            }catch(\Exception $e){
            dd($e);
        }
    }

    public function addEvent(){
        
    }

    public function editEvent(){

    }

    public function deleteEvent(){

    }
    
}
