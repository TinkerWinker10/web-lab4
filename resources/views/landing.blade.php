@extends('layouts.app')

@section('title-block')
InTouch
@endsection

@section('content')
    <header class="header">
        <img src="/images/header__logo.png" alt="" class="img_header" width="100%">
        <div class="header_menu">
            <div class="InTouch">
                <img src="/images/Logo.png" alt="" class="img-Logo">
                <span class="InTouch-text">InTouch</span>
            </div>
            <div class="menu-text">
                <a href="/index" class="menu-spacing">CATEGORIES</a>
                <a href="/about" class="menu-spacing">WORK</a>
                <a href="/about" class="menu-spacing">TEAM</a>
                <a href="" class="menu-spacing">CONTACT US</a>
                <a href="/about" class="menu-spacing">INFO</a>
            </div>
        </div>
        <div class="header-text">
            LETS CREATE PERFECTION
        </div>
        <div class="header_row">
            DEAL WITH US
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
    <div class="wrapper">
        <div class="container">
            <div class="container_item">Just imagine</div>
            <div class="container_row">Why you should use us</div>
            <div class="container_row_2">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident,
                sunt in culpa qui officia deserunt mollit anim id est laborum."</div>
        </div>
        <div class="container_flex">
            <div class="container_flex_block">
                <div class="flex_logo"><img src="/images/1234_08 1.png" alt=""></div>
                <div class="flex_title">Document your memories</div>
                <div class="flex_text">From first smiles to first steps to first dates, life can be documented and preserved.</div>
            </div>
            <div class="container_flex_block">
                <div class="flex_logo"><img src="/images/1234_14 1.png" alt=""></div>
                <div class="flex_title">Photozone for creativity</div>
                <div class="flex_text">Make the masterpiece with wide variety of photozones and locations.</div>
            </div>
            <div class="container_flex_block">
                <div class="flex_logo"><img src="/images/1234_17 1.png" alt=""></div>
                <div class="flex_title">Toe-to-toe with progress</div>
                <div class="flex_text">Receive best shots with high-tech equipment and skills.</div>
            </div>
            <div class="container_flex_block">
                <div class="flex_logo"><img src="/images/1234_20 1.png" alt=""></div>
                <div class="flex_title">Film and enjoy your hapiness</div>
                <div class="flex_text">Just in case you are looking for a person, which can film your party.</div>
            </div>
            <div class="container_flex_block">
                <div class="flex_logo"><img src="/images/1234_03 1.png" alt=""></div>
                <div class="flex_title">Advertise your business</div>
                <div class="flex_text">Every businessman need to promote his business, so we are the best solution for this.</div>
            </div>
            <div class="container_flex_block">
                <div class="flex_logo"><img src="/images/1234_06 1.png" alt=""></div>
                <div class="flex_title">Make the live streams on</div>
                <div class="flex_text">Ideal solution to stream whatever you want, from entertainment to sport activity.</div>
            </div>
        </div>
        <div class="container">
            <div class="container_item">Create vision</div>
            <div class="container_row">Work of our team</div>
            <div class="container_row_2">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident,
                sunt in culpa qui officia deserunt mollit anim id est laborum."</div>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="/js/slick.min.js"></script>
        <script src="/js/script.js"></script>
    </div>
    <div class="photo_collection">
        <div class="photo_collection_1">
            <img src="/images/7 1.png" alt="" width="532px" height="352px" class="mob_ver">
            <img src="/images/6 1.png" alt="" width="532px" height="354px" class="mob_ver">
        </div>
        <img src="/images/8 1.png" alt="" class="mob_ver_2">
        <img src="/images/9 1.png" alt="" class="no_mob">
        <div class="photo_collection_2 no_mob">
            <img src="/images/10 1.png" alt="" width="544px" height="353px">
            <img src="/images/12 1.png" alt="" width="628px" height="353px">
        </div>
    </div>
    <div class="wrapper sl_2">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/slick.min.js"></script>
        <script src="js/script.js"></script>
    </div>
    <div class="container">
        <div class="container_item">Make the rigth desicion</div>
        <div class="container_row">Contact us</div>
        <div class="nav">
            <div class="nav_img">
                    <div class="nav_flex_1">
                        <div class="nav_flex_1_item">
                            In case you need consultation or even if you already decide to choose us,
                             just leave a number and we will call you whatever you want.
                            Just leave your name, mobile number and time when we can call You</div>
                        <div class="nav_flex_1_row">
                            <div class="nav_forms">
                                <form action = "{{route('contact-form')}}" method = "post">
                                    @csrf
                                <input type="text" name = "name" class="nav_input" placeholder="  Enter your name" id = "name">
                                <input type="text" name = "phone" class="nav_input" placeholder="  Enter your mobile number" id = "phone">
                                <input type="text" name = "time" class="nav_input" placeholder="  Enter comfortable time" id = "time">
                                <button class="nav_button">Send info</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="nav_flex_2">
                        <img src="/images/image 4.png" alt="">
                    </div>
            </div>
        </div>
    </div>
    <footer class="landing_footer">
        <div class="footer_theme">
        <div class="footer_menu">
            <a href="" class="footer_menu_text">ABOUT US</a> <a href="" class="footer_menu_text">TEAM</a>
            <br>
             <a href="" class="footer_menu_text">WORK</a> <a href="" class="footer_menu_text">CONTACT US</a>
        </div>
        <div class="footer_logo">
            <img src="/images/Logo.png" alt="">
        </div>
            <div class="footer_twitt"><img src="/images/twitter 1.png" alt="" class="footer_links"></div>
            <div class="footer_inst"><img src="/images/instagram 1.png" alt="" class="footer_links"></div>
            <div class="footer_prin"><img src="/images/pinterest 1.png" alt="" class="footer_links"></div>
            <div class="footer_form">
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
@endsection
