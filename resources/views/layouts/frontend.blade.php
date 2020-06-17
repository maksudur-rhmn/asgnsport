
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Title -->
    <title>@yield('title')</title>
    

    <!-- Favicon -->
   
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('frontend_assets/assets/favicons/apple-touch-icon.png') }}">
    
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('frontend_assets/assets/favicons/favicon-32x32.png') }}">
    
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('frontend_assets/assets/favicons/favicon-16x16.png') }}">
    
    <link rel="manifest" href="{{ asset('frontend_assets/assets/favicons/manifest.json') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('frontend_assets/assets/css/bootstrap.min.css') }}">
    
    <!-- Font awesome CSS -->
    <link rel="stylesheet" href="{{ asset('frontend_assets/assets/css/font-awesome.min.css') }}">
    
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('frontend_assets/assets/css/animate.min.css') }}">
    
    <!-- OwlCarousel CSS -->
    <link rel="stylesheet" href="{{ asset('frontend_assets/assets/css/owl.carousel.css') }}">
    
    <!-- SlickNav CSS -->
    <link rel="stylesheet" href="{{ asset('frontend_assets/assets/css/slicknav.min.css') }}">
    
    <!-- Magnific popup CSS -->
    <link rel="stylesheet" href="{{ asset('frontend_assets/assets/css/magnific-popup.css') }}">
    
    <!-- Scroll CSS -->
    <link rel="stylesheet" href="{{ asset('frontend_assets/assets/css/perfect-scrollbar.min.css') }}">
    
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('frontend_assets/assets/css/style.css') }}">
    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('frontend_assets/assets/css/responsive.css') }}">

</head>
<body>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v7.0&appId=1531616123680296&autoLogAppEvents=1" nonce="myH3w9o6"></script>
    
    <!-- Header Area Start -->
    <section class="kick-header-area">
        <div class="header-top-area">
            <div class="header-top-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-5">
                        <div class="header-top-left">
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="header-top-right">
                            <a href="#">
                                <i class="fa fa-user"></i>
                                {{ App\Subscriber::count() }} subscribers
                            </a>
                            <a href="{{ route('blog.index') }}">
                                <i class="fa fa-sign-in"></i>
                                Latest blogs
                            </a>
                            <a href="#footer">
                                <i class="fa fa-user-plus"></i>
                                Subscribe now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-mainmenu-area">
            <div class="container">
                <div class="kick-desktop-menu">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mainmenu-left pull-left">
                                <nav>
                                    <ul id="navigation_menu">
                                        <li class="@yield('current-home')">
                                            <a href="{{ url('/') }}">Home</a>
                                        </li>
                                        <li class="@yield('current-about')">
                                            <a href="{{ route('about') }}">about</a>
                                        </li>
                                        <li class="@yield('current-fixture')">
                                            <a href="{{ route('fixture') }}">fixture</a>
                                            {{-- <ul>
                                                <li><a href="fixture.html">Fixtures</a></li><li><a href="single-fixture.html">Fixtures details</a></li>
                                            </ul> --}}
                                        </li>
                                        <li class="@yield('current-players')">
                                            <a href="{{ route('players') }}">Player</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="kick-site-logo">
                                <div class="responsive-menu-2"></div>
                                <a href="index.html" class="kick-site-logo">
                                    <img src="{{ asset('frontend_assets/assets/img/logo.png') }}" alt="site logo" />
                                </a>
                                <div class="responsive-menu-1"></div>
                            </div>
                            <div class="mainmenu-left second-menu">
                                <nav>
                                    <ul id="navigation_menu_2">
                                        <li class="@yield('current-scouts')">
                                            <a href="{{ route('scouts') }}">Partner/Scouts</a>
                                        </li>
                                        <li class="@yield('current-news')">
                                            <a href="{{ route('news.index') }}">News</a>
                                        </li>
                                        <li class="@yield('current-blogs')">
                                            <a href="{{ route('blog.index') }}">blog</a>
                                        </li>
                                        <li class="@yield('current-contact')">
                                            <a href="{{ route('contact') }}">contact</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Header Area End -->

    @yield('content')

       
    
    <!-- Footer Area Start -->
    <footer class="kick-footer-area">
        <div class="kick-top-footer-area section_50">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="single-footer-widget">
                            <h3>about <span>AsgnSport Norway</span></h3>
                            <p>Meeting all sports loving people with the latest information in the filed of sport is our goal, bring sports news around the world is our priority, educating, informing and analysis every sports events as the come is task that has to be meet.</p>
                            <ul class="single-footer-address">
                                <li>
                                    <div class="add-icon">
                                        <i class="fa fa-map-marker"></i>
                                    </div>
                                    <p>Krutthuset 8 , 3030 Drammen Norway.</p>
                                </li>
                                <li>
                                    <div class="add-icon">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    <p><a href="#">info@asgnsport.com</a></p>
                                </li>
                                <li>
                                    <div class="add-icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <p><a href="#">+004741269217</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="single-footer-widget">
                            <h3>Useful link</h3>
                            <ul class="single-footer-link">
                                <li>
                                    <a href="{{ url('/') }}">
                                        <i class="fa fa-chevron-right"></i>
                                        home
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/about') }}">
                                        <i class="fa fa-chevron-right"></i>
                                        about us
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/players') }}">
                                        <i class="fa fa-chevron-right"></i>
                                        players
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="single-footer-widget">
                            <h3>recent blog</h3>
                            <ul class="single-footer-post">
                                @foreach (App\Blog::latest()->get()->take(3) as $blog)
                                <li>
                                    <a href="#">
                                        <div class="footer-post-img">
                                            <img src="{{ asset('uploads/blogs') }}/{{ $blog->blog_image1 }}" alt="footer-post" />
                                        </div>
                                        <div class="footer-post-text">
                                           {{ $blog->blog_title }}
                                        </div>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="single-footer-widget">
                            <h3>Connect with us</h3>
                            <p>Follow us to stay in the loop on what’s new in the sports world.
                            </p>
                            <ul class="single-footer-social">
                                <li>
                                    <a href="https://www.facebook.com/asgnsport.norge" target="_blank" class="fb"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://www.linkedin.com/in/chijioke-akuneziri-51109497/" class="linkedin"><i class="fa fa-linkedin"></i></a>
                                </li>
                                </li>
                            </ul>
                        </div>
                        <div id="footer" class="form-group" style=" position: relative;padding-top:20px;">
                           <form action="{{ route('subscriber.store') }}" method="post">
                            @csrf
                            <input type="text" class="form-control" placeholder="Email Address" name="email">
                            @error('email')
                               <small class="text-danger">{{ $message }}</small>
                            @enderror
                            @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <button class="btn btn-warning" style="float:right;float: right;
                            position: absolute;
                            top: 20px;
                            right: 0;" type="submit">Subscribe</button>
                           </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="kick-footer-bottom section_15">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                            <p class="desktop">
                                Copyright &copy; 2020 <a href="{{ url('/') }}">Asgnsport</a>
                                .Developed by Farahnaz Ahmed
                            </p>
                            <p class="mobile">
                                Copyright &copy; 2020 <a href="{{ url('/') }}">Asgnsport</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->


    

    <!-- jQuery -->
    <script src="{{ asset('frontend_assets/assets/js/jquery.min.js') }}"></script>
    
    <!-- Bootstrap JS -->
    <script src="{{ asset('frontend_assets/assets/js/bootstrap.min.js') }}"></script>
    
    <!-- Magnific Popup JS -->
    <script src="{{ asset('frontend_assets/assets/js/jquery.magnific-popup.min.js') }}"></script>
    
    <!-- OwlCarousel JS -->
    <script src="{{ asset('frontend_assets/assets/js/owl.carousel.min.js') }}"></script>
    
    <!-- SlickNav JS -->
    <script src="{{ asset('frontend_assets/assets/js/jquery.slicknav.min.js') }}"></script>
    
    <!-- Scrollbar JS -->
    <script src="{{ asset('frontend_assets/assets/js/jquery-perfect-scrollbar.min.js') }}"></script>
    
    <!-- Countdown JS -->
    <script src="{{ asset('frontend_assets/assets/js/jquery.countdown.min.js') }}"></script>
    
    <!-- Waypoints JS -->
    <script src="{{ asset('frontend_assets/assets/js/jquery.waypoints.min.js') }}"></script>
    
    <!-- Progressbar JS -->
    <script src="{{ asset('frontend_assets/assets/js/progressbar.min.js') }}"></script>
    
    <!-- Isotop JS -->
    <script src="{{ asset('frontend_assets/assets/js/isotope.pkgd.min.js') }}"></script>
    
    <script src="{{ asset('frontend_assets/assets/js/custom-isotop.js') }}"></script>
    
    <!-- Custom JS -->
    <script src="{{ asset('frontend_assets/assets/js/custom.js') }}"></script>
    
</body>
</html>