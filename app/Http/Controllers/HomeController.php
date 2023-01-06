<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmail;
use App\Models\Category;
use App\Models\General;
use Illuminate\Http\Request;
use App\Repositories\SlideRepository as SlideRepo;
use App\Repositories\RoomRepository as RoomRepo;
use App\Repositories\CategoryRepository as CategoryRepo;
use App\Repositories\PostRepository as PostRepo;

class HomeController extends Controller
{
    protected $aboutUs;
    protected $slideRepo;
    protected $roomRepo;
    protected $postRepo;
    protected $categoryRepo;
    public function __construct(PostRepo $postRepo,  SlideRepo $slideRepo, RoomRepo $roomRepo, CategoryRepo $categoryRepo)
    {
        $this->slideRepo = $slideRepo;
        $this->roomRepo = $roomRepo;
        $this->postRepo = $postRepo;
        $this->categoryRepo = $categoryRepo;
    }

    public function index()
    {
        $aboutUs = General::find(1);
        $slides = $this->slideRepo->getByStatus();
        $categories = $this->categoryRepo->getCategoriesByType('room');
        $posts = $this->postRepo->getPostFeatured();
        foreach ($categories as $key =>  $category):
            $categories[$key]['rooms'] = $this->roomRepo->getRoomByCategoryId($category['id']);
        endforeach;
        return view('home',[
            'slides'  => $slides,
            'categories' => $categories,
            'posts' => $posts,
            'aboutUs' => $aboutUs
        ]);
    }
    public function slug($category_slug, $slug = '')
    {
        $category = $this->categoryRepo->getCategoryBySlug($category_slug);
        if(!$category) return abort('404');
        $view = '';
        switch ($category['type']) {
            case Category::CATE_POST :
                $view = 'posts.list';
                $post = '';
                $relates = [];
                $posts = $this->postRepo->getPostByCategoryId($category['id']);
                if($slug){
                    $post = $this->postRepo->getPostBySlug($slug, $category['id']);
                    $relates = $this->postRepo->getPostRelates($post['id']);
                    if(!$post) return abort('404');
                    $view = 'posts.detail';
                }
                return view($view,[
                    'category' => $category,
                    'posts'   => $posts,
                    'post'    => $post,
                    'relates' => $relates
                ]);
              break;
            case Category::CATE_ROOM :
                $view = 'rooms.list';
                $room = '';
                if($category['parent_id']){
                    $rooms = $this->roomRepo->getRoomByCategoryId($category['id']);
                    if($slug){
                        $room = $this->roomRepo->getRoomBySlug($slug, $category['id']);
                        if(!$room) return abort('404');
                        $view = 'rooms.detail';
                    }
                }
                return view($view,[
                    'category' => $category,
                    'rooms'   => $rooms,
                    'room'    => $room
                ]);
              break;
            case Category::CATE_CONTACT :
                $view = 'contact';
                return view($view,[
                    'category' => $category,
                ]);
              break;
            case Category::CATE_POLICY :
                $view = 'policy';
                return view($view,[
                    'category' => $category,
                ]);
                break;
            case Category::CATE_INTRODUCE :
                $view = 'about-us';
                return view($view,[
                    'category' => $category,
                ]);
            case Category::CATE_IMAGE :
                $view = 'galleries';
                $rooms = $this->roomRepo->getRoomByStt(true);
                return view($view,[
                    'category' => $category,
                    'rooms' => $rooms
                ]);
            default:
        }

    }
    public function post()
    {
        return view('posts.list');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mails = $request->all();
        $mails['time'] = date('H:i d-m-Y', time());
        $send = dispatch(new SendEmail($mails));
        $result = response()->json($send);
        $response = [
            'success' => 200,
            'data' => true,
            'message' => ''
        ];
        return $this->sendResponse($response, 'Success.');
    }
}
