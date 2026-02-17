<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departemen extends Model
{
    
    public function misi(){
        return $this->hasMany(Misi::class);
    }
}
