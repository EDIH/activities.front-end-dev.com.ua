<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Main</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
              rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
              rel="stylesheet">
        <link href="/css/style.css" rel="stylesheet">
    </head>
    <body class="main-page">
        <div class="header-mobile__menu">
    <div class="header__logo">
        <a href="/" class="header__logo-lnk">
            <img src="/images/logo.svg" alt="logo">
        </a>
        <div class="button-close js-button-close">
            <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.3128 10.8527C13.5211 11.061 13.6253 11.314 13.6253 11.6116C13.6253 11.9092 13.5211 12.1622 13.3128 12.3705L11.7949 13.8884C11.5866 14.0967 11.3336 14.2009 11.036 14.2009C10.7384 14.2009 10.4854 14.0967 10.2771 13.8884L6.99583 10.6071L3.71458 13.8884C3.50624 14.0967 3.25327 14.2009 2.95565 14.2009C2.65803 14.2009 2.40505 14.0967 2.19672 13.8884L0.678864 12.3705C0.47053 12.1622 0.366364 11.9092 0.366364 11.6116C0.366364 11.314 0.47053 11.061 0.678864 10.8527L3.96011 7.57142L0.678864 4.29017C0.47053 4.08184 0.366364 3.82886 0.366364 3.53124C0.366364 3.23362 0.47053 2.98065 0.678864 2.77231L2.19672 1.25446C2.40505 1.04612 2.65803 0.941956 2.95565 0.941956C3.25327 0.941956 3.50624 1.04612 3.71458 1.25446L6.99583 4.53571L10.2771 1.25446C10.4854 1.04612 10.7384 0.941956 11.036 0.941956C11.3336 0.941956 11.5866 1.04612 11.7949 1.25446L13.3128 2.77231C13.5211 2.98065 13.6253 3.23362 13.6253 3.53124C13.6253 3.82886 13.5211 4.08184 13.3128 4.29017L10.0315 7.57142L13.3128 10.8527Z" fill="white"/>
            </svg>
        </div>
    </div>
    <div class="header__search">
        <form method="post" class="header__search-form">

            <label>
                <input type="submit">
                <img src="/images/search.svg" alt="">
            </label>
            <input type="text" placeholder="Search ">
        </form>
    </div>
    <nav class="header__navigate-nav">
        <ul class="header__navigate-list">
            <li class="header__navigate-item has-children">
                <a href="catalog.html" class="header__navigate-lnk">
                    Gallery
                </a>
                <ul class="sub-menu">
                    <li class="sub-menu__item">
                        <a href="product1.html" class="sub-menu__lnk">
                            Horizontal
                        </a>
                    </li>
                    <li class="sub-menu__item">
                        <a href="product2.html" class="sub-menu__lnk">
                            Vertical
                        </a>
                    </li>
                </ul>
            </li>
            <li class="header__navigate-item">
                <a href="/about" class="header__navigate-lnk">
                    About
                </a>
            </li>
        </ul>
    </nav>
</div>
        <header class="header" id="header">
    <div class="header__mobile header-mobile">
        <div class="header-mobile__burger js-mobile-burger">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="header__socials">
            <a href="">
                <img src="/images/youtube.svg" alt="logo">
            </a>
            <a href="">
                <img src="/images/insta.svg" alt="logo">
            </a>
            <a href="">
                <img src="/images/fb.svg" alt="logo">
            </a>
        </div>
    </div>
    <div class="header__container section-container">
        <div class="header__logo">
            <a href="/" class="header__logo-lnk">
                <img src="/images/logo.svg" alt="logo">
            </a>
        </div>
        <div class="header__content">
            <div class="header__navigate">
                <nav class="header__navigate-nav">
                    <ul class="header__navigate-list">
                        <li class="header__navigate-item has-children">
                            <a href="catalog.html" class="header__navigate-lnk">
                                Gallery
                            </a>
                            <ul class="sub-menu">
                                <li class="sub-menu__item">
                                    <a href="product1.html" class="sub-menu__lnk">
                                        Horizontal
                                    </a>
                                </li>
                                <li class="sub-menu__item">
                                    <a href="product2.html" class="sub-menu__lnk">
                                        Vertical
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="header__navigate-item">
                            <a href="/about" class="header__navigate-lnk">
                                About
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="header__socials">
                <a href="">
                    <img src="/images/youtube.svg" alt="logo">
                </a>
                <a href="">
                    <img src="/images/insta.svg" alt="logo">
                </a>
                <a href="">
                    <img src="/images/fb.svg" alt="logo">
                </a>
            </div>
            <div class="header__search">
                <span class="js-show=form">
                    <img src="/images/search.svg" alt="">
                    Search
                </span>
                <form method="post" class="header__search-form">
                    <input type="text" placeholder="Search ">
                    <label>
                        <input type="submit">
                        <img src="/images/search.svg" alt="">
                    </label>
                </form>
            </div>
        </div>
    </div>
</header>
        @yield('content')
        <footer id="footer" class="footer">
    <div class="footer__container section-container">
        <div class="footer__logo">
            <a href="/" class="header__logo-lnk">
                <img src="/images/logo.svg" alt="logo">
            </a>
        </div>
        <div class="header__socials mobile-footer">
            <a href="">
                <img src="/images/youtube.svg" alt="logo">
            </a>
            <a href="">
                <img src="/images/insta.svg" alt="logo">
            </a>
            <a href="">
                <img src="/images/fb.svg" alt="logo">
            </a>
        </div>
        <div class="footer__nav">
            <a href="">Facebook</a>
            <a href="">Twiter</a>
            <a href="">Instagram</a>
        </div>
    </div>
    <div class="footer__copyright section-container">
        <p>© Art Farm International, Inc. , 2020 All rights reserved</p>
        <p>
            Website Terms and Conditions | Terms and Conditions of Sale</p>
    </div>
</footer>
        <script src="/vendor/jquery/jquery.min.js"></script>
        <script src="/js/common.js"></script>
    </body>

</html>


