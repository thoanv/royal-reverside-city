<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $fillable = [
        'url',
        'room_id',
        'category_id',
        'create_by',
    ];
    public function room()
    {
        return $this->belongsTo(Room::class, 'room_id', 'id');
    }
}
