<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>


        <link rel="stylesheet" href="{{ asset('theme/css/ionicons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('theme/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('theme/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('theme/css/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('theme/css/nice-select.css') }}">
        <link rel="stylesheet" href="{{ asset('theme/css/nprogress.css') }}">
        <link rel="stylesheet" href="{{ asset('theme/css/ripple.css') }}">
        <link rel="stylesheet" href="{{ asset('theme/css/silk-accordion.css') }}">
        <link rel="stylesheet" href="{{ asset('theme/css/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('theme/css/perfect-scrollbar.min.css') }}">
        <link rel="stylesheet" href="{{ asset('theme/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('theme/css/elements.css') }}">
        
        
        {{-- <link rel="stylesheet" href="{{ asset('theme/css/colors/color.css') }}" title="default"> --}}
        <link rel="stylesheet" href="{{ asset('theme/css/colors/green.css')}}" title="color1">
        {{-- <link rel="stylesheet" href="{{ asset('theme/css/colors/red.css')}}" title="color2">
        <link rel="stylesheet" href="{{ asset('theme/css/colors/yellow.css')}}" title="color3">
        <link rel="stylesheet" href="{{ asset('theme/css/colors/light-pink.css')}}" title="color4">
        <link rel="stylesheet" href="{{ asset('theme/css/colors/dark-green.css')}}" title="color5">
        <link rel="stylesheet" href="{{ asset('theme/css/colors/blue.css')}}" title="color6">
        <link rel="stylesheet" href="{{ asset('theme/css/colors/gray.css')}}" title="color7">
        <link rel="stylesheet" href="{{ asset('theme/css/colors/pink.css')}}" title="color8"> --}}
        <link rel="stylesheet" href="{{ asset('theme/css/responsive.css') }}">
        
        <link rel="stylesheet" href="{{ asset('theme/layerslider/css/layerslider.css') }}" type="text/css">


    </head>
    <body>
        <div id="app">
            {{-- @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest --}}

            <header class="fixed style3">
                <div class="topbar green">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <ul class="social-links">
                                    <li><a href="#" title=""><i class="ion-social-facebook"></i></a></li>
                                    <li><a href="#" title=""><i class="ion-social-twitter"></i></a></li>
                                    <li><a href="#" title=""><i class="ion-social-googleplus-outline"></i></a></li>
                                </ul>
                                <a class="be-Volunteer-btn" href="#" title="#">Member Login</a>
                            </div>
                        </div>
                    </div>
                </div><!-- topbar -->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="logo">
                                {{-- <h1><a href="index.html"><img src="{{ asset('theme/images/logo2.png') }}" alt=""></a></h1> --}}
                                <h1><a href="{{url('/')}}" style="color:forestgreen">CIHA</a></h1>
                            </div>
                        </div>
                        <div class="col-sm-10">
                            <nav>
                                <div class="main-menu">
                                    <ul>
                                        {{-- <li><a href="{{url('/')}}" title="Home">home</a> --}}
                                        <li><a href="#" title="">About CIHA</a>
                                            <ul>
                                                <li><a href="#" title="" data-ripple="">Page 1</a></li>
                                                <li><a href="#" title="" data-ripple="">Page 2</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#" title="">membership</a>
                                            <ul>
                                                <li><a href="#" title="" data-ripple="">Page 1</a></li>
                                                <li><a href="#" title="" data-ripple="">Page 2</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#" title="">events</a>
                                            <ul>
                                                <li><a href="#" title="" data-ripple="">Page 1</a></li>
                                                <li><a href="#" title="" data-ripple="">Page 2</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#" title="">ciha activities</a></li>
                                        <li><a href="#" title="">public resources</a></li>
                                        <li><a href="#" title="">contact us</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div><!-- navbar and logo -->
            </header><!-- header 8 full transparent -->

            <div class="responsive-header">
                <div class="res-logo-area">
                    <div class="col-sm-3 col-xs-4">
                        <div class="language-select">
                            <span>English <i class="ion-ios-arrow-down"></i> </span>
                            <ul>
                                <li><a href="#" title="" data-ripple="">hindi</a></li>
                                <li><a href="#" title="" data-ripple="">USSR</a></li>
                                <li><a href="#" title="" data-ripple="">Arabic</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-4">
                        {{-- <a href="#" title=""><img src="{{ asset('theme/images/logo2.png') }}" alt=""></a> --}}
                        <a href="#" title="">CIHA</a>
                    </div>
                    <div class="col-sm-3 col-xs-4">
                        <div id="nav-icon3">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        </div>
                    </div>
                </div>
                <div class="responsive-menu">
                    {{-- <a href="#" title=""><img src="{{ asset('theme/images/logo2.png') }}" alt=""></a> 
                    --}}
                    <a href="#" title="">CIHA</a>
                    <ul>
                        <li class="menu-item-has-children"><a href="#" title="">home</a><i class="ion-chevron-down"></i>
                            <ul class="submenu">
                                <li><a href="index.html" title="" data-ripple="">home 1</a></li>
                                <li><a href="index2.html" title="" data-ripple="">home 2</a></li>
                                <li><a href="index3.html" title="" data-ripple="">home 3</a></li>
                                <li><a href="index4.html" title="" data-ripple="">home 4</a></li>
                                <li><a href="index5.html" title="" data-ripple="">home 5</a></li>
                                <li><a href="index6.html" title="" data-ripple="">home 6</a></li>
                                <li><a href="index-with-banner.html" title="" data-ripple="">home featured banner</a></li>
                                <li><a href="index-with-carousel.html" title="" data-ripple="">home featured carousel</a></li>
                                <li><a href="index-with-sidebar.html" title="" data-ripple="">home with sidebar</a></li>
                                <li><a href="index-with-textcarousel.html" title="" data-ripple="">home featured text carousel</a></li>
                                <li><a href="index-with-video.html" title="" data-ripple="">home featured video </a></li>
                                <li><a href="index-boxed.html" title="" data-ripple="">home boxed <strong>new</strong></a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="#" title="">pages</a><i class="ion-chevron-down"></i>
                            <ul class="submenu">
                                <li><a href="about-us.html" title="" data-ripple="">about us</a></li>
                                <li><a href="gallery-filter.html" title="" data-ripple="">gallery filtered</a></li>
                                <li><a href="gallery-simple.html" title="" data-ripple="">gallery classic</a></li>
                                <li><a href="video-gallery.html" title="" data-ripple="">video gallery</a></li>
                                <li><a href="our-cause.html" title="" data-ripple="">our causes</a></li>
                                <li><a href="our-events.html" title="" data-ripple="">our events</a></li>
                                <li><a href="volunteers.html" title="" data-ripple="">volunteers</a></li>
                                <li><a href="success-stories.html" title="" data-ripple="">success stories</a></li>
                                <li><a href="search-found.html" title="" data-ripple="">your search found</a></li>
                                <li><a href="search-not-found.html" title="" data-ripple="">search not found</a></li>
                                <li><a href="donation-page.html" title="" data-ripple="">donation page</a></li>
                                <li><a href="faq.html" title="" data-ripple="">FAQ</a></li>
                                <li><a href="coming-soon.html" title="" data-ripple="">coming soon</a></li>
                                <li><a href="404.html" title="" data-ripple="">error 404</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="#" title="">shortcodes</a><i class="ion-chevron-down"></i>
                            <ul class="submenu">
                                <li><a href="style-buttons.html" title="" data-ripple="">button styles</a></li>
                                <li><a href="style-headers.html" title="" data-ripple="">header styles</a></li>
                                <li><a href="style-footers.html" title="" data-ripple="">footer styles</a></li>
                                <li><a href="style-forms.html" title="" data-ripple="">contact forms styles</a></li>
                                <li><a href="style-parallaxes.html" title="" data-ripple="">parallax styles</a></li>
                                <li><a href="style-services.html" title="" data-ripple="">services styles</a></li>
                                <li><a href="style-titles.html" title="" data-ripple="">title styles</a></li>
                                <li><a href="style-tabs.html" title="" data-ripple="">tabs styles</a></li>
                                <li><a href="style-accordion.html" title="" data-ripple="">accordion styles</a></li>
                                <li><a href="style-team-showcase.html" title="" data-ripple="">team showcase</a></li>
                                <li><a href="style-testimonials.html" title="" data-ripple="">testimonial styles</a></li>
                                <li><a href="widgets.html" title="" data-ripple="">widgets</a></li>
                                <li><a href="dropcaps.html" title="" data-ripple="">dropcaps</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="#" title="">detail pages</a><i class="ion-chevron-down"></i>
                            <ul class="submenu">
                                <li><a href="single-blog.html" title="" data-ripple="">blog detail</a></li>
                                <li><a href="single-cause.html" title="" data-ripple="">cause detail</a></li>
                                <li><a href="single-video.html" title="" data-ripple="">video detail</a></li>
                                <li><a href="single-project.html" title="" data-ripple="">project detail</a></li>
                                <li><a href="single-event.html" title="" data-ripple="">event detail</a></li>
                                <li><a href="single-volunteers.html" title="" data-ripple="">volunteer detail</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="#" title="">blog</a><i class="ion-chevron-down"></i>
                            <ul class="submenu">
                                <li><a href="blog-listing-leftbar.html" title="" data-ripple="">blog with L.sidebar</a></li>
                                <li><a href="blog-listing-rightbar.html" title="" data-ripple="">blog with R.sidebar</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="contact-us.html" title="">contact us</a><i class="ion-chevron-down"></i>
                            <ul class="submenu">
                                <li><a href="contact-us.html" title="" data-ripple="">contact style 1</a></li>
                                <li><a href="contact-us2.html" title="" data-ripple="">contact style 2</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="little-info">
                        <li><i class="ion-ios-telephone"></i><span>+971 8753563</span></li>
                        <li><i class="ion-android-mail"></i><span>Lifeaid@gmail.com</span></li>
                    </ul>
                </div>
                <a href="#" title="" class="res-search"><i class="ion ion-search"></i></a>
                <form class="search-insite" method="post">
                    <i class="ion ion-close"></i>
                    <input type="text" placeholder="search here">
                    <button type="submit"></button>
                </form>
                <ul class="socials">
                    <li><a href="#" title=""><i class="ion-social-facebook"></i></a></li>
                    <li><a href="#" title=""><i class="ion-social-twitter"></i></a></li>
                    <li><a href="#" title=""><i class="ion-social-googleplus"></i></a></li>
                </ul>
            </div><!-- responsive header -->

            <main class="py-4">
                @yield('content')
            </main>

            <script src="{{ asset('theme/js/jquery.js')}}"></script>
            <script src="{{ asset('theme/js/bootstrap.min.js')}}"></script>
            <script src="{{ asset('theme/js/owl.carousel.min.js')}}"></script>
            <script src="{{ asset('theme/js/jquery.scrolly.js')}}"></script>
            <script src="{{ asset('theme/js/nice-select.js')}}"></script>
            <script src="{{ asset('theme/js/nprogress.js')}}"></script>
            <script src="{{ asset('theme/js/jquery.scrolly.js')}}"></script>
            <script src="{{ asset('theme/js/jquery.downCount.js')}}"></script> 
            <script src="{{ asset('theme/js/jquery.counterup.min.js')}}"></script><!-- for funfacts -->
            <script src="{{ asset('theme/js/onscreen.js')}}"></script>
            {{-- <script src="{{ asset('theme/js/jquery.accordion.js')}}"></script> --}}
            <script src="{{ asset('theme/js/silk-accordion.js')}}"></script>
            <script src="{{ asset('theme/js/ripple.js')}}"></script>
            <script src="{{ asset('theme/js/slick.min.js')}}"></script>
            <script src="{{ asset('theme/js/html5lightbox.js')}}"></script>
            <script src="{{ asset('theme/js/styleswitcher.js')}}"></script>
            <script src="{{ asset('theme/js/perfect-scrollbar.jquery.js')}}"></script>
            <script src="{{ asset('theme/js/perfect-scrollbar.js')}}"></script>
            <script src="{{ asset('theme/js/jquery.stickit.js')}}"></script>
            <script src="{{ asset('theme/js/script.js')}}"></script>
            <script src="{{ asset('theme/js/jquery.counterup-essential.js')}}"></script><!-- for funfacts counter -->

            <script src="{{ asset('theme/layerslider/js/greensock.js')}}" type="text/javascript"></script>
            <script src="{{ asset('theme/layerslider/js/layerslider.transitions.js')}}" type="text/javascript"></script>
            <script src="{{ asset('theme/layerslider/js/layerslider.kreaturamedia.jquery.js') }}" type="text/javascript"></script>
            <script src="{{ asset('theme/js/layerslider-init.js')}}"></script>
        </div>
    </body>
</html>
