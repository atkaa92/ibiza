<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $guarded = [];

    public function features(){
        return $this->belongsToMany('App\Models\Feature', 'feature_to_room', 'room_id');
    }
}
