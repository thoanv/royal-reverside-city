@extends('admin.layouts.app')
@section('title', 'Danh sách phòng')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Danh sách phòng</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Danh sách</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-lg-12">
                @if (session('success'))
                    <div class="alert alert-success notification-submit">
                        {{ session('success') }}
                    </div>
                @endif
            </div>
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card mb-2">
                    <div class="card-body">
                        <div>
                            <h4 class="card-title">
                                Tìm kiếm
                            </h4>
                            <hr>
                        </div>
                        <form class="forms-sample" action="{{route('rooms.index')}}">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="name">Từ khóa</label>
                                        <input type="text" class="form-control" name="name" value="{{isset($request->name) ? $request->name : ''}}" id="name" placeholder="Nhập từ khóa ....">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="status">Trạng thái</label>
                                        <select name="status" id="" class="form-control">
                                            <option value="">Tất cả</option>
                                            <option {{(isset($request->status) && $request->status == 1 ) ? 'selected' : ''}} value="1">Hoạt động</option>
                                            <option {{(isset($request->status) && $request->status == 0 ) ? 'selected' : ''}} value="0">Không hoạt động</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="category">Danh mục</label>
                                        <select name="category" id="category" class="form-control">
                                            <option value="">Tất cả</option>
                                            @foreach($categories as $cate)
                                                <option {{(isset($request->category) && $request->category == $cate['id']) ? 'selected' : ''}} value="{{$cate['id']}}">{{$cate['name']}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="row mt-2">
                                <div class="col-md-3">
                                    <button type="submit" class="btn btn-primary me-2">Tìm kiếm</button>
                                    <a href="{{route('rooms.index')}}" class="btn btn-dark">Làm mới</a>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <h4 class="card-title">
                                Danh sách

                                <a href="{{route('rooms.create')}}" class="btn btn-primary btn-fw float-end">Thêm mới</a>

                            </h4>

                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col" class="text-center">STT</th>
                                    <th scope="col" >Tên phòng</th>
                                    <th scope="col" class="text-center">Hình ảnh</th>
                                    <th scope="col" class="text-center">Danh mục</th>
                                    <th scope="col" class="text-center">Ngày tạo</th>
                                    <th scope="col" class="text-center">Trạng thái</th>
                                    <th scope="col" class="text-center">Hành động</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($rooms as $item)
                                    <tr role="row">
                                        <td role="cell" class="text-center">{{$loop->iteration}}</td>
                                        <td>
                                            <div class="text-break">{{$item->name}}</div>
                                        </td>
                                        <td>
                                            <img class="img-dev-custom" src="{{$item['avatar'] ? $item['avatar'] : '/assets/images/no-image.png'}}" alt="{{$item->name}}">
                                        </td>
                                        <td class="text-center">
                                            <div class="badge badge-outline-primary badge-pill">
                                                {{$item->category->name}}
                                            </div>
                                        </td>
                                        <td role="cell" class="text-center">{{date('H:i d/m/Y', strtotime($item->created_at))}}</td>
                                        <td role="cell" class="text-center">
                                            <div class="form-check form-switch" style="display: inline-block">
                                                <input name="my-checkbox" type="checkbox" class="form-check-input css-switch" data-id="{{$item['id']}}"
                                                       data-api="{{route('enable-column')}}" data-table="posts" data-column="status"
                                                    {{ $item ['status'] ? 'checked="checked"' : '' }}>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <a href="{{route('rooms.edit', $item['id'])}}" class="btn btn-primary btn-icon-text btn-sm"><i class="mdi mdi-file-check btn-icon-prepend icon-mr"></i> Sửa</a>

                                            <form class="d-inline-block" action="{{ route('rooms.destroy', $item['id']) }}" method="POST" >
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có muốn xóa không?')"><i class="mdi mdi-delete btn-icon-prepend icon-mr"></i> Xóa</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        @if(!count($rooms))
                            @include('admin.components.data-empty')
                        @endif
                        <div class="text-center mt-3 float-end">
                            {{ $rooms->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
