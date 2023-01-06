<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\General;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Repositories\GeneralRepository as GeneralRepo;

class GeneralController extends Controller
{
    protected $view = 'admin.generals';
    protected $route = 'generals';
    protected $generalRepo;
    public function __construct(GeneralRepo $generalRepo)
    {
        $this->generalRepo = $generalRepo;

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = Auth::user()->is_admin;
        if(!$admin) return view('admin.errors.403');
        $general = General::first();
        if(!$general) return abort(404);
        return view($this->view.'.index', [
            'general' => $general
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $general)
    {
        $data = $request->only(
            'logo',
            'favicon',
            'thumbnail',
            'site_name',
            'tax_code',
            'email',
            'address',
            'phone',
            'fax',
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
            'bo_cong_thuong'
        );
        $this->generalRepo->update($data, $general);
        return redirect(route($this->route.'.index'))->with('success',  'Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
