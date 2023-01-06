@extends('admin.auths.guest')
@section('title', 'Đăng nhập')
@section('content')
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->

    <section class="login p-fixed d-flex text-center bg-primary common-img-bg">
        <!-- Container-fluid starts -->
        <div class="container">
            <div class="row">
                @if ($errors->has('username'))
                    <div class="alert alert-danger" role="alert">
                        <i class="mdi mdi-alert-circle"></i> {{$errors->first('username')}}
                    </div>
                @endif
                <div class="col-sm-12">
                    <!-- Authentication card start -->
                    <div class="login-card card-block auth-body mr-auto ml-auto">
                        <form class="md-float-material" action="{{ route('admin.login') }}" method="POST">
                            @csrf
{{--                            <div class="text-center">--}}
{{--                                <img src="/assets/images/manager.png" alt="logo.png">--}}
{{--                            </div>--}}
                            <div class="auth-box">
                                <div class="row m-b-20">
                                    <div class="col-md-10">
                                        <h3 class="text-left txt-primary">Đăng nhập</h3>
                                    </div>
                                    <div class="col-md-2">
                                        <img src="/assets/images/manager.png" alt="small-logo.png">
                                    </div>
                                </div>
                                <hr/>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="username" placeholder="Tên đăng nhập..." value="{{old('username')}}" required>
                                    <span class="md-line"></span>
                                </div>
                                <div class="input-group">
                                    <input class="form-control" type="password" Placeholder="Mật khẩu" name="password" required>
                                    <span class="md-line"></span>
                                </div>
                                <div class="row m-t-25 text-left">
                                    <div class="col-sm-7 col-xs-12">
                                        <div class="checkbox-fade fade-in-primary">
                                            <label>
                                                <input type="checkbox" name="remember" value="1">
                                                <span class="cr"><i
                                                        class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                <span class="text-inverse">Remember me</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit"
                                                class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">
                                            Đăng nhập
                                        </button>
                                    </div>
                                </div>
                                <hr/>

                            </div>
                        </form>
                        <!-- end of form -->
                    </div>
                    <!-- Authentication card end -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>
    <![endif]-->
    <!-- Warning Section Ends -->
    <!-- Required Jquery -->

{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            @if ($errors->has('username'))--}}
{{--                <div class="alert alert-danger" role="alert">--}}
{{--                    <i class="mdi mdi-alert-circle"></i> {{$errors->first('username')}}--}}
{{--                </div>--}}
{{--            @endif--}}
{{--            <div class="col">--}}
{{--                <center>--}}
{{--                    <div class="login-heading"><p>ĐĂNG NHẬP HỆ THỐNG</p></div>--}}
{{--                    <div class="middle">--}}
{{--                        <div id="login">--}}

{{--                            <form method="POST" action="{{ route('admin.login') }}">--}}
{{--                                @csrf--}}
{{--                                <fieldset class="clearfix">--}}
{{--                                    <p style="color: #fd7e14;">--}}
{{--                                        <span class="fa fa-user"></span>--}}
{{--                                        <input type="text" Placeholder="Tên đăng nhập" name="username" value="{{old('username')}}" required>--}}
{{--                                    </p>--}}
{{--                                    <!-- JS because of IE support; better: placeholder="Username" -->--}}
{{--                                    <p>--}}
{{--                                        <span class="fa fa-lock"></span>--}}
{{--                                        <input type="password" Placeholder="Mật khẩu" name="password" required>--}}
{{--                                    </p>--}}
{{--                                    <div>--}}
{{--                                  <span style="width:48%; text-align:left;  display: inline-block;">--}}
{{--                                      <a class="small-text" href="#">Quên mật khẩu?</a>--}}
{{--                                  </span>--}}
{{--                                        <span style="width:50%; text-align:right;  display: inline-block;">--}}
{{--                                    <input type="submit" value="Đăng nhập"></span>--}}
{{--                                    </div>--}}
{{--                                </fieldset>--}}
{{--                                <div class="clearfix"></div>--}}
{{--                            </form>--}}

{{--                            <div class="clearfix"></div>--}}

{{--                        </div> <!-- end login -->--}}
{{--                        <div class="logo">--}}
{{--                            <img src="/assets/images/login/logo.png" height="150px" alt="logo"/>--}}
{{--                            <div class="clearfix"></div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </center>--}}

{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}
@endsection
