<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'avatar',
        'description',
        'content',
        'status',
        'type'
    ];

    public function getDate()
    {
        $day = date('d', strtotime($this->created_at));
        $month = date('m', strtotime($this->created_at));
        $year = date('Y', strtotime($this->created_at));
        $txt = '';
        switch ($month){
            case '01':
                $txt = 'Tháng Một';
                break;
            case '02':
                $txt = 'Tháng Hai';
                break;
            case '03':
                $txt = 'Tháng Ba';
                break;
            case '04':
                $txt = 'Tháng Bốn';
                break;
            case '05':
                $txt = 'Tháng Năm';
                break;
            case '06':
                $txt = 'Tháng Sáu';
                break;
            case '07':
                $txt = 'Tháng Bảy';
                break;
            case '08':
                $txt = 'Tháng Tám';
                break;
            case '09':
                $txt = 'Tháng Chín';
                break;
            case '10':
                $txt = 'Tháng Mười';
                break;
            case '11':
                $txt = 'Tháng Mười Một';
                break;
            case '12':
                $txt = 'Tháng Mười Hai';
                break;
        }

        return $day.' '.$txt.', '.$year;
    }
}
