<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-7">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Thông tin chung</h5>
                <hr>
                <div class="form-group row mb-3">
                    <label for="name" class="col-sm-3 col-form-label">Tên phòng</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="name" placeholder="Phòng 01" name="name"
                               value="{{old('name', $room['name'])}}">
                        @if ($errors->has('name'))
                            <div class="mt-1 notification-error">
                                {{$errors->first('name')}}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="category_id" class="col-sm-3 col-form-label">Danh mục</label>
                    <div class="col-sm-9">
                        <select class="form-control" id="category_id"
                                name="category_id" style="width: 100%">
                            <option value="">--Chọn--</option>
                            @foreach($categories as $category)
                                <option {{($category['id'] == old('category_id', $room['category_id']) ? 'selected="selected"' : '') ? 'selected' : '' }}
                                        value="{{$category['id']}}">{{$category['name']}}</option>
                            @endforeach
                        </select>

                        @if ($errors->has('category_id'))
                            <div class="mt-1 notification-error">
                                {{$errors->first('category_id')}}
                            </div>
                        @endif
                    </div>
                </div>

                <div class="form-group row mb-3">
                    <label for="price_h" class="col-sm-3 col-form-label">Giá ngày</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="price_h" placeholder="300.000VND/2h" name="price_h"
                               value="{{old('price_h', $room['price_h'])}}">
                        @if ($errors->has('price_h'))
                            <div class="mt-1 notification-error">
                                {{$errors->first('price_h')}}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="price_h" class="col-sm-3 col-form-label">Giá qua đêm</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="price_d" placeholder="600.000VND" name="price_d"
                               value="{{old('price_d', $room['price_d'])}}">
                        @if ($errors->has('price_d'))
                            <div class="mt-1 notification-error">
                                {{$errors->first('price_d')}}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">Hình ảnh</h5>
                <hr>
                <div class="multiple_images row">
                    @if(isset($images) && !empty($images))
                        @foreach($images as $image)
                            <div class="img col-md-2 col-sm-6 col-xs-6">
                                <div class="box-image-show">
                                    <img src="{{$image['url']}}" width="100%" alt="">
                                    <a href="javascript:;" class="remove-image">
                                        <i class="mdi mdi-delete btn-icon-prepend"></i>
                                    </a>
                                    <input type="hidden" name="gallery[]" value="{{$image['url']}}">
                                </div>
                            </div>
                        @endforeach
                    @endif
                    <div class="col-md-2 col-sm-6 col-xs-6">
                        <div class="box-image">
                            <i size="40" class="mdi mdi-plus"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">Nội dung & Mô tả</h5>
                <hr>
                <div class="form-group">
                    <label for="">Mô tả</label>
                    <textarea  rows="5" cols="70" id="description" class="form-control"
                               name="description">{!! old('description', $room['description']) !!}</textarea>
                    @if ($errors->has('description'))
                        <div class="mt-1 notification-error">
                            {{$errors->first('description')}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="">Nội dung</label>
                    <textarea  rows="5" cols="70" id="content" class="form-control content"
                               name="content">{!! old('content', $room['content']) !!}</textarea>
                    @if ($errors->has('content'))
                        <div class="mt-1 notification-error">
                            {{$errors->first('content')}}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Chức năng</h5>
                <hr>
                <div class="form-check form-check-flat form-check-primary mb-4">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input"
                               {{$room['status'] ? "checked" : ''}} value="{{$room['status']}}" name="status">
                        Trạng thái <i class="input-helper"></i></label>
                </div>
                <div class="form-check form-check-flat form-check-primary mb-4">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input"
                               {{$room['featured'] ? "checked" : ''}} value="{{$room['featured']}}" name="featured">
                        Nổi bật <i class="input-helper"></i></label>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary me-2" value="save&amp;exit">Lưu</button>
                    <a href="{{route('posts.index')}}" class="btn btn-dark">Quay lại</a>
                </div>
            </div>
        </div>
        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title">Ảnh đại diện</h5>
                <hr>
                <div class="form-group">
                    <div class="upload_image" data-name="avatar">
                        <input type="hidden" class="avatar" name="avatar" value="{{old('avatar', $room['avatar'])}}">
                        <img src="{{$room['avatar'] ? old('avatar', $room['avatar']) : (old('avatar') ? old('avatar') : '/assets/images/department.jpg')}}" width="180px" alt="" class="image-avatar">
                    </div>
                    @if ($errors->has('avatar'))
                        <div class="mt-1 notification-error">
                            {{$errors->first('avatar')}}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
