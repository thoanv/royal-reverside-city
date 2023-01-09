@php
    $info_web = \App\Models\General::find(1);
@endphp
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{$info_web['favicon']}}"/>
    <meta name="description" content="{{$info_web['meta_description']}}">
    <meta name="keywords" content="{{$info_web['meta_keywords']}}">

    <meta name="robots" content="index, follow"/>
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>
    <link rel="canonical" href="@yield('canonical', route('home'))"/>

    <meta property="og:locale" content="vi_VN"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="@yield('title')"/>
    <meta property="og:description" content="{{$info_web['meta_description']}}"/>
    <meta property="og:url" content="@yield('canonical', route('home'))"/>
    <meta property="og:site_name" content="{{$info_web['site_name']}}"/>
    <meta property="article:modified_time" content=""/>
    <meta property="og:image" content="@yield('image', $info_web['thumbnail'])"/>
    <meta property="og:image:width" content="1200"/>
    <meta property="og:image:height" content="630"/>

    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:description" content="{{$info_web['meta_description']}}"/>
    <meta name="twitter:title" content="@yield('title')"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
          integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel='prefetch' href='/wp-content/themes/flatsome/assets/js/chunk.countup8420.js?ver=3.16.1'/>
    <link rel='prefetch' href='/assets/lib/sweetalert2/css/sweetalert2.min.css'/>
    <link rel='prefetch' href='/wp-content/themes/flatsome/assets/js/chunk.sticky-sidebar8420.js?ver=3.16.1'/>
    <link rel='prefetch' href='/wp-content/themes/flatsome/assets/js/chunk.tooltips8420.js?ver=3.16.1'/>
    <link rel='prefetch' href='/wp-content/themes/flatsome/assets/js/chunk.vendors-popups8420.js?ver=3.16.1'/>
    <link rel='prefetch' href='/wp-content/themes/flatsome/assets/js/chunk.vendors-slider8420.js?ver=3.16.1'/>
    <script type="text/javascript">
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
            "svgExt": ".svg",
            "source": {"concatemoji": "https:\/\/landingpage85.stcgroup.vn\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.1.1"}
        };
        /*! This file is auto-generated */
        !function (e, a, t) {
            var n, r, o, i = a.createElement("canvas"), p = i.getContext && i.getContext("2d");

            function s(e, t) {
                var a = String.fromCharCode,
                    e = (p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0), i.toDataURL());
                return p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, t), 0, 0), e === i.toDataURL()
            }

            function c(e) {
                var t = a.createElement("script");
                t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
            }

            for (o = Array("flag", "emoji"), t.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, r = 0; r < o.length; r++) t.supports[o[r]] = function (e) {
                if (p && p.fillText) switch (p.textBaseline = "top", p.font = "600 32px Arial", e) {
                    case"flag":
                        return s([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) ? !1 : !s([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819]) && !s([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]);
                    case"emoji":
                        return !s([129777, 127995, 8205, 129778, 127999], [129777, 127995, 8203, 129778, 127999])
                }
                return !1
            }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]);
            t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t.readyCallback = function () {
                t.DOMReady = !0
            }, t.supports.everything || (n = function () {
                t.readyCallback()
            }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function () {
                "complete" === a.readyState && t.readyCallback()
            })), (e = t.source || {}).concatemoji ? c(e.concatemoji) : e.wpemoji && e.twemoji && (c(e.twemoji), c(e.wpemoji)))
        }(window, document, window._wpemojiSettings);
    </script>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <style id='wp-block-library-inline-css' type='text/css'>
        :root {
            --wp-admin-theme-color: #007cba;
            --wp-admin-theme-color--rgb: 0, 124, 186;
            --wp-admin-theme-color-darker-10: #006ba1;
            --wp-admin-theme-color-darker-10--rgb: 0, 107, 161;
            --wp-admin-theme-color-darker-20: #005a87;
            --wp-admin-theme-color-darker-20--rgb: 0, 90, 135;
            --wp-admin-border-width-focus: 2px
        }

        @media (-webkit-min-device-pixel-ratio: 2),(min-resolution: 192dpi) {
            :root {
                --wp-admin-border-width-focus: 1.5px
            }
        }

        .wp-element-button {
            cursor: pointer
        }

        :root {
            --wp--preset--font-size--normal: 16px;
            --wp--preset--font-size--huge: 42px
        }

        :root .has-very-light-gray-background-color {
            background-color: #eee
        }

        :root .has-very-dark-gray-background-color {
            background-color: #313131
        }

        :root .has-very-light-gray-color {
            color: #eee
        }

        :root .has-very-dark-gray-color {
            color: #313131
        }

        :root .has-vivid-green-cyan-to-vivid-cyan-blue-gradient-background {
            background: linear-gradient(135deg, #00d084, #0693e3)
        }

        :root .has-purple-crush-gradient-background {
            background: linear-gradient(135deg, #34e2e4, #4721fb 50%, #ab1dfe)
        }

        :root .has-hazy-dawn-gradient-background {
            background: linear-gradient(135deg, #faaca8, #dad0ec)
        }

        :root .has-subdued-olive-gradient-background {
            background: linear-gradient(135deg, #fafae1, #67a671)
        }

        :root .has-atomic-cream-gradient-background {
            background: linear-gradient(135deg, #fdd79a, #004a59)
        }

        :root .has-nightshade-gradient-background {
            background: linear-gradient(135deg, #330968, #31cdcf)
        }

        :root .has-midnight-gradient-background {
            background: linear-gradient(135deg, #020381, #2874fc)
        }

        .has-regular-font-size {
            font-size: 1em
        }

        .has-larger-font-size {
            font-size: 2.625em
        }

        .has-normal-font-size {
            font-size: var(--wp--preset--font-size--normal)
        }

        .has-huge-font-size {
            font-size: var(--wp--preset--font-size--huge)
        }

        .has-text-align-center {
            text-align: center
        }

        .has-text-align-left {
            text-align: left
        }

        .has-text-align-right {
            text-align: right
        }

        #end-resizable-editor-section {
            display: none
        }

        .aligncenter {
            clear: both
        }

        .items-justified-left {
            justify-content: flex-start
        }

        .items-justified-center {
            justify-content: center
        }

        .items-justified-right {
            justify-content: flex-end
        }

        .items-justified-space-between {
            justify-content: space-between
        }

        .screen-reader-text {
            border: 0;
            clip: rect(1px, 1px, 1px, 1px);
            clip-path: inset(50%);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px;
            word-wrap: normal !important
        }

        .screen-reader-text:focus {
            background-color: #ddd;
            clip: auto !important;
            clip-path: none;
            color: #444;
            display: block;
            font-size: 1em;
            height: auto;
            left: 5px;
            line-height: normal;
            padding: 15px 23px 14px;
            text-decoration: none;
            top: 5px;
            width: auto;
            z-index: 100000
        }

        html :where(.has-border-color) {
            border-style: solid
        }

        html :where([style*=border-top-color]) {
            border-top-style: solid
        }

        html :where([style*=border-right-color]) {
            border-right-style: solid
        }

        html :where([style*=border-bottom-color]) {
            border-bottom-style: solid
        }

        html :where([style*=border-left-color]) {
            border-left-style: solid
        }

        html :where([style*=border-width]) {
            border-style: solid
        }

        html :where([style*=border-top-width]) {
            border-top-style: solid
        }

        html :where([style*=border-right-width]) {
            border-right-style: solid
        }

        html :where([style*=border-bottom-width]) {
            border-bottom-style: solid
        }

        html :where([style*=border-left-width]) {
            border-left-style: solid
        }

        html :where(img[class*=wp-image-]) {
            height: auto;
            max-width: 100%
        }

        figure {
            margin: 0 0 1em
        }
    </style>
    <link rel='stylesheet' id='classic-theme-styles-css' href='/wp-includes/css/classic-themes.min68b3.css?ver=1'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='contact-form-7-css'
          href='/wp-content/plugins/contact-form-7/includes/css/styles77e1.css?ver=5.6.4' type='text/css' media='all'/>
    <link rel='stylesheet' id='fancybox-css'
          href='/wp-content/plugins/easy-fancybox/fancybox/1.5.3/jquery.fancybox.min6a4d.css?ver=6.1.1' type='text/css'
          media='screen'/>
    <link rel='stylesheet' id='flatsome-main-css'
          href='/wp-content/themes/flatsome/assets/css/flatsome8420.css?ver=3.16.1' type='text/css' media='all'/>
    <style id='flatsome-main-inline-css' type='text/css'>
        @font-face {
            font-family: "fl-icons";
            font-display: block;
            src: url(/wp-content/themes/flatsome/assets/css/icons/fl-iconse4c8.eot?v=3.16.1);
            src: url(/wp-content/themes/flatsome/assets/css/icons/fl-icons.eot#iefix?v=3.16.1) format("embedded-opentype"),
            url(/wp-content/themes/flatsome/assets/css/icons/fl-iconse4c8.woff2?v=3.16.1) format("woff2"),
            url(/wp-content/themes/flatsome/assets/css/icons/fl-iconse4c8.ttf?v=3.16.1) format("truetype"),
            url(/wp-content/themes/flatsome/assets/css/icons/fl-iconse4c8.woff?v=3.16.1) format("woff"),
            url(/wp-content/themes/flatsome/assets/css/icons/fl-iconse4c8.svg?v=3.16.1#fl-icons) format("svg");
        }
    </style>
    <link rel='stylesheet' id='flatsome-style-css' href='/wp-content/themes/webdaitin/style6aec.css?ver=3.0'
          type='text/css' media='all'/>
    <script type='text/javascript' src='/wp-includes/js/jquery/jquery.mina7a0.js?ver=3.6.1'
            id='jquery-core-js'></script>
    <script type='text/javascript' src='/wp-includes/js/jquery/jquery-migrate.mind617.js?ver=3.3.2'
            id='jquery-migrate-js'></script>
    <link rel="https://api.w.org/" href="/wp-json/index.html"/>
    <link rel="alternate" type="application/json" href="wp-json/wp/v2/pages/668.json"/>
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd"/>
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml"/>
    <link rel="canonical" href="index.html"/>
    <link rel='shortlink' href='index.html'/>
    <link rel="alternate" type="application/json+oembed"
          href="/wp-json/oembed/1.0/embed68cf.json?url=https%3A%2F%2Flandingpage85.stcgroup.vn%2F"/>
    <link rel="alternate" type="text/xml+oembed"
          href="/wp-json/oembed/1.0/embed9a57?url=https%3A%2F%2Flandingpage85.stcgroup.vn%2F&amp;format=xml"/>
    <style>
        .bg {
            opacity: 0;
            transition: opacity 1s;
            -webkit-transition: opacity 1s;
        }

        .bg-loaded {
            opacity: 1;
        }</style>
    <style id="custom-css" type="text/css">
        :root {
            --primary-color: #26314f;
        }

        .header-main {
            height: 100px
        }

        #logo img {
            max-height: 100px
        }

        #logo {
            width: 200px;
        }

        .header-bottom {
            min-height: 10px
        }

        .header-top {
            min-height: 30px
        }

        .transparent .header-main {
            height: 101px
        }

        .transparent #logo img {
            max-height: 101px
        }

        .has-transparent + .page-title:first-of-type, .has-transparent + #main > .page-title, .has-transparent + #main > div > .page-title, .has-transparent + #main .page-header-wrapper:first-of-type .page-title {
            padding-top: 101px;
        }

        .header.show-on-scroll, .stuck .header-main {
            height: 70px !important
        }

        .stuck #logo img {
            max-height: 70px !important
        }

        .header-bg-color {
            background-color: rgba(255, 255, 255, 0.9)
        }

        .header-bottom {
            background-color: #f1f1f1
        }

        .header-main .nav > li > a {
            line-height: 16px
        }

        .stuck .header-main .nav > li > a {
            line-height: 50px
        }

        @media (max-width: 549px) {
            .header-main {
                height: 70px
            }

            #logo img {
                max-height: 70px
            }
        }

        .nav-dropdown {
            border-radius: 15px
        }

        .nav-dropdown {
            font-size: 100%
        }

        /* Color */
        .accordion-title.active, .has-icon-bg .icon .icon-inner, .logo a, .primary.is-underline, .primary.is-link, .badge-outline .badge-inner, .nav-outline > li.active > a, .nav-outline > li.active > a, .cart-icon strong, [data-color='primary'], .is-outline.primary {
            color: #26314f;
        }

        /* Color !important */
        [data-text-color="primary"] {
            color: #26314f !important;
        }

        /* Background Color */
        [data-text-bg="primary"] {
            background-color: #26314f;
        }

        /* Background */
        .scroll-to-bullets a, .featured-title, .label-new.menu-item > a:after, .nav-pagination > li > .current, .nav-pagination > li > span:hover, .nav-pagination > li > a:hover, .has-hover:hover .badge-outline .badge-inner, button[type="submit"], .button.wc-forward:not(.checkout):not(.checkout-button), .button.submit-button, .button.primary:not(.is-outline), .featured-table .title, .is-outline:hover, .has-icon:hover .icon-label, .nav-dropdown-bold .nav-column li > a:hover, .nav-dropdown.nav-dropdown-bold > li > a:hover, .nav-dropdown-bold.dark .nav-column li > a:hover, .nav-dropdown.nav-dropdown-bold.dark > li > a:hover, .header-vertical-menu__opener, .is-outline:hover, .tagcloud a:hover, .grid-tools a, input[type='submit']:not(.is-form), .box-badge:hover .box-text, input.button.alt, .nav-box > li > a:hover, .nav-box > li.active > a, .nav-pills > li.active > a, .current-dropdown .cart-icon strong, .cart-icon:hover strong, .nav-line-bottom > li > a:before, .nav-line-grow > li > a:before, .nav-line > li > a:before, .banner, .header-top, .slider-nav-circle .flickity-prev-next-button:hover svg, .slider-nav-circle .flickity-prev-next-button:hover .arrow, .primary.is-outline:hover, .button.primary:not(.is-outline), input[type='submit'].primary, input[type='submit'].primary, input[type='reset'].button, input[type='button'].primary, .badge-inner {
            background-color: #26314f;
        }

        /* Border */
        .nav-vertical.nav-tabs > li.active > a, .scroll-to-bullets a.active, .nav-pagination > li > .current, .nav-pagination > li > span:hover, .nav-pagination > li > a:hover, .has-hover:hover .badge-outline .badge-inner, .accordion-title.active, .featured-table, .is-outline:hover, .tagcloud a:hover, blockquote, .has-border, .cart-icon strong:after, .cart-icon strong, .blockUI:before, .processing:before, .loading-spin, .slider-nav-circle .flickity-prev-next-button:hover svg, .slider-nav-circle .flickity-prev-next-button:hover .arrow, .primary.is-outline:hover {
            border-color: #26314f
        }

        .nav-tabs > li.active > a {
            border-top-color: #26314f
        }

        .widget_shopping_cart_content .blockUI.blockOverlay:before {
            border-left-color: #26314f
        }

        .woocommerce-checkout-review-order .blockUI.blockOverlay:before {
            border-left-color: #26314f
        }

        /* Fill */
        .slider .flickity-prev-next-button:hover svg, .slider .flickity-prev-next-button:hover .arrow {
            fill: #26314f;
        }

        /* Focus */
        .primary:focus-visible, .submit-button:focus-visible, button[type="submit"]:focus-visible {
            outline-color: #26314f !important;
        }

        /* Background Color */
        [data-icon-label]:after, .secondary.is-underline:hover, .secondary.is-outline:hover, .icon-label, .button.secondary:not(.is-outline), .button.alt:not(.is-outline), .badge-inner.on-sale, .button.checkout, .single_add_to_cart_button, .current .breadcrumb-step {
            background-color: #c9ae5e;
        }

        [data-text-bg="secondary"] {
            background-color: #c9ae5e;
        }

        /* Color */
        .secondary.is-underline, .secondary.is-link, .secondary.is-outline, .stars a.active, .star-rating:before, .woocommerce-page .star-rating:before, .star-rating span:before, .color-secondary {
            color: #c9ae5e
        }

        /* Color !important */
        [data-text-color="secondary"] {
            color: #c9ae5e !important;
        }

        /* Border */
        .secondary.is-outline:hover {
            border-color: #c9ae5e
        }

        /* Focus */
        .secondary:focus-visible, .alt:focus-visible {
            outline-color: #c9ae5e !important;
        }

        .success.is-underline:hover, .success.is-outline:hover, .success {
            background-color: #c9ae5e
        }

        .success-color, .success.is-link, .success.is-outline {
            color: #c9ae5e;
        }

        .success-border {
            border-color: #c9ae5e !important;
        }

        /* Color !important */
        [data-text-color="success"] {
            color: #c9ae5e !important;
        }

        /* Background Color */
        [data-text-bg="success"] {
            background-color: #c9ae5e;
        }

        body {
            color: #000000
        }

        h1, h2, h3, h4, h5, h6, .heading-font {
            color: #26314f;
        }

        body {
            font-size: 100%;
        }

        @media screen and (max-width: 549px) {
            body {
                font-size: 100%;
            }
        }

        body {
            font-family: Roboto, sans-serif;
        }

        body {
            font-weight: 400;
            font-style: normal;
        }

        .nav > li > a {
            font-family: Roboto, sans-serif;
        }

        .mobile-sidebar-levels-2 .nav > li > ul > li > a {
            font-family: Roboto, sans-serif;
        }

        .nav > li > a, .mobile-sidebar-levels-2 .nav > li > ul > li > a {
            font-weight: 700;
            font-style: normal;
        }

        h1, h2, h3, h4, h5, h6, .heading-font, .off-canvas-center .nav-sidebar.nav-vertical > li > a {
            font-family: Roboto, sans-serif;
        }

        h1, h2, h3, h4, h5, h6, .heading-font, .banner h1, .banner h2 {
            font-weight: 700;
            font-style: normal;
        }

        .alt-font {
            font-family: "Dancing Script", sans-serif;
        }

        .alt-font {
            font-weight: 400 !important;
            font-style: normal !important;
        }

        .absolute-footer, html {
            background-color: #1e2844
        }

        .nav-vertical-fly-out > li + li {
            border-top-width: 1px;
            border-top-style: solid;
        }

        .label-new.menu-item > a:after {
            content: "New";
        }

        .label-hot.menu-item > a:after {
            content: "Hot";
        }

        .label-sale.menu-item > a:after {
            content: "Sale";
        }

        .label-popular.menu-item > a:after {
            content: "Popular";
        }</style>
    <style type="text/css" id="wp-custom-css">
        .nav-pills > li > a {
            padding: 10px .75em;
        }

        .dark .button, .dark input[type='submit'], .dark input[type='reset'], .dark input[type='button'] {
            width: 100%;
        }

        input[type='submit'] {
            width: 100%;
        }

        .anvien .box-text h5 {
            color: #339966;
        }

        .anvien .box-blog-post .is-divider {
            display: none !important;
        }

        h1.entry-title {
            color: #339966;
        }

        #responsive-form {
            max-width: 600px /*-- change this to get your desired form width --*/;
            margin: 0 auto;
            width: 100%;
        }

        .form-row {
            width: 100%;
        }

        .column-half, .column-full {
            float: left;
            position: relative;
            padding: 0px 10px;
            width: 100%;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box
        }

        .clearfix:after {
            content: "";
            display: table;
            clear: both;
        }

        /**---------------- Media query ----------------**/
        @media only screen and (min-width: 48em) {
            .column-half {
                width: 50%;
            }

        }

        .wpcf7 input[type="text"], .wpcf7 input[type="email"], .wpcf7 textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box
        }

        .wpcf7 input[type="text"]:focus {
            background: #fff;
        }

        span.wpcf7-not-valid-tip {
            text-shadow: none;
            font-size: 12px;
            color: #fff;
            background: #ff0000;
            padding: 5px;
        }

        div.wpcf7-validation-errors {
            text-shadow: none;
            border: transparent;
            background: #f9cd00;
            padding: 5px;
            color: #9C6533;
            text-align: center;
            margin: 0;
            font-size: 12px;
        }

        div.wpcf7-mail-sent-ok {
            text-align: center;
            text-shadow: none;
            padding: 5px;
            font-size: 12px;
            background: #59a80f;
            border-color: #59a80f;
            color: #fff;
            margin: 0;
        }


        .top-divider {
            border-top: none;
        }


        .call-now-button {
            display: block !important;
            color: #fff;
        }

        .call-now-button p.call-text a {
            color: #fff !important;
        }


        .call-now-button {
            top: 75% !important;
        }


        input[type='submit'] {
            background: #c9ae5e !important;
        }

        h2.title {
            background-image: linear-gradient(90deg, #ffdb6b, #c49b27, #c7950e, #fef097, #a17700);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .page-id-6 .header-main .nav > li > a, .page-id-6 .stuck .header-main {
            display: none;
        }

        .nav-tabs li span {
            font-weight: normal;
        }

        .nav-tabs li span {
            color: #ffffff !important;
        }

        .nav-tabs > li.active > a {
            background-color: #DEAC29 !important;
        }

        .nav-tabs > li.active > a {
            border-top-color: #DEAC29;
        }

        .nav-tabs li.tab {
            background-color: #26314F !important;
        }


    </style>
    <style id="kirki-inline-styles">/* cyrillic-ext */
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(wp-content/fonts/roboto/KFOmCnqEu92Fr1Mu72xMKTU1Kvnz.woff) format('woff');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(wp-content/fonts/roboto/KFOmCnqEu92Fr1Mu5mxMKTU1Kvnz.woff) format('woff');
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* greek-ext */
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(wp-content/fonts/roboto/KFOmCnqEu92Fr1Mu7mxMKTU1Kvnz.woff) format('woff');
            unicode-range: U+1F00-1FFF;
        }

        /* greek */
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(wp-content/fonts/roboto/KFOmCnqEu92Fr1Mu4WxMKTU1Kvnz.woff) format('woff');
            unicode-range: U+0370-03FF;
        }

        /* vietnamese */
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(wp-content/fonts/roboto/KFOmCnqEu92Fr1Mu7WxMKTU1Kvnz.woff) format('woff');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(wp-content/fonts/roboto/KFOmCnqEu92Fr1Mu7GxMKTU1Kvnz.woff) format('woff');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(wp-content/fonts/roboto/KFOmCnqEu92Fr1Mu4mxMKTU1Kg.woff) format('woff');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* cyrillic-ext */
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(wp-content/fonts/roboto/KFOlCnqEu92Fr1MmWUlfCRc-AMP6lbBP.woff) format('woff');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(wp-content/fonts/roboto/KFOlCnqEu92Fr1MmWUlfABc-AMP6lbBP.woff) format('woff');
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* greek-ext */
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(wp-content/fonts/roboto/KFOlCnqEu92Fr1MmWUlfCBc-AMP6lbBP.woff) format('woff');
            unicode-range: U+1F00-1FFF;
        }

        /* greek */
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(wp-content/fonts/roboto/KFOlCnqEu92Fr1MmWUlfBxc-AMP6lbBP.woff) format('woff');
            unicode-range: U+0370-03FF;
        }

        /* vietnamese */
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(wp-content/fonts/roboto/KFOlCnqEu92Fr1MmWUlfCxc-AMP6lbBP.woff) format('woff');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(wp-content/fonts/roboto/KFOlCnqEu92Fr1MmWUlfChc-AMP6lbBP.woff) format('woff');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(wp-content/fonts/roboto/KFOlCnqEu92Fr1MmWUlfBBc-AMP6lQ.woff) format('woff');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* vietnamese */
        @font-face {
            font-family: 'Dancing Script';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(wp-content/fonts/dancing-script/If2cXTr6YS-zF4S-kcSWSVi_sxjsohD9F50Ruu7BMSo3Rep6hNX6pmRMjLo.woff) format('woff');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Dancing Script';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(wp-content/fonts/dancing-script/If2cXTr6YS-zF4S-kcSWSVi_sxjsohD9F50Ruu7BMSo3ROp6hNX6pmRMjLo.woff) format('woff');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Dancing Script';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(wp-content/fonts/dancing-script/If2cXTr6YS-zF4S-kcSWSVi_sxjsohD9F50Ruu7BMSo3Sup6hNX6pmRM.woff) format('woff');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }</style>
    <!-- Google Tag Manager -->
</head>
<body
    class="home page-template page-template-page-transparent-header-light page-template-page-transparent-header-light-php page page-id-668 lightbox nav-dropdown-has-arrow nav-dropdown-has-shadow nav-dropdown-has-border">
<a class="skip-link screen-reader-text" href="#main">Skip to content</a>
<div id="wrapper">
    <header id="header" class="header transparent has-transparent has-sticky sticky-jump">
        <div class="header-wrapper">
            <div id="masthead" class="header-main nav-dark toggle-nav-dark">
                <div class="header-inner flex-row container logo-left medium-logo-center" role="navigation">

                    <!-- Logo -->
                    <div id="logo" class="flex-col logo">

                        <!-- Header logo -->
                        <a href="{{route('home')}}" title="Royal Riverside City" rel="home" style="color: #fff;
    background: #FFF;
    border-radius: 4px;
    overflow: hidden;">
                            <img width="159" height="151" src="{{$info_web['logo']}}"
                                 class="header_logo header-logo" alt="Royal Riverside City"/><img width="159"
                                                                                                  height="151"
                                                                                                  src="{{$info_web['logo']}}"
                                                                                                  class="header-logo-dark"
                                                                                                  alt="Royal Riverside City"/></a>
                    </div>

                    <!-- Mobile Left Elements -->
                    <div class="flex-col show-for-medium flex-left">
                        <ul class="mobile-nav nav nav-left ">
                            <li class="nav-icon has-icon">
                                <div class="header-button"><a href="#" data-open="#main-menu" data-pos="left"
                                                              data-bg="main-menu-overlay" data-color="dark"
                                                              class="icon primary button circle is-small"
                                                              aria-label="Menu" aria-controls="main-menu"
                                                              aria-expanded="false">

                                        <i class="icon-menu"></i>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <!-- Left Elements -->
                    <div class="flex-col hide-for-medium flex-left
            flex-grow">
                        <ul class="header-nav header-nav-main nav nav-left  nav-size-medium nav-spacing-xlarge nav-uppercase">
                            <li id="menu-item-817"
                                class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-817 active menu-item-design-default">
                                <a href="index.html" aria-current="page" class="nav-top-link">Trang chủ</a></li>
                            <li id="menu-item-680"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-680 menu-item-design-default">
                                <a href="#tongquan" class="nav-top-link">Tổng quan</a></li>
                            <li id="menu-item-684"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-684 menu-item-design-default">
                                <a href="#vitri" class="nav-top-link">Vị trí</a></li>
                            <li id="menu-item-685"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-685 menu-item-design-default">
                                <a href="#tienich" class="nav-top-link">Tiện ích</a></li>
                            <li id="menu-item-686"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-686 menu-item-design-default">
                                <a href="#matbang" class="nav-top-link">Mặt bằng</a></li>
                            <li id="menu-item-687"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-687 menu-item-design-default">
                                <a href="#giaban" class="nav-top-link">Giá bán &#8211; thanh toán</a></li>
                            <li id="menu-item-689"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-689 menu-item-design-default">
                                <a href="#lienhe" class="nav-top-link">Liên hệ</a></li>
                        </ul>
                    </div>

                    <!-- Right Elements -->
                    <div class="flex-col hide-for-medium flex-right">
                        <ul class="header-nav header-nav-main nav nav-right  nav-size-medium nav-spacing-xlarge nav-uppercase">
                        </ul>
                    </div>

                    <!-- Mobile Right Elements -->
                    <div class="flex-col show-for-medium flex-right">
                        <ul class="mobile-nav nav nav-right ">
                        </ul>
                    </div>

                </div>

                <div class="container">
                    <div class="top-divider full-width"></div>
                </div>
            </div>

            <div class="header-bg-container fill">
                <div class="header-bg-image fill"></div>
                <div class="header-bg-color fill"></div>
            </div>
        </div>
    </header>
    @yield('content')
    <footer id="footer" class="footer-wrapper" style="border-top: 1px solid #fff;">
        <section class="section dark" id="section_729754433">
            <div class="bg section-bg fill bg-fill  ">
            </div>
            <div class="section-content relative">
                <div id="gap-660467961" class="gap-element clearfix" style="display:block; height:auto;">

                    <style>
                        #gap-660467961 {
                            padding-top: 30px;
                        }
                    </style>
                </div>
                <div class="row" id="row-1058984553">
                    <div id="col-1289765181" class="col medium-4 small-12 large-4">
                        <div class="col-inner text-center">
                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1502644220">
                                <div class="img-inner dark"
                                     style="color: #fff; background: #FFF; border-radius: 4px; overflow: hidden;">
                                    <img width="159" height="151" src="{{$info_web['logo']}}"
                                         class="attachment-original size-original" alt="" decoding="async"
                                         loading="lazy">
                                </div>
                                <style>
                                    #image_1502644220 {
                                        width: 46%;
                                    }
                                </style>
                            </div>
                            <a data-animate="flipInY" class="button secondary is-outline lowercase nutchantrang">
                                <span>Địa chỉ : {{$info_web['address']}}</span>
                            </a>
                            <a data-animate="flipInY" class="button secondary is-outline nutchantrang">
                                <span>HOTLINE : {{$info_web['phone']}}</span>
                            </a>
                            <a data-animate="flipInY" class="button secondary is-outline lowercase">
                                <span>Email: {{$info_web['email']}}</span>
                            </a>
                        </div>
                    </div>
                    <div id="col-1033248886" class="col medium-8 small-12 large-8">
                        <div class="col-inner">
                            <div id="gap-306286042" class="gap-element clearfix" style="display:block; height:auto;">

                                <style>
                                    #gap-306286042 {
                                        padding-top: 10px;
                                    }
                                </style>
                            </div>
                            <h2 class="uppercase" style="text-align: center;"><span style="color: #0;">Đăng ký nhận thông tin mới nhất</span>
                            </h2>
                            <p style="text-align: center; margin-bottom: 0; font-size: 13px"><em><span style="color: #90;"><span
                                            style="color: #0;">&nbsp;<i class="fa fa-heart"><span
                                                    style="display: none;">icon-heart</span></i>&nbsp;</span>&nbsp;</span>Hãy
                                    cho chúng tôi biết yêu cầu của bạn</em></p>
                            <p style="text-align: center; margin-bottom: 10px; font-size: 13px"><em><span class="thin-font"><span style="color: #0;">&nbsp;<i
                                                class="fa fa-lock"><span style="display: none;">icon-lock</span></i>&nbsp;</span>Thông tin được bảo mật tuyệt đối</span></em>
                            </p>
                            <div class="wpcf7" >
                                <div class="screen-reader-response"><p role="status" aria-live="polite"
                                                                       aria-atomic="true"></p>
                                    <ul></ul>
                                </div>
                                <form class="apply-job" action="{{route('contact.store')}}" method="post">
                                    @csrf
                                    <div class="clearfix">
                                        <div class="form-row">
                                            <div class="column-half">
                                                <span class="wpcf7-form-control-wrap"
                                                   data-name="your-name">
                                                    <input type="text"
                                                       name="name"
                                                        value=""
                                                        size="40"
                                                        class="wpcf7-form-control wpcf7-text apply-full-name"
                                                           required
                                                        placeholder="Họ tên*">
                                                </span>
                                                <span class="wpcf7-form-control-wrap" data-name="your-email">
                                                    <input
                                                        type="email" name="email" value="" size="40"
                                                        class="wpcf7-form-control wpcf7-text wpcf7-email  apply-email"
                                                        required placeholder="Email*">
                                                </span>
                                                <span class="wpcf7-form-control-wrap" data-name="your-phone">
                                                    <input type="tel" name="phone" value="" size="40"
                                                        class="wpcf7-form-control wpcf7-text wpcf7-tel apply-phone"
                                                           required
                                                        placeholder="Số điện thoại*"></span></div>
                                            <div class="column-half">
                                                <span class="wpcf7-form-control-wrap"
                                                                           data-name="your-message">
                                                    <textarea style="height: 149px;"
                                                        name="note" cols="40" rows="13"
                                                        class="wpcf7-form-control wpcf7-textarea apply-note" aria-invalid="false"
                                                        placeholder="Nội dung"></textarea></span>

                                            </div>
                                            <div class="text-center">
                                                <input type="submit"  style="width: 30%"
                                                       value="ĐĂNG KÝ NGAY"
                                                       class="wpcf7-form-control has-spinner wpcf7-submit">
                                                <div class="text-center loading-comment">
                                                    <div class="loader text-center">
                                                        <p class="text-center load-3" style="display: inline-block">
                                                            <i class="line-load"></i>
                                                            <i class="line-load"></i>
                                                            <i class="line-load"></i>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p><!--end responsive-form--></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <style>
                #section_729754433 {
                    padding-top: 0px;
                    padding-bottom: 0px;
                }

                #section_729754433 .section-bg.bg-loaded {
                    background-image: url(wp-content/uploads/2019/10/123.png);
                }

                #section_729754433 .ux-shape-divider--top svg {
                    height: 150px;
                    --divider-top-width: 100%;
                }

                #section_729754433 .ux-shape-divider--bottom svg {
                    height: 150px;
                    --divider-width: 100%;
                }
            </style>
        </section>

        <div class="absolute-footer dark medium-text-center text-center">
            <div class="container clearfix">


                <div class="footer-primary pull-left">
                    <div class="copyright-footer">
                        <span>Copyright 2023 © Thiết kế bởi BCN</span></div>
                </div>
            </div>
        </div>

        <a href="#top" class="back-to-top button icon invert plain fixed bottom z-1 is-outline hide-for-medium circle"
           id="top-link" aria-label="Go to top"><i class="icon-angle-up"></i></a>

    </footer>
</div>
<div id="main-menu" class="mobile-sidebar no-scrollbar mfp-hide">
    <div class="sidebar-menu no-scrollbar ">
        <ul class="nav nav-sidebar nav-vertical nav-uppercase" data-tab="1">
            <li class="header-search-form search-form html relative has-icon">
                <div class="header-search-form-wrapper">
                    <div class="searchform-wrapper ux-search-box relative is-normal">
                        <form method="get" class="searchform" action="https://landingpage85.stcgroup.vn/" role="search">
                            <div class="flex-row relative">
                                <div class="flex-col flex-grow">
                                    <input type="search" class="search-field mb-0" name="s" value="" id="s"
                                           placeholder="Search&hellip;"/>
                                </div>
                                <div class="flex-col">
                                    <button type="submit"
                                            class="ux-search-submit submit-button secondary button icon mb-0"
                                            aria-label="Submit">
                                        <i class="icon-search"></i></button>
                                </div>
                            </div>
                            <div class="live-search-results text-left z-top"></div>
                        </form>
                    </div>
                </div>
            </li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-817">
                <a href="index.html" aria-current="page">Trang chủ</a></li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-680"><a href="#tongquan">Tổng
                    quan</a></li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-684"><a href="#vitri">Vị
                    trí</a></li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-685"><a href="#tienich">Tiện
                    ích</a></li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-686"><a href="#matbang">Mặt
                    bằng</a></li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-687"><a href="#giaban">Giá bán
                    &#8211; thanh toán</a></li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-689"><a href="#lienhe">Liên
                    hệ</a></li>
        </ul>
    </div>
</div>
<!-- Start Quick Buttons By https://muatheme.com -->
<div class='quick-call-button'></div>
<div class="hotline-phone-ring-wrap">
    <div class="hotline-phone-ring">
        <div class="hotline-phone-ring-circle"></div>
        <div class="hotline-phone-ring-circle-fill"></div>
        <div class="hotline-phone-ring-img-circle">
            <a href="tel:{{$info_web['phone']}}" class="pps-btn-img">
                <img src="/front-end/images/icon-call-nh.png" alt="Gọi điện thoại" width="50">
            </a>
        </div>
    </div>
    <div class="hotline-bar">
        <a href="tel:{{$info_web['phone']}}">
            <span class="text-hotline">{{$info_web['phone']}}</span>
        </a>
    </div>
</div>
<div class="modal fade" id="modalnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">

                <div class="form_wrapper position-relative">
                    <a class="closes" style="position: absolute; right: 3px; top: 3px; border: 1px solid #FFF; padding: 2px; border-radius: 50%; width: 20px; height: 20px; justify-content: center; display: flex; align-items: center;cursor: pointer">
                        <i style="color: white" class="fa fa-times" aria-hidden="true"></i>
                    </a>
                    <div class="form_container">
                        <div class="title_container">
                            <div>
                                <h3 class="mb-0" style="color: white; text-transform: uppercase">Đăng ký tư vấn</h3>
                                <p class="mb-0" style="color: white; font-size: 14px">Nhập thông tin để đăng ký thăm quan dự án</p>
                            </div>
                            <div style="display: flex; justify-content: flex-start; align-items: center; /* float: right; */ /* text-align: center; */ /* width: 10%; */ margin-left: auto;">
                                <span><i style="color: #FFF; font-size: 33px" aria-hidden="true" class="fa fa-pencil fa-5"></i></span>
                            </div>

                        </div>
                        <div class="row">
                            <div class="">
                                <form class="apply-job-popup" style="margin-bottom: 0" method="POST" action="{{route('contact.store')}}">
                                    @csrf
                                    <div class="input_field">
                                        <span>
                                            <i aria-hidden="true" class="fa fa-user"></i>
                                        </span>
                                        <input type="text" name="name" placeholder="Họ và tên (*)" required="">
                                    </div>
                                    <div class="input_field">
                                        <span>
                                            <i aria-hidden="true" class="fa fa-envelope"></i>
                                        </span>
                                        <input type="email" name="email" placeholder="Địa chỉ Email" required="" style="background-repeat: no-repeat; background-size: 20px; background-position: 97% center; cursor: auto;" data-temp-mail-org="1">
                                    </div>
                                    <div class="input_field">
                                        <span>
                                            <i aria-hidden="true" class="fa fa-phone"></i>
                                        </span>
                                        <input type="text" name="phone" id="phoneNumberPopup" placeholder="Số điện thoại (*)" required="">
                                    </div>

                                    <hr>
                                    <div class="text-center">
                                        <input class="button-register" style="margin-bottom: 0;display: block;
    width: 100%;border-radius: 0!important;" type="submit" value="Đăng ký">

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    @media screen and (max-width: 860px) {
        .call-now-button {
            display: flex !important;
            background: #1e73be;
        }

        .quick-call-button {
            display: block !important;
        }
    }

    @media screen and (min-width: px) {
        .call-now-button .call-text {
            display: none !important;
        }
    }

    @media screen and (max-width: px) {
        .call-now-button .call-text {
            display: none !important;
        }
    }

    .call-now-button {
        top: 50%;
    }

    .call-now-button {
        left: 3%;
    }

    .call-now-button {
        background: #1e73be;
    }

    .quick-alo-ph-btn-icon {
        background-color: #0c3 !important;
    }

    .call-now-button .call-text {
        color: #fff;
    }

    .hotline-phone-ring-wrap {
        position: fixed;
        bottom: 0;
        left: 0;
        z-index: 999999;
    }

    .hotline-phone-ring {
        position: relative;
        visibility: visible;
        background-color: transparent;
        width: 110px;
        height: 110px;
        cursor: pointer;
        z-index: 11;
        -webkit-backface-visibility: hidden;
        -webkit-transform: translateZ(0);
        transition: visibility .5s;
        left: 0;
        bottom: 0;
        display: block;
    }

    .hotline-phone-ring-circle {
        width: 85px;
        height: 85px;
        top: 10px;
        left: 10px;
        position: absolute;
        background-color: transparent;
        border-radius: 100%;
        border: 2px solid #e60808;
        -webkit-animation: phonering-alo-circle-anim 1.2s infinite ease-in-out;
        animation: phonering-alo-circle-anim 1.2s infinite ease-in-out;
        transition: all .5s;
        -webkit-transform-origin: 50% 50%;
        -ms-transform-origin: 50% 50%;
        transform-origin: 50% 50%;
        opacity: 0.5;
    }

    .hotline-phone-ring-circle-fill {
        width: 55px;
        height: 55px;
        top: 25px;
        left: 25px;
        position: absolute;
        background-color: rgba(230, 8, 8, 0.7);
        border-radius: 100%;
        border: 2px solid transparent;
        -webkit-animation: phonering-alo-circle-fill-anim 2.3s infinite ease-in-out;
        animation: phonering-alo-circle-fill-anim 2.3s infinite ease-in-out;
        transition: all .5s;
        -webkit-transform-origin: 50% 50%;
        -ms-transform-origin: 50% 50%;
        transform-origin: 50% 50%;
    }

    .hotline-phone-ring-img-circle {
        background-color: #e60808;
        width: 33px;
        height: 33px;
        top: 37px;
        left: 37px;
        position: absolute;
        background-size: 20px;
        border-radius: 100%;
        border: 2px solid transparent;
        -webkit-animation: phonering-alo-circle-img-anim 1s infinite ease-in-out;
        animation: phonering-alo-circle-img-anim 1s infinite ease-in-out;
        -webkit-transform-origin: 50% 50%;
        -ms-transform-origin: 50% 50%;
        transform-origin: 50% 50%;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .hotline-phone-ring-img-circle .pps-btn-img {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
    }

    .hotline-phone-ring-img-circle .pps-btn-img img {
        width: 20px;
        height: 20px;
    }

    .hotline-bar {
        position: absolute;
        background: var(--primary-color);
        height: 40px;
        width: 180px;
        line-height: 40px;
        border-radius: 3px;
        padding: 0 10px;
        background-size: 100%;
        cursor: pointer;
        transition: all 0.8s;
        -webkit-transition: all 0.8s;
        z-index: 9;
        box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.1);
        border-radius: 50px !important;
        /* width: 175px !important; */
        left: 33px;
        bottom: 37px;
    }

    .hotline-bar > a {
        color: #fff;
        text-decoration: none;
        font-size: 15px;
        font-weight: bold;
        text-indent: 50px;
        display: block;
        letter-spacing: 1px;
        line-height: 40px;
        font-family: Arial;
    }

    .hotline-bar > a:hover,
    .hotline-bar > a:active {
        color: #fff;
    }

    @-webkit-keyframes phonering-alo-circle-anim {
        0% {
            -webkit-transform: rotate(0) scale(0.5) skew(1deg);
            -webkit-opacity: 0.1;
        }
        30% {
            -webkit-transform: rotate(0) scale(0.7) skew(1deg);
            -webkit-opacity: 0.5;
        }
        100% {
            -webkit-transform: rotate(0) scale(1) skew(1deg);
            -webkit-opacity: 0.1;
        }
    }

    @-webkit-keyframes phonering-alo-circle-fill-anim {
        0% {
            -webkit-transform: rotate(0) scale(0.7) skew(1deg);
            opacity: 0.6;
        }
        50% {
            -webkit-transform: rotate(0) scale(1) skew(1deg);
            opacity: 0.6;
        }
        100% {
            -webkit-transform: rotate(0) scale(0.7) skew(1deg);
            opacity: 0.6;
        }
    }

    @-webkit-keyframes phonering-alo-circle-img-anim {
        0% {
            -webkit-transform: rotate(0) scale(1) skew(1deg);
        }
        10% {
            -webkit-transform: rotate(-25deg) scale(1) skew(1deg);
        }
        20% {
            -webkit-transform: rotate(25deg) scale(1) skew(1deg);
        }
        30% {
            -webkit-transform: rotate(-25deg) scale(1) skew(1deg);
        }
        40% {
            -webkit-transform: rotate(25deg) scale(1) skew(1deg);
        }
        50% {
            -webkit-transform: rotate(0) scale(1) skew(1deg);
        }
        100% {
            -webkit-transform: rotate(0) scale(1) skew(1deg);
        }
    }
    .loading-box, .loading-comment{
        display: none;
    }
    .line-load { display: inline-block; width: 12px; height: 12px; border-radius: 12px; background-color: var(--primary-color); margin-right: 6px; border: 1px solid #f8b742 }
    .load-3 .line-load:nth-last-child(1) {animation: loadingC .8s .1s linear infinite;}
    .load-3 .line-load:nth-last-child(2) {animation: loadingC .8s .2s linear infinite;}
    .load-3 .line-load:nth-last-child(3) {animation: loadingC .8s .3s linear infinite;}
    @keyframes loadingC {
        0% {transform: translate(0,0);}
        50% {transform: translate(0,15px);}
        100% {transform: translate(0,0);}
    }
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 20; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0, 0, 0); /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
    }

    /* Modal Content/Box */
    .modal-content {
        margin: 10% auto; /* 15% from the top and centered */
        width: 23%;
    }
    @media (max-width: 768px) {
        .modal-content {
            margin: 40% auto;
            width: 95%;
        }
        .apply-job .wpcf7-submit{
            width: 60% !important;
        }
    }
    /* The Close Button */
    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }
    .box-checkbox {
        display: block;
        position: relative;
        padding-left: 35px;
        margin-bottom: 12px;
        cursor: pointer;
        font-size: 15px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        color: white;
    }
    /* Hide the browser's default checkbox */
    .box-checkbox input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0;
    }

    /* Create a custom checkbox */
    .checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 25px;
        width: 25px;
        background-color: transparent;
        border: 1px solid #ccc;
    }

    /* On mouse-over, add a grey background color */
    .box-checkbox:hover input ~ .checkmark {
        background-color: #2b3723;
    }

    /* When the checkbox is checked, add a blue background */
    .box-checkbox input:checked ~ .checkmark {
        background-color: transparent;
        border: 1px solid #ccc;
    }

    /* Create the checkmark/indicator (hidden when not checked) */
    .checkmark:after {
        content: "";
        position: absolute;
        display: none;
    }

    /* Show the checkmark when checked */
    .box-checkbox input:checked ~ .checkmark:after {
        display: block;
    }

    /* Style the checkmark/indicator */
    .box-checkbox .checkmark:after {
        left: 8px;
        top: 2px;
        width: 8px;
        height: 13px;
        border: solid white;
        border-width: 0 3px 3px 0;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
    }
    .modal-body{
        /*background: url("/images/bg-popup.jpg") no-repeat top center;*/
        border-radius: 10px;
    }
    .form_wrapper {
        background-image: linear-gradient(45deg, #26314f, #26314f);
        /*background: rgb(0 0 0 / 50%);*/
        max-width: 100%;
        box-sizing: border-box;
        padding: 25px;
        margin: 8% auto 0;
        position: relative;
        z-index: 1;
        /*border-top: 10px solid var(--primary-color);*/
        /*border: 1px solid white;*/
        -webkit-box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
        -moz-box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
        box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
        -webkit-transform-origin: 50% 0%;
        transform-origin: 50% 0%;
        -webkit-transform: scale3d(1, 1, 1);
        transform: scale3d(1, 1, 1);
        -webkit-transition: none;
        transition: none;
        -webkit-animation: expand 0.8s 0.6s ease-out forwards;
        animation: expand 0.8s 0.6s ease-out forwards;
        opacity: .9;
        border-radius: 10px;
    }
    .form_wrapper .title_container {
        /*text-align: center;*/
        /*padding-bottom: 15px;*/
        padding: 15px;
        flex-direction: row;
        display: flex;
    }
    .form_wrapper h2{
        font-size: 1.5em;
        line-height: 1.5em;
        margin: 0;
    }
    .form_wrapper .row {
        margin: 10px 0;
    }
    .form_wrapper .row > div {
        padding: 0 15px;
        box-sizing: border-box;
    }
    .form_wrapper .input_field {
        position: relative;
        margin-bottom: 20px;
        -webkit-animation: bounce 0.6s ease-out;
        animation: bounce 0.6s ease-out;
    }
    .form_wrapper .input_field > span {
        position: absolute;
        left: 0;
        top: 0;
        color: #333;
        height: 71%;
        border-right: 1px solid #cccccc;
        text-align: center;
        width: 40px;
    }
    .form_wrapper .input_field > span > i {
        padding-top: 10px;
    }
    .form_wrapper input[type=text], .form_wrapper input[type=email], .form_wrapper input[type=password] {
        width: 100%;
        padding: 8px 10px 9px 50px;
        height: 40px;
        border: 1px solid #cccccc;
        box-sizing: border-box;
        outline: none;
        -webkit-transition: all 0.3s ease-in-out;
        -moz-transition: all 0.3s ease-in-out;
        -ms-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
    }
</style>
<!-- /End Quick Buttons By https://muatheme.com -->

<style id='global-styles-inline-css' type='text/css'>
    body {
        --wp--preset--color--black: #000000;
        --wp--preset--color--cyan-bluish-gray: #abb8c3;
        --wp--preset--color--white: #ffffff;
        --wp--preset--color--pale-pink: #f78da7;
        --wp--preset--color--vivid-red: #cf2e2e;
        --wp--preset--color--luminous-vivid-orange: #ff6900;
        --wp--preset--color--luminous-vivid-amber: #fcb900;
        --wp--preset--color--light-green-cyan: #7bdcb5;
        --wp--preset--color--vivid-green-cyan: #00d084;
        --wp--preset--color--pale-cyan-blue: #8ed1fc;
        --wp--preset--color--vivid-cyan-blue: #0693e3;
        --wp--preset--color--vivid-purple: #9b51e0;
        --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
        --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
        --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
        --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
        --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
        --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
        --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
        --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
        --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
        --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
        --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
        --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
        --wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
        --wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
        --wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
        --wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
        --wp--preset--duotone--midnight: url('#wp-duotone-midnight');
        --wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
        --wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
        --wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
        --wp--preset--font-size--small: 13px;
        --wp--preset--font-size--medium: 20px;
        --wp--preset--font-size--large: 36px;
        --wp--preset--font-size--x-large: 42px;
        --wp--preset--spacing--20: 0.44rem;
        --wp--preset--spacing--30: 0.67rem;
        --wp--preset--spacing--40: 1rem;
        --wp--preset--spacing--50: 1.5rem;
        --wp--preset--spacing--60: 2.25rem;
        --wp--preset--spacing--70: 3.38rem;
        --wp--preset--spacing--80: 5.06rem;
    }

    :where(.is-layout-flex) {
        gap: 0.5em;
    }

    body .is-layout-flow > .alignleft {
        float: left;
        margin-inline-start: 0;
        margin-inline-end: 2em;
    }

    body .is-layout-flow > .alignright {
        float: right;
        margin-inline-start: 2em;
        margin-inline-end: 0;
    }

    body .is-layout-flow > .aligncenter {
        margin-left: auto !important;
        margin-right: auto !important;
    }

    body .is-layout-constrained > .alignleft {
        float: left;
        margin-inline-start: 0;
        margin-inline-end: 2em;
    }

    body .is-layout-constrained > .alignright {
        float: right;
        margin-inline-start: 2em;
        margin-inline-end: 0;
    }

    body .is-layout-constrained > .aligncenter {
        margin-left: auto !important;
        margin-right: auto !important;
    }

    body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
        max-width: var(--wp--style--global--content-size);
        margin-left: auto !important;
        margin-right: auto !important;
    }

    body .is-layout-constrained > .alignwide {
        max-width: var(--wp--style--global--wide-size);
    }

    body .is-layout-flex {
        display: flex;
    }

    body .is-layout-flex {
        flex-wrap: wrap;
        align-items: center;
    }

    body .is-layout-flex > * {
        margin: 0;
    }

    :where(.wp-block-columns.is-layout-flex) {
        gap: 2em;
    }

    .has-black-color {
        color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-color {
        color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-color {
        color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-color {
        color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-color {
        color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-color {
        color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-color {
        color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-color {
        color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-color {
        color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-color {
        color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-color {
        color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-color {
        color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-black-background-color {
        background-color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-background-color {
        background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-background-color {
        background-color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-background-color {
        background-color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-background-color {
        background-color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-background-color {
        background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-background-color {
        background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-background-color {
        background-color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-background-color {
        background-color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-background-color {
        background-color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-background-color {
        background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-background-color {
        background-color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-black-border-color {
        border-color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-border-color {
        border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-border-color {
        border-color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-border-color {
        border-color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-border-color {
        border-color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-border-color {
        border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-border-color {
        border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-border-color {
        border-color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-border-color {
        border-color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-border-color {
        border-color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-border-color {
        border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-border-color {
        border-color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
        background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
    }

    .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
        background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
    }

    .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
        background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-orange-to-vivid-red-gradient-background {
        background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
    }

    .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
        background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
    }

    .has-cool-to-warm-spectrum-gradient-background {
        background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
    }

    .has-blush-light-purple-gradient-background {
        background: var(--wp--preset--gradient--blush-light-purple) !important;
    }

    .has-blush-bordeaux-gradient-background {
        background: var(--wp--preset--gradient--blush-bordeaux) !important;
    }

    .has-luminous-dusk-gradient-background {
        background: var(--wp--preset--gradient--luminous-dusk) !important;
    }

    .has-pale-ocean-gradient-background {
        background: var(--wp--preset--gradient--pale-ocean) !important;
    }

    .has-electric-grass-gradient-background {
        background: var(--wp--preset--gradient--electric-grass) !important;
    }

    .has-midnight-gradient-background {
        background: var(--wp--preset--gradient--midnight) !important;
    }

    .has-small-font-size {
        font-size: var(--wp--preset--font-size--small) !important;
    }

    .has-medium-font-size {
        font-size: var(--wp--preset--font-size--medium) !important;
    }

    .has-large-font-size {
        font-size: var(--wp--preset--font-size--large) !important;
    }

    .has-x-large-font-size {
        font-size: var(--wp--preset--font-size--x-large) !important;
    }
</style>
<link rel='stylesheet' id='lv_css-css'
      href='wp-content/plugins/quick-call-button/assets/css/quick-call-button4bf4.css?ver=1.0.3' type='text/css'
      media='all'/>
{{--<script type='text/javascript' src='wp-content/plugins/contact-form-7/includes/swv/js/index77e1.js?ver=5.6.4'--}}
{{--        id='swv-js'></script>--}}
{{--<script type='text/javascript' id='contact-form-7-js-extra'>--}}
{{--    /* <![CDATA[ */--}}
{{--    var wpcf7 = {"api": {"root": "https:\/\/landingpage85.stcgroup.vn\/wp-json\/", "namespace": "contact-form-7\/v1"}};--}}
{{--    /* ]]> */--}}
{{--</script>--}}
{{--<script type='text/javascript' src='wp-content/plugins/contact-form-7/includes/js/index77e1.js?ver=5.6.4'--}}
{{--        id='contact-form-7-js'></script>--}}
<script type='text/javascript'
        src='wp-content/themes/flatsome/inc/extensions/flatsome-live-search/flatsome-live-search8420.js?ver=3.16.1'
        id='flatsome-live-search-js'></script>
<script type='text/javascript'
        src='wp-content/plugins/easy-fancybox/fancybox/1.5.3/jquery.fancybox.min6a4d.js?ver=6.1.1'
        id='jquery-fancybox-js'></script>
<script type='text/javascript' id='jquery-fancybox-js-after'>
    var fb_timeout, fb_opts = {
        'overlayShow': true,
        'hideOnOverlayClick': true,
        'showCloseButton': true,
        'margin': 20,
        'enableEscapeButton': true,
        'autoScale': true
    };
    if (typeof easy_fancybox_handler === 'undefined') {
        var easy_fancybox_handler = function () {
            jQuery([".nolightbox", "a.wp-block-fileesc_html__button", "a.pin-it-button", "a[href*='pinterest.com\/pin\/create']", "a[href*='facebook.com\/share']", "a[href*='twitter.com\/share']"].join(',')).addClass('nofancybox');
            jQuery('a.fancybox-close').on('click', function (e) {
                e.preventDefault();
                jQuery.fancybox.close()
            });
            /* IMG */
            var fb_IMG_select = jQuery('a[href*=".jpg" i]:not(.nofancybox,li.nofancybox>a),area[href*=".jpg" i]:not(.nofancybox),a[href*=".png" i]:not(.nofancybox,li.nofancybox>a),area[href*=".png" i]:not(.nofancybox),a[href*=".webp" i]:not(.nofancybox,li.nofancybox>a),area[href*=".webp" i]:not(.nofancybox)');
            fb_IMG_select.addClass('fancybox image');
            var fb_IMG_sections = jQuery('.gallery,.wp-block-gallery,.tiled-gallery,.wp-block-jetpack-tiled-gallery');
            fb_IMG_sections.each(function () {
                jQuery(this).find(fb_IMG_select).attr('rel', 'gallery-' + fb_IMG_sections.index(this));
            });
            jQuery('a.fancybox,area.fancybox,.fancybox>a').each(function () {
                jQuery(this).fancybox(jQuery.extend(true, {}, fb_opts, {
                    'transitionIn': 'elastic',
                    'transitionOut': 'elastic',
                    'opacity': false,
                    'hideOnContentClick': false,
                    'titleShow': true,
                    'titlePosition': 'over',
                    'titleFromAlt': true,
                    'showNavArrows': true,
                    'enableKeyboardNav': true,
                    'cyclic': false
                }))
            });
        };
    }
    ;
    var easy_fancybox_auto = function () {
        setTimeout(function () {
            jQuery('a#fancybox-auto,#fancybox-auto>a').first().trigger('click')
        }, 1000);
    };
    jQuery(easy_fancybox_handler);
    jQuery(document).on('post-load', easy_fancybox_handler);
    jQuery(easy_fancybox_auto);
</script>
<script type='text/javascript' src='wp-content/plugins/easy-fancybox/vendor/jquery.easing.min330a.js?ver=1.4.1'
        id='jquery-easing-js'></script>
<script type='text/javascript' src='wp-content/plugins/easy-fancybox/vendor/jquery.mousewheel.mina9d5.js?ver=3.1.13'
        id='jquery-mousewheel-js'></script>
<script type='text/javascript' src='wp-includes/js/dist/vendor/regenerator-runtime.min3937.js?ver=0.13.9'
        id='regenerator-runtime-js'></script>
<script type='text/javascript' src='wp-includes/js/dist/vendor/wp-polyfill.min2c7c.js?ver=3.15.0'
        id='wp-polyfill-js'></script>
<script type='text/javascript' src='wp-includes/js/hoverIntent.min3e5a.js?ver=1.10.2' id='hoverIntent-js'></script>
<script type='text/javascript' id='flatsome-js-js-extra'>
    /* <![CDATA[ */
    var flatsomeVars = {
        "theme": {"version": "3.16.1"},
        "ajaxurl": "",
        "rtl": "",
        "sticky_height": "70",
        "assets_url": "",
        "lightbox": {
            "close_markup": "<button title=\"%title%\" type=\"button\" class=\"mfp-close\"><svg xmlns=\"http:\/\/www.w3.org\/2000\/svg\" width=\"28\" height=\"28\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-x\"><line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"><\/line><line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"><\/line><\/svg><\/button>",
            "close_btn_inside": false
        },
        "user": {"can_edit_pages": false},
        "i18n": {"mainMenu": "Main Menu", "toggleButton": "Toggle"},
        "options": {
            "cookie_notice_version": "1",
            "swatches_layout": false,
            "swatches_box_select_event": false,
            "swatches_box_behavior_selected": false,
            "swatches_box_update_urls": "1",
            "swatches_box_reset": false,
            "swatches_box_reset_extent": false,
            "swatches_box_reset_time": 300,
            "search_result_latency": "0"
        }
    };
    /* ]]> */
</script>
<script type='text/javascript'
        src='wp-content/themes/flatsome/assets/js/flatsome71e1.js?ver=fcf0c1642621a86609ed4ca283f0db68'
        id='flatsome-js-js'></script>
<!--[if IE]>
<script type='text/javascript'
        src='https://cdn.jsdelivr.net/npm/intersection-observer-polyfill@0.1.0/dist/IntersectionObserver.js?ver=0.1.0'
        id='intersection-observer-polyfill-js'></script>
<![endif]-->
<script type='text/javascript'
        src='wp-content/plugins/quick-call-button/assets/js/drag-quick-call-button4bf4.js?ver=1.0.3'
        id='lv_js-js'></script>
<script type='text/javascript'
        src='/assets/lib/sweetalert2/js/sweetalert2.all.min.js'></script>
<script>
    jQuery('.closes').on('click', function (e) {
        jQuery('#modalnew').css('display', 'none');
    });
    setTimeout(function(){
        jQuery('#modalnew').css('display', 'inline-block');
    }, 5000); // 5000 is a 5 seconds
    jQuery('.apply-job').submit(function (e) {
        e.preventDefault();
        let formData = new FormData(this);

        let check = true;
        if (check) {
            jQuery('.wpcf7-submit').hide();
            jQuery('.loading-comment').show();
            setTimeout(function () {
                jQuery.ajax({
                    type: 'POST',
                    url: "{{ route('contact.store') }}",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: (res) => {
                        Swal.fire({
                            title: 'Thông báo',
                            text: "Đăng ký thành công",
                            icon: 'success',
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'Đóng'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.reload();
                            }
                        })
                        jQuery('.wpcf7-submit').show();
                        jQuery('.loading-comment').hide();
                    },
                    error: function (response) {
                        jQuery('#file-input-error').text(response.responseJSON.message);
                    }
                });
            }, 500);
        }
    });
    jQuery('.apply-job-popup').submit(function (e) {
        e.preventDefault();
        let formData = new FormData(this);

        let check = true;
        if (check) {
            setTimeout(function () {
                jQuery.ajax({
                    type: 'POST',
                    url: "{{ route('contact.store') }}",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: (res) => {
                        Swal.fire({
                            title: 'Thông báo',
                            text: "Đăng ký thành công",
                            icon: 'success',
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'Đóng'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                jQuery('#modalnew').css('display', 'none');
                            }
                        })

                    },
                    error: function (response) {
                        jQuery('#file-input-error').text(response.responseJSON.message);
                    }
                });
            }, 500);
        }
    });
</script>
</body>
</html>



