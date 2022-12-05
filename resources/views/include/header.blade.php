<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Philosophy</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('frontend/css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/vendor.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/main.css') }}">

    <!-- script
    ================================================== -->
    <script src="{{ asset('frontend/js/modernizr.js') }}"></script>
    <script src="{{ asset('frontend/js/pace.min.js') }}"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="favicon.ico" type="{{ asset('frontend/image/x-icon') }}">
    <link rel="icon" href="favicon.ico" type="{{ asset('frontend/image/x-icon') }}">

</head>

<body id="top">

    <!-- pageheader
    ================================================== -->
    <div class="s-pageheader">

        <header class="header">
            <div class="header__content row">

                <div class="header__logo">
                    <a class="logo" href="{{ route('home') }}">
                        <img src="{{ asset('frontend/images/logo.svg') }}" alt="Homepage">
                    </a>
                </div> <!-- end header__logo -->

                <ul class="header__social">
                    <li>
                        <a href="https://www.facebook.com/amar.ebrahim.127"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="https://twitter.com/Amar_khalifa_11"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/amar.khalifa_11"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="https://github.com/Amarkhalifa11"><i class="fa fa-github" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/in/amarkhalifa11"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </li>
                </ul> <!-- end header__social -->

                <a class="header__search-trigger" href="#0"></a>

                <div class="header__search">

                    <form role="search" method="GET" class="header__search-form" action="{{ route('search') }}">
                        <label>
                            @csrf
                            <span class="hide-content">Search for:</span>
                            <input type="search" class="search-field" name="search">
                        </label>
                        <input type="submit" class="search-submit" value="Search">
                    </form>
        
                    <a href="#0" title="Close Search" class="header__overlay-close">Close</a>

                </div>  <!-- end header__search -->


                <a class="header__toggle-menu" href="#0" title="Menu"><span>Menu</span></a>

                <nav class="header__nav-wrap">

                    <h2 class="header__nav-heading h6">Site Navigation</h2>

                    <ul class="header__nav">
                        <li><a href="{{ route('home') }}" title="">Home</a></li>
                        <li class="has-children">
                            <a href="#0" title="">Categories</a>
                            <ul class="sub-menu">
                                    
                                <li><a href="{{ route('category', ['category'=>'music']) }}">music</a></li>
                                <li><a href="{{ route('category', ['category'=>'health']) }}">health</a></li>
                                <li><a href="{{ route('category', ['category'=>'life style']) }}">life style</a></li>
                                <li><a href="{{ route('category', ['category'=>'photography']) }}">photography</a></li>
                                <li><a href="{{ route('category', ['category'=>'travel']) }}">travel</a></li>
                                
                            </ul>
                        </li>

                        <li class="has-children">
                            <a href="#0" title="">All journalists</a>
                            <ul class="sub-menu">

                                    
                                <li><a href="{{ route('auther', ['auther'=>'amar']) }}">amar</a></li>
                                <li><a href="{{ route('auther', ['auther'=>'ali']) }}">ali</a></li>
                                <li><a href="{{ route('auther', ['auther'=>'khaled']) }}">khaled</a></li>
                                <li><a href="{{ route('auther', ['auther'=>'magdy']) }}">magdy</a></li>


                                
                            </ul>
                        </li>

                        <li><a href="{{ route('Articales') }}" title="">all Articles</a></li>
                        <li><a href="{{ route('about') }}" title="">About</a></li>
                        <li><a href="{{ route('contact') }}" title="">Contact</a></li>
                        <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    </ul> <!-- end header__nav -->

                    <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu">Close</a>

                </nav> <!-- end header__nav-wrap -->

            </div> <!-- header-content -->
        </header> <!-- header -->

    </div> <!-- end s-pageheader -->