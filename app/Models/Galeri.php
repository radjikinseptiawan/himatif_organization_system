<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{   
    protected $primaryKey = "galeri_id";
    protected $table = "galeri_himatif";

    protected $fillable = [
        "google_link",
        "cover_link",
        "judul_album"
    ];
}
