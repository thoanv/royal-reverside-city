<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'image',
        'thumb_image',
        'created_by',
        'url',
        'status'
    ];
    public function createdBy()
    {
        return $this->belongsTo(Employee::class, 'created_by');
    }
}
