@extends('admin.layouts.app')
@section('title', 'Thêm mới menu')
@section('content')
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">
                    @include('admin.components.page-header',
                        [
                            'title' => 'Thêm mới Menu',
                            'breadcrumbs' => [
                                ["name" => "Danh sách", 'href'=>"/admin/menus"],
                                ["name" => "Thêm mới Menu", 'href'=>""],
                            ]
                        ])
                    <div class="page-body">
                        <form class="theme-form" method="POST" action="{{route('menus.store')}}">
                            @csrf
                            @include($view.'._form',['menu'=> $menu])
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

        <!-- Container-fluid Ends-->
@endsection
