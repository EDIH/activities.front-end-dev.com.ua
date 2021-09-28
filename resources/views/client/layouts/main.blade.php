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
<body class="page-{{ request()->path()}}">
<header class="header">
    <div class="header__pre main-container">
        <div class="header__logo">
            <a href="<?php echo url('/');?>" alt="Main Logo">
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
            <li class="header__nav-item"><a href="<?php echo url('/');?>/about" class="header__nav-lnk">О нас</a></li>
            <li class="header__nav-item"><a href="<?php echo url('/');?>/programs" class="header__nav-lnk">Наши программы</a></li>
            <li class="header__nav-item"><a href="<?php echo url('/');?>/types" class="header__nav-lnk">Виды посещений</a></li>
            <li class="header__nav-item"><a href="<?php echo url('/');?>/timetable" class="header__nav-lnk">Расписание</a></li>
            <li class="header__nav-item"><a href="<?php echo url('/');?>/price" class="header__nav-lnk">Цены</a></li>
            <li class="header__nav-item"><a href="<?php echo url('/');?>/trainer" class="header__nav-lnk">Тренеры</a></li>
            <li class="header__nav-item"><a href="<?php echo url('/');?>/galery" class="header__nav-lnk">Галлерея</a></li>
            <li class="header__nav-item"><a href="<?php echo url('/');?>/contacts" class="header__nav-lnk">Контакты</a></li>
        </ul>
    </nav>

</header>
<main class="main">
    <article>
    @yield('content')
    </article>
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
