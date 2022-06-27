@extends('layouts.app')
@section('title-block')
Category
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
    <div class="container_link">
        <div class="container_link_row"><a href="/index" class="container_link_row_text"> <img src="/images/left-arrow.png" alt="" class="link_img_info"> BACK TO CATEGORIES</a></div>
    </div>
    <div class="wrapper_portfolio">
            @php
                $image = '';
                if(count($item->images)>0){
                     $image = $item->images[0]['img'];
                }
                else
                    {
                        $image = 'Logo.png';
                    }

            @endphp
        <div class="container_portfolio">
            <img src="/images/{{$image}}" alt="" class="container_portfolio_block_1">
            <div class="container_portfolio_block_2">
                <div class="container_row">{{$item->title}} photoshoot</div>
                <div class="container_row_2">Price for the photoshoot: {{$item->price}}</div>
                <div class="container_row_2 portfolio_hidden">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident,
                sunt in culpa qui officia deserunt mollit anim id est laborum."</div>
            </div>
        </div>
    </div>
    <div class="wrapper_portfolio">
        <div class="container">
            <div class="container_item"><span class="w375_non">Make right decision</span><span class="w375_yes">Just imagine</span></div>
            <div class="container_row">Why you should use us</div>
            <div class="container_row_2">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident,
                sunt in culpa qui officia deserunt mollit anim id est laborum."</div>
        </div>
    </div>
    <div class="wrapper_portfolio">
        <div class="container_portfolio">
            <img src="/images/Rectangle 26.png" alt="" class="w375img">
            <img src="/images/Rectangle 27.png" alt="" class="w375img">
            <img src="/images/Rectangle 28.png" alt="" class="w375_non">
        </div>
    </div>
    <div class="wrapper_portfolio_flex">
        <div class="nav_forms_portfolio">

            <form action = "{{route('contact-form')}}" method = "post">
                @csrf
            <input type="text" name = "name" class="nav_input" placeholder="   Enter your name" id = "name">
            <input type="text" name = "phone" class="nav_input" placeholder="   Enter your mobile number" id = "phone">
            <input type="text" name = "time" class="nav_input" placeholder="   Enter comfortable time" id = "time">
            <button class="nav_button">Book <span class="w375_non">photoshoot</span></button>
            </form>
        </div>
        <div class="container_portfolio_block">
            <div class="container_row">Why you should use us</div>
            <div class="container_row_2">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident,
                sunt in culpa qui officia deserunt mollit anim id est laborum."</div>
        </div>
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
