<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypePermission extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'status'
    ];
    public function permissions()
    {
        return $this->hasMany(Permission::class);
    }
}
