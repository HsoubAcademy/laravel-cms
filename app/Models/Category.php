<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use App\Helpers\slug;

class Category extends Model
{
    protected $fillable = ['title','slug'];

    public function setSlugAttribute($value)
    {
        $unique_slug=Slug::uniqueSlug($value,'categories');

        $this->attributes['slug']=$unique_slug;
    }

    public function posts()
    {
        return $this->hasMany('App\Models\Post');
    }
}
