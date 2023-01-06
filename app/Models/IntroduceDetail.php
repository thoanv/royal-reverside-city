<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IntroduceDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'avatar',
        'description',
        'status',
        'created_by',
        'introduce_id',
    ];
    public function introduce()
    {
        return $this->belongsTo(Introduce::class, 'introduce_id', 'id');
    }
}
