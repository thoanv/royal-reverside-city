@extends('admin.layouts.app')
@section('title', 'Thêm mới')
@section('content')
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">
                    @include('admin.components.page-header',
                        [
                            'title' => 'Thêm mới bài viết',
                            'breadcrumbs' => [
                                ["name" => "Danh sách", 'href'=>"/admin/posts"],
                                ["name" => "Thêm mới bài viết", 'href'=>""],
                            ]
                        ])
                    <div class="page-body">

                        <form class="theme-form" method="POST" action="{{route('slides.store')}}">
                            @csrf
                            @include($view.'._form')
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
        <!-- Container-fluid Ends-->
@endsection
