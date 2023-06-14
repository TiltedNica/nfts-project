<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'img_user',
        'desc_user'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function likes(){
        return $this->hasMany('App\Models\Like');
    }

    public function items(){
        return $this->hasMany('App\Models\Item');
    }

    public function collections(){
        return $this->hasMany(Collection::class);
    }

    public function followers(){
        return $this->belongsToMany(User::class, 'followers', 'followed_id', 'follower_id');
    }

    public function isFollowing(User $user){
        return $this->followers->contains($user->id);
    }

    public function followings(){
        return $this->belongsToMany(User::class, 'followers', 'follower_id', 'followed_id');
    }
}
