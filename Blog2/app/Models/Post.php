<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use Sluggable;
    protected $table ='posts';
    protected $fillable = [
        'title',
        'description',
        'img',
        'content',
        'likes',
        'slug',
        'users_id',
        'category_id'
    ];

    public function sluggable(): array
    {
        return[
            'slug' =>[
                'source' =>'title'
            ]
            
            
        ];
    }
}

