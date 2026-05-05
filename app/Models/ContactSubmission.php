<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactSubmission extends Model
{
    protected $fillable = [
        'location_id',
        'name',
        'email',
        'phone',
        'message',
    ];

    public function location()
    {
        return $this->belongsTo(Location::class);
    }
}
