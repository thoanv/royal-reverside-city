<?php
namespace App\Repositories;

use App\Models\Category;
use App\Models\Destination;
use App\Models\Post;
use App\Repositories\Support\AbstractRepository;
use Illuminate\Support\Facades\Auth;

class PostRepository extends AbstractRepository
{
    public function model()
    {
        return Post::class;
    }
    public function getPostFeatured()
    {
        return $this->model->where('status', true)->orderBy('id', 'DESC')->get();
    }
    public function getData($request)
    {
        $query = $this->model;
        if($request->name){
            $query = $query->where('name', 'like', '%' . $request->name . '%');
        }
        if($request->status == 0 && $request->status !=''){
            $query = $query->where('status', false);
        }
        if($request->status == 1){
            $query = $query->where('status', true);
        }

        return $query->orderBy('id', 'DESC')->paginate();

    }
    public function getPostByCategoryId($cate_id)
    {
        return $this->model->where([['category_id', $cate_id],['status', 'YES']])->orderBy('id', 'DESC')->paginate(15);
    }
    public function getPostBySlug($slug, $cate_id)
    {
        return $this->model->where([['category_id' , $cate_id], ['status', true], ['slug', $slug]])->first();
    }
    public function getPostRelates($id = 0)
    {
        $query = $this->model->where('status', 'YES');
        if($id)
            $query = $query->where('id', '<>', $id);

        return $query->take(10)->get();
    }
    public function detail($slug)
    {
        return $this->model->where([['status', true], ['slug', $slug]])->first();
    }
}
