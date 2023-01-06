<?php

namespace App\Http\Controllers\Admin;

use App\Models\Image;
use App\Models\Room;
use App\Http\Requests\StoreRoomRequest;
use App\Http\Requests\UpdateRoomRequest;
use App\Http\Controllers\Controller;
use App\Repositories\CategoryRepository as CategoryRepo;
use App\Repositories\RoomRepository as RoomRepo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Repositories\ImageRepository as ImageRepo;

class RoomController extends Controller
{
    protected $view = 'admin.rooms';
    protected $roomRepo;
    protected $categoryRepo;
    protected $imageRepo;

    public function __construct(RoomRepo $roomRepo, CategoryRepo $categoryRepo, ImageRepo $imageRepo)
    {
        $this->roomRepo = $roomRepo;
        $this->categoryRepo = $categoryRepo;
        $this->imageRepo = $imageRepo;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $categories = $this->categoryRepo->getCategoriesByType('room');
        $rooms = $this->roomRepo->getData($request);
        return view($this->view.'.index',[
            'categories' => $categories,
            'rooms' => $rooms,
            'request' => $request
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = $this->categoryRepo->getCategoriesByType('room');
        $room = new Room();
        return view($this->view.'.create',[
            'categories' => $categories,
            'view' => $this->view,
            'room' => $room
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRoomRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRoomRequest $request)
    {
        $data = $request->only('name', 'avatar', 'description', 'content','category_id', 'price_h', 'price_d');
        $data['created_by'] = Auth::id();
        $data['status'] = isset($request['status']) ? 1 : 0;
        $data['featured'] = isset($request['featured']) ? 1 : 0;
        $result = $this->roomRepo->create($data);
        $data = [];
        $data['slug'] = Str::slug($request->name).'-'.$result['id'];
        $this->roomRepo->update($data, $result['id']);
        if($request->gallery && !empty($request->gallery)):
            foreach ($request->gallery as $v_image):
                $image['url'] = $v_image;
                $image['room_id'] = $result['id'];
                $this->imageRepo->create($image);
            endforeach;
        endif;
        return redirect(route('rooms.index'))->with('success',  'Thêm thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room)
    {
        $categories = $this->categoryRepo->getCategoriesByType('room');
        $images = $this->imageRepo->getImageByRoomId($room['id']);
        return view($this->view.'.update',[
            'categories' => $categories,
            'view' => $this->view,
            'images' => $images,
            'room' => $room
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRoomRequest  $request
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRoomRequest $request, Room $room)
    {
        $data = $request->only('name', 'avatar', 'description', 'content','category_id', 'price_h', 'price_d');
        $data['status'] = isset($request['status']) ? 1 : 0;
        $data['featured'] = isset($request['featured']) ? 1 : 0;
        $data['slug'] = Str::slug($request->name).'-'.$room['id'];
        $this->roomRepo->update($data, $room['id']);
        Image::where('room_id', $room['id'])->delete();
        if($request->gallery && !empty($request->gallery)):
            foreach ($request->gallery as $v_image):
                $image['url'] = $v_image;
                $image['room_id'] = $room['id'];
                $this->imageRepo->create($image);
            endforeach;
        endif;
        return redirect(route('rooms.index'))->with('success',  'Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
        $room->delete();
        return redirect()->route('rooms.index')->with('success','Xóa thành công');
    }
}
