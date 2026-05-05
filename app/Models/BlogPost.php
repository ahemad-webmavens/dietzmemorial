<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'body',
        'excerpt',
        'featured_image',
        'meta_title',
        'meta_description',
        'published_at',
        'is_active',
    ];
}
