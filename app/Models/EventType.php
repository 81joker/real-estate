<?php

namespace App\Models;


use App\Models\Venue;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventType extends Model
{
    use HasFactory;

    public $table = 'event_types';


    protected $fillable = [
        'name',
        'slug',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    public function venues()
    {
        return $this->belongsToMany(Venue::class);
    }
}
