<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public function features(){
        return $this->belongsToMany('App\Models\Feature', 'feature_to_room', 'room_id');
    }

    public function medias(){
        return $this->belongsToMany('App\Models\Media', 'media_to_room', 'room_id');
    }
}
