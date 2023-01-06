@extends('layouts.app')
@section('title', 'MinHotel')
@section('content')
    <main id='homeMinHotel'>
        <div class='specialBlock_1'>
            <h1 style='display: none'>Hệ Thống Khách Sạn Tình Yêu Tại Hà Nội - Min Hotel</h1>
            <div class='owl-carousel owl-theme slide'>
                @foreach($slides as $slide)
                <div class='wrapBox'>
                    <div class='imgBanner'>
                        <picture>
                            <source media='(min-width:768px)' srcset='{{$slide['image']}}'>
                            <img alt='khách sạn tình yêu' src='{{$slide['image']}}'>
                            </source>
                        </picture>
                    </div>
                    <div class='textPart'>
                        <p class='text_1'>{{$slide['title']}}</p>
                        <p class='text_2'>{!! $slide['description'] !!}</p>
                        <div class='btnFindMore marTop_30'>
                            <a class='btnType_1 callContactLocate' data-target='#popupContact_1' data-toggle='modal'
                               styleContact='chatZalo'>Liên hệ</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <article class='container px-0 py-3 mt-md-3 mb-2'>
            <section class='row mx-0 flex-md-row-reverse justify-content-center secti-img-text'
                     style='flex-direction: column-reverse;'>
                <aside class='col-md-7 mb-2'>
                    <img alt='khách sạn tình yêu' class='col-12 px-0 pr-md-5' src='uploads/img/mixhotel-gt-.webp'>
                </aside>
                <aside class='col-md-5 d-flex align-items-center py-3'>
                    <div class='pt-md-3 px-md-5 background-white-smoke-md pb-md-3'>
                        <p class='mb-0 size-2vw'>
                            <b style='font-size: 25px; color: #000'>ĐỪNG ĐỂ TÌNH YÊU CỦA BẠN</b>
                        </p>
                        <p class='underline-theme-1 size-2vw mb-md-4 mb-4'>
                            <b>
                                <i style='font-size: 22px;'>CHỈ CÓ MỘT MÀU!</i>
                            </b>
                        </p>
                        <p class='mb-1 size-1vw text-justify mb-md-4' style='font-size: 20px;'>
                            Ở Min Hotel, chúng tôi giúp bạn vẽ bức tranh tình
                            yêu của chính mình bằng những sắc màu
                            tươi mới, để mỗi phút giây bên nhau đều như "Phút yêu đầu"
                        </p>
{{--                        <a href='#' style='font-size: 20px;'>Xem thêm &gt;&gt;</a>--}}
                    </div>
                </aside>
            </section>
        </article>
        <article class='container py-3 text-center'>
            <div class='specialBlock_8'>
                <div class='titleBlock_1'>
                    <h2 class='titleText'>TRẢI NGHIỆM TẠI MIN HOTEL</h2>
                </div>
                <p class='text-justify text-md-center'>
                    Đồng hành giữ gìn NGỌN LỬA TÌNH YÊU của các cặp đôi. Một chốn riêng tư, một nơi nghỉ ngơi, một điểm đến
                    mới toanh với đa dạng phong cách tại Hà Nội
                </p>
                <div class='row mt-3'>
                    <div class='col-4 col-md-3'>
                        <figure class='square-img mb-md-1'>
                            <img alt='khách sạn tình yêu' src='uploads/img/24-icon.webp'>
                        </figure>
                        <p class='upcase'>
                            <b>Wifi nhanh</b>
                        </p>
                    </div>
                    <div class='col-4 col-md-3'>
                        <figure class='square-img mb-md-1'>
                            <img alt='khách sạn tình yêu' loading='lazy' src='uploads/img/24-icon-7.webp'>
                        </figure>
                        <p class='upcase'>
                            <b>an toàn</b>
                        </p>
                    </div>
                    <div class='col-4 col-md-3'>
                        <figure class='square-img mb-md-1'>
                            <img alt='khách sạn tình yêu' loading='lazy' src='uploads/img/24-icon-5.webp'>
                        </figure>
                        <p class='upcase'>
                            <b>đồ chơi</b>
                        </p>
                    </div>
                    <div class='col-4 col-md-3'>
                        <figure class='square-img mb-md-1'>
                            <img alt='khách sạn tình yêu' loading='lazy' src='uploads/img/24-icon-8.webp'>
                        </figure>
                        <p class='upcase'>
                            <b>dịch vụ</b>
                        </p>
                    </div>
                </div>
            </div>
        </article>
        @foreach($categories as $cate)
        <div class='specialBlock_5'>
            <div class='container'>
                <div class='titleBlock_1'>
                    <a href='mix-boutique-hotel-104b-nguyen-khuyen/index.html'>
                        <h2 class='titleText'>{{$cate['name']}} </h2>
                    </a>
                </div>
                <div class='owl-carousel owl-theme owlSpecialBlock_5'>
                    @foreach($cate['rooms'] as $room)
                    <div class='smallBlock'>
                        <div class='specialBlock_6'>
                            <a class='imgPart figure2' href=''>
                                <img alt='{{$room['name']}}' loading='lazy'
                                     src='{{$room['avatar']}}'>
                            </a>
                            <div class='textPart'>
                                <div class='part_1' style="display: inline-block">
                                    <div>
                                        <a class='aTagTitle' href='khach-san-tinh-yeu/room-601/index.html'>
                                            <h4 class='titleNews mt-0'>{{$room['name']}} </h4>
                                        </a>
                                    </div>

                                    <div class='text'>
                                        <i class='iTagText'>Giá từ:</i>
                                        <a class='iTagText_2'>{{$room['price_h']}}</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class='btnViewMore'>
                    <a class='btnType_3 figure2' href='mix-boutique-hotel-104b-nguyen-khuyen/index.html'>
                        <p class='text'>Xem thêm</p>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
        <div class='galleryBlock'>
            <p class='titleBlock'>THƯ VIỆN HÌNH ẢNH</p>
            <div class='owl-carousel owl-theme owlGallery'>
                <div class='imgPart figure2' data-fancybox='gallery' href='uploads/img/tvha-1.webp' rel='galleryBlock'>
                    <img alt='khách sạn tình yêu' loading='lazy' src='uploads/img/tvha-1.webp'>
                </div>
                <div class='imgPart figure2' data-fancybox='gallery' href='uploads/img/tvha-2.webp' rel='galleryBlock'>
                    <img alt='khách sạn tình yêu' loading='lazy' src='uploads/img/tvha-2.webp'>
                </div>
                <div class='imgPart figure2' data-fancybox='gallery' href='uploads/img/tvha-3.webp' rel='galleryBlock'>
                    <img alt='khách sạn tình yêu' loading='lazy' src='uploads/img/tvha-3.webp'>
                </div>
                <div class='imgPart figure2' data-fancybox='gallery' href='uploads/img/tvha-4.webp' rel='galleryBlock'>
                    <img alt='khách sạn tình yêu' loading='lazy' src='uploads/img/tvha-4.webp'>
                </div>
                <div class='imgPart figure2' data-fancybox='gallery' href='uploads/img/tvha-5.webp' rel='galleryBlock'>
                    <img alt='khách sạn tình yêu' loading='lazy' src='uploads/img/tvha-5.webp'>
                </div>
                <div class='imgPart figure2' data-fancybox='gallery' href='uploads/img/tvha-6.webp' rel='galleryBlock'>
                    <img alt='khách sạn tình yêu' loading='lazy' src='uploads/img/tvha-6.webp'>
                </div>
                <div class='imgPart figure2' data-fancybox='gallery' href='uploads/img/tvha-7.webp' rel='galleryBlock'>
                    <img alt='khách sạn tình yêu' loading='lazy' src='uploads/img/tvha-7.webp'>
                </div>
                <div class='imgPart figure2' data-fancybox='gallery' href='uploads/img/tvha-8.webp' rel='galleryBlock'>
                    <img alt='khách sạn tình yêu' loading='lazy' src='uploads/img/tvha-8.webp'>
                </div>
            </div>
            <div class='textPart'>
                <p class='text1 marBot_5'>KHÔNG GIAN PHÒNG NGHỈ</p>
                <p class='text2 marBot_0'>Riêng tư - Lãng mạn - Khác Biệt</p>
                <p class='text2 marBot_0'>Không gian dành cho một nửa yêu thương</p>
            </div>
        </div>
        <article class='container py-5 highlightPostBlock'>
            <div class='text_cent'>
                <div class='titleBlock_1'>
                    <p class='titleText'>TIN TỨC</p>
                </div>
            </div>
            <div class='owl-carousel owl-theme specialBlock_3'>
                @foreach($posts as $post)
                <div class='smallBlock'>
                    <div class='specialBlock_4'>
                        <a class='imgPart figure2' href=''>
                            <img alt='{{$post['name']}}' loading='lazy'
                                 src='{{$post['avatar']}}'>
                        </a>
                        <div class='textPart'>
                            <div class='part_1'>
                                <a class='text'>
                                    <i aria-hidden='true' class='fa fa-clock-o'></i>
                                    <i class='iTagText'> {{date('d-m-Y', strtotime($post['created_at']))}}</i>
                                </a>
                                <a class='text' href=''>
                                    <i aria-hidden='true' class='fa fa-newspaper-o'></i>
                                    <i class='iTagText'>{{$post->category->name}}</i>
                                </a>
                            </div>
                            <a class='aTagTitle' href='khach-san-tinh-yeu-go-vap/index.html'>
                                <p class='titleNews'>{{$post['name']}}</p>
                            </a>
                            <p class='description'>{{$post['description']}}</p>
                            <style>
                                .highlightPostBlock .description{
                                    display: -webkit-box;
                                    -webkit-line-clamp: 4;
                                    -webkit-box-orient: vertical;
                                    overflow: hidden;
                                    text-overflow: ellipsis;
                                }
                            </style>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </article>
        <div class='specialBlock_2'>
            <div class='wrapAllMaps'>
                <div class='smallPart'>
                    <div class='mapPart'>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4429.638631184644!2d105.80377979478394!3d20.997957972254643!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135acbd4dd67d85%3A0x58059c56756dbf77!2sChung%20c%C6%B0%20Thanh%20Xu%C3%A2n%20Complex!5e0!3m2!1svi!2s!4v1654130649544!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>

    </main>

@endsection
