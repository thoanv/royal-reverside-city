<script type="text/javascript" src="{{asset('assets/js/jquery/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery-ui/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/popper.js/popper.min.js')}}"></script>
{{--<script type="text/javascript" src="{{asset('assets/js/jquery.slim.min.js')}}"></script>--}}
<script type="text/javascript" src="{{asset('assets/js/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="{{asset('assets/js/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
<!-- modernizr js -->
<script type="text/javascript" src="{{asset('assets/js/modernizr/modernizr.js')}}"></script>
<!-- am chart -->
<script src="{{asset('assets/pages/widget/amchart/amcharts.min.js')}}"></script>
<script src="{{asset('assets/pages/widget/amchart/serial.min.js')}}"></script>
<!-- Todo js -->
<script type="text/javascript " src="{{asset('assets/pages/todo/todo.js')}}"></script>
<!-- switchery js -->
<script type="text/javascript " src="{{asset('assets/lib/switchery/js/sweetalert2.all.min.js')}}"></script>
<!-- sweetalert2 js -->
<script type="text/javascript " src="{{asset('assets/lib/sweetalert2/js/sweetalert2.all.min.js')}}"></script>
<!-- Custom js -->
<script type="text/javascript" src="{{asset('assets/pages/dashboard/custom-dashboard.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/script.js')}}"></script>
<script type="text/javascript " src="{{asset('assets/js/SmoothScroll.js')}}"></script>
<script src="{{asset('assets/js/pcoded.min.js')}}"></script>
<script src="{{asset('assets/js/demo-12.js')}}"></script>
<script src="{{asset('assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script>
    var $window = $(window);
    var nav = $('.fixed-button');
    $window.scroll(function(){
        if ($window.scrollTop() >= 200) {
            nav.addClass('active');
        }
        else {
            nav.removeClass('active');
        }
    });
</script>
<script src="{{asset('assets/js/notify.min.js')}}"></script>
<script src="{{asset('assets/js/setting.js')}}"></script>
<script src="{{asset('assets/js/nestable.js')}}"></script>
<script >
    $(document).ready(function () {

        var updateOutput = function (e) {
            var list = e.length ? e : $(e.target),
                output = list.data('output');
            if (window.JSON) {
                output.val(window.JSON.stringify(list.nestable('serialize')));//, null, 2));
            } else {
                output.val('JSON browser support required for this demo.');
            }
        };

        // activate Nestable for list 1
        $('#nestable').nestable({
            group: 1
        })
            .on('change', updateOutput);

        // activate Nestable for list 2
        $('#nestable2').nestable({
            group: 1
        })
            .on('change', updateOutput);

        // output initial serialised data
        updateOutput($('#nestable').data('output', $('#nestable-output')));
        updateOutput($('#nestable2').data('output', $('#nestable2-output')));

        $('#nestable-menu').on('click', function (e) {
            var target = $(e.target),
                action = target.data('action');
            if (action === 'expand-all') {
                $('.dd').nestable('expandAll');
            }
            if (action === 'collapse-all') {
                $('.dd').nestable('collapseAll');
            }
        });

        $('#nestable3').nestable();

    });
</script>
<script src="{{url('ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('assets/js/stand-alone-button.js')}}"></script>

<script>
    var options = {
        filebrowserImageBrowseUrl: '/admin/laravel-filemanager?type=Images',
        filebrowserImageUploadUrl: '/admin/laravel-filemanager/upload?type=Images&_token=',
        filebrowserBrowseUrl: '/admin/laravel-filemanager?type=Files',
        filebrowserUploadUrl: '/admin/laravel-filemanager/upload?type=Files&_token='
    };
    CKEDITOR.replace('content' , options)
    var route_prefix = "/admin/laravel-filemanager";
    $('.upload_image').filemanager('image', {prefix: route_prefix});
    // $('.js-example-basic-multiple').select2({
    //     placeholder: '--Chọn--'
    // });
    // $('.select-option-2').select2({
    //     tags: true,
    //     tokenSeparators: [',', ' ']
    // });
</script>
{{--<script>--}}

{{--    CKEDITOR.replace('content', {--}}
{{--        filebrowserBrowseUrl: '{{route('ckfinder_browser')}}'--}}
{{--    })--}}
{{--    CKEDITOR.replaceAll('content', {--}}
{{--        filebrowserBrowseUrl: '{{route('ckfinder_browser')}}'--}}
{{--    })--}}
{{--    CKEDITOR.on('content', function(e) {--}}
{{--        e.editor.addCss( 'body { background-color: red; }' );--}}
{{--    });--}}
{{--    $('.js-example-basic-multiple').select2({--}}
{{--        placeholder: '--Chọn--'--}}
{{--    });--}}
{{--</script>--}}

@stack('scripts')
