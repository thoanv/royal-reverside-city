@extends('admin.layouts.app')
@section('title', 'Cập nhật')
@section('content')
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">
                    @include('admin.components.page-header',
                        [
                            'title' => 'Cập nhật Bài viết',
                            'breadcrumbs' => [
                                ["name" => "Danh sách", 'href'=>"/admin/posts"],
                                ["name" => "Cập nhật bài viết", 'href'=>""],
                            ]
                        ])
                    <div class="page-body">
                        <form class="theme-form" method="POST" action="{{route('posts.update', $post['id'])}}">
                            @csrf
                            @method('PATCH')
                            @include($view.'._form',['post'=> $post])
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
