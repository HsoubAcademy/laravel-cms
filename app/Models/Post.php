<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Helpers\Slug;

class Post extends Model
{

    protected $fillable = [
        'title','slug','body','image_path','approved','category_id','user_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function scopeApproved($query)
    {
        return $query->whereApproved(1)->latest();
    }

    public function getImagepathAttribute($avatar)
    {
        return asset('storage/images/'.$avatar);
    }

    public function setTitleAttribute($value)
    {
        $this->attributes['title']= $value;
        $this->attributes['slug']= Slug::uniqueSlug($value,'posts');
    }
    
}
