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
        'extra_data',
    ];

    protected $casts = [
        'extra'      => 'array',
        'extra_data' => 'array',
    ];

    public function sections()
    {
        return $this->hasMany(PageSection::class)
            ->orderBy('order');
    }
}
