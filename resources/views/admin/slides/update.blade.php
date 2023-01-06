@extends('admin.layouts.app')
@section('title', 'Cập nhật')
@section('content')
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">
                    @include('admin.components.page-header',
                        [
                            'title' => 'Cập nhật Slide',
                            'breadcrumbs' => [
                                ["name" => "Danh sách", 'href'=>"/admin/slides"],
                                ["name" => "Cập nhật Slide", 'href'=>""],
                            ]
                        ])
                    <div class="page-body">

                        <form class="theme-form" method="POST" action="{{route('slides.update', $slide)}}">
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
