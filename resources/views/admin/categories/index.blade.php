@extends('admin.layouts.app')
@section('title', 'Danh mục')
@section('content')
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">
                    @include('admin.components.page-header', ['title' => 'Danh sách Slide', 'breadcrumbs' => [["name" => "Danh sách Slide", 'href'=>""]]])
                    <div class="page-body">
                        @if (session('success'))
                            @include('admin.components.success', ['success' => session('success')])
                        @endif
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Danh sách </h5>
                                        @can('create', \App\Models\Category::class)
                                            <div class="card-header-right">
                                                <a href="{{route('categories.create')}}"
                                                   class="btn btn-primary btn-sm waves-effect waves-light">Thêm mới</a>
                                            </div>
                                        @endcan
                                    </div>
                                    <div class="card-block">
                                        <div class="table-responsive">
                                            <table class="table mb-0 table-bordered">
                                                <thead>
                                                <tr>
                                                    <th scope="col">STT</th>
                                                    <th scope="col">Tên</th>
                                                    <th scope="col" class="text-center">Danh mục cha</th>
                                                    <th scope="col" class="text-center">Hình ảnh</th>
                                                    <th scope="col" class="text-center">Tảo bởi</th>
                                                    <th scope="col" class="text-center">Ẩn/Hiển thị</th>
                                                    <th scope="col" class="text-center">Nổi bật</th>
                                                    <th scope="col" class="text-center">Hành động</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($categories as $item)
                                                    <tr role="row">
                                                        <td role="cell">{{$loop->iteration}}</td>
                                                        <td role="cell">
                                                            @php
                                                                $str = '';
                                                                for($i = 0; $i< $item->level; $i++){
                                                                    echo $str;
                                                                    $str.='-- ';
                                                                }
                                                            @endphp
                                                            {{$item->name}}
                                                        </td>
                                                        <td role="cell" class="text-center">
                                                            <span class="badge rounded-pill bg-primary p-2">{{$item->parent_id ? $item->parent->name : '...' }}</span></td>
                                                        <td role="cell" class="text-center"><img class="img-show-inner-table"
                                                                             src="{{$item['avatar'] ? $item['image'] : '/assets/images/no-image.png'}}"
                                                                             alt="{{$item['name']}}"></td>
                                                        <td role="cell" class="text-center">
                                                            <span class="badge rounded-pill bg-danger p-2">{{$item->createdBy->name}}</span></td>
                                                        <td role="cell" class="text-center">
                                                            <input name="my-checkbox" type="checkbox" class="form-control js-small"
                                                                   data-id="{{$item['id']}}"
                                                                   data-api="{{route('enable-column')}}"
                                                                   data-table="categories" data-column="status"
                                                                {{ $item['status'] ? 'checked="checked"' : '' }}
                                                            />
                                                        </td>
                                                        <td role="cell" class="text-center">
                                                            <input name="my-checkbox" type="checkbox" class="form-control js-small"
                                                                   data-id="{{$item['id']}}"
                                                                   data-api="{{route('enable-column')}}"
                                                                   data-table="categories" data-column="featured"
                                                                {{ $item['featured'] ? 'checked="checked"' : '' }}
                                                            />
                                                        </td>
                                                        <td class="text-center">
                                                            @can('update', $item)
                                                                <a href="{{route('categories.edit', $item)}}" data-toggle="tooltip"
                                                                   data-placement="top" title=""
                                                                   data-original-title="Sửa"
                                                                   class="btn btn-primary btn-mini waves-effect waves-light">
                                                                    <i class="icofont icofont-ui-edit mr-0"></i></a>
                                                            @endcan
                                                            @can('delete', $item)
                                                                <form class="d-inline-block" action="{{ route('categories.destroy', $item['id']) }}" method="POST" >
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" data-toggle="tooltip" onclick="return confirm('Bạn có muốn xóa không?')"
                                                                            data-placement="top" title=""
                                                                            data-original-title="Xóa"
                                                                            class="btn btn-danger btn-mini waves-effect waves-light">
                                                                        <i class="icofont icofont-ui-delete mr-0"></i></button>
                                                                </form>
                                                            @endcan
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                            @if(!count($categories))
                                                @include('admin.components.data-empty')
                                            @endif
                                        </div>
                                        <div class="text-center mt-2 d-flex">
                                            <div style="font-size: 12px">
                                                Tổng: {{count($categories)}} bản ghi
                                            </div>
{{--                                            <div class="float-end" style="margin-left: auto">--}}
{{--                                                {{$categories->links()}}--}}
{{--                                            </div>--}}
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
