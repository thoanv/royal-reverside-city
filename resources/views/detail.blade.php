@extends('layouts.app')
@section('title', $post['name'])
@section('content')
    <main id="main" class="">
        <div id="content" role="main">
            <section class="section">
                <div class="section-content relative">
                    <div class="row align-center">
                        <div class="col medium-12 small-12 large-8">
                            <div class="col-inner" style="padding:0px 20px 0px 20px;margin:50px 0px 0px 0px;">
                                <h1><span style="color: #105458; font-size: 110%;">{{$post['name']}}</span>
                                </h1>
                                <div class="entry-meta">
                                    <span class="posted-on">
                                        Thời gian: {{$post->getDate()}}
                                    </span>
                                </div>
                                <div class="avatar">
                                    <img src="{{$post['avatar']}}" alt="{{$post['name']}}">
                                </div>
                                <div class="content text-justify" style="margin-top: 20px; text-align: justify">
                                    {!! $post['content'] !!}
                                </div>

                            </div>
                        </div>
{{--                        <div class="col medium-4 small-12 large-4">--}}
{{--                            <section id="media_image-2" class="widget widget_media_image"><img width="317" height="882" src="https://thenine9phamvandong.com.vn/wp-content/uploads/2021/04/Rectangle-31.png" class="image wp-image-57  attachment-full size-full" alt="" decoding="async" loading="lazy" style="max-width: 100%; height: auto;" srcset="https://thenine9phamvandong.com.vn/wp-content/uploads/2021/04/Rectangle-31.png 317w, https://thenine9phamvandong.com.vn/wp-content/uploads/2021/04/Rectangle-31-108x300.png 108w" sizes="(max-width: 317px) 100vw, 317px"></section>--}}
{{--                        </div>--}}
                    </div>
                </div><!-- .section-content -->


                <style scope="scope">
                    .scroll-to-bullets{
                        display: none;
                    }
                    .entry-meta {
                        margin-bottom: 15px;
                        padding: 5px;
                        background: #eee;
                        border-radius: 3px;
                        font-size: 12px;
                        font-style: italic;
                    }
                    #section_729754433 .section-bg.bg-loaded{
                        background-color: rgb(38, 49, 79)!important;
                    }

                </style>
            </section>
            <section class="section sec_tienich" id="section_653996029">
                <div class="bg section-bg fill bg-fill  ">


                </div><!-- .section-bg -->

                <div class="section-content relative">
                    <div class="gap-element" style="display:block; height:auto; padding-top:10px"
                         class="clearfix"></div>
                    <div class="row" id="row-1029960896">
                        <div class="col small-12 large-12">
                            <div class="col-inner text-center">
                                <h1><span style="font-size: 130%;">Bài viết liên quan</span></h1>
                                <div
                                    class="row large-columns-4 medium-columns- small-columns-2 row-full-width slider row-slider slider-nav-simple slider-nav-outside slider-nav-push"
                                    data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : true, "draggable": true,}'>
                                    @foreach($relates as $ti)
                                        <div class="gallery-col col has-shadow">
                                            <div class="col-inner">
                                                <a href="{{route('post-detail', $ti['slug'])}}"
                                                   class="plain">
                                                    <div class="box box-normal box-text-bottom box-blog-post has-hover">
                                                        <div class="box-image">
                                                            <div class="image-zoom image-cover"
                                                                 style="padding-top:56.25%;">
                                                                <img width="1920" height="815" src="{{$ti['avatar']}}"
                                                                     class="attachment-original size-original wp-post-image"
                                                                     alt="" sizes="(max-width: 1920px) 100vw, 1920px">
                                                            </div>
                                                        </div><!-- .box-image -->
                                                        <div class="box-text text-center">
                                                            <div class="box-text-inner blog-post-inner">


                                                                <h5 class="post-title is-large ">{{$ti['name']}}</h5>
                                                                <div class="post-meta is-small op-8">{{$ti->getDate()}}
                                                                </div>
                                                                <div class="is-divider"></div>
                                                                <p class="from_the_blog_excerpt ">{{$ti['description']}}</p>

{{--                                                                <button--}}
{{--                                                                    href="{{route('post-detail', $ti['slug'])}}"--}}
{{--                                                                    class="button  is-outline is-small mb-0">--}}
{{--                                                                    Chi tiết--}}
{{--                                                                </button>--}}


                                                            </div><!-- .box-text-inner -->
                                                        </div><!-- .box-text -->
                                                    </div><!-- .box -->
                                                </a><!-- .link -->
                                            </div>
                                        </div><!-- .col -->
                                    @endforeach
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="gap-element" style="display:block; height:auto; padding-top:20px"
                         class="clearfix"></div>
                </div><!-- .section-content -->


                <style scope="scope">

                    #section_653996029 {
                        padding-top: 0px;
                        padding-bottom: 0px;
                    }

                    #section_653996029 .section-bg.bg-loaded {
                        background-image: url(wp-content/uploads/2018/12/bg8934.jpg);
                    }
                    .post-title {
                        margin-bottom: 0;
                        text-overflow: ellipsis;
                        overflow: hidden;
                        display: -webkit-box;
                        -webkit-line-clamp: 2;
                        -webkit-box-orient: vertical;
                        height: 45px;
                        color: #000!important;
                    }
                    .box-blog-post .is-divider {
                        margin-top: 0.5em;
                        margin-bottom: 0.5em;
                        height: 2px;
                    }
                    .is-divider {
                        height: 3px;
                        display: block;
                        background-color: #999!important;
                        margin: 0.1em 0 1em;
                        width: 100%;
                        max-width: 30px;
                        margin-left: auto!important;
                        margin-top: 10px;
                    }
                    .from_the_blog_excerpt {
                        margin-bottom: 0;
                        text-overflow: ellipsis;
                        overflow: hidden;
                        display: -webkit-box;
                        -webkit-line-clamp: 3;
                        -webkit-box-orient: vertical;
                        height: 70px;
                        color: #000!important;
                    }
                    .post-meta{
                        color: #2b3723;
                    }
                    @media (max-width: 549px) {
                        .post-title{
                            height: 37px;
                        }
                        .from_the_blog_excerpt{
                            height: 66px;
                        }
                    }
                </style>
            </section>
        </div>
    </main><!-- #main -->
    <style>
        .header{
            position: relative!important;
            height: 101px;
        }
        .header-wrapper{
            box-shadow: 1px 1px 10px rgb(0 0 0 / 15%)!important;
        }
        .section{
            padding-top: 0!important;
        }
        .header-nav ul li .nav-top-link{
            color:hsla(0,0%,7%,.85)!important;
        }
        .nav>li>a{
            color:hsla(0,0%,7%,.85)!important;
        }
        .dark .nav-vertical-fly-out>li>a:hover, .dark .nav>li.active>a, .dark .nav>li>a.active, .dark .nav>li>a:hover, .nav-dark .nav>li.active>a, .nav-dark .nav>li.current>a, .nav-dark .nav>li>a.active, .nav-dark .nav>li>a:hover, .nav-dark a.plain:hover, .nav-dropdown.dark .nav-column>li>a:hover, .nav-dropdown.dark>li>a:hover{
            color:hsla(0,0%,7%,.85)!important;
        }
    </style>
@endsection
