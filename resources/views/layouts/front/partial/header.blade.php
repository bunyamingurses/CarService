<!DOCTYPE html>
<html lang="tr">
<head>
    <!-- Designed By www.gursesyazilim.com -->
    <meta charset="utf-8">
    <link rel="icon" type="image/x-icon" href="/assets/frontAssets/logo.png">
    <title>Home page 2</title>
    <meta content="Chernyh Mihail" name="author">
    <meta content="Cardan - Auto Repair Services" name="description">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="HandheldFriendly" content="true">
    <meta name="format-detection" content="telephone=no">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <link rel="shortcut icon" href="{{ asset("assets/frontAssets/images/favicon.html") }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset("assets/frontAssets/css/uikit.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/frontAssets/css/main.css") }}">
    @yield("style")
</head>

<body class="page-home">
<div class="page-wrapper">

    <header class="page-header">
        <div class="page-header__top">
            <div class="uk-container uk-container-xlarge">
                <div class="page-header__inner">
                    <div class="page-header__top-left">
                        <ul>
                            <li><i class="fas fa-map-marker-alt"></i><span>{{ \App\Models\setting::getSetting("address") }}</span></li>
                            <li><i class="far fa-clock"></i><span>{{ \App\Models\setting::getSetting("ours") }}</span></li>
                        </ul>
                    </div>
                    <div class="page-header__top-right">
                        <ul class="social">
                            <li class="social-item"><a class="social-item__link" href="{{ \App\Models\setting::getSetting("twitter") }}"><i class="fab fa-twitter"></i></a></li>
                            <li class="social-item"><a class="social-item__link" href="{{ \App\Models\setting::getSetting("facebook") }}"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="social-item"><a class="social-item__link" href="{{ \App\Models\setting::getSetting("instagram") }}"><i class="fab fa-instagram"></i></a></li>
                            <li class="social-item"><a class="social-item__link" href="{{ \App\Models\setting::getSetting("linkedin") }}"><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-header__bottom" data-uk-sticky>
            <div class="uk-container uk-container-xlarge">
                <div class="page-header__inner">
                    <div class="page-header__logo logo"><a class="logo__link" href="index.html"><img class="logo__img" src="{{ asset("imageWebp/setting/")."/".\App\Models\setting::getSetting("logoHeaderWebp") }}" alt="logo"></a></div>
                    <div class="page-header__menu mainmenu">
                        <nav class="uk-navbar-container uk-navbar-transparent" data-uk-navbar="">
                            <ul class="uk-navbar-nav">

                                <li><a href="{{ route("indexHtml") }}">Home</a></li>
                                <li><a href="{{ route("aboutHtml") }}">About</a></li>
                                <li><a href="{{ route("servicesHtml") }}">Service</a></li>
                                <li><a href="{{ route("galleryHtml") }}">Gallery</a></li>
                                <li><a href="{{ route("galleryBAHtml") }}">GAllery B/A</a></li>
                                <li><a href="{{ route("contactHtml") }}">Contact</a></li>

                            </ul>
                        </nav>
                    </div>
                    <div class="page-header__callback block-with-icon"><a class="block-with-icon__link" href="tel:{{ \App\Models\setting::getSetting("phoneNumber") }}">
                            <div class="block-with-icon__icon"><img src="{{ asset("assets/frontAssets/img/ico-callback.svg") }}" alt="ico-callback"></div>
                            <div class="block-with-icon__desc">
                                <div class="block-with-icon__label">Talk With Our Experts</div>
                                <div class="block-with-icon__value">{{ \App\Models\setting::getSetting("phoneNumber") }}</div>
                            </div>
                        </a></div>
                    <div class="page-header__btn-menu"><a href="#offcanvas" data-uk-toggle data-uk-icon="menu"></a></div>
                </div>
            </div>
        </div>
    </header>

    <main class="page-main">
