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
            <a class='aTagTitle' href='{{route('slug',['category_slug' => $post->category->slug, 'slug' => $post['slug']])}}'>
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
