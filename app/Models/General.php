<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class General extends Model
{
    use HasFactory;
    protected $fillable = [
        'logo',
        'favicon',
        'thumbnail',

        'site_name',
        'tax_code',
        'email',
        'address',
        'phone',
        'fax',
        'bo_cong_thuong',

        'meta_header',
        'meta_keywords',
        'meta_description',

        'facebook',
        'twitter',
        'youtube',
        'instagram',
        'tiktok',

        'facebook_page',
        'video_intro',
        'google_analytics',
    ];
}
