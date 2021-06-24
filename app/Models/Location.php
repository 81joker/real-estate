<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Photo;



class Location extends Model
{
    use HasFactory;
    public $table = 'locations';



    protected $fillable = [
        'name',
        'slug',
        'photo',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    public function photo()
    {
        return $this->morphOne(Photo::class, 'photoable');
    }
}
