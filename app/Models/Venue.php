<?php

namespace App\Models;

use App\Models\Location;
use App\Models\EventType;
use App\Models\Photo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'address',
        'latitude',
        'features',
        'longitude',
        'created_at',
        'updated_at',
        'deleted_at',
        'location_id',
        'description',
        'is_featured',
        'people_minimum',
        'people_maximum',
        'price_per_hour',
    ];


    public function location()
    {
        return $this->belongsTo(Location::class, 'location_id');
    }

    public function event_types()
    {
        return $this->belongsToMany(EventType::class);
    }

    public function photo()
    {
        return $this->morphOne(Photo::class, 'photoable');
    }
}
