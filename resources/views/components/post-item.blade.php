<div class="gallery-col col" data-animate="fadeInLeft">
    <div class="col-inner">
        <a class="image-lightbox lightbox-gallery"
           href="{{route('post-detail', $post['slug'])}}"
           title="">
            <div class="box has-hover gallery-box box-normal">
                <div class="box-image image-zoom image-cover"
                     style="padding-top:75%;">
                    <img width="1261" height="589"
                         src="{{$post['avatar']}}"
                         class="attachment-original size-original"
                         alt=""/>
                </div>
                <div class="box-text text-left pb-0">
                    <div class="box-text-inner blog-post-inner text-center">
                        <h5 class="post-title is-large ">{{$post['name']}}</h5>
                        <div class="post-meta is-small op-8">{{$post->getDate()}}
                        </div>
                        <div class="is-divider mt-1"></div>
                        <p class="from_the_blog_excerpt ">{{$post['description']}} </p>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>

{{--<div class='smallBlock'>--}}
{{--    <div class='specialBlock_4'>--}}
{{--        <a class='imgPart figure2' href=''>--}}
{{--            <img alt='{{$post['name']}}' loading='lazy'--}}
{{--                 src='{{$post['avatar']}}'>--}}
{{--        </a>--}}
{{--        <div class='textPart'>--}}
{{--            <div class='part_1'>--}}
{{--                <a class='text'>--}}
{{--                    <i aria-hidden='true' class='fa fa-clock-o'></i>--}}
{{--                    <i class='iTagText'> {{date('d-m-Y', strtotime($post['created_at']))}}</i>--}}
{{--                </a>--}}
{{--                <a class='text' href=''>--}}
{{--                    <i aria-hidden='true' class='fa fa-newspaper-o'></i>--}}
{{--                    <i class='iTagText'>{{$post->category->name}}</i>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <a class='aTagTitle' href='{{route('slug',['category_slug' => $post->category->slug, 'slug' => $post['slug']])}}'>--}}
{{--                <p class='titleNews'>{{$post['name']}}</p>--}}
{{--            </a>--}}
{{--            <p class='description'>{{$post['description']}}</p>--}}
{{--            <style>--}}
{{--                .highlightPostBlock .description{--}}
{{--                    display: -webkit-box;--}}
{{--                    -webkit-line-clamp: 4;--}}
{{--                    -webkit-box-orient: vertical;--}}
{{--                    overflow: hidden;--}}
{{--                    text-overflow: ellipsis;--}}
{{--                }--}}
{{--            </style>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
