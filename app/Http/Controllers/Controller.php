<?php

namespace App\Http\Controllers;

class Controller
{
    public function runOrganizationProfile(){
        return view("welcome");
    }

    public function pengurusIntiPage(){
        return view("pages.pengurus_inti.pengurusInti");
    }

    public function penjaminMutuPages(){
        return view("pages.penjamin_mutu.penjaminMutu");
    }


    public function departemen(){
        return view("pages.departemen.departemen");
    }

    public function galeri(){
        return view("pages.galeri.galeri");
    }

    public function event(){
        return view("pages.event.event");
    }
}
