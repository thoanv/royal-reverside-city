<div id='menuNKTA'>
    <div id='menuNKTA_DESKTOP'>
        <div class='wrapMenuline_1_line_2'>
            <div class='menuLine_2'>
                <div class='container'>
                    <div class='row'>
                        <div class='logoPart'>
                            <a class='imgPart' href='{{route('home')}}'>
                                <img alt='logo' src='{{$aboutUs['logo']}}'>
                            </a>
                        </div>
                        <div class='menuPart'>
                            @foreach($menus as $menu)
                            <div class='menuItem {{(isset($menu['children']) && count($menu['children']) > 0) ? 'dropDown' : ''}}'>
                                <a class='link1' href='{{route('slug',['category_slug' => $menu['slug']])}}'>
                                    <p class='text text-uppercase'>{{$menu['name']}}</p>
                                </a>
                                @if(isset($menu['children']) && count($menu['children']) > 0)
                                <ul class='blockLevel2'>
                                    @foreach($menu['children'] as $menu_child)
                                    <li>
                                        <a class='link2' href='{{route('slug',['category_slug' => $menu_child['slug']])}}'>{{$menu_child['name']}}</a>
                                    </li>
                                    @endforeach
                                </ul>
                                @endif
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div id='menuNKTA_MOBILE'>
        <div class='blockUnderMenuTopPage'></div>
        <div class='menuTopPage'>
            <div class='container'>
                <div class='row'>
                    <div class='logoPart'>
                        <a class='imgPart' href='{{route('home')}}'>
                            <img alt='logo' src='{{$aboutUs['logo']}}'>
                        </a>
                    </div>
                    <div class='barsPart'>
                        <a class='aTag aTagBars'>
                            <img alt='danh_muc' class='barsPartImg' src='/uploads/img/bars_item.svg'>
                        </a>
                    </div>
                </div>
            </div>
        </div>
{{--        <div class='menuEndPage'>--}}
{{--            <div class='container'>--}}
{{--                <div class='row'>--}}
{{--                    <div class='homePart smallPart'>--}}
{{--                        <a class='aTag' href='index.html'>--}}
{{--                            <img alt='homeItem' class='homePartImg' src='uploads/img/u1214.svg'>--}}
{{--                        </a>--}}
{{--                        <p class='textUnderItem'>Trang chủ</p>--}}
{{--                    </div>--}}
{{--                    <div class='messFacePart smallPart'>--}}
{{--                        <a class='aTag callContactLocate' data-target='#popupContact_1' data-toggle='modal'--}}
{{--                           styleContact='chatFacebook'>--}}
{{--                            <img alt='messengerItem' class='messFacePartImg' src='uploads/img/messenger_2.svg'>--}}
{{--                        </a>--}}
{{--                        <p class='textUnderItem'>Messenger</p>--}}
{{--                    </div>--}}
{{--                    <div class='phonePart centerPart'>--}}
{{--                        <a class='callContactLocate' data-target='#popupContact_1' data-toggle='modal'--}}
{{--                           styleContact='callPhone'>--}}
{{--                            <img alt='phoneItem' class='phonePartImg' src='uploads/img/phone_item.svg'>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class='zaloPart smallPart'>--}}
{{--                        <a class='aTag callContactLocate' data-target='#popupContact_1' data-toggle='modal'--}}
{{--                           styleContact='chatZalo'>--}}
{{--                            <img alt='Zalo' class='zaloPartImg' src='uploads/img/zalo_2.png'>--}}
{{--                        </a>--}}
{{--                        <p class='textUnderItem'>Zalo</p>--}}
{{--                    </div>--}}
{{--                    <div class='inboxPart smallPart'>--}}
{{--                        <a class='aTag callContactLocate' data-target='#popupContact_1' data-toggle='modal'--}}
{{--                           styleContact='chatMess'>--}}
{{--                            <img alt='map' class='inboxPartImg' src='uploads/img/u1351.svg'>--}}
{{--                        </a>--}}
{{--                        <p class='textUnderItem'>Tin nhắn</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <div class='blockCateMobile'>
            <div class='container'>
                <div class='wrapCateParts'>
                    @foreach($menus as $menu)
                    <div class='catePart {{(isset($menu['children']) && count($menu['children']) > 0) ? 'dropMore' : ''}}'>
                        <a class='link1' href=''>{{$menu['name']}}</a>
                        @if(isset($menu['children']) && count($menu['children']) > 0)
                        <i aria-hidden='true' class='fa fa-angle-right faFix'></i>
                        <i aria-hidden='true' class='fa fa-angle-down faFix'></i>
                        <ul class='blockLevel2'>
                            @foreach($menu['children'] as $menu_child)
                            <li>
                                <a class='link2' href=''>{{$menu_child['name']}}</a>
                            </li>
                            @endforeach
                        </ul>
                        @endif
                    </div>
                    @endforeach
                </div>
                <div class='hideBlock'>
                    <i aria-hidden='true' class='fa fa-times xItem'></i>
                </div>
            </div>
        </div>
    </div>
</div>
