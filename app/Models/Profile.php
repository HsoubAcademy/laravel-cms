<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['user_id', 'avatar', 'website', 'bio'];
  
    public function getAvatarAttribute($avatar)
    {
        return asset('storage/avatars/'.$avatar);
    }
}

