<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Thông tin chung</h5>
                <hr>
                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Tên</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="name" placeholder="Vui lòng nhập tên..." name="name"
                               value="{{old('name', $menu['name'])}}">
                        @if ($errors->has('name'))
                            <div class="mt-1 notification-error">
                                {{$errors->first('name')}}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="title" class="col-sm-3 col-form-label">Mã</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="key" name="key" value="{{old('key', $menu['key'])}}"
                               placeholder="Mã menu (menu-header)" {{isset($menu['id']) ? 'disabled' : ''}}>
                        @if ($errors->has('key'))
                            <div class="mt-1 notification-error">
                                {{$errors->first('key')}}
                            </div>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Ẩn/Hiển thị</label>
                    <div class="col-sm-9">
                        <div class="checkbox-fade fade-in-primary">
                            <label>
                                <input type="checkbox" {{$menu['status'] ? "checked" : ''}} value="{{$menu['status']}}" name="status">
                                <span class="cr"><i
                                        class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mt-4">
            <div class="card-body">
                <div class="text-center">
                    <button type="submit" class="btn btn-primary me-2">Lưu</button>
                    <a href="{{route('menus.index')}}" class="btn btn-dark">Quay lại</a>
                </div>
            </div>
        </div>
    </div>

</div>

