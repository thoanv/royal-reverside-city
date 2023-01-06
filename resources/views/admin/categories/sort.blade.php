@extends('admin.layouts.app')
@section('title', 'Sắp xếp danh mục')
@push('link-css')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/lib/nestable/nestable.css')}}">
@endpush
@section('content')
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">
                    @include('admin.components.page-header', ['title' => 'Sắp xếp thứ tự', 'breadcrumbs' => [["name" => "Danh sách Slide", 'href'=>""], ["name" => "Sắp xếp thứ tự", "href" => ""]]])
                    <div class="page-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card">
{{--                                        <div class="card-header">--}}
{{--                                            <h5>Thứ tự</h5>--}}
{{--                                            <div class="card-header-right"> <i class="icofont icofont-spinner-alt-5"></i> </div>--}}
{{--                                        </div>--}}
                                        <div class="card-block">
                                            <div id="nestable-menu">
                                                <button type="button" class="btn btn-success waves-effect waves-light m-b-10 save-nestable btn-sm" data-action="collapse-all">Cập nhật</button>
                                                <a href="{{route('categories.sort')}}" class="btn btn-info waves-effect waves-light m-b-10 btn-sm" data-action="collapse-all">ReLoad</a>
                                            </div>
                                            <hr class="my-2">
                                            <div class="row">
                                                <div class="col-lg-12 col-sm-12">
                                                    <div class="cf nestable-lists">
                                                        <div class="dd" id="nestable" style="max-width: unset">
                                                            @php
                                                                \App\Helpers\FunctionHelpers::show_categories_nestable($categories)
                                                            @endphp
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
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="{{asset('assets/lib/nestable/jquery.nestable.js')}}"></script>
    <script src="{{asset('assets/lib/nestable/custom-nestable.js')}}"></script>
    <script>
        $('.save-nestable').click(function () {

            let serialize = $('#nestable').nestable('serialize');
            $.ajax({
                url: '{{route('sort-category')}}',
                type: 'post',
                data: {
                    serialize: JSON.stringify(serialize),
                    _token: $('meta[name="csrf-token"]').attr('content')
                },
                success: function (res) {
                   if(res.success){
                       Swal.fire('Cập nhật thành công')
                   }
                }
            });
        });
    </script>
@endpush
