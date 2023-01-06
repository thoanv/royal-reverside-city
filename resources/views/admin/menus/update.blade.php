@extends('admin.layouts.app')
@section('title', 'Cập nhập menu')
@section('content')
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">
                    @include('admin.components.page-header',
                        [
                            'title' => 'Cập nhật Menu',
                            'breadcrumbs' => [
                                ["name" => "Danh sách", 'href'=>"/admin/menus"],
                                ["name" => "Cập nhật Menu", 'href'=>""],
                            ]
                        ])
                    <div class="page-body">
                        <form class="theme-form" method="POST" action="{{route('menus.update', $menu)}}">
                            @csrf
                            @method('PATCH')
                            @include($view.'._form',['menu'=> $menu])
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection
