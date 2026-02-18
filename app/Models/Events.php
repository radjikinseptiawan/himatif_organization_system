<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    protected $primaryKey = "event_id";
    protected $table = "events_himatif";

    protected $fillable = [
        "google_link",
        "cover_link",
        "judul_event"
    ];
}
