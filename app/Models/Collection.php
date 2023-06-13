<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;

    public function items(){
        return $this->hasMany('App\Models\Item');
    }

    public function likes(){
        return $this->morphMany('App\Models\Like', 'likeable');
    }
}
