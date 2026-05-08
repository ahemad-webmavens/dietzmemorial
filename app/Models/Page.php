<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'template',
        'content',
        'meta_title',
        'meta_description',
        'hero_image',
        'is_active',
        'extra',
    ];

    protected $casts = [
        'extra' => 'array',
    ];

    public function sections()
    {
        return $this->hasMany(PageSection::class)
            ->orderBy('order');
    }
}
