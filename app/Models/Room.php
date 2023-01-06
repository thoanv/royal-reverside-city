<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'avatar',
        'slug',
        'price_h',
        'price_d',
        'description',
        'content',
        'status',
        'featured',
        'category_id',
        'created_by'
    ];
    public function images()
    {
        return $this->hasMany(Image::class);
    }
    public function owner()
    {
        return $this->belongsTo(Employee::class, 'created_by');
    }
    public function updatedBy()
    {
        return $this->belongsTo(Employee::class, 'updated_by');
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
