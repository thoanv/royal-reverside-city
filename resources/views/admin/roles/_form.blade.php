<div class="email-wrap">
    <div class="row">
        <div class="col-md-4 grid-margin">
            <div class="mb-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Thông tin chức vụ</h4>
                        <hr>
                        <div class="form-group">
                            <label for="position">Chức vụ</label>
                            <input type="text" class="form-control" id="position" name="name" placeholder="Nhân viên,..."
                                   value="{{$role ? $role->name : old('name')}}">
                            @if ($errors->has('name'))
                                <div class="mt-1 notification-error">
                                    {{$errors->first('name')}}
                                </div>
                            @endif
                        </div>
                        <hr>
                        <p><i class="red">Hướng dẫn: tạo tên những chức vụ và cung cấp những quyền phù hợp cho
                                nhân viên đó.</i></p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Thông tin cá nhân</h4>
                    <hr>
                    <p><i class="mdi mdi-account"></i> {{$employee->name}}</p>
                    <p><i class="mdi mdi-email"></i> {{$employee->email}}</p>
                    @if($employee->phone)
                        <p><i class="mdi mdi-cellphone-iphone"></i> {{$employee->phone}}</p>
                    @endif
                    <p><i class="mdi mdi-login"></i> {{$employee->username}}</p>
                    @if($employee->phone)
                        <p><i class="mdi mdi-map-marker-radius"></i> {{$employee->address}}</p>
                    @endif
                    <p title="Tham gia"><i
                            class="mdi mdi-timer"></i> {{date('H:i d/m/Y', strtotime($employee['created_at']))}}</p>
                </div>
            </div>
        </div>


        <div class="col-md-8 grid-margin">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Danh sách quyền</h4>
                            <hr>
                            @foreach($permissions  as $permission)
                                <div class="mb-3 ">
                                    <p class="font-weight-bold">{{$permission['type_name']}}</p>
                                    @if(count($permission['childPermissions']))
                                        <div style="margin-left: 10px">
                                            @foreach($permission['childPermissions'] as $key_per => $per)
                                                <div class="form-check checkbox checkbox-primary mb-0">
                                                    <input class="form-check-input"
                                                           {{$per->active ? 'checked' : ''}} name="select_pre[]"
                                                           id="checkbox-primary-{{$per['id']}}" type="checkbox"
                                                           value="{{$per['id']}}">
                                                    <label class="form-check-label"
                                                           for="checkbox-primary-{{$per['id']}}">{{$per['name']}}</label>
                                                </div>
                                            @endforeach
                                        </div>
                                    @endif
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-3">
                    <div class="card ">
                        <div class="card-body">
                            <div class="my-3 text-center">
                                <button type="submit" class="btn btn-primary me-2">Lưu</button>
                                <a href="{{route('employees.index')}}" class="btn btn-dark">Quay lại</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
