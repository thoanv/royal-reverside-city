@extends('admin.layouts.app')
@section('title', 'Access denied 403')
@section('content')
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">
                    <div class="erroe_page_wrapper">
                        <div class="errow_wrap">
                            <div class="container text-center">
                                <img src="img/bak_hovers/sad.png" alt="">
                                <div class="error_heading  text-center">
                                    <h3 class="headline font-danger theme_color_6">403</h3>
                                </div>
                                <div class="col-md-8 offset-md-2 text-center">
                                    <p>Access denied.</p>
                                </div>
                                <div class="error_btn  text-center">
                                    <a class=" btn btn-primary " href="{{route('dashboard')}}">Quay lại trang chủ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>

    </style>
@endsection
