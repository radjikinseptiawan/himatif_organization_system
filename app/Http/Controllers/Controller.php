<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Departemen;
use App\Models\Events;
use App\Models\Galeri;
use App\Models\Misi;

class Controller
{
    public function runOrganizationProfile(){
        $data = Departemen::all();
        return view("welcome",[
            "data" => $data
        ]);
    }

    public function pengurusIntiPage(){
        $anggota = Anggota::where("departemen_anggota","pengurus_inti")->get();
        $departemen = Departemen::where("abbreviation","pengurus_inti")->first();
        $misi = Misi::where("departemen_id",$departemen->id)->get();
        return view("pages.pengurus_inti.pengurusInti",[
            "anggota" => $anggota,
            "departemen" => $departemen,
            "misi" => $misi    
        ]);
    }

    public function penjaminMutuPages(){
    $anggota = Anggota::where("departemen_anggota","penjamin_mutu")->get();
    $departemen = Departemen::where("abbreviation","penjamin_mutu")->first();
    $misi = Misi::where("departemen_id",$departemen->id)->get();
    return view("pages.penjamin_mutu.penjaminMutu",[
        "data" => $anggota,
        "departemen"=>$departemen,
        "misi" => $misi
        ]);
    }


    public function departemen(){
        $data = Departemen::all();
        return view("pages.departemen.departemen",[
            "data"=>$data
        ]);
    }

    public function galeri(){
        $album = Galeri::all();
        return view("pages.galeri.galeri",
        [
            "data" => $album
        ]);
    }

    public function event(){
        $album = Events::all();  
        return view("pages.event.event",[
            "data"=>$album
        ]);
    }

    public function divisi($departemen){
        $anggota = Anggota::where("departemen_anggota",$departemen)->get();
        $data = Departemen::where("abbreviation",$departemen)->first();
        $misi = Misi::where("departemen_id",$data->id)->get();
        return view("pages.departemen.divisi.divisi",[
            "data" => $data,
            "misi" => $misi,
            "anggota" => $anggota
        ]);
    }
}
