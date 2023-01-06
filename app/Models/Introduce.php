<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Introduce extends Model
{
    use HasFactory;
    protected $fillable = [
        'title_font',
        'title',
        'avatar',
        'description',
        'serial',
        'status',
        'created_by',
        'category_id',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function introduceDetails()
    {
        return $this->hasMany(IntroduceDetail::class);
    }
}
