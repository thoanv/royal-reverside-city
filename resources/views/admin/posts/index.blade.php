@extends('admin.layouts.app')
@section('title', 'Tin tức')
@section('content')
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">
                    @include('admin.components.page-header', ['title' => 'Danh sách Tin tức', 'breadcrumbs' => [["name" => "Danh sách Tin tức", 'href'=>""]]])
                    <div class="page-body">
                        <div class="row">

                            <div class="col-lg-12 grid-margin stretch-card">
                                <div class="card mb-2">
                                    <div class="card-body">
                                        <div>
                                            <h4 class="card-title">
                                                Tìm kiếm
                                            </h4>
                                            <hr>
                                        </div>
                                        <form class="forms-sample" action="{{route('posts.index')}}">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="name">Từ khóa</label>
                                                        <input type="text" class="form-control" name="name"
                                                               value="{{isset($request->name) ? $request->name : ''}}"
                                                               id="name" placeholder="Nhập từ khóa ....">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="status">Trạng thái</label>
                                                        <select name="status" id="" class="form-control">
                                                            <option value="">Tất cả</option>
                                                            <option
                                                                {{(isset($request->status) && $request->status == 1 ) ? 'selected' : ''}} value="1">
                                                                Hoạt động
                                                            </option>
                                                            <option
                                                                {{(isset($request->status) && $request->status == 0 ) ? 'selected' : ''}} value="0">
                                                                Không hoạt động
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-md-3">
                                                    <button type="submit" class="btn btn-primary me-2">Tìm kiếm
                                                    </button>
                                                    <a href="{{route('posts.index')}}" class="btn btn-dark">Làm
                                                        mới</a>
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Danh sách </h5>
                                        @can('create', \App\Models\Post::class)
                                            <div class="card-header-right">
                                                <a href="{{route('posts.create')}}"
                                                   class="btn btn-primary btn-sm waves-effect waves-light">Thêm mới</a>
                                            </div>
                                        @endcan
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th scope="col" class="text-center">STT</th>
                                                    <th scope="col">Tên bài viết</th>
                                                    <th scope="col" class="text-center">Hình ảnh</th>
                                                    <th scope="col" class="text-center">Lượt xem</th>
                                                    <th scope="col" class="text-center">Ngày tạo</th>
                                                    <th scope="col" class="text-center">Trạng thái</th>
                                                    <th scope="col" class="text-center">Hành động</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($posts as $item)
                                                    <tr role="row">
                                                        <td role="cell" class="text-center">{{$loop->iteration}}</td>
                                                        <td>
                                                            <div class="text-break">{{$item->name}}</div>
                                                        </td>
                                                        <td class="text-center">
                                                            <img class="img-dev-custom"
                                                                 src="{{$item['avatar'] ? $item['avatar'] : '/assets/images/no-image.png'}}"
                                                                 alt="{{$item->name}}">
                                                        </td>

                                                        <td class="text-center">
                                                            {{$item->view}}
                                                        </td>
                                                        <td role="cell"
                                                            class="text-center">{{date('H:i d/m/Y', strtotime($item->created_at))}}</td>
                                                        <td role="cell" class="text-center">
                                                            <input name="my-checkbox" type="checkbox" class="form-control js-small"
                                                                   data-id="{{$item['id']}}"
                                                                   data-api="{{route('enable-column')}}"
                                                                   data-table="posts" data-column="status"
                                                                {{ $item['status'] ? 'checked="checked"' : '' }}
                                                            />
                                                        </td>
                                                        <td class="text-center">
                                                                @can('update', $item)
                                                                    <a href="{{route('posts.edit', $item['id'])}}"
                                                                       class="btn btn-primary btn-icon-text btn-sm"><i
                                                                            class="mdi mdi-file-check btn-icon-prepend icon-mr"></i>
                                                                        Sửa</a>
                                                                @endcan
                                                                @can('delete', $item)
                                                                    <form class="d-inline-block"
                                                                          action="{{ route('posts.destroy', $item['id']) }}"
                                                                          method="POST">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit"
                                                                                class="btn btn-danger btn-sm"
                                                                                onclick="return confirm('Bạn có muốn xóa không?')">
                                                                            <i class="mdi mdi-delete btn-icon-prepend icon-mr"></i>
                                                                            Xóa
                                                                        </button>
                                                                    </form>
                                                                @endcan
{{--                                                            <a href="{{route('posts.showDetail', ['post' => $item['id'], 'type' => 'index'])}}"--}}
{{--                                                               class="btn btn-primary btn-icon-text btn-sm"><i--}}
{{--                                                                    class="mdi mdi-eye btn-icon-prepend icon-mr"></i>--}}
{{--                                                                Xem</a>--}}

                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        @if(!count($posts))
                                            @include('admin.components.data-empty')
                                        @endif
                                        <div class="text-center mt-3 float-end">
                                            {{ $posts->links() }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
