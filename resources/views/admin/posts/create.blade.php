@extends('admin.layouts.app')
@section('title', 'Thêm mới')
@section('content')
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">
                    @include('admin.components.page-header',
                        [
                            'title' => 'Thêm mới Slide',
                            'breadcrumbs' => [
                                ["name" => "Danh sách", 'href'=>"/admin/slides"],
                                ["name" => "Thêm mới Slide", 'href'=>""],
                            ]
                        ])
                    <div class="page-body">
                        <form class="theme-form" method="POST" action="{{route('posts.store')}}">
                            @csrf
                            @include($view.'._form',['post'=> $post])
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
