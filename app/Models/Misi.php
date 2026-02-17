<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Misi extends Model
{
    protected $table = "misi_departemens";

    public function departemen(){
        return $this->hasMany(Departemen::class);
    }
}
