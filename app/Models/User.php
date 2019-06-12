<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Models\{
    Comment,
    Post
};

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function profile()
    {
        return $this->hasOne('App\Models\Profile');
    }

    public function role()
    {
        return $this->belongsTo('App\Models\Role');
    }

    public function isAdmin()
    {
        return $this->role->id == 1;
    }

    public function hasAllow($permission)
    {
        $role= $this->role()->first();

        return $role->permissions()->whereName($permission)->first() ? true : false;
    }

}
