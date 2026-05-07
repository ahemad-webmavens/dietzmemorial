<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageSectionItem extends Model
{
    protected $fillable = [
        'page_section_id',
        'title',
        'description',
        'button_text',
        'button_link',
        'image',
        'order',
        'is_active',
    ];

    public function section()
    {
        return $this->belongsTo(PageSection::class, 'page_section_id');
    }
}
