<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'price',
        'title',
        'description',
        'royalties',
        'size',
        'img_item',
        'user_id',
        'category_id',
        'collection_id'
    ];
    public function likes(){
        return $this->morphMany('App\Models\Like', 'likeable');
    }

    public function user()
    {
        return $this->belongsTo(User::class)->select([
            'name', 'email', 'img_user'
        ]);
    }

    public function checkLike(User $user)
    {
        return $this->likes->contains('user_id', $user->id);
    }
}

