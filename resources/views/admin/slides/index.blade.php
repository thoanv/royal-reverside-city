@extends('admin.layouts.app')
@section('title', 'Danh sách')
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
                                        @can('create', \App\Models\Slide::class)
                                        <div class="card-header-right">
                                            <a href="{{route('slides.create')}}"
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
                                                        <div>STT</div>
                                                    </th>
                                                    <th>Tên</th>
                                                    <th class="text-center">Hình ảnh</th>
                                                    <th>Đường dẫn</th>
                                                    <th class="text-center">Hiển thị/Ẩn</th>
                                                    <th class="text-center">Hành động</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($slides as $item)
                                                    <tr>
                                                        <td>
                                                            <div>{{$loop->iteration}}</div>
                                                        </td>
                                                        <td><h6>{{$item['title']}}</h6></td>
                                                        <td class="text-center">
                                                            <img class="img-show-inner-table"
                                                                 src="{{$item['image'] ? $item['image'] : '/assets/images/no-image.png'}}"
                                                                 alt="{{$item['title']}}">
                                                        </td>
                                                        <td>
                                                            @if($item['url'])
                                                            <a target="_blank" href="{{$item['url']}}">{{$item['url']}}</a>
                                                            @endif
                                                        </td>
                                                        <td role="cell" class="text-center">
                                                            <input name="my-checkbox" type="checkbox" class="form-control js-small"
                                                                   data-id="{{$item['id']}}"
                                                                   data-api="{{route('enable-column')}}"
                                                                   data-table="slides" data-column="status"
                                                                {{ $item['status'] ? 'checked="checked"' : '' }}
                                                            />
                                                        </td>
                                                        <td class="text-center">
                                                            @can('update', $item)
                                                            <a href="{{route('slides.edit', $item)}}" data-toggle="tooltip"
                                                                    data-placement="top" title=""
                                                                    data-original-title="Sửa"
                                                                    class="btn btn-primary btn-mini waves-effect waves-light">
                                                                <i class="icofont icofont-ui-edit mr-0"></i></a>
                                                            @endcan
                                                            @can('delete', $item)
                                                                <form class="d-inline-block" action="{{ route('slides.destroy', $item['id']) }}" method="POST" >
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
                                            @if(!count($slides))
                                                @include('admin.components.data-empty')
                                            @endif
                                        </div>

                                        <div class="text-center mt-2 d-flex">
                                            <div style="font-size: 12px">
                                                Tổng: {{count($slides)}} bản ghi
                                            </div>
                                            <div class="float-end" style="margin-left: auto">
                                                {{$slides->links()}}
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
@endsection
