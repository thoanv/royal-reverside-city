<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Thông tin chung</h5>
                    <hr>
                    <div class="form-group row mb-3">
                        <label for="title_font" class="col-sm-3 col-form-label">Tên danh mục</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="name" placeholder="" name="name"
                                   value="{{old('name', $category['name'])}}">
                            @if ($errors->has('name'))
                                <div class="mt-1 notification-error">
                                    {{$errors->first('name')}}
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="parent_id" class="col-sm-3 col-form-label">Danh mục</label>
                        <div class="col-sm-9">
                            <select name="parent_id" id="parent_id" class="form-control">
                                <option value="">--Root--</option>
                                @foreach($categories as $key => $value)
                                    <option
                                        value="{{$value['id']}}" {{$value['id'] == $category['parent_id'] ? 'selected': ''}}>
                                        @php
                                            $str = '';
                                            for($i = 0; $i< $value->level; $i++){
                                                echo $str;
                                                $str.='-- ';
                                            }
                                        @endphp
                                        {{$value['name']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="type" class="col-sm-3 col-form-label">Thể loại</label>
                        <div class="col-sm-9">
                            <select name="type" id="type" class="form-control">
                                <option {{$category['type'] == 'product' ? 'selected' : ''}} value="product">Sản phẩm</option>
                                <option {{$category['type'] == 'posts' ? 'selected' : ''}} value="posts">Tin tức</option>
                                <option {{$category['type'] == 'policy' ? 'selected' : ''}} value="policy">Chính sách
                                </option>
                                <option {{$category['type'] == 'contact' ? 'selected' : ''}} value="contact">Liên hệ
                                </option>
                                <option {{$category['type'] == 'tutorial' ? 'selected' : ''}} value="tutorial">Hướng dẫn
                                </option>
                                <option {{$category['type'] == 'introduce' ? 'selected' : ''}} value="introduce">Giới
                                    thiệu
                                </option>
                            </select>
                            @if ($errors->has('type'))
                                <div class="mt-1 notification-error">
                                    {{$errors->first('type')}}
                                </div>
                            @endif
                        </div>
                    </div>

                </div>

            </div>
            <div class="card mt-4">
                <div class="card-body">
                    <h5 class="card-title">Mô tả</h5>
                    <hr>
                    <div class="form-group">
                        <textarea class="form-control content" id="content"
                                  name="description">{!! $category['description'] !!}</textarea>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Chức năng</h5>
                    <hr>
                    <div class="checkbox-fade fade-in-primary">
                        <label class="mb-0">
                            <input type="checkbox" {{$category['status'] ? "checked" : ''}} value="{{$category['status']}}" name="status">
                            <span class="cr"><i
                                    class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                            <span class="text-inverse">Ẩn/Hiển thị</span>
                        </label>
                    </div>
                    <div class="checkbox-fade fade-in-primary">
                        <label class="mb-0">
                            <input type="checkbox" {{$category['featured'] ? "checked" : ''}} value="{{$category['featured']}}" name="featured">
                            <span class="cr"><i
                                    class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                            <span class="text-inverse">Nổi bật</span>
                        </label>
                    </div>
                    <hr>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary me-2" value="save&amp;exit">Lưu</button>
                        <a href="{{route('categories.index')}}" class="btn btn-dark">Quay lại</a>
                    </div>
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="card-title">Ảnh đại diện</h5>
                    <hr>
                    <div class="form-group">
                        <div class="upload_image" data-name="avatar">
                            <input type="hidden" class="avatar" name="avatar"
                                   value="{{old('avatar', $category['avatar'])}}">
                            <img
                                src="{{$category['avatar'] ? old('avatar', $category['avatar']) : (old('avatar') ? old('avatar') : '/assets/images/department.jpg')}}"
                                width="180px" alt="" class="image-avatar">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


