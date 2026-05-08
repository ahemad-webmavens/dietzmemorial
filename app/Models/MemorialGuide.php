<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MemorialGuide extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'content',
        'featured_image',
        'order',
        'is_active',
    ];
}
