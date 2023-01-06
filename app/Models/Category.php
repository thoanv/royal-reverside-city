<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    const CATE_POST = 'posts';
    const CATE_ROOM = 'room';
    const CATE_POLICY = 'policy';
    const CATE_CONTACT = 'contact';
    const CATE_TUTORIAL = 'tutorial';
    const CATE_INTRODUCE = 'introduce';
    const CATE_IMAGE = 'image';
    protected $fillable = [
        'name',
        'slug',
        'cover',
        'description',
        'parent_id',
        'serial',
        'type',
        'status',
        'featured',
        'created_by'
    ];
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id', 'id');
    }
    public function images()
    {
        return $this->hasMany(Image::class);
    }
    public static function recursive($categories, $parents = 0, $level = 1, &$listCategory)
    {
        if(count($categories) > 0){
            foreach ($categories as $key => $value){
                if($value->parent_id == $parents){
                    $value->level = $level;

                    $listCategory[] = $value;

                    unset($categories[$key]);

                    $parent = $value->id;
                    self::recursive($categories, $parent, $level + 1, $listCategory);
                }
            }
        }
    }
    public function createdBy()
    {
        return $this->belongsTo(Employee::class, 'created_by', 'id');
    }
    public function posts()
    {
        return $this->morphToMany(Post::class, 'category_posts');
    }
}
