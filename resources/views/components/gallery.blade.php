@php
$galleryImages = \App\Models\Image::whereNotNull('room_id')->orderBy('id', 'DESC')->take(15)->get();

@endphp
<div class='galleryBlock'>
    <p class='titleBlock'>THƯ VIỆN HÌNH ẢNH</p>
    <div class='owl-carousel owl-theme owlGallery'>
        @foreach($galleryImages as $imag)
        <div class='imgPart figure2' data-fancybox='gallery' href='{{$imag['url']}}' rel='galleryBlock'>
            <img alt='gallery-image' loading='lazy' src='{{$imag['url']}}'>
        </div>
        @endforeach
    </div>
    <div class='textPart'>
        <p class='text1 marBot_5'>KHÔNG GIAN PHÒNG NGHỈ</p>
        <p class='text2 marBot_0'>Riêng tư - Lãng mạn - Khác Biệt</p>
        <p class='text2 marBot_0'>Không gian dành cho một nửa yêu thương</p>
    </div>
</div>
<style>
    .galleryBlock .titleBlock{
        color: var(--white)!important;
        background-color: var(--theme-color-1)!important;
    }

</style>
