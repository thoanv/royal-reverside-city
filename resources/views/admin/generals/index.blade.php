@extends('admin.layouts.app')
@section('title', 'Thông tin chung')
@section('content')
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">
                    @include('admin.components.page-header', ['title' => 'Thông tin Website', 'breadcrumbs' => [["name" => "Thông tin website", 'href'=>""]]])
                    <div class="page-body">
                        @if (session('success'))
                            @include('admin.components.success', ['success' => session('success')])
                        @endif
                        <form class="form-submit" action="{{route('generals.update', $general)}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="row">
                            <div class="col-lg-4 col-xl-4">
                                <div class="card">
                                    <div class="card-block">
                                        <ul class="nav nav-tabs md-tabs tabs-left b-none" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active font-weight-bold" data-toggle="tab" href="#tab1"
                                                   role="tab">Thông tin website</a>
                                                <div class="slide"></div>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link font-weight-bold" data-toggle="tab" href="#tab2"
                                                   role="tab">Media</a>
                                                <div class="slide"></div>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link font-weight-bold" data-toggle="tab" href="#tab3"
                                                   role="tab">Seo Website</a>
                                                <div class="slide"></div>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link font-weight-bold" data-toggle="tab" href="#tab4"
                                                   role="tab">Mạng xã hội</a>
                                                <div class="slide"></div>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link font-weight-bold" data-toggle="tab" href="#tab5"
                                                   role="tab">Google Analytics</a>
                                                <div class="slide"></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-xl-8">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab1" role="tabpanel">
                                                <div class="row form-group">
                                                    <div class="col-sm-3">
                                                        <label class="col-form-label label-right">Tiêu đề:</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control"  placeholder="" name="site_name" value="{{old('site_name', $general['site_name'])}}">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-sm-3">
                                                        <label class="col-form-label label-right">Email:</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="email" value="{{old('email', $general['email'])}}">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-sm-3">
                                                        <label class="col-form-label label-right">Số điện thoại:</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="phone" value="{{old('phone', $general['phone'])}}" >
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-sm-3">
                                                        <label class="col-form-label label-right">Fax:</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control"  name="fax" value="{{old('fax', $general['fax'])}}">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-sm-3">
                                                        <label class="col-form-label label-right">Mã số thuế:</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="tax_code" value="{{old('tax_code', $general['tax_code'])}}">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-sm-3">
                                                        <label class="col-form-label label-right" >Địa chỉ:</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="address" value="{{old('address', $general['address'])}}" >
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-sm-3">
                                                        <label class="col-form-label label-right">Bộ công thương:</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="bo_cong_thuong" value="{{old('bo_cong_thuong', $general['bo_cong_thuong'])}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab2" role="tabpanel">
                                                <div class="row form-group">
                                                    <div class="col-sm-4">
                                                        <label class="col-form-label font-weight-bold">Logo</label>
                                                        <div class="upload_image" data-name="logo">
                                                            <input type="hidden" class="logo" name="logo" value="{{old('logo', $general['logo'])}}">
                                                            <img src="{{$general['logo'] ? $general['logo'] : '/assets/images/department.jpg'}}" alt="" class="image-logo">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label class="col-form-label font-weight-bold">Favicon</label>
                                                        <div class="upload_image" data-name="favicon">
                                                            <input type="hidden" class="favicon" name="favicon" value="{{old('favicon', $general['favicon'])}}">
                                                            <img src="{{$general['favicon'] ? $general['favicon'] : '/assets/images/department.jpg'}}"  alt="" class="image-favicon">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label class="col-form-label font-weight-bold">Thumbnail</label>
                                                        <div class="upload_image" data-name="thumbnail">
                                                            <input type="hidden" class="thumbnail" name="thumbnail" value="{{old('thumbnail', $general['thumbnail'])}}">
                                                            <img src="{{$general['thumbnail'] ? $general['thumbnail'] : '/assets/images/department.jpg'}}"  alt="" class="image-thumbnail">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-sm-3">
                                                        <label for="video_intro" class="col-form-label label-right">Video giới thiệu:</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="video_intro" name="video_intro" value="{{$general['video_intro']}}">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="tab-pane" id="tab3" role="tabpanel">
                                                <div class="row form-group">
                                                    <div class="col-sm-3">
                                                        <label class="col-form-label label-right">Keywords:</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="meta_keywords" value="{{old('meta_keywords', $general['meta_keywords'])}}">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-sm-3">
                                                        <label for="meta_description" class="col-form-label label-right">Mô tả:</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <textarea rows="12" cols="70" id="meta_description" class="form-control" name="meta_description">{!! $general['meta_description'] !!}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab4" role="tabpanel">
                                                <div class="row form-group">
                                                    <div class="col-sm-3">
                                                        <label class="col-form-label label-right">Facebook:</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="facebook" value="{{old('facebook', $general['facebook'])}}" >
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-sm-3">
                                                        <label class="col-form-label label-right">Twitter:</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="twitter" value="{{old('twitter', $general['twitter'])}}" >
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-sm-3">
                                                        <label class="col-form-label label-right">Youtube:</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="youtube" value="{{old('youtube', $general['youtube'])}}" >
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-sm-3">
                                                        <label class="col-form-label label-right">TikTok:</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="tiktok" value="{{old('tiktok', $general['tiktok'])}}" >
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-sm-3">
                                                        <label class="col-form-label label-right">Instagram:</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="instagram" value="{{old('instagram', $general['instagram'])}}" >
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-sm-3">
                                                        <label for="facebook_page" class="col-form-label label-right">Page Facebook:</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <textarea rows="9" cols="70" id="facebook_page" class="form-control" name="facebook_page">{!! $general['facebook_page'] !!}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab5" role="tabpanel">
                                                <div class="row form-group">
                                                    <div class="col-sm-3">
                                                        <label for="google_analytics" class="col-form-label label-right">Paste Code:</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <textarea rows="12" cols="70" id="google_analytics" class="form-control" name="google_analytics">{!! $general['google_analytics'] !!}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-xl-4">

                            </div>
                            <div class="col-lg-8 col-xl-8">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="tab-content d-flex justify-content-center">
                                            <button type="submit" class="btn btn-primary btn-round">Cập nhật</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection
