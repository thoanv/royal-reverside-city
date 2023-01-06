@extends('admin.layouts.app')
@section('title', 'Thêm mới danh mục')
@section('content')
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">
                    @include('admin.components.page-header',
                        [
                            'title' => 'Thêm mới danh mục',
                            'breadcrumbs' => [
                                ["name" => "Danh sách", 'href'=>"/admin/categories"],
                                ["name" => "Thêm mới danh mục", 'href'=>""],
                            ]
                        ])
                    <div class="page-body">
                        <form class="theme-form" method="POST" action="{{route('categories.store')}}">
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
