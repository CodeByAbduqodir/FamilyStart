<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['type', 'name', 'description', 'price'];
    public function venues()
    {
        return $this->belongsToMany(
            Venue::class,
            'service_venue',
            'service_id',
            'venue_id'
        );
    }
}
