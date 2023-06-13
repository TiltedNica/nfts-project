<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;

    protected $fillable = [
        'collection_name',
        'user_id',
        'img_collection',
    ];

    public function items(){
        return $this->hasMany('App\Models\Item');
    }

    public function likes(){
        return $this->morphMany('App\Models\Like', 'likeable');
    }

    public function user()
    {
        return $this->belongsTo(User::class)->select([
            'name', 'email'
        ]);
    }

    public function checkLike(User $user)
    {
        return $this->likes->contains('user_id', $user->id);
    }
}
