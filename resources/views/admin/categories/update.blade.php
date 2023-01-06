@extends('admin.layouts.app')
@section('title', 'Cập nhật')
@section('content')
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">
                    @include('admin.components.page-header',
                        [
                            'title' => 'Cập nhật danh mục',
                            'breadcrumbs' => [
                                ["name" => "Danh sách", 'href'=>"/admin/categories"],
                                ["name" => "Cập nhật danh mục", 'href'=>""],
                            ]
                        ])
                    <div class="page-body">
                        <form class="theme-form" method="POST" action="{{route('categories.update', $category['id'])}}">
                            @csrf
                            @method('PATCH')
                            @include($view.'._form')
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection
