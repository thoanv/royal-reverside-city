<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    const STATUS_DRAFT = 'draft';
    const STATUS_PENDING = 'pending';
    const STATUS_PUBLISHED = 'published';
    const STATUS_UNPUBLISHED = 'unpublished';

    protected $fillable = [
        'name',
        'slug',
        'avatar',
        'description',
        'content',
        'view',
        'featured',
        'start',
        'status',
        'published',
        'time_published',
        'created_by',
        'updated_by',
        'category_id'
    ];
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
    public function getPublisher()
    {
        if($this['published'] === Post::STATUS_DRAFT){
            $name_status = 'Bản Nháp';
            $color_status = 'badge-dark';
        }elseif($this['published'] === Post::STATUS_PENDING){
            $name_status = 'Chờ Xuất Bản';
            $color_status = 'badge-warning';
        }elseif($this['published'] === Post::STATUS_PUBLISHED){
            $name_status = 'Đã Xuất Bản';
            $color_status = 'badge-success';
        }else{
            $name_status = 'Không Xuất Bản';
            $color_status = 'badge-danger';
        }
        $data['name_status'] = $name_status;
        $data['color_status'] = $color_status;
        return $data;
    }
    public function postHistories()
    {
        return $this->hasMany(PostHistory::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function relates()
    {
        return Post::where([['id', '<>', $this->id], ['status', 'YES']])->take(5);
    }
}
