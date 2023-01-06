<?php
namespace App\Repositories;

use App\Models\Category;
use App\Repositories\Support\AbstractRepository;
use Illuminate\Support\Facades\Auth;

class CategoryRepository extends AbstractRepository
{
    public function model()
    {
        return Category::class;
    }
    public function getCategoriesByType($type= 'post')
    {
        return $this->model->where([['status', true],['type', $type]])->whereNotNull('parent_id')->get();

    }
    public function getCategoriesByTypePost($type= 'post')
    {
        return $this->model->where([['status', true],['type', $type]])->get();

    }
    public function getCategoriesStatus($status = false)
    {
        $query = $this->model;
        if($status)
            $query = $query->where('status', true);

        return $query->orderBy('ID', 'DESC')->get();
    }
    public function getLists()
    {
        return $this->model->where('status', true)->get();
    }
    public function getCategoryBySlug($slug)
    {
        return $this->model->where([['slug', $slug], ['status', true]])->first();
    }

}
