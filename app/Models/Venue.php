<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Service;

class Venue extends Model
{
    protected $fillable = ['name', 'location', 'capacity', 'price'];
    public function services()
    {
        return $this->belongsToMany(
            Service::class,
            'service_venue',
            'venue_id',
            'service_id'
        );
    }
}
