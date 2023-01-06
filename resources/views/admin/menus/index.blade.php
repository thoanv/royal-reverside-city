@extends('admin.layouts.app')
@section('title', 'Phân quyền')
@section('content')
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">
                    @include('admin.components.page-header', ['title' => 'Danh sách Menu', 'breadcrumbs' => [["name" => "Danh sách menu", 'href'=>""]]])
                    <div class="page-body">
                        @if (session('success'))
                            @include('admin.components.success', ['success' => session('success')])
                        @endif
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Danh sách </h5>
                                        @can('create', \App\Models\Menu::class)
                                            <div class="card-header-right">
                                                <a href="{{route('menus.create')}}"
                                                   class="btn btn-primary btn-sm waves-effect waves-light">Thêm mới</a>
                                            </div>
                                        @endcan
                                    </div>
                                    <div class="card-block">
                                        <div class="table-responsive">
                                            <table class="table table-bordered mb-0">
                                                <thead>
                                                <tr>
                                                    <th>
                                                        STT
                                                    </th>
                                                    <th>Tên</th>
                                                    <th class="text-center">Mã</th>
                                                    <th>Ngày tạo</th>
                                                    <th class="text-center">Hiển thị/Ẩn</th>
                                                    <th class="text-center">Hành động</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($menus as $item)
                                                    <tr>
                                                        <td>
                                                            <div>{{$loop->iteration}}</div>
                                                        </td>
                                                        <td><h6>{{$item['name']}}</h6></td>
                                                        <td class="text-center">
                                                            {{$item['key']}}
                                                        </td>
                                                        <td>
                                                            {{date('H:i d/m/Y', strtotime($item->created_at))}}
                                                        </td>
                                                        <td role="cell" class="text-center">
                                                            <input name="my-checkbox" type="checkbox" class="form-control js-small"
                                                                   data-id="{{$item['id']}}"
                                                                   data-api="{{route('enable-column')}}"
                                                                   data-table="menus" data-column="status"
                                                                {{ $item['status'] ? 'checked="checked"' : '' }}
                                                            />
                                                        </td>
                                                        <td class="text-center">
                                                            @can('update', $item)
                                                                <a href="{{route('menus.edit', $item)}}"
                                                                   data-toggle="tooltip"
                                                                   data-placement="top" title=""
                                                                   data-original-title="Sửa"
                                                                   class="btn btn-primary btn-mini waves-effect waves-light">
                                                                    <i class="icofont icofont-ui-edit mr-0"></i></a>
                                                            @endcan
                                                            <a href="{{route('menus.setup', $item['id'])}}"
                                                               data-toggle="tooltip"
                                                               data-placement="top" title=""
                                                               data-original-title="Cài đặt"
                                                               class="btn btn-primary btn-mini"><i class="icofont icofont-settings mr-0"></i></a>
                                                            @can('delete', $item)
                                                                <form class="d-inline-block" action="{{ route('menus.destroy', $item['id']) }}" method="POST" >
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
                                            @if(!count($menus))
                                                @include('admin.components.data-empty')
                                            @endif
                                        </div>

                                        <div class="text-center mt-2 d-flex">
                                            <div style="font-size: 12px">
                                                Tổng: {{count($menus)}} bản ghi
                                            </div>
                                            <div class="float-end" style="margin-left: auto">
                                                {{$menus->links()}}
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
    </div>
{{--    <div class="content-wrapper">--}}
{{--        <div class="page-header">--}}
{{--            <h3 class="page-title">TÊN MENU</h3>--}}
{{--            <nav aria-label="breadcrumb">--}}
{{--                <ol class="breadcrumb">--}}
{{--                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>--}}
{{--                    <li class="breadcrumb-item active" aria-current="page">Danh sách</li>--}}
{{--                </ol>--}}
{{--            </nav>--}}
{{--        </div>--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-12">--}}
{{--                @if (session('success'))--}}
{{--                    <div class="alert alert-success notification-submit">--}}
{{--                        {{ session('success') }}--}}
{{--                    </div>--}}
{{--                @endif--}}
{{--            </div>--}}
{{--            <div class="col-lg-12 grid-margin stretch-card">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-body">--}}
{{--                        <div>--}}
{{--                            <h4 class="card-title">--}}
{{--                                Danh sách--}}
{{--                                @can('create', \App\Models\Menu::class)--}}
{{--                                <a href="{{route('menus.create')}}" class="btn btn-primary btn-fw float-end">Thêm mới</a>--}}
{{--                                @endcan--}}
{{--                            </h4>--}}

{{--                        </div>--}}
{{--                        <div class="table-responsive">--}}
{{--                            <table class="table">--}}
{{--                                <thead>--}}
{{--                                <tr>--}}
{{--                                    <th scope="col" class="text-center">STT</th>--}}
{{--                                    <th scope="col" class="text-center">Tên</th>--}}
{{--                                    <th scope="col" class="text-center">Mã</th>--}}
{{--                                    <th scope="col" class="text-center">Ngày tạo</th>--}}
{{--                                    <th scope="col" class="text-center">Trạng thái</th>--}}
{{--                                    <th scope="col" class="text-center">Hành động</th>--}}
{{--                                </tr>--}}
{{--                                </thead>--}}
{{--                                <tbody>--}}
{{--                                @foreach($menus as $menu)--}}
{{--                                    <tr role="row" class="text-center">--}}
{{--                                        <td role="cell" class="">{{$loop->iteration}}</td>--}}
{{--                                        <td role="cell" class="">{{$menu->name}}</td>--}}
{{--                                        <td role="cell" class="">{{$menu->key}}</td>--}}
{{--                                        <td role="cell">{{date('H:i d/m/Y', strtotime($menu->created_at))}}</td>--}}
{{--                                        <td role="cell" class="">--}}
{{--                                            <div class="form-check form-switch" style="display: inline-block">--}}
{{--                                                <input name="my-checkbox" type="checkbox" class="form-check-input css-switch" data-id="{{$menu['id']}}"--}}
{{--                                                       data-api="{{route('enable-column')}}" data-table="menus" data-column="status"--}}
{{--                                                    {{ $menu['status'] ? 'checked="checked"' : '' }}>--}}
{{--                                            </div>--}}

{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            @can('update', $menu)--}}
{{--                                                <a href="{{route('menus.edit', $menu['id'])}}" class="btn btn-primary btn-icon-text"><i class="mdi mdi-file-check btn-icon-prepend icon-mr"></i> Sửa</a>--}}
{{--                                            @endcan--}}
{{--                                            <a href="{{route('menus.setup', $menu['id'])}}" class="btn btn-primary btn-icon-text"><i class="mdi mdi-wrench btn-icon-prepend icon-mr"></i> Cài đặt</a>--}}

{{--                                            <form class="d-inline-block" action="{{ route('menus.destroy', $menu['id']) }}" method="POST" >--}}
{{--                                                @csrf--}}
{{--                                                @method('DELETE')--}}
{{--                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa không?')"><i class="mdi mdi-delete btn-icon-prepend icon-mr"></i> Xóa</button>--}}
{{--                                            </form>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                @endforeach--}}
{{--                                </tbody>--}}
{{--                            </table>--}}
{{--                        </div>--}}
{{--                        @if(!count($menus))--}}
{{--                            @include('admin.components.data-empty')--}}
{{--                        @endif--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection
