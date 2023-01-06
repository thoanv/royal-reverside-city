<div class="row">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-7">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Thông tin chung</h5>
                    <hr>
                    <div class="form-group row mb-3">
                        <label for="title_font" class="col-sm-3 col-form-label">Điểm đến</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="name" placeholder="" name="name" value="{{old('name', $destination['name'])}}">
                            @if ($errors->has('name'))
                                <div class="mt-1 notification-error">
                                    {{$errors->first('name')}}
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
                        <textarea class="form-control content"
                                  name="description">{!! $destination['description'] !!}</textarea>
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
                                   {{$destination['status'] ? "checked" : ''}} value="{{$destination['status']}}" name="status">
                            Trạng thái <i class="input-helper"></i></label>
                    </div>
                    <div class="form-check form-check-flat form-check-primary mb-4">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input"
                                   {{$destination['featured'] ? "checked" : ''}} value="{{$destination['featured']}}" name="featured">
                            Nổi bật <i class="input-helper"></i></label>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary me-2" value="save&amp;exit">Lưu</button>
                        <a href="{{route('destinations.index')}}" class="btn btn-dark">Quay lại</a>
                    </div>
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="card-title">Ảnh đại diện</h5>
                    <hr>
                    <div class="form-group">
                        <div class="upload_image" data-name="avatar">
                            <input type="hidden" class="avatar" name="avatar" value="{{old('avatar', $destination['avatar'])}}">
                            <img src="{{$destination['avatar'] ? old('avatar', $destination['avatar']) : (old('avatar') ? old('avatar') : '/assets/images/department.jpg')}}" width="180px" alt="" class="image-avatar">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


</div>

