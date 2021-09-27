<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Activity - спорт для детей</title>
    <link href="/css/style.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="img/icons/favicon.png" sizes="32x32">
    <link rel="icon" type="image/svg" href="img/icons/favicon.svg" sizes="32x32">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" defer></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js" defer></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js" defer></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="description" content="Сайт про спорт для детей">
    <meta name="Keywords" content="HTML, META, метатег, тег, поисковая система">
    <script src="/js/common.js" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700;800&display=swap"
          rel="stylesheet">
    <script src="https://api-maps.yandex.ru/2.1/?apikey=ваш API-ключ&lang=ru_RU" type="text/javascript"></script>
</head>
<body>
<header class="header">
    <div class="header__pre main-container">
        <div class="header__logo">
            <a href="index.html" alt="Main Logo">
                <img src="img/header/logo-header.svg" alt="Logo">
            </a>
        </div>
        <div class="header__phone">
            <div class="header__name">
                Телефон
            </div>
            <div class="header__value">
                <a href="tel:+7(495)000-00-00">+7 (495) 000-00-00</a>
            </div>
        </div>
        <div class="header__mail">
            <div class="header__name">
                Электронная почта
            </div>
            <div class="header__value">
                <a href="mailto:info_activities@mail.ru">info_activities@mail.ru</a>
            </div>
        </div>
        <div class="header__wrapper">
            <div class="header__search">
                <form action="" method="">
                    <input type="text" placeholder="Поиск">
                    <button>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20.71 19.29L17.31 15.9C18.407 14.5025 19.0022 12.7767 19 11C19 9.41775 18.5308 7.87103 17.6518 6.55544C16.7727 5.23985 15.5233 4.21447 14.0615 3.60897C12.5997 3.00347 10.9911 2.84504 9.43928 3.15372C7.88743 3.4624 6.46197 4.22433 5.34315 5.34315C4.22433 6.46197 3.4624 7.88743 3.15372 9.43928C2.84504 10.9911 3.00347 12.5997 3.60897 14.0615C4.21447 15.5233 5.23985 16.7727 6.55544 17.6518C7.87103 18.5308 9.41775 19 11 19C12.7767 19.0022 14.5025 18.407 15.9 17.31L19.29 20.71C19.383 20.8037 19.4936 20.8781 19.6154 20.9289C19.7373 20.9797 19.868 21.0058 20 21.0058C20.132 21.0058 20.2627 20.9797 20.3846 20.9289C20.5064 20.8781 20.617 20.8037 20.71 20.71C20.8037 20.617 20.8781 20.5064 20.9289 20.3846C20.9797 20.2627 21.0058 20.132 21.0058 20C21.0058 19.868 20.9797 19.7373 20.9289 19.6154C20.8781 19.4936 20.8037 19.383 20.71 19.29ZM5 11C5 9.81332 5.3519 8.65328 6.01119 7.66658C6.67047 6.67989 7.60755 5.91085 8.7039 5.45673C9.80026 5.0026 11.0067 4.88378 12.1705 5.11529C13.3344 5.3468 14.4035 5.91825 15.2426 6.75736C16.0818 7.59648 16.6532 8.66558 16.8847 9.82946C17.1162 10.9933 16.9974 12.1997 16.5433 13.2961C16.0892 14.3925 15.3201 15.3295 14.3334 15.9888C13.3467 16.6481 12.1867 17 11 17C9.4087 17 7.88258 16.3679 6.75736 15.2426C5.63214 14.1174 5 12.5913 5 11Z"
                                  fill="#BECBDF"/>
                        </svg>
                    </button>
                </form>
            </div>
            <div class="header__socials">
                <a href="http://facebook.com" class="header__socials-item">
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <title>FaceBook</title>
                        <path d="M14 7.04287C14 3.15311 10.8661 0 7.00087 0C3.13386 0.000874891 0 3.15311 0 7.04375C0 10.5582 2.55993 13.4716 5.90551 14V9.07874H4.12948V7.04375H5.90726V5.49081C5.90726 3.72616 6.95276 2.75153 8.55118 2.75153C9.31758 2.75153 10.1181 2.88889 10.1181 2.88889V4.62117H9.23534C8.36658 4.62117 8.09536 5.16448 8.09536 5.72179V7.04287H10.0359L9.72616 9.07787H8.09449V13.9991C11.4401 13.4707 14 10.5573 14 7.04287Z"
                              fill="#6E2AFF"/>
                    </svg>
                </a>
                <a href="http://vk.com" class="header__socials-item">
                    <svg width="16" height="10" viewBox="0 0 16 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <title>vk</title>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M15.6333 0.965374C15.744 0.601374 15.6333 0.333374 15.1033 0.333374H13.3533C12.908 0.333374 12.7027 0.564707 12.5913 0.820041C12.5913 0.820041 11.7013 2.95071 10.4407 4.33471C10.0327 4.73604 9.84733 4.86338 9.62467 4.86338C9.51333 4.86338 9.346 4.73604 9.346 4.37137V0.965374C9.346 0.528041 9.22333 0.333374 8.85267 0.333374H6.10067C5.82267 0.333374 5.65533 0.536041 5.65533 0.728707C5.65533 1.14271 6.286 1.23871 6.35067 2.40404V4.93604C6.35067 5.49138 6.24867 5.59204 6.026 5.59204C5.43267 5.59204 3.98933 3.45137 3.13267 1.00204C2.96667 0.525374 2.79867 0.333374 2.35133 0.333374H0.6C0.1 0.333374 0 0.564707 0 0.820041C0 1.27471 0.593333 3.53337 2.76333 6.52071C4.21 8.56071 6.24667 9.66671 8.102 9.66671C9.21467 9.66671 9.352 9.42138 9.352 8.99804V7.45604C9.352 6.96471 9.45733 6.86671 9.81 6.86671C10.07 6.86671 10.5147 6.99471 11.5533 7.97804C12.74 9.14404 12.9353 9.66671 13.6033 9.66671H15.3533C15.8533 9.66671 16.104 9.42138 15.96 8.93604C15.8013 8.45338 15.2347 7.75271 14.4833 6.92138C14.0753 6.44804 13.4633 5.93804 13.2773 5.68271C13.018 5.35538 13.092 5.20937 13.2773 4.91804C13.2773 4.91804 15.4107 1.96737 15.6327 0.965374H15.6333Z"
                              fill="#6E2AFF"/>
                    </svg>
                </a>
                <a href="http://instagram.com" class="header__socials-item">
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <title>instagram</title>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M12.6853 3.0593C12.8634 3.53182 12.9579 4.03172 12.9647 4.53664C13.0018 5.1717 13.002 5.37939 13.0033 6.98693L13.0033 7.00931C13.0033 8.63797 12.9947 8.8413 12.966 9.48264C12.956 9.98197 12.862 10.474 12.6867 10.9406C12.532 11.3391 12.2961 11.701 11.9939 12.0032C11.6917 12.3054 11.3298 12.5414 10.9313 12.696C10.4649 12.871 9.97209 12.9655 9.47399 12.9753C8.83732 13.0126 8.62865 13.0126 7.00065 13.0126C5.37265 13.0126 5.16932 13.004 4.52732 12.9753C4.02823 12.9589 3.53561 12.8574 3.07065 12.6753C2.67203 12.521 2.30997 12.2853 2.00761 11.9832C1.70525 11.681 1.46924 11.3191 1.31465 10.9206C1.13932 10.4533 1.04532 9.96131 1.03532 9.46264C0.997986 8.8253 0.997986 8.6173 0.997986 6.98931C0.997986 5.36131 1.00665 5.15797 1.03532 4.51597C1.04473 4.01805 1.13921 3.52539 1.31465 3.0593C1.46898 2.66068 1.70482 2.29865 2.00707 1.99639C2.30933 1.69413 2.67136 1.4583 3.06999 1.30397C3.53622 1.12895 4.02876 1.03427 4.52665 1.02397C5.16332 0.987305 5.37199 0.987305 6.99999 0.987305C8.62799 0.987305 8.83132 0.995305 9.47265 1.02397C9.97077 1.0342 10.4635 1.12888 10.93 1.30397C11.3286 1.45841 11.6905 1.69428 11.9928 1.99653C12.295 2.29877 12.5309 2.66074 12.6853 3.0593ZM3.91399 6.98597C3.91399 8.68864 5.29332 10.068 6.99599 10.068C7.81338 10.068 8.5973 9.74326 9.17529 9.16527C9.75328 8.58729 10.078 7.80337 10.078 6.98597C10.078 6.16857 9.75328 5.38466 9.17529 4.80667C8.5973 4.22868 7.81338 3.90397 6.99599 3.90397C5.29332 3.90397 3.91399 5.28331 3.91399 6.98597ZM9.48199 3.78997C9.48199 4.1873 9.80265 4.50864 10.2007 4.50864C10.5973 4.50864 10.9187 4.1873 10.9187 3.78997C10.9187 3.69564 10.9001 3.60223 10.864 3.51508C10.8279 3.42793 10.775 3.34874 10.7083 3.28203C10.6416 3.21533 10.5624 3.16242 10.4752 3.12632C10.3881 3.09022 10.2947 3.07164 10.2003 3.07164C10.106 3.07164 10.0126 3.09022 9.92543 3.12632C9.83827 3.16242 9.75909 3.21533 9.69238 3.28203C9.62568 3.34874 9.57277 3.42793 9.53667 3.51508C9.50057 3.60223 9.48199 3.69564 9.48199 3.78997ZM8.99802 6.98601C8.99802 8.09168 8.10169 8.98801 6.99602 8.98801C5.89034 8.98801 4.99402 8.09168 4.99402 6.98601C4.99402 5.88033 5.89034 4.98401 6.99602 4.98401C8.10169 4.98401 8.99802 5.88033 8.99802 6.98601Z"
                              fill="#6E2AFF"/>
                    </svg>
                </a>
                <a href="http://youtube.com" class="header__socials-item">
                    <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <title>youtube</title>
                        <path d="M8 0.839966C0.1376 0.839966 0 1.53917 0 6.99997C0 12.4608 0.1376 13.16 8 13.16C15.8624 13.16 16 12.4608 16 6.99997C16 1.53917 15.8624 0.839966 8 0.839966ZM10.564 7.26717L6.972 8.94397C6.6576 9.08957 6.4 8.92637 6.4 8.57917V5.42077C6.4 5.07437 6.6576 4.91037 6.972 5.05597L10.564 6.73277C10.8784 6.87997 10.8784 7.11997 10.564 7.26717Z"
                              fill="#6E2AFF"/>
                    </svg>
                </a>
                <a href="http://tiktok.com" class="header__socials-item">
                    <svg width="12" height="14" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <title>tiktok</title>
                        <path d="M6.30319 0.0118131C7.0564 0 7.8053 0.00700037 8.55334 0C8.59866 0.892985 8.91548 1.8026 9.56036 2.43394C10.2039 3.08104 11.1143 3.37724 12 3.47744V5.8265C11.17 5.79893 10.336 5.62392 9.5828 5.26166C9.25476 5.11115 8.94915 4.91732 8.65002 4.71913C8.64614 6.42372 8.65693 8.12612 8.63923 9.82371C8.59434 10.6393 8.32888 11.4509 7.86098 12.1229C7.1082 13.2416 5.80162 13.971 4.45964 13.9937C3.6365 14.0414 2.81422 13.8139 2.1128 13.3948C0.95039 12.7 0.132428 11.4281 0.013295 10.063C-0.0017111 9.77394 -0.00401549 9.4843 0.00638872 9.19499C0.109983 8.08499 0.651694 7.02312 1.49253 6.30077C2.4456 5.45942 3.78067 5.05864 5.0307 5.29578C5.04236 6.15989 5.00826 7.02312 5.00826 7.88723C4.4372 7.69997 3.76988 7.75248 3.2709 8.10381C2.90583 8.34758 2.62995 8.70624 2.48574 9.12455C2.36661 9.42031 2.40071 9.74889 2.40761 10.063C2.54445 11.0203 3.45262 11.8249 4.42209 11.7379C5.0648 11.7309 5.68076 11.3529 6.01571 10.7994C6.12405 10.6056 6.24535 10.4074 6.25182 10.1794C6.30837 9.13593 6.28592 8.09681 6.29283 7.05331C6.29757 4.70163 6.28592 2.3565 6.30362 0.0122507L6.30319 0.0118131Z"
                              fill="#6E2AFF"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <nav class="header__nav">
        <ul class="header__nav-list main-container">
            <li class="header__nav-item"><a href="#about" class="header__nav-lnk">О нас</a></li>
            <li class="header__nav-item"><a href="#programs" class="header__nav-lnk">Наши программы</a></li>
            <li class="header__nav-item"><a href="#price" class="header__nav-lnk">Виды посещений</a></li>
            <li class="header__nav-item"><a href="#timetable" class="header__nav-lnk">Расписание</a></li>
            <li class="header__nav-item"><a href="#price" class="header__nav-lnk">Цены</a></li>
            <li class="header__nav-item"><a href="#trainer" class="header__nav-lnk">Тренеры</a></li>
            <li class="header__nav-item"><a href="#galery" class="header__nav-lnk">Галлерея</a></li>
            <li class="header__nav-item"><a href="#contact-us" class="header__nav-lnk">Контакты</a></li>
        </ul>
    </nav>

</header>
<main class="main">


    @yield('content')
{{--    <article>--}}
{{--        <section class="banner" data-aos="zoom-in">--}}
{{--            <div class="banner__slide">--}}
{{--                <picture class="banner__picture">--}}
{{--                    <source media="(min-width: 500px)"--}}
{{--                            srcset="img/templates/banner/slide-1.jpg">--}}
{{--                    <img class="banner__img" src="img/templates/banner/slide-1.jpg"--}}
{{--                         alt="15 августа день открытых дверей. Получи скидку">--}}
{{--                </picture>--}}
{{--                <div class="banner__content main-container">--}}
{{--                    <div class="banner__wrapper">--}}
{{--                        <div class="banner__untitle">--}}
{{--                            Спортивный клуб для детей и подростков--}}
{{--                        </div>--}}
{{--                        <h1 class="banner__title">--}}
{{--                            ACTIVITIES CHILdren progressive--}}
{{--                        </h1>--}}
{{--                        <div class="banner__row">--}}
{{--                            <img src="img/templates/banner/icon.svg"--}}
{{--                                 alt="15 августа день открытых дверей. Получи скидку" class="banner__icon">--}}
{{--                            <p class="banner__desc">15 августа день открытых дверей. Получи скидку</p>--}}
{{--                        </div>--}}
{{--                        <div class="banner__button">--}}
{{--                            <div class="main-button js-button-send-form button">--}}
{{--                                Записаться на пробное занятие--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
{{--        <section class="content-slider" data-aos="fade-up" id="about">--}}
{{--            <div class="content-slider__container main-container swiper-container">--}}
{{--                <div class="content-slider__pagination swiper-pagination"></div>--}}
{{--                <div class="content-slider__design">--}}
{{--                    <div class="content-slider__design-ring">--}}
{{--                        <svg width="91" height="91" viewBox="0 0 91 91" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                            <circle opacity="0.3" cx="45.5" cy="45.5" r="43" stroke="#BECBDF" stroke-width="5"/>--}}
{{--                        </svg>--}}
{{--                    </div>--}}
{{--                    <div class="content-slider__design-worm">--}}
{{--                        <svg width="140" height="16" viewBox="0 0 140 16" fill="none"--}}
{{--                             xmlns="http://www.w3.org/2000/svg">--}}
{{--                            <path d="M114.8 16C108.3 16 105 12.5 102.1 9.4C99.3 6.5 97 4 92.2 4C87.4 4 85.1 6.5 82.4 9.4C79.5 12.5 76.2 16 69.7 16C63.2 16 59.9 12.5 57 9.4C54.3 6.5 52 4 47.2 4C42.4 4 40 6.5 37.3 9.4C34.4 12.5 31.1 16 24.6 16C18.1 16 14.8 12.5 11.9 9.4C9.1 6.5 6.8 4 2 4C0.9 4 0 3.1 0 2C0 0.9 0.9 0 2 0C8.5 0 11.8 3.5 14.7 6.6C17.4 9.5 19.7 12 24.5 12C29.3 12 31.6 9.5 34.3 6.6C37.3 3.5 40.6 0 47.1 0C53.6 0 56.9 3.5 59.8 6.6C62.5 9.5 64.8 12 69.6 12C74.4 12 76.7 9.5 79.4 6.6C82.4 3.5 85.7 0 92.2 0C98.7 0 102 3.5 105 6.6C107.7 9.5 110 12 114.8 12C119.6 12 121.9 9.5 124.6 6.6C127.5 3.5 130.8 0 137.3 0C138.4 0 139.3 0.9 139.3 2C139.3 3.1 138.4 4 137.3 4C132.5 4 130.2 6.5 127.5 9.4C124.6 12.5 121.3 16 114.8 16Z"--}}
{{--                                  fill="#BECBDF"/>--}}
{{--                        </svg>--}}
{{--                    </div>--}}
{{--                    <div class="content-slider__design-perforation">--}}
{{--                        <img src="img/templates/content-slider/perforation.svg" alt="design element">--}}
{{--                    </div>--}}
{{--                    <div class="content-slider__design-board">--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="content-slider__wrapper swiper-wrapper">--}}
{{--                    <div class="content-slider__slide swiper-slide">--}}
{{--                        <h2 class="content-slider__title section-title">--}}
{{--                            ACTIVITIES--}}
{{--                        </h2>--}}
{{--                        <div class="content-slider__row">--}}
{{--                            <div class="content-slider__text">--}}
{{--                                <p>--}}
{{--                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Erat est eu, nibh--}}
{{--                                    ullamcorper. Quam amet suspendisse imperdiet aliquet molestie odio in. Sed aliquet--}}
{{--                                    eu mi sit ac lectus. Eget neque tincidunt massa, diam fringilla ornare ultrices--}}
{{--                                    eget. Mi, eu consequat placerat tellus, porttitor eu. Orci quisque turpis egestas--}}
{{--                                    felis, in in. Suscipit viverra nec ut iaculis placerat porttitor nunc. Lectus nunc,--}}
{{--                                    sed viverra egestas. Felis risus amet faucibus lorem sagittis elit eu faucibus sit.--}}
{{--                                    Massa pellentesque nisl, ut eget. Faucibus sit in duis vestibulum, donec commodo--}}
{{--                                    lacus lectus nec.--}}
{{--                                </p>--}}
{{--                                <p>--}}
{{--                                    Duis augue ac placerat imperdiet diam. Tellus quam mattis odio volutpat ipsum. Dui--}}
{{--                                    morbi eget arcu lacus vel. Nunc et sapien, dictumst consectetur. Nunc interdum ante--}}
{{--                                    id sed dictum. Nulla nisl porttitor pharetra id. Viverra nunc ornare id quis.--}}
{{--                                    Rhoncus odio venenatis leo faucibus massa, blandit volutpat donec lectus. In cras.--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                            <div class="content-slider__img">--}}
{{--                                <picture class="content-slider__picture">--}}
{{--                                    <source media="(min-width: 500px)"--}}
{{--                                            srcset="img/templates/content-slider/slide-1.jpg">--}}
{{--                                    <img class="content-slider__image" src="img/templates/content-slider/slide-1.jpg"--}}
{{--                                         alt="Duis augue ac placerat imperdiet diam. Tellus quam mattis odio volutpat ipsum. Dui--}}
{{--                                    morbi eget arcu lacus vel. Nunc et sapien, dictumst consectetur. Nunc interdum ante--}}
{{--                                    id sed dictum. Nulla nisl porttitor pharetra id. Viverra nunc ornare id quis.--}}
{{--                                    Rhoncus odio venenatis leo faucibus massa, blandit volutpat donec lectus. In cras.">--}}
{{--                                </picture>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="content-slider__slide swiper-slide">--}}
{{--                        <h2 class="content-slider__title section-title">--}}
{{--                            ACTIVITIES--}}
{{--                        </h2>--}}
{{--                        <div class="content-slider__row">--}}
{{--                            <div class="content-slider__text">--}}
{{--                                <p>--}}
{{--                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Erat est eu, nibh--}}
{{--                                    ullamcorper. Quam amet suspendisse imperdiet aliquet molestie odio in. Sed aliquet--}}
{{--                                    eu mi sit ac lectus. Eget neque tincidunt massa, diam fringilla ornare ultrices--}}
{{--                                    eget. Mi, eu consequat placerat tellus, porttitor eu. Orci quisque turpis egestas--}}
{{--                                    felis, in in. Suscipit viverra nec ut iaculis placerat porttitor nunc. Lectus nunc,--}}
{{--                                    sed viverra egestas. Felis risus amet faucibus lorem sagittis elit eu faucibus sit.--}}
{{--                                    Massa pellentesque nisl, ut eget. Faucibus sit in duis vestibulum, donec commodo--}}
{{--                                    lacus lectus nec.--}}
{{--                                </p>--}}
{{--                                <p>--}}
{{--                                    Duis augue ac placerat imperdiet diam. Tellus quam mattis odio volutpat ipsum. Dui--}}
{{--                                    morbi eget arcu lacus vel. Nunc et sapien, dictumst consectetur. Nunc interdum ante--}}
{{--                                    id sed dictum. Nulla nisl porttitor pharetra id. Viverra nunc ornare id quis.--}}
{{--                                    Rhoncus odio venenatis leo faucibus massa, blandit volutpat donec lectus. In cras.--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                            <div class="content-slider__img">--}}
{{--                                <picture class="content-slider__picture">--}}
{{--                                    <source media="(min-width: 500px)"--}}
{{--                                            srcset="img/templates/content-slider/slide-1.jpg">--}}
{{--                                    <img class="content-slider__image" src="img/templates/content-slider/slide-1.jpg"--}}
{{--                                         alt="Duis augue ac placerat imperdiet diam. Tellus quam mattis odio volutpat ipsum. Dui--}}
{{--                                    morbi eget arcu lacus vel. Nunc et sapien, dictumst consectetur. Nunc interdum ante--}}
{{--                                    id sed dictum. Nulla nisl porttitor pharetra id. Viverra nunc ornare id quis.--}}
{{--                                    Rhoncus odio venenatis leo faucibus massa, blandit volutpat donec lectus. In cras.">--}}
{{--                                </picture>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="content-slider__slide swiper-slide">--}}
{{--                        <h2 class="content-slider__title section-title">--}}
{{--                            ACTIVITIES--}}
{{--                        </h2>--}}
{{--                        <div class="content-slider__row">--}}
{{--                            <div class="content-slider__text">--}}
{{--                                <p>--}}
{{--                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Erat est eu, nibh--}}
{{--                                    ullamcorper. Quam amet suspendisse imperdiet aliquet molestie odio in. Sed aliquet--}}
{{--                                    eu mi sit ac lectus. Eget neque tincidunt massa, diam fringilla ornare ultrices--}}
{{--                                    eget. Mi, eu consequat placerat tellus, porttitor eu. Orci quisque turpis egestas--}}
{{--                                    felis, in in. Suscipit viverra nec ut iaculis placerat porttitor nunc. Lectus nunc,--}}
{{--                                    sed viverra egestas. Felis risus amet faucibus lorem sagittis elit eu faucibus sit.--}}
{{--                                    Massa pellentesque nisl, ut eget. Faucibus sit in duis vestibulum, donec commodo--}}
{{--                                    lacus lectus nec.--}}
{{--                                </p>--}}
{{--                                <p>--}}
{{--                                    Duis augue ac placerat imperdiet diam. Tellus quam mattis odio volutpat ipsum. Dui--}}
{{--                                    morbi eget arcu lacus vel. Nunc et sapien, dictumst consectetur. Nunc interdum ante--}}
{{--                                    id sed dictum. Nulla nisl porttitor pharetra id. Viverra nunc ornare id quis.--}}
{{--                                    Rhoncus odio venenatis leo faucibus massa, blandit volutpat donec lectus. In cras.--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                            <div class="content-slider__img">--}}
{{--                                <picture class="content-slider__picture">--}}
{{--                                    <source media="(min-width: 500px)"--}}
{{--                                            srcset="img/templates/content-slider/slide-1.jpg">--}}
{{--                                    <img class="content-slider__image" src="img/templates/content-slider/slide-1.jpg"--}}
{{--                                         alt="Duis augue ac placerat imperdiet diam. Tellus quam mattis odio volutpat ipsum. Dui--}}
{{--                                    morbi eget arcu lacus vel. Nunc et sapien, dictumst consectetur. Nunc interdum ante--}}
{{--                                    id sed dictum. Nulla nisl porttitor pharetra id. Viverra nunc ornare id quis.--}}
{{--                                    Rhoncus odio venenatis leo faucibus massa, blandit volutpat donec lectus. In cras.">--}}
{{--                                </picture>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
{{--        <section class="process" data-aos="fade-right">--}}
{{--            <div class="process__design">--}}
{{--                <div class="process__design-worm-left">--}}
{{--                    <svg width="130" height="14" viewBox="0 0 130 14" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                        <path d="M107 14C101.1 14 98.1 11 95.4 8.4C93 6.1 90.9 4 86.7 4C82.5 4 80.3 6.1 77.9 8.4C75.2 11 72.2 14 66.3 14C60.4 14 57.4 11 54.7 8.4C52.3 6.1 50.3 4 46 4C41.7 4 39.7 6.1 37.2 8.4C34.5 11 31.5 14 25.6 14C19.7 14 16.7 11 14 8.4C11.7 6.1 9.60001 4 5.3 4C1 4 -1 6.1 -3.5 8.4C-6.1 11 -9.1 14 -15 14C-20.9 14 -23.9 11 -26.6 8.4C-29 6.1 -31.1 4 -35.3 4C-39.6 4 -41.6 6.1 -44.1 8.4C-46.8 11 -49.8 14 -55.7 14C-61.6 14 -64.6 11 -67.3 8.4C-69.7 6.1 -71.7 4 -76 4C-77.1 4 -78 3.1 -78 2C-78 0.9 -77.1 0 -76 0C-70.1 0 -67.1 3 -64.4 5.6C-62 7.9 -59.9 10 -55.7 10C-51.4 10 -49.4 7.9 -46.9 5.6C-44.2 3 -41.2 0 -35.3 0C-29.4 0 -26.4 3 -23.7 5.6C-21.4 7.9 -19.3 10 -15 10C-10.7 10 -8.7 7.9 -6.2 5.6C-3.6 3 -0.599998 0 5.3 0C11.2 0 14.2 3 16.9 5.6C19.3 8 21.4 10 25.7 10C30 10 32 7.9 34.5 5.6C37.1 3 40.1 0 46 0C51.9 0 54.9 3 57.6 5.6C60 8 62.1 10 66.4 10C70.7 10 72.7 7.9 75.2 5.6C77.7 3 80.8 0 86.7 0C92.6 0 95.6 3 98.3 5.6C100.7 8 102.8 10 107.1 10C111.4 10 113.5 7.9 115.9 5.6C118.4 3 121.4 0 127.3 0C128.4 0 129.3 0.9 129.3 2C129.3 3.1 128.4 4 127.3 4C123 4 120.9 6.1 118.5 8.4C115.9 11 112.9 14 107 14Z"--}}
{{--                              fill="url(#paint0_linear)"/>--}}
{{--                        <defs>--}}
{{--                            <linearGradient id="paint0_linear" x1="-78" y1="6.79149" x2="119.511" y2="-37.0017"--}}
{{--                                            gradientUnits="userSpaceOnUse">--}}
{{--                                <stop stop-color="#6E2AFF"/>--}}
{{--                                <stop offset="1" stop-color="#7ADBEE"/>--}}
{{--                            </linearGradient>--}}
{{--                        </defs>--}}
{{--                    </svg>--}}
{{--                </div>--}}
{{--                <div class="process__design-perf-left">--}}
{{--                    <img src="img/templates/process/perf.svg" alt="Тренировочный процесс основан на:">--}}
{{--                </div>--}}
{{--                <div class="process__design-perf-right">--}}
{{--                    <img src="img/templates/process/perf-right.svg" alt="Тренировочный процесс основан на:">--}}
{{--                </div>--}}
{{--                <div class="process__design-square">--}}
{{--                    <svg width="74" height="74" viewBox="0 0 74 74" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                        <rect opacity="0.5" x="1.41421" y="37" width="50.3259" height="50.3259"--}}
{{--                              transform="rotate(-45 1.41421 37)" stroke="#BECBDF" stroke-width="2"/>--}}
{{--                    </svg>--}}
{{--                </div>--}}
{{--                <div class="process__design-ring">--}}
{{--                    <svg width="72" height="146" viewBox="0 0 72 146" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                        <circle cx="73" cy="73" r="70.5" stroke="#BECBDF" stroke-width="5"/>--}}
{{--                    </svg>--}}
{{--                </div>--}}
{{--                <div class="process__design-worm-right">--}}
{{--                    <svg width="208" height="14" viewBox="0 0 208 14" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                        <path d="M185 14C179.1 14 176.1 11 173.4 8.4C171 6.1 168.9 4 164.7 4C160.5 4 158.3 6.1 155.9 8.4C153.2 11 150.2 14 144.3 14C138.4 14 135.4 11 132.7 8.4C130.3 6.1 128.3 4 124 4C119.7 4 117.7 6.1 115.2 8.4C112.5 11 109.5 14 103.6 14C97.7 14 94.7 11 92 8.4C89.7 6.1 87.6 4 83.3 4C79 4 77 6.1 74.5 8.4C71.9 11 68.9 14 63 14C57.1 14 54.1 11 51.4 8.4C49 6.1 46.9 4 42.7 4C38.4 4 36.4 6.1 33.9 8.4C31.2 11 28.2 14 22.3 14C16.4 14 13.4 11 10.7 8.4C8.3 6.1 6.3 4 2 4C0.9 4 0 3.1 0 2C0 0.9 0.9 0 2 0C7.9 0 10.9 3 13.6 5.6C16 7.9 18.1 10 22.3 10C26.6 10 28.6 7.9 31.1 5.6C33.8 3 36.8 0 42.7 0C48.6 0 51.6 3 54.3 5.6C56.6 7.9 58.7 10 63 10C67.3 10 69.3 7.9 71.8 5.6C74.4 3 77.4 0 83.3 0C89.2 0 92.2 3 94.9 5.6C97.3 8 99.4 10 103.7 10C108 10 110 7.9 112.5 5.6C115.1 3 118.1 0 124 0C129.9 0 132.9 3 135.6 5.6C138 8 140.1 10 144.4 10C148.7 10 150.7 7.9 153.2 5.6C155.7 3 158.8 0 164.7 0C170.6 0 173.6 3 176.3 5.6C178.7 8 180.8 10 185.1 10C189.4 10 191.5 7.9 193.9 5.6C196.4 3 199.4 0 205.3 0C206.4 0 207.3 0.9 207.3 2C207.3 3.1 206.4 4 205.3 4C201 4 198.9 6.1 196.5 8.4C193.9 11 190.9 14 185 14Z"--}}
{{--                              fill="#BECBDF"/>--}}
{{--                    </svg>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="process__container main-container">--}}
{{--                <h2 class="process__title section-title">--}}
{{--                    Тренировочный процесс основан на:--}}
{{--                </h2>--}}
{{--                <h3 class="process__subtitle">--}}
{{--                    обеспечении разностороннего физического развития детей и подростков--}}
{{--                </h3>--}}
{{--                <div class="process__scheme">--}}
{{--                    <div class="process__arrow main-container">--}}
{{--                        <div class="process__desc">--}}
{{--                            <p>По мере прохождения стадии развития мы акцентируем все больше внимания:</p>--}}
{{--                            <svg width="138" height="127" viewBox="0 0 138 127" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                <path d="M122.856 121.194L113.718 114.135L112.173 125.578L122.856 121.194ZM15.2849 0.957408C15.2569 1.61503 15.236 2.28545 15.2225 2.96804L17.2221 3.00759C17.2353 2.33993 17.2557 1.68472 17.2831 1.04259L15.2849 0.957408ZM15.2291 7.04432C15.2585 8.36502 15.3142 9.72215 15.3981 11.112L17.3945 10.9915C17.3121 9.62661 17.2574 8.29483 17.2286 6.99985L15.2291 7.04432ZM15.7156 15.1655C15.8426 16.4874 15.9944 17.8338 16.1726 19.2017L18.1558 18.9435C17.9806 17.5978 17.8313 16.2738 17.7065 14.9743L15.7156 15.1655ZM16.7628 23.2185C16.9781 24.5344 17.2176 25.8669 17.4824 27.2136L19.4448 26.8277C19.1841 25.5021 18.9484 24.1906 18.7366 22.8956L16.7628 23.2185ZM18.3288 31.1844C18.6284 32.4889 18.952 33.8041 19.3005 35.1282L21.2346 34.6191C20.8915 33.3156 20.573 32.0208 20.278 30.7366L18.3288 31.1844ZM20.3968 39.0415C20.7795 40.3287 21.1861 41.6224 21.6175 42.9205L23.5155 42.2899C23.0909 41.0121 22.6906 39.7387 22.3139 38.4715L20.3968 39.0415ZM22.9595 46.7527C23.4231 48.0114 23.9106 49.2728 24.4228 50.5351L26.2761 49.7833C25.7722 48.5412 25.2925 47.3001 24.8362 46.0614L22.9595 46.7527ZM26.0108 54.2718C26.5575 55.5013 27.1283 56.7304 27.724 57.9575L29.5232 57.0842C28.9375 55.8775 28.376 54.6687 27.8383 53.4592L26.0108 54.2718ZM29.563 61.5875C30.1912 62.7765 30.8436 63.9623 31.5208 65.1435L33.2558 64.1486C32.5902 62.9878 31.9489 61.8222 31.3313 60.6532L29.563 61.5875ZM33.6016 68.6293C34.3124 69.7736 35.0476 70.9123 35.8078 72.0439L37.468 70.9286C36.7212 69.817 35.999 68.6984 35.3006 67.574L33.6016 68.6293ZM38.1393 75.3823C38.9296 76.4711 39.7443 77.552 40.5839 78.6239L42.1584 77.3905C41.3339 76.3381 40.534 75.2767 39.7579 74.2075L38.1393 75.3823ZM43.1472 81.7742C44.0173 82.8039 44.9118 83.8239 45.8314 84.8329L47.3096 83.4858C46.4071 82.4954 45.529 81.4942 44.6748 80.4833L43.1472 81.7742ZM48.6297 87.7898C49.5713 88.7479 50.5369 89.6946 51.5271 90.629L52.8997 89.1744C51.9279 88.2574 50.9802 87.3282 50.0561 86.3879L48.6297 87.7898ZM54.5376 93.364C55.5533 94.2524 56.5929 95.1279 57.6569 95.9897L58.9157 94.4356C57.8714 93.5897 56.8511 92.7304 55.8542 91.8586L54.5376 93.364ZM60.8524 98.4806C61.9286 99.2876 63.0279 100.081 64.1509 100.86L65.2905 99.216C64.188 98.4515 63.1087 97.6727 62.0523 96.8805L60.8524 98.4806ZM67.5424 103.12C68.6696 103.841 69.8191 104.548 70.9911 105.241L72.0081 103.518C70.8567 102.839 69.7277 102.144 68.6208 101.435L67.5424 103.12ZM74.5344 107.248C75.7131 107.889 76.9134 108.514 78.1355 109.124L79.0287 107.335C77.8273 106.735 76.6476 106.12 75.4893 105.491L74.5344 107.248ZM81.7932 110.873C83.0198 111.434 84.2673 111.979 85.5358 112.509L86.3065 110.663C85.0584 110.142 83.8314 109.605 82.6251 109.054L81.7932 110.873ZM89.2828 114.003C90.5409 114.482 91.8187 114.945 93.1165 115.392L93.7684 113.502C92.4903 113.061 91.2322 112.605 89.9939 112.134L89.2828 114.003ZM96.9572 116.652C98.238 117.05 99.5375 117.434 100.856 117.802L101.394 115.876C100.094 115.513 98.8136 115.135 97.5516 114.742L96.9572 116.652ZM104.774 118.836C106.072 119.159 107.388 119.468 108.721 119.761L109.151 117.808C107.835 117.519 106.537 117.214 105.257 116.895L104.774 118.836ZM112.694 120.58C114.007 120.833 115.335 121.071 116.68 121.295L117.008 119.322C115.68 119.101 114.368 118.866 113.072 118.616L112.694 120.58Z" fill="url(#paint0_linear)"/>--}}
{{--                                <defs>--}}
{{--                                    <linearGradient id="paint0_linear" x1="-28.9108" y1="78.8513" x2="275.616" y2="114.371" gradientUnits="userSpaceOnUse">--}}
{{--                                        <stop stop-color="#6E2AFF"/>--}}
{{--                                        <stop offset="1" stop-color="#7ADBEE"/>--}}
{{--                                    </linearGradient>--}}
{{--                                </defs>--}}
{{--                            </svg>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <h4 class="process__item" data-item="elem-1" data-aos="fade-right">Пространственной точночти--}}
{{--                        движения</h4>--}}
{{--                    <h4 class="process__item" data-item="elem-2" data-aos="fade-right">Гибкости</h4>--}}
{{--                    <h4 class="process__item" data-item="elem-3" data-aos="fade-right">Равновесию</h4>--}}
{{--                    <h4 class="process__item" data-item="elem-4" data-aos="fade-right">Ловкости</h4>--}}
{{--                    <h4 class="process__item" data-item="elem-5" data-aos="fade-left">Координационным способностям</h4>--}}
{{--                    <h4 class="process__item" data-item="elem-6" data-aos="fade-left">Выносливости</h4>--}}
{{--                    <h4 class="process__item" data-item="elem-7" data-aos="fade-left">Быстроте</h4>--}}
{{--                    <h4 class="process__item" data-item="elem-8" data-aos="fade-left">Силе</h4>--}}
{{--                    <svg width="375" height="563" viewBox="0 0 375 563" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                        <path d="M169.831 355.511C169.831 363.033 169.461 370.555 169.954 378.077C170.57 386.832 171.68 395.587 172.912 404.219C173.652 409.522 171.31 411.618 166.379 412.111C164.161 412.358 162.065 412.974 160.093 413.344C160.71 426.539 162.558 439.487 161.696 452.188C160.71 466.246 157.751 480.057 154.793 493.868C152.698 503.609 154.793 512.365 157.998 521.49C160.586 529.012 161.572 537.274 162.558 545.289C162.805 546.769 159.847 549.975 157.998 550.221C152.205 551.085 146.165 550.961 140.249 551.208C134.332 551.455 128.416 551.578 122.5 551.825C110.913 552.441 99.2039 553.181 87.6176 553.674C83.6734 553.798 80.4686 552.811 82.3175 547.509C82.8105 546.152 81.3315 544.179 81.7012 542.823C82.4408 540.603 83.5501 537.397 85.2757 536.657C97.6015 532.095 108.695 525.559 119.295 517.667C121.39 516.064 124.472 515.694 128.662 514.091C128.169 507.432 128.046 500.033 127.06 492.881C123.609 467.725 122.376 442.569 125.704 417.414C125.828 416.674 125.581 415.811 125.458 414.947C122.007 414.454 118.802 413.591 115.597 413.591C110.667 413.468 109.558 411.248 109.681 406.685C109.927 394.971 109.434 383.379 109.804 371.665C110.174 357.484 111.16 343.426 111.653 329.245C112.023 318.64 111.899 307.912 112.392 297.307C112.639 293.114 113.379 289.292 111.16 285.099C109.681 282.263 110.913 278.07 110.913 273.754C105.49 276.097 102.409 274.248 100.56 269.685C100.19 268.822 99.4504 267.835 98.5876 267.465C88.9734 263.643 83.6734 255.134 77.2639 247.982C70.4848 240.583 64.1986 232.691 57.9125 224.922C55.2008 221.593 52.7356 218.017 50.517 214.318C41.1494 198.657 43.6145 189.655 58.652 179.79C65.4312 175.351 72.9499 170.788 77.757 164.623C84.6594 155.621 94.8898 150.811 102.039 142.18C109.311 133.424 119.665 128.985 131.744 127.875C146.042 126.519 153.561 117.394 149.863 100.253C147.767 100.5 145.672 100.747 145.302 100.747C142.467 96.8005 140.249 93.9643 138.4 90.8815C136.304 87.4287 134.332 83.8527 132.114 79.9067C131.251 80.03 129.525 80.3999 128.169 80.5232C126.074 71.3981 123.855 62.3963 122.13 53.2711C121.76 51.2981 123.116 48.9552 123.239 46.7355C123.362 44.5159 122.993 42.4196 122.869 40.2C122.869 39.3368 122.869 37.857 123.362 37.4871C128.416 33.911 128.169 27.2521 131.744 22.5662C134.949 18.2503 139.139 14.6742 142.591 10.8515C145.795 7.15214 151.342 4.43926 156.149 3.57607C163.175 2.34294 170.447 0.493251 177.966 3.20613C181.17 4.31595 185.854 1.35644 190.415 0C189.305 1.72638 188.443 3.08282 186.963 5.30245C190.168 4.8092 193.126 4.31595 196.947 3.69938C195.099 5.05582 193.866 6.04232 192.88 6.65889C195.961 8.87852 199.043 11.2215 202.741 13.811C201.138 14.5509 200.275 15.0442 200.152 15.0442C202.74 19.73 205.699 24.2926 207.794 29.2251C209.52 33.2944 210.382 37.857 211.492 41.6797C207.301 39.9533 207.424 43.1595 208.534 46.4889C211.985 56.3539 212.108 66.3423 211.369 76.8238C210.876 84.4692 206.315 88.4152 201.878 92.9778C199.782 95.1974 197.194 97.1704 195.838 99.76C191.647 107.529 195.592 116.407 204.589 118.504C209.273 119.613 214.327 119.737 219.257 119.737C232.322 119.737 243.662 123.806 253.523 132.438C257.344 135.767 261.658 138.604 265.849 141.563C277.805 150.442 290.254 158.827 301.717 168.322C309.975 175.104 311.331 184.969 305.168 193.724C298.389 203.343 290.5 212.468 282.119 220.853C271.642 231.211 260.055 240.46 248.962 250.325C241.937 256.614 235.034 263.149 227.885 269.438C226.406 270.795 224.434 271.535 222.092 272.768C222.955 274.987 224.187 277.33 224.804 279.797C225.42 281.893 226.283 285.222 225.42 286.086C220.736 290.402 224.064 294.841 224.311 299.28C225.05 311.118 225.543 322.956 226.653 334.671C227.022 339.48 227.392 344.906 229.98 348.605C234.295 354.771 232.446 361.43 233.801 367.719C234.911 372.528 235.527 377.46 236.02 382.27C236.267 384.366 235.527 386.585 235.157 388.805C234.788 391.518 233.308 394.601 234.048 397.067C237.006 407.055 235.527 408.535 224.064 411.865C224.557 414.577 224.557 417.537 225.543 420.127C231.213 435.664 229.98 451.571 228.625 467.602C227.515 481.66 226.776 495.841 226.653 510.022C226.529 517.914 227.885 525.806 228.871 533.698C228.994 535.177 229.98 536.78 231.09 537.767C236.39 542.576 237.129 548.865 236.267 555.277C236.02 557.374 233.678 560.21 231.706 560.826C222.462 563.786 213.094 563.663 203.85 560.826C197.564 558.977 196.578 553.428 197.317 548.372C198.426 539.987 201.385 531.725 202.371 523.339C203.357 515.077 203.727 506.692 202.741 498.43C200.892 481.783 197.81 465.259 195.468 448.612C194.605 442.569 194.482 436.404 193.989 430.238C193.373 423.086 192.017 416.797 183.759 414.084C181.663 413.344 180.061 408.042 180.184 404.836C180.677 387.695 178.582 371.048 169.831 355.511ZM269.423 184.229C265.849 182.503 261.904 178.68 258.576 179.173C253.276 179.913 250.688 177.57 247.36 174.857C242.923 171.281 239.102 166.226 233.185 167.829C229.487 179.79 226.16 190.888 222.462 201.863C217.901 215.674 213.957 229.485 217.408 244.159C223.201 242.31 229.118 240.583 234.788 238.364C237.129 237.5 239.718 235.774 240.95 233.678C250.688 217.277 259.932 200.753 269.423 184.229ZM113.009 180.9C101.546 187.559 89.4665 194.588 77.3872 201.616C83.9199 213.824 90.4525 225.662 96.4922 237.624C100.067 244.776 105.243 248.229 113.009 247.735C113.009 225.169 113.009 202.603 113.009 180.9Z"--}}
{{--                              fill="#0C1828" stroke="#23354F" stroke-width="2" mask="url(#path-1-inside-1)"/>--}}
{{--                        <path class="row-1" d="M3.5 536H173V288" stroke="#627289" stroke-dasharray="4 4"/>--}}
{{--                        <path class="row-2" d="M1.5 470H147.895V259H173" stroke="#627289" stroke-dasharray="4 4"/>--}}
{{--                        <path class="row-3" d="M0 404H123.793V230H174" stroke="#627289" stroke-dasharray="4 4"/>--}}
{{--                        <path class="row-4" d="M0 337H98.6888V202H174" stroke="#627289" stroke-dasharray="4 4"/>--}}
{{--                        <path class="row-5" d="M371.5 221H200.5V174H173.5" stroke="#627289" stroke-dasharray="4 4"/>--}}
{{--                        <path class="row-6" d="M373 151H218.612V146H174" stroke="#627289" stroke-dasharray="4 4"/>--}}
{{--                        <path class="row-7" d="M374 85H218V119H173" stroke="#627289" stroke-dasharray="4 4"/>--}}
{{--                        <path class="row-8" d="M375 18H195.055V90H173" stroke="#627289" stroke-dasharray="4 4"/>--}}
{{--                        <circle class="circle-8" cx="173" cy="90" r="5" fill="#182B44"/>--}}
{{--                        <circle class="circle-7" cx="173" cy="118" r="5" fill="#182B44"/>--}}
{{--                        <circle class="circle-6" cx="173" cy="146" r="5" fill="#182B44"/>--}}
{{--                        <circle class="circle-5" cx="173" cy="174" r="5" fill="#182B44"/>--}}
{{--                        <circle class="circle-4" cx="173" cy="202" r="5" fill="#182B44"/>--}}
{{--                        <circle class="circle-3" cx="173" cy="230" r="5" fill="#182B44"/>--}}
{{--                        <circle class="circle-2" cx="173" cy="258" r="5" fill="#182B44"/>--}}
{{--                        <circle class="circle-1" cx="173" cy="286" r="5" fill="#182B44"/>--}}
{{--                    </svg>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
{{--        <section class="pluses">--}}
{{--            <div class="pluses__design">--}}
{{--                <img class="pluses__design-worm" alt="Наши преимущества" src="img/templates/pluses/worm-left.svg">--}}
{{--                <img class="pluses__design-ring" alt="Наши преимущества" src="img/templates/pluses/ring-right.svg">--}}
{{--                <img class="pluses__design-perf" alt="Наши преимущества" src="img/templates/pluses/perf-right.svg">--}}
{{--            </div>--}}
{{--            <div class="pluses__container main-container">--}}
{{--                <h2 class="pluses__title section-title" data-aos="fade-up">--}}
{{--                    Наши преимущества--}}
{{--                </h2>--}}
{{--                <div class="pluses__list">--}}
{{--                    <div class="pluses__item" data-aos="flip-up">--}}
{{--                        <div class="pluses__icon">--}}
{{--                            <img src="img/templates/pluses/icon-1.png" alt="Для всех уровней подготовленности">--}}
{{--                        </div>--}}
{{--                        <h3 class="pluses__item-title">--}}
{{--                            Для всех уровней подготовленности--}}
{{--                        </h3>--}}
{{--                        <div class="pluses__item-desc">--}}
{{--                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nisl vitae condimentum augue purus--}}
{{--                            libero nulla cras neque. Porta.--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="pluses__item" data-aos="flip-up">--}}
{{--                        <div class="pluses__icon">--}}
{{--                            <img src="img/templates/pluses/icon-2.png" alt="Индивидуальный подход к каждому ребенку">--}}
{{--                        </div>--}}
{{--                        <h3 class="pluses__item-title">--}}
{{--                            Индивидуальный подход к каждому ребенку--}}
{{--                        </h3>--}}
{{--                        <div class="pluses__item-desc">--}}
{{--                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nisl vitae condimentum augue purus--}}
{{--                            libero nulla cras neque. Porta.--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="pluses__item" data-aos="flip-up">--}}
{{--                        <div class="pluses__icon">--}}
{{--                            <img src="img/templates/pluses/icon-3.png" alt="более 20 тренировочных программ">--}}
{{--                        </div>--}}
{{--                        <h3 class="pluses__item-title">--}}
{{--                            более 20 тренировочных программ--}}
{{--                        </h3>--}}
{{--                        <div class="pluses__item-desc">--}}
{{--                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nisl vitae condimentum augue purus--}}
{{--                            libero nulla cras neque. Porta.--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="pluses__item" data-aos="flip-up">--}}
{{--                        <div class="pluses__icon">--}}
{{--                            <img src="img/templates/pluses/icon-4.png"--}}
{{--                                 alt="команда первокласных сертифицированных тренеров">--}}
{{--                        </div>--}}
{{--                        <h3 class="pluses__item-title">--}}
{{--                            команда первокласных сертифицированных тренеров--}}
{{--                        </h3>--}}
{{--                        <div class="pluses__item-desc">--}}
{{--                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nisl vitae condimentum augue purus--}}
{{--                            libero nulla cras neque. Porta.--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="pluses__item" data-aos="flip-up">--}}
{{--                        <div class="pluses__icon">--}}
{{--                            <img src="img/templates/pluses/icon-5.png" alt="анализ состава тела">--}}
{{--                        </div>--}}
{{--                        <h3 class="pluses__item-title">--}}
{{--                            анализ состава тела--}}
{{--                        </h3>--}}
{{--                        <div class="pluses__item-desc">--}}
{{--                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nisl vitae condimentum augue purus--}}
{{--                            libero nulla cras neque. Porta.--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="pluses__item" data-aos="flip-up">--}}
{{--                        <div class="pluses__icon">--}}
{{--                            <img src="img/templates/pluses/icon-6.png" alt="контроль пульса во время тренировок">--}}
{{--                        </div>--}}
{{--                        <h3 class="pluses__item-title">--}}
{{--                            контроль пульса во время тренировок--}}
{{--                        </h3>--}}
{{--                        <div class="pluses__item-desc">--}}
{{--                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nisl vitae condimentum augue purus--}}
{{--                            libero nulla cras neque. Porta.--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="pluses__item" data-aos="flip-up">--}}
{{--                        <div class="pluses__icon">--}}
{{--                            <img src="img/templates/pluses/icon-7.png" alt="современное оснащение и дизайн">--}}
{{--                        </div>--}}
{{--                        <h3 class="pluses__item-title">--}}
{{--                            современное оснащение и дизайн--}}
{{--                        </h3>--}}
{{--                        <div class="pluses__item-desc">--}}
{{--                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nisl vitae condimentum augue purus--}}
{{--                            libero nulla cras neque. Porta.--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="pluses__item" data-aos="flip-up">--}}
{{--                        <div class="pluses__icon">--}}
{{--                            <img src="img/templates/pluses/icon-8.png" alt="фундамент для всех видов спорта">--}}
{{--                        </div>--}}
{{--                        <h3 class="pluses__item-title">--}}
{{--                            фундамент для всех видов спорта--}}
{{--                        </h3>--}}
{{--                        <div class="pluses__item-desc">--}}
{{--                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nisl vitae condimentum augue purus--}}
{{--                            libero nulla cras neque. Porta.--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
{{--        <section class="trainings">--}}
{{--            <div class="trainings__design">--}}
{{--                <img class="trainings__design-ring" src="img/templates/trainings/ring-left.svg"--}}
{{--                     alt=" Тренировки в Activities:">--}}
{{--                <img class="trainings__design-perf" src="img/templates/trainings/perf-left.svg"--}}
{{--                     alt=" Тренировки в Activities:">--}}
{{--                <img class="trainings__design-square" src="img/templates/trainings/square-right.svg"--}}
{{--                     alt=" Тренировки в Activities:">--}}
{{--                <img class="trainings__design-worm" src="img/templates/trainings/worm-right.svg"--}}
{{--                     alt=" Тренировки в Activities:">--}}
{{--            </div>--}}
{{--            <div class="trainings__about main-container">--}}
{{--                <div class="trainings__about-content">--}}
{{--                    <div class="trainings__about-img" data-aos="fade-right">--}}
{{--                        <img src="img/templates/trainings/left-img.png" alt="Тренировки в Activities:">--}}
{{--                    </div>--}}
{{--                    <div class="trainings__about-text">--}}
{{--                        <h2 class="trainings__about-title section-title" data-aos="fade-left" data-aos-delay="300">--}}
{{--                            Тренировки в Activities:--}}
{{--                        </h2>--}}
{{--                        <div class="trainings__about-desc" data-aos="fade-left" data-aos-delay="500">--}}
{{--                            <ul>--}}
{{--                                <li>Вовлечение в тренировочный процесс без стреса и давления</li>--}}
{{--                                <li>Воспитание спортивного азарта и уверености в своих силах</li>--}}
{{--                                <li>Удовольствие от каждой тренировки</li>--}}
{{--                                <li>Уютная мотивирующая атмосфера</li>--}}
{{--                                <li>Подготовка к сдаче ГТО</li>--}}
{{--                                <li>Уверенная коммуникация в коллективе</li>--}}
{{--                                <li>Подготовка к сдаче ГТО</li>--}}
{{--                                <li>Уютная мотивирующая атмосфера</li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
{{--        <section class="tabs">--}}
{{--            <div class="tabs__design">--}}
{{--                <img class="tabs__design-ring" src="img/templates/tabs/ring.svg" alt=" Тренировки в Activities:">--}}
{{--                <img class="tabs__design-worm" src="img/templates/tabs/worm.svg" alt=" Тренировки в Activities:">--}}
{{--                <img class="tabs__design-perf" src="img/templates/tabs/perf.svg" alt=" Тренировки в Activities:">--}}
{{--            </div>--}}
{{--            <div class="tabs__container main-container">--}}
{{--                <div class="tabs__nav">--}}
{{--                    <div class="tabs__nav-item active" data-tab="tab1"> <!-- на первую ставим клас актив -->--}}
{{--                        3-5 лет--}}
{{--                    </div>--}}
{{--                    <div class="tabs__nav-item" data-tab="tab2">--}}
{{--                        6-8 лет--}}
{{--                    </div>--}}
{{--                    <div class="tabs__nav-item" data-tab="tab3">--}}
{{--                        9-11 лет--}}
{{--                    </div>--}}
{{--                    <div class="tabs__nav-item" data-tab="tab4">--}}
{{--                        12-14 лет--}}
{{--                    </div>--}}
{{--                    <div class="tabs__nav-item" data-tab="tab5">--}}
{{--                        14-16 лет--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="tabs__content">--}}
{{--                    <div class="tabs__content-item active" data-content="tab1"> <!-- на первую ставим клас актив -->--}}
{{--                        <div class="tabs__content-desc">--}}
{{--                            <p>--}}
{{--                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Erat est eu, nibh ullamcorper.--}}
{{--                                Quam amet suspendisse imperdiet aliquet molestie odio in. Sed aliquet eu mi sit ac--}}
{{--                                lectus. Eget neque tincidunt massa, diam fringilla ornare ultrices eget. Mi, eu--}}
{{--                                consequat placerat tellus, porttitor eu. Orci quisque turpis egestas felis, in in.--}}
{{--                                Suscipit viverra nec ut iaculis placerat porttitor nunc. Lectus nunc, sed viverra--}}
{{--                                egestas. Felis risus amet faucibus lorem sagittis elit eu faucibus sit. Massa--}}
{{--                                pellentesque nisl, ut eget. Faucibus sit in duis vestibulum, donec commodo lacus lectus--}}
{{--                                nec.--}}
{{--                            </p>--}}
{{--                            <h3>--}}
{{--                                Чему они научатся на тренировках:--}}
{{--                            </h3>--}}
{{--                            <ul>--}}
{{--                                <li>Вовлечение в тренировочный процесс без стреса и давления</li>--}}
{{--                                <li>Воспитание спортивного азарта и уверености в своих силах</li>--}}
{{--                                <li>Удовольствие от каждой тренировки</li>--}}
{{--                                <li>Уютная мотивирующая атмосфера</li>--}}
{{--                                <li>Подготовка к сдаче ГТО</li>--}}
{{--                                <li>Уверенная коммуникация в коллективе</li>--}}
{{--                                <li>Подготовка к сдаче ГТО</li>--}}
{{--                                <li>Уютная мотивирующая атмосфера</li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="tabs__content-info">--}}
{{--                            <div class="tabs__content-slider swiper-container">--}}
{{--                                <div class="swiper-wrapper">--}}
{{--                                    <div class="swiper-slide">--}}
{{--                                        <img src="img/templates/tabs/slide.jpg" alt="Описание слайда">--}}
{{--                                    </div>--}}
{{--                                    <div class="swiper-slide">--}}
{{--                                        <img src="img/templates/tabs/slide.jpg" alt="Описание слайда">--}}
{{--                                    </div>--}}
{{--                                    <div class="swiper-slide">--}}
{{--                                        <img src="img/templates/tabs/slide.jpg" alt="Описание слайда">--}}
{{--                                    </div>--}}
{{--                                    <div class="swiper-slide">--}}
{{--                                        <img src="img/templates/tabs/slide.jpg" alt="Описание слайда">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="swiper-pagination"></div>--}}
{{--                            </div>--}}
{{--                            <div class="tabs__content-param">--}}
{{--                                <div class="tabs__content-time">--}}
{{--                                    <div class="tabs__content-name">--}}
{{--                                        Длительность тренировки:--}}
{{--                                    </div>--}}
{{--                                    <div class="tabs__content-value">--}}
{{--                                        60 мин--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="tabs__content-people">--}}
{{--                                    <div class="tabs__content-name">--}}
{{--                                        Детей в группе:--}}
{{--                                    </div>--}}
{{--                                    <div class="tabs__content-value">--}}
{{--                                        8-12 детей--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="tabs__content-trainers">--}}
{{--                                    <div class="tabs__content-name">--}}
{{--                                        Тренеров:--}}
{{--                                    </div>--}}
{{--                                    <div class="tabs__content-value">--}}
{{--                                        1-2--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="tabs__content-lesson">--}}
{{--                                    <div class="tabs__content-name">--}}
{{--                                        Частота занятий:--}}
{{--                                    </div>--}}
{{--                                    <div class="tabs__content-value">--}}
{{--                                        3 раза в неделю--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div><!-- на первую ставим клас актив -->--}}
{{--                    <div class="tabs__content-item" data-content="tab2"> <!-- на первую ставим клас актив -->--}}
{{--                        <div class="tabs__content-desc">--}}
{{--                            <p>--}}
{{--                                2 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Erat est eu, nibh ullamcorper.--}}
{{--                                Quam amet suspendisse imperdiet aliquet molestie odio in. Sed aliquet eu mi sit ac--}}
{{--                                lectus. Eget neque tincidunt massa, diam fringilla ornare ultrices eget. Mi, eu--}}
{{--                                consequat placerat tellus, porttitor eu. Orci quisque turpis egestas felis, in in.--}}
{{--                                Suscipit viverra nec ut iaculis placerat porttitor nunc. Lectus nunc, sed viverra--}}
{{--                                egestas. Felis risus amet faucibus lorem sagittis elit eu faucibus sit. Massa--}}
{{--                                pellentesque nisl, ut eget. Faucibus sit in duis vestibulum, donec commodo lacus lectus--}}
{{--                                nec.--}}
{{--                            </p>--}}
{{--                            <h3>--}}
{{--                                Чему они научатся на тренировках:--}}
{{--                            </h3>--}}
{{--                            <ul>--}}
{{--                                <li>Вовлечение в тренировочный процесс без стреса и давления</li>--}}
{{--                                <li>Воспитание спортивного азарта и уверености в своих силах</li>--}}
{{--                                <li>Удовольствие от каждой тренировки</li>--}}
{{--                                <li>Уютная мотивирующая атмосфера</li>--}}
{{--                                <li>Подготовка к сдаче ГТО</li>--}}
{{--                                <li>Уверенная коммуникация в коллективе</li>--}}
{{--                                <li>Подготовка к сдаче ГТО</li>--}}
{{--                                <li>Уютная мотивирующая атмосфера</li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="tabs__content-info">--}}
{{--                            <div class="tabs__content-slider swiper-container">--}}
{{--                                <div class="swiper-wrapper">--}}
{{--                                    <div class="swiper-slide">--}}
{{--                                        <img src="img/templates/tabs/slide.jpg" alt="Описание слайда">--}}
{{--                                    </div>--}}
{{--                                    <div class="swiper-slide">--}}
{{--                                        <img src="img/templates/tabs/slide.jpg" alt="Описание слайда">--}}
{{--                                    </div>--}}
{{--                                    <div class="swiper-slide">--}}
{{--                                        <img src="img/templates/tabs/slide.jpg" alt="Описание слайда">--}}
{{--                                    </div>--}}
{{--                                    <div class="swiper-slide">--}}
{{--                                        <img src="img/templates/tabs/slide.jpg" alt="Описание слайда">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="swiper-pagination"></div>--}}
{{--                            </div>--}}
{{--                            <div class="tabs__content-param">--}}
{{--                                <div class="tabs__content-time">--}}
{{--                                    <div class="tabs__content-name">--}}
{{--                                        Длительность тренировки:--}}
{{--                                    </div>--}}
{{--                                    <div class="tabs__content-value">--}}
{{--                                        60 мин--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="tabs__content-people">--}}
{{--                                    <div class="tabs__content-name">--}}
{{--                                        Детей в группе:--}}
{{--                                    </div>--}}
{{--                                    <div class="tabs__content-value">--}}
{{--                                        8-12 детей--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="tabs__content-trainers">--}}
{{--                                    <div class="tabs__content-name">--}}
{{--                                        Тренеров:--}}
{{--                                    </div>--}}
{{--                                    <div class="tabs__content-value">--}}
{{--                                        1-2--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="tabs__content-lesson">--}}
{{--                                    <div class="tabs__content-name">--}}
{{--                                        Частота занятий:--}}
{{--                                    </div>--}}
{{--                                    <div class="tabs__content-value">--}}
{{--                                        3 раза в неделю--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="tabs__content-item" data-content="tab3"> <!-- на первую ставим клас актив -->--}}
{{--                        <div class="tabs__content-desc">--}}
{{--                            <p>--}}
{{--                                3 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Erat est eu, nibh ullamcorper.--}}
{{--                                Quam amet suspendisse imperdiet aliquet molestie odio in. Sed aliquet eu mi sit ac--}}
{{--                                lectus. Eget neque tincidunt massa, diam fringilla ornare ultrices eget. Mi, eu--}}
{{--                                consequat placerat tellus, porttitor eu. Orci quisque turpis egestas felis, in in.--}}
{{--                                Suscipit viverra nec ut iaculis placerat porttitor nunc. Lectus nunc, sed viverra--}}
{{--                                egestas. Felis risus amet faucibus lorem sagittis elit eu faucibus sit. Massa--}}
{{--                                pellentesque nisl, ut eget. Faucibus sit in duis vestibulum, donec commodo lacus lectus--}}
{{--                                nec.--}}
{{--                            </p>--}}
{{--                            <h3>--}}
{{--                                Чему они научатся на тренировках:--}}
{{--                            </h3>--}}
{{--                            <ul>--}}
{{--                                <li>Вовлечение в тренировочный процесс без стреса и давления</li>--}}
{{--                                <li>Воспитание спортивного азарта и уверености в своих силах</li>--}}
{{--                                <li>Удовольствие от каждой тренировки</li>--}}
{{--                                <li>Уютная мотивирующая атмосфера</li>--}}
{{--                                <li>Подготовка к сдаче ГТО</li>--}}
{{--                                <li>Уверенная коммуникация в коллективе</li>--}}
{{--                                <li>Подготовка к сдаче ГТО</li>--}}
{{--                                <li>Уютная мотивирующая атмосфера</li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="tabs__content-info">--}}
{{--                            <div class="tabs__content-slider swiper-container">--}}
{{--                                <div class="swiper-wrapper">--}}
{{--                                    <div class="swiper-slide">--}}
{{--                                        <img src="img/templates/tabs/slide.jpg" alt="Описание слайда">--}}
{{--                                    </div>--}}
{{--                                    <div class="swiper-slide">--}}
{{--                                        <img src="img/templates/tabs/slide.jpg" alt="Описание слайда">--}}
{{--                                    </div>--}}
{{--                                    <div class="swiper-slide">--}}
{{--                                        <img src="img/templates/tabs/slide.jpg" alt="Описание слайда">--}}
{{--                                    </div>--}}
{{--                                    <div class="swiper-slide">--}}
{{--                                        <img src="img/templates/tabs/slide.jpg" alt="Описание слайда">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="swiper-pagination"></div>--}}
{{--                            </div>--}}
{{--                            <div class="tabs__content-param">--}}
{{--                                <div class="tabs__content-time">--}}
{{--                                    <div class="tabs__content-name">--}}
{{--                                        Длительность тренировки:--}}
{{--                                    </div>--}}
{{--                                    <div class="tabs__content-value">--}}
{{--                                        60 мин--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="tabs__content-people">--}}
{{--                                    <div class="tabs__content-name">--}}
{{--                                        Детей в группе:--}}
{{--                                    </div>--}}
{{--                                    <div class="tabs__content-value">--}}
{{--                                        8-12 детей--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="tabs__content-trainers">--}}
{{--                                    <div class="tabs__content-name">--}}
{{--                                        Тренеров:--}}
{{--                                    </div>--}}
{{--                                    <div class="tabs__content-value">--}}
{{--                                        1-2--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="tabs__content-lesson">--}}
{{--                                    <div class="tabs__content-name">--}}
{{--                                        Частота занятий:--}}
{{--                                    </div>--}}
{{--                                    <div class="tabs__content-value">--}}
{{--                                        3 раза в неделю--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="tabs__content-item" data-content="tab4"> <!-- на первую ставим клас актив -->--}}
{{--                        <div class="tabs__content-desc">--}}
{{--                            <p>--}}
{{--                                4 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Erat est eu, nibh ullamcorper.--}}
{{--                                Quam amet suspendisse imperdiet aliquet molestie odio in. Sed aliquet eu mi sit ac--}}
{{--                                lectus. Eget neque tincidunt massa, diam fringilla ornare ultrices eget. Mi, eu--}}
{{--                                consequat placerat tellus, porttitor eu. Orci quisque turpis egestas felis, in in.--}}
{{--                                Suscipit viverra nec ut iaculis placerat porttitor nunc. Lectus nunc, sed viverra--}}
{{--                                egestas. Felis risus amet faucibus lorem sagittis elit eu faucibus sit. Massa--}}
{{--                                pellentesque nisl, ut eget. Faucibus sit in duis vestibulum, donec commodo lacus lectus--}}
{{--                                nec.--}}
{{--                            </p>--}}
{{--                            <h3>--}}
{{--                                Чему они научатся на тренировках:--}}
{{--                            </h3>--}}
{{--                            <ul>--}}
{{--                                <li>Вовлечение в тренировочный процесс без стреса и давления</li>--}}
{{--                                <li>Воспитание спортивного азарта и уверености в своих силах</li>--}}
{{--                                <li>Удовольствие от каждой тренировки</li>--}}
{{--                                <li>Уютная мотивирующая атмосфера</li>--}}
{{--                                <li>Подготовка к сдаче ГТО</li>--}}
{{--                                <li>Уверенная коммуникация в коллективе</li>--}}
{{--                                <li>Подготовка к сдаче ГТО</li>--}}
{{--                                <li>Уютная мотивирующая атмосфера</li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="tabs__content-info">--}}
{{--                            <div class="tabs__content-slider swiper-container">--}}
{{--                                <div class="swiper-wrapper">--}}
{{--                                    <div class="swiper-slide">--}}
{{--                                        <img src="img/templates/tabs/slide.jpg" alt="Описание слайда">--}}
{{--                                    </div>--}}
{{--                                    <div class="swiper-slide">--}}
{{--                                        <img src="img/templates/tabs/slide.jpg" alt="Описание слайда">--}}
{{--                                    </div>--}}
{{--                                    <div class="swiper-slide">--}}
{{--                                        <img src="img/templates/tabs/slide.jpg" alt="Описание слайда">--}}
{{--                                    </div>--}}
{{--                                    <div class="swiper-slide">--}}
{{--                                        <img src="img/templates/tabs/slide.jpg" alt="Описание слайда">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="swiper-pagination"></div>--}}
{{--                            </div>--}}
{{--                            <div class="tabs__content-param">--}}
{{--                                <div class="tabs__content-time">--}}
{{--                                    <div class="tabs__content-name">--}}
{{--                                        Длительность тренировки:--}}
{{--                                    </div>--}}
{{--                                    <div class="tabs__content-value">--}}
{{--                                        60 мин--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="tabs__content-people">--}}
{{--                                    <div class="tabs__content-name">--}}
{{--                                        Детей в группе:--}}
{{--                                    </div>--}}
{{--                                    <div class="tabs__content-value">--}}
{{--                                        8-12 детей--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="tabs__content-trainers">--}}
{{--                                    <div class="tabs__content-name">--}}
{{--                                        Тренеров:--}}
{{--                                    </div>--}}
{{--                                    <div class="tabs__content-value">--}}
{{--                                        1-2--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="tabs__content-lesson">--}}
{{--                                    <div class="tabs__content-name">--}}
{{--                                        Частота занятий:--}}
{{--                                    </div>--}}
{{--                                    <div class="tabs__content-value">--}}
{{--                                        3 раза в неделю--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="tabs__content-item" data-content="tab5"> <!-- на первую ставим клас актив -->--}}
{{--                        <div class="tabs__content-desc">--}}
{{--                            <p>--}}
{{--                                5 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Erat est eu, nibh ullamcorper.--}}
{{--                                Quam amet suspendisse imperdiet aliquet molestie odio in. Sed aliquet eu mi sit ac--}}
{{--                                lectus. Eget neque tincidunt massa, diam fringilla ornare ultrices eget. Mi, eu--}}
{{--                                consequat placerat tellus, porttitor eu. Orci quisque turpis egestas felis, in in.--}}
{{--                                Suscipit viverra nec ut iaculis placerat porttitor nunc. Lectus nunc, sed viverra--}}
{{--                                egestas. Felis risus amet faucibus lorem sagittis elit eu faucibus sit. Massa--}}
{{--                                pellentesque nisl, ut eget. Faucibus sit in duis vestibulum, donec commodo lacus lectus--}}
{{--                                nec.--}}
{{--                            </p>--}}
{{--                            <h3>--}}
{{--                                Чему они научатся на тренировках:--}}
{{--                            </h3>--}}
{{--                            <ul>--}}
{{--                                <li>Вовлечение в тренировочный процесс без стреса и давления</li>--}}
{{--                                <li>Воспитание спортивного азарта и уверености в своих силах</li>--}}
{{--                                <li>Удовольствие от каждой тренировки</li>--}}
{{--                                <li>Уютная мотивирующая атмосфера</li>--}}
{{--                                <li>Подготовка к сдаче ГТО</li>--}}
{{--                                <li>Уверенная коммуникация в коллективе</li>--}}
{{--                                <li>Подготовка к сдаче ГТО</li>--}}
{{--                                <li>Уютная мотивирующая атмосфера</li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="tabs__content-info">--}}
{{--                            <div class="tabs__content-slider swiper-container">--}}
{{--                                <div class="swiper-wrapper">--}}
{{--                                    <div class="swiper-slide">--}}
{{--                                        <img src="img/templates/tabs/slide.jpg" alt="Описание слайда">--}}
{{--                                    </div>--}}
{{--                                    <div class="swiper-slide">--}}
{{--                                        <img src="img/templates/tabs/slide.jpg" alt="Описание слайда">--}}
{{--                                    </div>--}}
{{--                                    <div class="swiper-slide">--}}
{{--                                        <img src="img/templates/tabs/slide.jpg" alt="Описание слайда">--}}
{{--                                    </div>--}}
{{--                                    <div class="swiper-slide">--}}
{{--                                        <img src="img/templates/tabs/slide.jpg" alt="Описание слайда">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="swiper-pagination"></div>--}}
{{--                            </div>--}}
{{--                            <div class="tabs__content-param">--}}
{{--                                <div class="tabs__content-time">--}}
{{--                                    <div class="tabs__content-name">--}}
{{--                                        Длительность тренировки:--}}
{{--                                    </div>--}}
{{--                                    <div class="tabs__content-value">--}}
{{--                                        60 мин--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="tabs__content-people">--}}
{{--                                    <div class="tabs__content-name">--}}
{{--                                        Детей в группе:--}}
{{--                                    </div>--}}
{{--                                    <div class="tabs__content-value">--}}
{{--                                        8-12 детей--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="tabs__content-trainers">--}}
{{--                                    <div class="tabs__content-name">--}}
{{--                                        Тренеров:--}}
{{--                                    </div>--}}
{{--                                    <div class="tabs__content-value">--}}
{{--                                        1-2--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="tabs__content-lesson">--}}
{{--                                    <div class="tabs__content-name">--}}
{{--                                        Частота занятий:--}}
{{--                                    </div>--}}
{{--                                    <div class="tabs__content-value">--}}
{{--                                        3 раза в неделю--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="tabs__all">--}}
{{--                    <div class="tabs__more js-button-send-form">--}}
{{--                        Записаться на пробное занятие--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
{{--        <section class="timetable" id="timetable">--}}
{{--            <div class="timetable__design">--}}
{{--                <img class="timetable__design-worm-left" src="img/templates/timetable/worm-left.svg" alt=" Тренировки в Activities:">--}}
{{--                <img class="timetable__design-perf-left" src="img/templates/timetable/perf.svg" alt=" Тренировки в Activities:">--}}
{{--                <img class="timetable__design-square" src="img/templates/timetable/square.svg" alt=" Тренировки в Activities:">--}}
{{--                <img class="timetable__design-worm-right" src="img/templates/timetable/worm-right.svg" alt=" Тренировки в Activities:">--}}
{{--                <img class="timetable__design-ring" src="img/templates/timetable/ring.svg" alt=" Тренировки в Activities:">--}}
{{--                <img class="timetable__design-perf-right" src="img/templates/timetable/perf-right.svg" alt=" Тренировки в Activities:">--}}
{{--            </div>--}}
{{--            <div class="timetable__content main-container">--}}
{{--                <h2 class="timetable__title section-title">--}}
{{--                    Расписание тренировок--}}
{{--                </h2>--}}
{{--                <div class="timetable__list">--}}
{{--                    <div class="timetable__item active" data-aos="zoom-out-right"> <!-- на первую ставим клас актив -->--}}
{{--                        <div class="timetable__day">--}}
{{--                            Понедельник--}}
{{--                        </div>--}}
{{--                        <div class="timetable__graph">--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">8:00-8:45</div>--}}
{{--                                <div class="timetable__group">Группа 3-5 лет</div>--}}
{{--                                <div class="timetable__type">Зарядка</div>--}}
{{--                            </div>--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">9:00-9:45</div>--}}
{{--                                <div class="timetable__group">Группа 6-8 лет</div>--}}
{{--                                <div class="timetable__type">Мобильность</div>--}}
{{--                            </div>--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">10:00-10:45</div>--}}
{{--                                <div class="timetable__group">Группа 6-8 лет</div>--}}
{{--                                <div class="timetable__type">Зарядка</div>--}}
{{--                            </div>--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">11:00-11:45</div>--}}
{{--                                <div class="timetable__group">Группа 9-11 лет</div>--}}
{{--                                <div class="timetable__type">Программа на выносливость</div>--}}
{{--                            </div>--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">12:00-12:45</div>--}}
{{--                                <div class="timetable__group">Группа 12-14 лет</div>--}}
{{--                                <div class="timetable__type">Зарядка</div>--}}
{{--                            </div>--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">13:00-13:45</div>--}}
{{--                                <div class="timetable__group">Группа 9-11 лет</div>--}}
{{--                                <div class="timetable__type">Мобильность</div>--}}
{{--                            </div>--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">14:00-14:45</div>--}}
{{--                                <div class="timetable__group">Группа 12-14 лет</div>--}}
{{--                                <div class="timetable__type">Зарядка</div>--}}
{{--                            </div>--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">15:00-15:45</div>--}}
{{--                                <div class="timetable__group">Группа 14-16 лет</div>--}}
{{--                                <div class="timetable__type">Программа на выносливость</div>--}}
{{--                            </div>--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">16:00-16:45</div>--}}
{{--                                <div class="timetable__group">Группа 14-16 лет</div>--}}
{{--                                <div class="timetable__type">Мобильность</div>--}}
{{--                            </div>--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">17:00-17:45</div>--}}
{{--                                <div class="timetable__group">Группа 12-14 лет</div>--}}
{{--                                <div class="timetable__type">Зарядка</div>--}}
{{--                            </div>--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">18:00-18:45</div>--}}
{{--                                <div class="timetable__group">Группа 14-16 лет</div>--}}
{{--                                <div class="timetable__type">Программа на выносливость</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div > <!-- на первую ставим клас актив -->--}}
{{--                    <div class="timetable__item" data-aos="zoom-out-left">--}}
{{--                        <div class="timetable__day">--}}
{{--                            Вторник--}}
{{--                        </div>--}}
{{--                        <div class="timetable__graph">--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">8:00-8:45</div>--}}
{{--                                <div class="timetable__group">Группа 3-5 лет</div>--}}
{{--                                <div class="timetable__type">Зарядка</div>--}}
{{--                            </div>--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">9:00-9:45</div>--}}
{{--                                <div class="timetable__group">Группа 6-8 лет</div>--}}
{{--                                <div class="timetable__type">Мобильность</div>--}}
{{--                            </div>--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">10:00-10:45</div>--}}
{{--                                <div class="timetable__group">Группа 6-8 лет</div>--}}
{{--                                <div class="timetable__type">Зарядка</div>--}}
{{--                            </div>--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">11:00-11:45</div>--}}
{{--                                <div class="timetable__group">Группа 9-11 лет</div>--}}
{{--                                <div class="timetable__type">Программа на выносливость</div>--}}
{{--                            </div>--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">12:00-12:45</div>--}}
{{--                                <div class="timetable__group">Группа 12-14 лет</div>--}}
{{--                                <div class="timetable__type">Зарядка</div>--}}
{{--                            </div>--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">13:00-13:45</div>--}}
{{--                                <div class="timetable__group">Группа 9-11 лет</div>--}}
{{--                                <div class="timetable__type">Мобильность</div>--}}
{{--                            </div>--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">14:00-14:45</div>--}}
{{--                                <div class="timetable__group">Группа 12-14 лет</div>--}}
{{--                                <div class="timetable__type">Зарядка</div>--}}
{{--                            </div>--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">15:00-15:45</div>--}}
{{--                                <div class="timetable__group">Группа 14-16 лет</div>--}}
{{--                                <div class="timetable__type">Программа на выносливость</div>--}}
{{--                            </div>--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">16:00-16:45</div>--}}
{{--                                <div class="timetable__group">Группа 14-16 лет</div>--}}
{{--                                <div class="timetable__type">Мобильность</div>--}}
{{--                            </div>--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">17:00-17:45</div>--}}
{{--                                <div class="timetable__group">Группа 12-14 лет</div>--}}
{{--                                <div class="timetable__type">Зарядка</div>--}}
{{--                            </div>--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">18:00-18:45</div>--}}
{{--                                <div class="timetable__group">Группа 14-16 лет</div>--}}
{{--                                <div class="timetable__type">Программа на выносливость</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="timetable__item" data-aos="zoom-out-right">--}}
{{--                        <div class="timetable__day">--}}
{{--                            среда--}}
{{--                        </div>--}}
{{--                        <div class="timetable__graph">--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">8:00-8:45</div>--}}
{{--                                <div class="timetable__group">Группа 3-5 лет</div>--}}
{{--                                <div class="timetable__type">Зарядка</div>--}}
{{--                            </div>--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">9:00-9:45</div>--}}
{{--                                <div class="timetable__group">Группа 6-8 лет</div>--}}
{{--                                <div class="timetable__type">Мобильность</div>--}}
{{--                            </div>--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">10:00-10:45</div>--}}
{{--                                <div class="timetable__group">Группа 6-8 лет</div>--}}
{{--                                <div class="timetable__type">Зарядка</div>--}}
{{--                            </div>--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">11:00-11:45</div>--}}
{{--                                <div class="timetable__group">Группа 9-11 лет</div>--}}
{{--                                <div class="timetable__type">Программа на выносливость</div>--}}
{{--                            </div>--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">12:00-12:45</div>--}}
{{--                                <div class="timetable__group">Группа 12-14 лет</div>--}}
{{--                                <div class="timetable__type">Зарядка</div>--}}
{{--                            </div>--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">13:00-13:45</div>--}}
{{--                                <div class="timetable__group">Группа 9-11 лет</div>--}}
{{--                                <div class="timetable__type">Мобильность</div>--}}
{{--                            </div>--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">14:00-14:45</div>--}}
{{--                                <div class="timetable__group">Группа 12-14 лет</div>--}}
{{--                                <div class="timetable__type">Зарядка</div>--}}
{{--                            </div>--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">15:00-15:45</div>--}}
{{--                                <div class="timetable__group">Группа 14-16 лет</div>--}}
{{--                                <div class="timetable__type">Программа на выносливость</div>--}}
{{--                            </div>--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">16:00-16:45</div>--}}
{{--                                <div class="timetable__group">Группа 14-16 лет</div>--}}
{{--                                <div class="timetable__type">Мобильность</div>--}}
{{--                            </div>--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">17:00-17:45</div>--}}
{{--                                <div class="timetable__group">Группа 12-14 лет</div>--}}
{{--                                <div class="timetable__type">Зарядка</div>--}}
{{--                            </div>--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">18:00-18:45</div>--}}
{{--                                <div class="timetable__group">Группа 14-16 лет</div>--}}
{{--                                <div class="timetable__type">Программа на выносливость</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="timetable__item" data-aos="zoom-out-left">--}}
{{--                        <div class="timetable__day">--}}
{{--                            четверг--}}
{{--                        </div>--}}
{{--                        <div class="timetable__graph">--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">8:00-8:45</div>--}}
{{--                                <div class="timetable__group">Группа 3-5 лет</div>--}}
{{--                                <div class="timetable__type">Зарядка</div>--}}
{{--                            </div>--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">9:00-9:45</div>--}}
{{--                                <div class="timetable__group">Группа 6-8 лет</div>--}}
{{--                                <div class="timetable__type">Мобильность</div>--}}
{{--                            </div>--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">10:00-10:45</div>--}}
{{--                                <div class="timetable__group">Группа 6-8 лет</div>--}}
{{--                                <div class="timetable__type">Зарядка</div>--}}
{{--                            </div>--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">11:00-11:45</div>--}}
{{--                                <div class="timetable__group">Группа 9-11 лет</div>--}}
{{--                                <div class="timetable__type">Программа на выносливость</div>--}}
{{--                            </div>--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">12:00-12:45</div>--}}
{{--                                <div class="timetable__group">Группа 12-14 лет</div>--}}
{{--                                <div class="timetable__type">Зарядка</div>--}}
{{--                            </div>--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">13:00-13:45</div>--}}
{{--                                <div class="timetable__group">Группа 9-11 лет</div>--}}
{{--                                <div class="timetable__type">Мобильность</div>--}}
{{--                            </div>--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">14:00-14:45</div>--}}
{{--                                <div class="timetable__group">Группа 12-14 лет</div>--}}
{{--                                <div class="timetable__type">Зарядка</div>--}}
{{--                            </div>--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">15:00-15:45</div>--}}
{{--                                <div class="timetable__group">Группа 14-16 лет</div>--}}
{{--                                <div class="timetable__type">Программа на выносливость</div>--}}
{{--                            </div>--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">16:00-16:45</div>--}}
{{--                                <div class="timetable__group">Группа 14-16 лет</div>--}}
{{--                                <div class="timetable__type">Мобильность</div>--}}
{{--                            </div>--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">17:00-17:45</div>--}}
{{--                                <div class="timetable__group">Группа 12-14 лет</div>--}}
{{--                                <div class="timetable__type">Зарядка</div>--}}
{{--                            </div>--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">18:00-18:45</div>--}}
{{--                                <div class="timetable__group">Группа 14-16 лет</div>--}}
{{--                                <div class="timetable__type">Программа на выносливость</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="timetable__item" data-aos="zoom-out-right">--}}
{{--                        <div class="timetable__day">--}}
{{--                            пятница--}}
{{--                        </div>--}}
{{--                        <div class="timetable__graph">--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">8:00-8:45</div>--}}
{{--                                <div class="timetable__group">Группа 3-5 лет</div>--}}
{{--                                <div class="timetable__type">Зарядка</div>--}}
{{--                            </div>--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">9:00-9:45</div>--}}
{{--                                <div class="timetable__group">Группа 6-8 лет</div>--}}
{{--                                <div class="timetable__type">Мобильность</div>--}}
{{--                            </div>--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">10:00-10:45</div>--}}
{{--                                <div class="timetable__group">Группа 6-8 лет</div>--}}
{{--                                <div class="timetable__type">Зарядка</div>--}}
{{--                            </div>--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">11:00-11:45</div>--}}
{{--                                <div class="timetable__group">Группа 9-11 лет</div>--}}
{{--                                <div class="timetable__type">Программа на выносливость</div>--}}
{{--                            </div>--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">12:00-12:45</div>--}}
{{--                                <div class="timetable__group">Группа 12-14 лет</div>--}}
{{--                                <div class="timetable__type">Зарядка</div>--}}
{{--                            </div>--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">13:00-13:45</div>--}}
{{--                                <div class="timetable__group">Группа 9-11 лет</div>--}}
{{--                                <div class="timetable__type">Мобильность</div>--}}
{{--                            </div>--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">14:00-14:45</div>--}}
{{--                                <div class="timetable__group">Группа 12-14 лет</div>--}}
{{--                                <div class="timetable__type">Зарядка</div>--}}
{{--                            </div>--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">15:00-15:45</div>--}}
{{--                                <div class="timetable__group">Группа 14-16 лет</div>--}}
{{--                                <div class="timetable__type">Программа на выносливость</div>--}}
{{--                            </div>--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">16:00-16:45</div>--}}
{{--                                <div class="timetable__group">Группа 14-16 лет</div>--}}
{{--                                <div class="timetable__type">Мобильность</div>--}}
{{--                            </div>--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">17:00-17:45</div>--}}
{{--                                <div class="timetable__group">Группа 12-14 лет</div>--}}
{{--                                <div class="timetable__type">Зарядка</div>--}}
{{--                            </div>--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">18:00-18:45</div>--}}
{{--                                <div class="timetable__group">Группа 14-16 лет</div>--}}
{{--                                <div class="timetable__type">Программа на выносливость</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="timetable__item" data-aos="zoom-out-left">--}}
{{--                        <div class="timetable__day">--}}
{{--                            Суббота--}}
{{--                        </div>--}}
{{--                        <div class="timetable__graph">--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">8:00-8:45</div>--}}
{{--                                <div class="timetable__group">Группа 3-5 лет</div>--}}
{{--                                <div class="timetable__type">Зарядка</div>--}}
{{--                            </div>--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">9:00-9:45</div>--}}
{{--                                <div class="timetable__group">Группа 6-8 лет</div>--}}
{{--                                <div class="timetable__type">Мобильность</div>--}}
{{--                            </div>--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">10:00-10:45</div>--}}
{{--                                <div class="timetable__group">Группа 6-8 лет</div>--}}
{{--                                <div class="timetable__type">Зарядка</div>--}}
{{--                            </div>--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">11:00-11:45</div>--}}
{{--                                <div class="timetable__group">Группа 9-11 лет</div>--}}
{{--                                <div class="timetable__type">Программа на выносливость</div>--}}
{{--                            </div>--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">12:00-12:45</div>--}}
{{--                                <div class="timetable__group">Группа 12-14 лет</div>--}}
{{--                                <div class="timetable__type">Зарядка</div>--}}
{{--                            </div>--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">13:00-13:45</div>--}}
{{--                                <div class="timetable__group">Группа 9-11 лет</div>--}}
{{--                                <div class="timetable__type">Мобильность</div>--}}
{{--                            </div>--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">14:00-14:45</div>--}}
{{--                                <div class="timetable__group">Группа 12-14 лет</div>--}}
{{--                                <div class="timetable__type">Зарядка</div>--}}
{{--                            </div>--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">15:00-15:45</div>--}}
{{--                                <div class="timetable__group">Группа 14-16 лет</div>--}}
{{--                                <div class="timetable__type">Программа на выносливость</div>--}}
{{--                            </div>--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">16:00-16:45</div>--}}
{{--                                <div class="timetable__group">Группа 14-16 лет</div>--}}
{{--                                <div class="timetable__type">Мобильность</div>--}}
{{--                            </div>--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">17:00-17:45</div>--}}
{{--                                <div class="timetable__group">Группа 12-14 лет</div>--}}
{{--                                <div class="timetable__type">Зарядка</div>--}}
{{--                            </div>--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">18:00-18:45</div>--}}
{{--                                <div class="timetable__group">Группа 14-16 лет</div>--}}
{{--                                <div class="timetable__type">Программа на выносливость</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="timetable__item" data-aos="zoom-out-right">--}}
{{--                        <div class="timetable__day">--}}
{{--                            Воскресенье--}}
{{--                        </div>--}}
{{--                        <div class="timetable__graph">--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">8:00-8:45</div>--}}
{{--                                <div class="timetable__group">Группа 3-5 лет</div>--}}
{{--                                <div class="timetable__type">Зарядка</div>--}}
{{--                            </div>--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">9:00-9:45</div>--}}
{{--                                <div class="timetable__group">Группа 6-8 лет</div>--}}
{{--                                <div class="timetable__type">Мобильность</div>--}}
{{--                            </div>--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">10:00-10:45</div>--}}
{{--                                <div class="timetable__group">Группа 6-8 лет</div>--}}
{{--                                <div class="timetable__type">Зарядка</div>--}}
{{--                            </div>--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">11:00-11:45</div>--}}
{{--                                <div class="timetable__group">Группа 9-11 лет</div>--}}
{{--                                <div class="timetable__type">Программа на выносливость</div>--}}
{{--                            </div>--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">12:00-12:45</div>--}}
{{--                                <div class="timetable__group">Группа 12-14 лет</div>--}}
{{--                                <div class="timetable__type">Зарядка</div>--}}
{{--                            </div>--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">13:00-13:45</div>--}}
{{--                                <div class="timetable__group">Группа 9-11 лет</div>--}}
{{--                                <div class="timetable__type">Мобильность</div>--}}
{{--                            </div>--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">14:00-14:45</div>--}}
{{--                                <div class="timetable__group">Группа 12-14 лет</div>--}}
{{--                                <div class="timetable__type">Зарядка</div>--}}
{{--                            </div>--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">15:00-15:45</div>--}}
{{--                                <div class="timetable__group">Группа 14-16 лет</div>--}}
{{--                                <div class="timetable__type">Программа на выносливость</div>--}}
{{--                            </div>--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">16:00-16:45</div>--}}
{{--                                <div class="timetable__group">Группа 14-16 лет</div>--}}
{{--                                <div class="timetable__type">Мобильность</div>--}}
{{--                            </div>--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">17:00-17:45</div>--}}
{{--                                <div class="timetable__group">Группа 12-14 лет</div>--}}
{{--                                <div class="timetable__type">Зарядка</div>--}}
{{--                            </div>--}}
{{--                            <div class="timetable__row">--}}
{{--                                <div class="timetable__time">18:00-18:45</div>--}}
{{--                                <div class="timetable__group">Группа 14-16 лет</div>--}}
{{--                                <div class="timetable__type">Программа на выносливость</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
{{--        <section class="programs" id="programs">--}}
{{--            <div class="programs__design">--}}
{{--                <img class="programs__design-leftperf" src="img/templates/programs/perf-left.svg" alt="">--}}
{{--                <img class="programs__design-ring" src="img/templates/programs/ring.svg" alt="">--}}
{{--                <img class="programs__design-square" src="img/templates/programs/quare.svg" alt="">--}}
{{--                <img class="programs__design-worm" src="img/templates/programs/worm.svg" alt="">--}}
{{--                <img class="programs__design-rightperf" src="img/templates/programs/perf-right.svg" alt="">--}}
{{--            </div>--}}
{{--            <div class="programs__container main-container">--}}
{{--                <h2 class="programs__title section-title">--}}
{{--                    Наши программы--}}
{{--                </h2>--}}
{{--                <h3 class="programs__subtitle">--}}
{{--                    Концептуальной основой построения тренировочного процесса в Activities является идея обеспечить здоровоеи гармоничное физическое развитие--}}
{{--                </h3>--}}
{{--                <div class="programs__list">--}}
{{--                    <div class="programs__item">--}}
{{--                        <div class="programs__img">--}}
{{--                            <img src="img/templates/programs/item-1.jpg" alt="Мобильность">--}}
{{--                        </div>--}}
{{--                        <h3 class="programs__item-title">Мобильность</h3>--}}
{{--                        <p class="programs__item-subtitle">Спина + тазобедренные суставы</p>--}}
{{--                    </div>--}}
{{--                    <div class="programs__item">--}}
{{--                        <div class="programs__img">--}}
{{--                            <img src="img/templates/programs/item-2.jpg" alt="Мобильность">--}}
{{--                        </div>--}}
{{--                        <h3 class="programs__item-title">Мобильность</h3>--}}
{{--                        <p class="programs__item-subtitle">Спина + тазобедренные суставы</p>--}}
{{--                    </div>--}}
{{--                    <div class="programs__item">--}}
{{--                        <div class="programs__img">--}}
{{--                            <img src="img/templates/programs/item-3.jpg" alt="Мобильность">--}}
{{--                        </div>--}}
{{--                        <h3 class="programs__item-title">Мобильность</h3>--}}
{{--                        <p class="programs__item-subtitle">Спина + тазобедренные суставы</p>--}}
{{--                    </div>--}}
{{--                    <div class="programs__item">--}}
{{--                        <div class="programs__img">--}}
{{--                            <img src="img/templates/programs/item-4.jpg" alt="Мобильность">--}}
{{--                        </div>--}}
{{--                        <h3 class="programs__item-title">Мобильность</h3>--}}
{{--                        <p class="programs__item-subtitle">Спина + тазобедренные суставы</p>--}}
{{--                    </div>--}}
{{--                    <div class="programs__item">--}}
{{--                        <div class="programs__img">--}}
{{--                            <img src="img/templates/programs/item-5.jpg" alt="Мобильность">--}}
{{--                        </div>--}}
{{--                        <h3 class="programs__item-title">Мобильность</h3>--}}
{{--                        <p class="programs__item-subtitle">Спина + тазобедренные суставы</p>--}}
{{--                    </div>--}}
{{--                    <div class="programs__item">--}}
{{--                        <div class="programs__img">--}}
{{--                            <img src="img/templates/programs/item-6.jpg" alt="Мобильность">--}}
{{--                        </div>--}}
{{--                        <h3 class="programs__item-title">Мобильность</h3>--}}
{{--                        <p class="programs__item-subtitle">Спина + тазобедренные суставы</p>--}}
{{--                    </div>--}}
{{--                    <div class="programs__item">--}}
{{--                        <div class="programs__img">--}}
{{--                            <img src="img/templates/programs/item-7.jpg" alt="Мобильность">--}}
{{--                        </div>--}}
{{--                        <h3 class="programs__item-title">Мобильность</h3>--}}
{{--                        <p class="programs__item-subtitle">Спина + тазобедренные суставы</p>--}}
{{--                    </div>--}}
{{--                    <div class="programs__item">--}}
{{--                        <div class="programs__img">--}}
{{--                            <img src="img/templates/programs/item-8.jpg" alt="Мобильность">--}}
{{--                        </div>--}}
{{--                        <h3 class="programs__item-title">Мобильность</h3>--}}
{{--                        <p class="programs__item-subtitle">Спина + тазобедренные суставы</p>--}}
{{--                    </div>--}}
{{--                    <div class="programs__item">--}}
{{--                        <div class="programs__img">--}}
{{--                            <img src="img/templates/programs/item-9.jpg" alt="Мобильность">--}}
{{--                        </div>--}}
{{--                        <h3 class="programs__item-title">Мобильность</h3>--}}
{{--                        <p class="programs__item-subtitle">Спина + тазобедренные суставы</p>--}}
{{--                    </div>--}}
{{--                    <div class="programs__item">--}}
{{--                        <div class="programs__img">--}}
{{--                            <img src="img/templates/programs/item-10.jpg" alt="Мобильность">--}}
{{--                        </div>--}}
{{--                        <h3 class="programs__item-title">Мобильность</h3>--}}
{{--                        <p class="programs__item-subtitle">Спина + тазобедренные суставы</p>--}}
{{--                    </div>--}}
{{--                    <div class="programs__item">--}}
{{--                        <div class="programs__img">--}}
{{--                            <img src="img/templates/programs/item-11.jpg" alt="Мобильность">--}}
{{--                        </div>--}}
{{--                        <h3 class="programs__item-title">Мобильность</h3>--}}
{{--                        <p class="programs__item-subtitle">Спина + тазобедренные суставы</p>--}}
{{--                    </div>--}}
{{--                    <div class="programs__item programs__item-last">--}}
{{--                        <h3 class="programs__item-title">больше программ</h3>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
{{--        <section class="price" id="price">--}}
{{--            <div class="price__design">--}}
{{--                <img class="price__design-ring" src="img/templates/price/ring.svg">--}}
{{--                <img class="price__design-perf" src="img/templates/price/perf.svg">--}}
{{--                <img class="price__design-worm" src="img/templates/price/worm.svg">--}}
{{--                <img class="price__design-square" src="img/templates/price/square.svg">--}}
{{--            </div>--}}
{{--            <div class="price__container main-container">--}}
{{--                <div class="price__title section-title">--}}
{{--                    Виды посещений и цены--}}
{{--                </div>--}}
{{--                <div class="price__content">--}}
{{--                    <div class="regular" data-aos="zoom-out-left">--}}
{{--                        <div class="regular__header">--}}
{{--                            <div class="regular__header-type">--}}
{{--                                Регулярное посещение--}}
{{--                            </div>--}}
{{--                            <div class="regular__header-timing">--}}
{{--                                1 раз в неделю--}}
{{--                            </div>--}}
{{--                            <div class="regular__header-timing">--}}
{{--                                2 разА в неделю--}}
{{--                            </div>--}}
{{--                            <div class="regular__header-timing">--}}
{{--                                3 разА в неделю--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="regular__content">--}}
{{--                            <div class="regular__content-row">--}}
{{--                                <div class="regular__content-period">--}}
{{--                                    <div class="period-long">--}}
{{--                                        На 1 месяц--}}
{{--                                    </div>--}}
{{--                                    <div class="period-pause">--}}
{{--                                        (Заморозка 7 дней)--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="regular__content-price">--}}
{{--                                    <div class="price-value">--}}
{{--                                        8 000 руб.--}}
{{--                                    </div>--}}
{{--                                    <div class="price-name">--}}
{{--                                        (не более 4 занятий)--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="regular__content-price">--}}
{{--                                    <div class="price-value">--}}
{{--                                        11 000 руб.--}}
{{--                                    </div>--}}
{{--                                    <div class="price-name">--}}
{{--                                        (не более 8 занятий)--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="regular__content-price">--}}
{{--                                    <div class="price-value">--}}
{{--                                        14 000 руб.--}}
{{--                                    </div>--}}
{{--                                    <div class="price-name">--}}
{{--                                        (не более 12 занятий)--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="regular__content-row">--}}
{{--                                <div class="regular__content-period">--}}
{{--                                    <div class="period-long">--}}
{{--                                        На 2 месяца--}}
{{--                                    </div>--}}
{{--                                    <div class="period-pause">--}}
{{--                                        (Заморозка 7 дней)--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="regular__content-price">--}}
{{--                                    <div class="price-value">--}}
{{--                                        8 000 руб.--}}
{{--                                    </div>--}}
{{--                                    <div class="price-name">--}}
{{--                                        (не более 4 занятий)--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="regular__content-price">--}}
{{--                                    <div class="price-value">--}}
{{--                                        11 000 руб.--}}
{{--                                    </div>--}}
{{--                                    <div class="price-name">--}}
{{--                                        (не более 8 занятий)--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="regular__content-price">--}}
{{--                                    <div class="price-value">--}}
{{--                                        14 000 руб.--}}
{{--                                    </div>--}}
{{--                                    <div class="price-name">--}}
{{--                                        (не более 12 занятий)--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="group" data-aos="zoom-out-right">--}}
{{--                        <div class="group__header">--}}
{{--                            <div class="group__header-type">--}}
{{--                                Абонементы на групповые занятия--}}
{{--                            </div>--}}
{{--                            <div class="group__header-price">--}}
{{--                                <div class="price-name">--}}
{{--                                    5 занятий / 2 месяца--}}
{{--                                </div>--}}
{{--                                <div class="price-value">--}}
{{--                                    9 000 руб.--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="group__header-price">--}}
{{--                                <div class="price-name">--}}
{{--                                    10 занятий--}}
{{--                                </div>--}}
{{--                                <div class="price-value">--}}
{{--                                    14 500 руб.--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="personal" data-aos="zoom-out-left">--}}
{{--                        <div class="group__header">--}}
{{--                            <div class="group__header-type">--}}
{{--                                Абонементы на персональные занятия--}}
{{--                            </div>--}}
{{--                            <div class="group__header-price">--}}
{{--                                <div class="price-name">--}}
{{--                                    5 занятий / 2 месяца--}}
{{--                                </div>--}}
{{--                                <div class="price-value">--}}
{{--                                    15 000 руб.--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="group__header-price">--}}
{{--                                <div class="price-name">--}}
{{--                                    10 занятий / 2 месяца--}}
{{--                                </div>--}}
{{--                                <div class="price-value">--}}
{{--                                    28 000 руб.--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="columns" data-aos="zoom-out-right">--}}
{{--                        <div class="columns__once">--}}
{{--                            <div class="price-name">--}}
{{--                                5 занятий / 2 месяца--}}
{{--                            </div>--}}
{{--                            <div class="price-value">--}}
{{--                                15 000 руб.--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="columns__personal">--}}
{{--                            <div class="price-name">--}}
{{--                                5 занятий / 2 месяца--}}
{{--                            </div>--}}
{{--                            <div class="price-value">--}}
{{--                                15 000 руб.--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
{{--        <section class="trainer" id="trainer">--}}
{{--            <div class="trainer__design">--}}
{{--                <img class="trainer__design-ring" src="img/templates/trainer/ring.svg">--}}
{{--                <img class="trainer__design-perf" src="img/templates/trainer/perf.svg">--}}
{{--                <img class="trainer__design-worm" src="img/templates/trainer/worm.svg">--}}
{{--                <img class="trainer__design-square" src="img/templates/trainer/square.svg">--}}
{{--            </div>--}}
{{--            <div class="trainer__content main-container">--}}
{{--                <h2 class="trainer__title section-title">--}}
{{--                    Наши Тренеры--}}
{{--                </h2>--}}
{{--                <div class="trainer__swiper swiper-container">--}}
{{--                    <div class="swiper-wrapper">--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <div class="trainer__img">--}}
{{--                                <img src="img/templates/trainer/pers1.jpg" alt="Сергеева Анна петровна">--}}
{{--                            </div>--}}
{{--                            <div class="trainer__desc">--}}
{{--                                <h3 class="trainer__name">--}}
{{--                                    Сергеева Анна петровна--}}
{{--                                </h3>--}}
{{--                                <div class="trainer__exp">--}}
{{--                                    Опыт работы: <strong>8 лет</strong>--}}
{{--                                </div>--}}
{{--                                <div class="trainer__about">--}}
{{--                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vulputate ...--}}
{{--                                </div>--}}
{{--                                <a href="" class="trainer__more">--}}
{{--                                    <span>Подробнее о тренере</span>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <div class="trainer__img">--}}
{{--                                <img src="img/templates/trainer/pers2.jpg" alt="Сергеева Анна петровна">--}}
{{--                            </div>--}}
{{--                            <div class="trainer__desc">--}}
{{--                                <h3 class="trainer__name">--}}
{{--                                    Сергеева Анна петровна--}}
{{--                                </h3>--}}
{{--                                <div class="trainer__exp">--}}
{{--                                    Опыт работы: <strong>8 лет</strong>--}}
{{--                                </div>--}}
{{--                                <div class="trainer__about">--}}
{{--                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vulputate ...--}}
{{--                                </div>--}}
{{--                                <a href="" class="trainer__more">--}}
{{--                                    <span>Подробнее о тренере</span>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <div class="trainer__img">--}}
{{--                                <img src="img/templates/trainer/pers3.jpg" alt="Сергеева Анна петровна">--}}
{{--                            </div>--}}
{{--                            <div class="trainer__desc">--}}
{{--                                <h3 class="trainer__name">--}}
{{--                                    Сергеева Анна петровна--}}
{{--                                </h3>--}}
{{--                                <div class="trainer__exp">--}}
{{--                                    Опыт работы: <strong>8 лет</strong>--}}
{{--                                </div>--}}
{{--                                <div class="trainer__about">--}}
{{--                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vulputate ...--}}
{{--                                </div>--}}
{{--                                <a href="" class="trainer__more">--}}
{{--                                    <span>Подробнее о тренере</span>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <div class="trainer__img">--}}
{{--                                <img src="img/templates/trainer/pers1.jpg" alt="Сергеева Анна петровна">--}}
{{--                            </div>--}}
{{--                            <div class="trainer__desc">--}}
{{--                                <h3 class="trainer__name">--}}
{{--                                    Сергеева Анна петровна--}}
{{--                                </h3>--}}
{{--                                <div class="trainer__exp">--}}
{{--                                    Опыт работы: <strong>8 лет</strong>--}}
{{--                                </div>--}}
{{--                                <div class="trainer__about">--}}
{{--                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vulputate ...--}}
{{--                                </div>--}}
{{--                                <a href="" class="trainer__more">--}}
{{--                                    <span>Подробнее о тренере</span>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <div class="trainer__img">--}}
{{--                                <img src="img/templates/trainer/pers2.jpg" alt="Сергеева Анна петровна">--}}
{{--                            </div>--}}
{{--                            <div class="trainer__desc">--}}
{{--                                <h3 class="trainer__name">--}}
{{--                                    Сергеева Анна петровна--}}
{{--                                </h3>--}}
{{--                                <div class="trainer__exp">--}}
{{--                                    Опыт работы: <strong>8 лет</strong>--}}
{{--                                </div>--}}
{{--                                <div class="trainer__about">--}}
{{--                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vulputate ...--}}
{{--                                </div>--}}
{{--                                <a href="" class="trainer__more">--}}
{{--                                    <span>Подробнее о тренере</span>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <div class="trainer__img">--}}
{{--                                <img src="img/templates/trainer/pers3.jpg" alt="Сергеева Анна петровна">--}}
{{--                            </div>--}}
{{--                            <div class="trainer__desc">--}}
{{--                                <h3 class="trainer__name">--}}
{{--                                    Сергеева Анна петровна--}}
{{--                                </h3>--}}
{{--                                <div class="trainer__exp">--}}
{{--                                    Опыт работы: <strong>8 лет</strong>--}}
{{--                                </div>--}}
{{--                                <div class="trainer__about">--}}
{{--                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vulputate ...--}}
{{--                                </div>--}}
{{--                                <a href="" class="trainer__more">--}}
{{--                                    <span>Подробнее о тренере</span>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="swiper-pagination"></div>--}}
{{--                </div>--}}
{{--                <div class="tabs__all">--}}
{{--                    <div class="tabs__more js-button-send-form">--}}
{{--                        Записаться на пробное занятие--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
{{--        <section class="galery" id="galery">--}}
{{--            <div class="galery__design">--}}
{{--                <img class="galery__design-ring" src="img/templates/galery/ring.svg">--}}
{{--                <img class="galery__design-perf" src="img/templates/galery/perf.svg">--}}
{{--                <img class="galery__design-worm" src="img/templates/galery/worm.svg">--}}
{{--                <img class="galery__design-square" src="img/templates/galery/square.svg">--}}
{{--            </div>--}}
{{--            <h2 class="galery__title section-title">--}}
{{--                Галлерея--}}
{{--            </h2>--}}
{{--            <div class="galery__content main-container">--}}
{{--                <div class="galery__container swiper-container">--}}
{{--                    <div class="swiper-wrapper">--}}
{{--                        <div class="swiper-slide galery__slide">--}}
{{--                            <img src="img/templates/galery/slide1.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="swiper-slide galery__slide">--}}
{{--                            <img src="img/templates/galery/slide2.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="swiper-slide galery__slide">--}}
{{--                            <img src="img/templates/galery/slide3.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="swiper-slide galery__slide">--}}
{{--                            <img src="img/templates/galery/slide1.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="swiper-slide galery__slide">--}}
{{--                            <img src="img/templates/galery/slide2.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="swiper-slide galery__slide">--}}
{{--                            <img src="img/templates/galery/slide3.jpg" alt="">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="swiper-pagination"></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
{{--        <section class="contact-us" id="contact-us">--}}
{{--            <div class="contact-us__design">--}}
{{--                <img class="contact-us__design-ring" src="img/templates/contact-us/ring.svg">--}}
{{--                <img class="contact-us__design-perf" src="img/templates/contact-us/perf.svg">--}}
{{--                <img class="contact-us__design-worm" src="img/templates/contact-us/worm.svg">--}}
{{--                <img class="contact-us__design-square" src="img/templates/contact-us/square.svg">--}}
{{--            </div>--}}
{{--            <h2 class="contact-us__title section-title main-container">--}}
{{--                Связаться с нами--}}
{{--            </h2>--}}
{{--            <h3 class="contact-us__subtitle main-container">Вы можете связаться с нами любым удобным для вас способом или приехать в наш центр</h3>--}}
{{--            <div class="contact-us__content main-container">--}}
{{--                <div class="row">--}}
{{--                    <div class="contacts">--}}
{{--                        <div class="block">--}}
{{--                            <div class="name">--}}
{{--                                Телефон--}}
{{--                            </div>--}}
{{--                            <a href="tel:+7(495)000-00-00" class="value">--}}
{{--                                +7(495)000-00-00--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        <div class="block">--}}
{{--                            <div class="name">--}}
{{--                                Электронная почта--}}
{{--                            </div>--}}
{{--                            <a href="mailto:info_activities@mail.ru" class="value">--}}
{{--                                info_activities@mail.ru--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="adress">--}}
{{--                        <div class="block">--}}
{{--                            <div class="name">--}}
{{--                                Адрес--}}
{{--                            </div>--}}
{{--                            <div class="value">--}}
{{--                                Москва, ул. Ленина, д. 8--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="block">--}}
{{--                            <div class="name">--}}
{{--                                Режим работы--}}
{{--                            </div>--}}
{{--                            <a class="value">--}}
{{--                                Пн-Пт  9:00 - 18:00--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="row second-row">--}}
{{--                    <div class="contact-us__formblock">--}}
{{--                        <form method="" action="">--}}
{{--                            <input id="name" type="text" placeholder="Ваше имя" required>--}}
{{--                            <input id="email" type="email" placeholder="Ваша электронная почта" required>--}}
{{--                            <input id="phone" type="text" placeholder="Ваш телефон" required>--}}
{{--                            <textarea id="textarea" placeholder="Текст сообщения"></textarea>--}}
{{--                            <button>Отправить</button>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                    <div class="contact-us__mapblock" id="map" data-icon="img/icons/marker.svg">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
{{--    </article>--}}
</main>
<footer class="footer">
    <div class="footer__content main-container">
        <div class="footer__top">
            <div class="footer__logo">
                <a href="index.html">
                    <img src="img/footer/logo.svg" alt="logo">
                </a>
            </div>
            <nav class="footer__nav">
                <ul class="footer__list">
                    <li class="footer__list-item"><a href="#about" class="header__nav-lnk">О нас</a></li>
                    <li class="footer__list-item"><a href="#price" class="header__nav-lnk">Цены</a></li>
                    <li class="footer__list-item"><a href="#programs" class="header__nav-lnk">Наши программы</a></li>
                    <li class="footer__list-item"><a href="#trainer" class="header__nav-lnk">Тренеры</a></li>
                    <li class="footer__list-item"><a href="#price" class="header__nav-lnk">Виды посещений</a></li>
                    <li class="footer__list-item"><a href="#galery" class="header__nav-lnk">Галлерея</a></li>
                    <li class="footer__list-item"><a href="#timetable" class="header__nav-lnk">Расписание</a></li>
                    <li class="footer__list-item"><a href="#contact-us" class="header__nav-lnk">Контакты</a></li>
                </ul>
            </nav>
            <div class="footer__contacts">
                <div class="footer__phone">
                    <div class="footer__name">
                        Телефон
                    </div>
                    <div class="footer__value">
                        <a href="tel:+7(495)000-00-00">+7 (495) 000-00-00</a>
                    </div>
                </div>
                <div class="footer__mail">
                    <div class="footer__name">
                        Электронная почта
                    </div>
                    <div class="footer__value">
                        <a href="mailto:info_activities@mail.ru">info_activities@mail.ru</a>
                    </div>
                </div>
                <div class="footer__socials">
                    <a href="http://facebook.com" class="footer__socials-item">
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <title>FaceBook</title>
                            <path d="M14 7.04287C14 3.15311 10.8661 0 7.00087 0C3.13386 0.000874891 0 3.15311 0 7.04375C0 10.5582 2.55993 13.4716 5.90551 14V9.07874H4.12948V7.04375H5.90726V5.49081C5.90726 3.72616 6.95276 2.75153 8.55118 2.75153C9.31758 2.75153 10.1181 2.88889 10.1181 2.88889V4.62117H9.23534C8.36658 4.62117 8.09536 5.16448 8.09536 5.72179V7.04287H10.0359L9.72616 9.07787H8.09449V13.9991C11.4401 13.4707 14 10.5573 14 7.04287Z"
                                  fill="#BECBDF"/>
                        </svg>
                    </a>
                    <a href="http://vk.com" class="footer__socials-item">
                        <svg width="16" height="10" viewBox="0 0 16 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <title>vk</title>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M15.6333 0.965374C15.744 0.601374 15.6333 0.333374 15.1033 0.333374H13.3533C12.908 0.333374 12.7027 0.564707 12.5913 0.820041C12.5913 0.820041 11.7013 2.95071 10.4407 4.33471C10.0327 4.73604 9.84733 4.86338 9.62467 4.86338C9.51333 4.86338 9.346 4.73604 9.346 4.37137V0.965374C9.346 0.528041 9.22333 0.333374 8.85267 0.333374H6.10067C5.82267 0.333374 5.65533 0.536041 5.65533 0.728707C5.65533 1.14271 6.286 1.23871 6.35067 2.40404V4.93604C6.35067 5.49138 6.24867 5.59204 6.026 5.59204C5.43267 5.59204 3.98933 3.45137 3.13267 1.00204C2.96667 0.525374 2.79867 0.333374 2.35133 0.333374H0.6C0.1 0.333374 0 0.564707 0 0.820041C0 1.27471 0.593333 3.53337 2.76333 6.52071C4.21 8.56071 6.24667 9.66671 8.102 9.66671C9.21467 9.66671 9.352 9.42138 9.352 8.99804V7.45604C9.352 6.96471 9.45733 6.86671 9.81 6.86671C10.07 6.86671 10.5147 6.99471 11.5533 7.97804C12.74 9.14404 12.9353 9.66671 13.6033 9.66671H15.3533C15.8533 9.66671 16.104 9.42138 15.96 8.93604C15.8013 8.45338 15.2347 7.75271 14.4833 6.92138C14.0753 6.44804 13.4633 5.93804 13.2773 5.68271C13.018 5.35538 13.092 5.20937 13.2773 4.91804C13.2773 4.91804 15.4107 1.96737 15.6327 0.965374H15.6333Z"
                                  fill="#BECBDF"/>
                        </svg>
                    </a>
                    <a href="http://instagram.com" class="footer__socials-item">
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <title>instagram</title>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M12.6853 3.0593C12.8634 3.53182 12.9579 4.03172 12.9647 4.53664C13.0018 5.1717 13.002 5.37939 13.0033 6.98693L13.0033 7.00931C13.0033 8.63797 12.9947 8.8413 12.966 9.48264C12.956 9.98197 12.862 10.474 12.6867 10.9406C12.532 11.3391 12.2961 11.701 11.9939 12.0032C11.6917 12.3054 11.3298 12.5414 10.9313 12.696C10.4649 12.871 9.97209 12.9655 9.47399 12.9753C8.83732 13.0126 8.62865 13.0126 7.00065 13.0126C5.37265 13.0126 5.16932 13.004 4.52732 12.9753C4.02823 12.9589 3.53561 12.8574 3.07065 12.6753C2.67203 12.521 2.30997 12.2853 2.00761 11.9832C1.70525 11.681 1.46924 11.3191 1.31465 10.9206C1.13932 10.4533 1.04532 9.96131 1.03532 9.46264C0.997986 8.8253 0.997986 8.6173 0.997986 6.98931C0.997986 5.36131 1.00665 5.15797 1.03532 4.51597C1.04473 4.01805 1.13921 3.52539 1.31465 3.0593C1.46898 2.66068 1.70482 2.29865 2.00707 1.99639C2.30933 1.69413 2.67136 1.4583 3.06999 1.30397C3.53622 1.12895 4.02876 1.03427 4.52665 1.02397C5.16332 0.987305 5.37199 0.987305 6.99999 0.987305C8.62799 0.987305 8.83132 0.995305 9.47265 1.02397C9.97077 1.0342 10.4635 1.12888 10.93 1.30397C11.3286 1.45841 11.6905 1.69428 11.9928 1.99653C12.295 2.29877 12.5309 2.66074 12.6853 3.0593ZM3.91399 6.98597C3.91399 8.68864 5.29332 10.068 6.99599 10.068C7.81338 10.068 8.5973 9.74326 9.17529 9.16527C9.75328 8.58729 10.078 7.80337 10.078 6.98597C10.078 6.16857 9.75328 5.38466 9.17529 4.80667C8.5973 4.22868 7.81338 3.90397 6.99599 3.90397C5.29332 3.90397 3.91399 5.28331 3.91399 6.98597ZM9.48199 3.78997C9.48199 4.1873 9.80265 4.50864 10.2007 4.50864C10.5973 4.50864 10.9187 4.1873 10.9187 3.78997C10.9187 3.69564 10.9001 3.60223 10.864 3.51508C10.8279 3.42793 10.775 3.34874 10.7083 3.28203C10.6416 3.21533 10.5624 3.16242 10.4752 3.12632C10.3881 3.09022 10.2947 3.07164 10.2003 3.07164C10.106 3.07164 10.0126 3.09022 9.92543 3.12632C9.83827 3.16242 9.75909 3.21533 9.69238 3.28203C9.62568 3.34874 9.57277 3.42793 9.53667 3.51508C9.50057 3.60223 9.48199 3.69564 9.48199 3.78997ZM8.99802 6.98601C8.99802 8.09168 8.10169 8.98801 6.99602 8.98801C5.89034 8.98801 4.99402 8.09168 4.99402 6.98601C4.99402 5.88033 5.89034 4.98401 6.99602 4.98401C8.10169 4.98401 8.99802 5.88033 8.99802 6.98601Z"
                                  fill="#BECBDF"/>
                        </svg>
                    </a>
                    <a href="http://youtube.com" class="footer__socials-item">
                        <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <title>youtube</title>
                            <path d="M8 0.839966C0.1376 0.839966 0 1.53917 0 6.99997C0 12.4608 0.1376 13.16 8 13.16C15.8624 13.16 16 12.4608 16 6.99997C16 1.53917 15.8624 0.839966 8 0.839966ZM10.564 7.26717L6.972 8.94397C6.6576 9.08957 6.4 8.92637 6.4 8.57917V5.42077C6.4 5.07437 6.6576 4.91037 6.972 5.05597L10.564 6.73277C10.8784 6.87997 10.8784 7.11997 10.564 7.26717Z"
                                  fill="#BECBDF"/>
                        </svg>
                    </a>
                    <a href="http://tiktok.com" class="footer__socials-item">
                        <svg width="12" height="14" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <title>tiktok</title>
                            <path d="M6.30319 0.0118131C7.0564 0 7.8053 0.00700037 8.55334 0C8.59866 0.892985 8.91548 1.8026 9.56036 2.43394C10.2039 3.08104 11.1143 3.37724 12 3.47744V5.8265C11.17 5.79893 10.336 5.62392 9.5828 5.26166C9.25476 5.11115 8.94915 4.91732 8.65002 4.71913C8.64614 6.42372 8.65693 8.12612 8.63923 9.82371C8.59434 10.6393 8.32888 11.4509 7.86098 12.1229C7.1082 13.2416 5.80162 13.971 4.45964 13.9937C3.6365 14.0414 2.81422 13.8139 2.1128 13.3948C0.95039 12.7 0.132428 11.4281 0.013295 10.063C-0.0017111 9.77394 -0.00401549 9.4843 0.00638872 9.19499C0.109983 8.08499 0.651694 7.02312 1.49253 6.30077C2.4456 5.45942 3.78067 5.05864 5.0307 5.29578C5.04236 6.15989 5.00826 7.02312 5.00826 7.88723C4.4372 7.69997 3.76988 7.75248 3.2709 8.10381C2.90583 8.34758 2.62995 8.70624 2.48574 9.12455C2.36661 9.42031 2.40071 9.74889 2.40761 10.063C2.54445 11.0203 3.45262 11.8249 4.42209 11.7379C5.0648 11.7309 5.68076 11.3529 6.01571 10.7994C6.12405 10.6056 6.24535 10.4074 6.25182 10.1794C6.30837 9.13593 6.28592 8.09681 6.29283 7.05331C6.29757 4.70163 6.28592 2.3565 6.30362 0.0122507L6.30319 0.0118131Z"
                                  fill="#BECBDF"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="footer__copyright">
            <div class="footer__copyright-brand">
                © 2021, Активность. Спортивное развитие.
            </div>
            <div class="footer__copyright-lnk">
                <a href="" class="use-inform">Использование информации</a>
                <a href="" class="send-rules">Сообщить о нарушении</a>
            </div>
            <div class="footer__copyright-created">
                <img src="img/footer/created-by.svg" alt="Bazilevskyi">
            </div>
        </div>
    </div>
</footer>
</body>
</html>