<?php
namespace App\Repositories;

use App\Models\Room;
use App\Repositories\Support\AbstractRepository;
use Illuminate\Support\Facades\Auth;

class RoomRepository extends AbstractRepository
{
    public function model()
    {
        return Room::class;
    }
    public function getData($request)
    {
        $query = $this->model;
        if($request->name){
            $query = $query->where('name', 'like', '%' . $request->name . '%');
        }
        if($request->category_id){
            $query = $query->where('category_id', $request->category_id);
        }

        if($request->status == 0 && $request->status !=''){
            $query = $query->where('status', false);
        }
        if($request->status == 1){
            $query = $query->where('status', true);
        }
        return $query->orderBy('id', 'DESC')->paginate();
    }
    public function getRoomByCategoryId($cate_id)
    {
        return $this->model->where([['category_id' , $cate_id], ['status', true]])->orderBy('stt', 'ASC')->get();
    }
    public function getCategoriesStatus($status = false)
    {
        $query = $this->model;
        if($status)
            $query = $query->where('status', true);

        return $query->orderBy('ID', 'DESC')->get();
    }
    public function getRoomBySlug($slug, $cate_id)
    {
        return $this->model->where([['category_id' , $cate_id], ['status', true], ['slug', $slug]])->first();
    }
    public function getRoomByStt($status = false)
    {
        $query = $this->model;
        if($status)
            $query = $query->where('status', true);

        return $query->orderBy('stt', 'ASC')->get();
    }

}
