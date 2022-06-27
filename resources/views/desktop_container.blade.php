@extends('layouts.app')
@section('title-block')
CATEGORIES
@endsection
@section('content')
<body class="desktop_with">

        <header class="header header_N2">
            <img src="/images/header__logo.png" alt="" class="img_header img_header_2">
            <div class="header_menu">
                <div class="InTouch">
                    <img src="/images/Logo.png" alt="" class="img-Logo">
                    <span class="InTouch-text">InTouch</span>
                </div>
                <div class="menu-text-info">
                    <a href="/index" class="menu-spacing">CATEGORIES</a>
                    <a href="/about" class="menu-spacing">WORK</a>
                    <a href="/about" class="menu-spacing">TEAM</a>
                    <a href="" class="menu-spacing">CONTACT US</a>
                    <a href="/about" class="menu-spacing">INFO</a>
                </div>
            </div>

            <div class="burger_menu">
                <div class="burger_menu_text">
                    <div><a href="/index" class="menu-spacing-burger">CATEGORIES</a></div>
                    <div><a href="/about" class="menu-spacing-burger">WORK</a></div>
                    <div><a href="/about" class="menu-spacing-burger">TEAM</a></div>
                    <div><a href="" class="menu-spacing-burger">CONTACT US</a></div>
                    <div><a href="/about" class="menu-spacing-burger">INFO</a></div>
                </div>
                <img src="/images/nav_logo.png" alt="" class="burger_button">
            </div>
        </header>
        <div class="container">
            <div class="container_item">Make your dreams come true</div>
            <div class="container_row">Choose whatever you want</div>
            <div class="text_row_info">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident,
                sunt in culpa qui officia deserunt mollit anim id est laborum."</div>
        </div>

    <div class="pre_container_flex_desktop">
        @php
        $i = 0;
        @endphp
        @foreach($category as $cat)
            @php
                    $image = '';
                    if(count($cat->images)>0){
                         $image = $cat->images[0]['img'];
                    }
                    $i++;
            @endphp
        <div class="container_flex_desktop">
            <div class="container_flex_block_desktop">
                <div class="container_flex_content">
                    <img src="/images/{{$image}}" alt="" class="container_flex_img_desktop">
                    <div class="container_flex_img_hidden_link">
                        <a href="/index/{{$i}}"><img src="/images/right-arrow.png" alt="" class="container_flex_img_hidden_link_img"></a>
                    </div>
                </div>
                <div class="container_flex_title">
                    {{$cat->title}}
                </div>

            </div>
        </div>
        @endforeach
    </div>
    <footer class="info_footer">
        <div class="footer_theme_info">

        <div class="footer_logo_info">
            <img src="/images/Logo.png" alt="" class="footer_logo_info_img">
        </div>
        <div class="footer_twitt"><img src="/images/twitter 1.png" alt="" class="footer_links"></div>
         <div class="footer_inst"><img src="/images/instagram 1.png" alt="" class="footer_links"></div>
         <div class="footer_prin"><img src="/images/pinterest 1.png" alt="" class="footer_links"></div>

            <div class="form_info">
                <span class="footer_title">STAY IN TOUCH</span> <br>
                <div class="footer_item">Subscribe to receive updates access to exclusive deals, and more.</div>
                <div>
                    <input type="text" placeholder = "Email adress"  class="footer_input">
                </div>
                <div>
                    <button class="footer_button">SUBSCRIBE</button>
                </div>
            </div>
    </div>

    </footer>
</body>
</html>

@endsection
