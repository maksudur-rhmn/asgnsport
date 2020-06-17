@extends('layouts.frontend')  

@section('title')
    Asgnsport || Home
@endsection

@section('current-home')
current-page-item
@endsection
  
 @section('content') 
  <!-- Slider Area Start -->
    <section class="kick-slider-area">
        <div class="kick-slide">
            @php
                $i = 1;
            @endphp
           @foreach ($banners as $banner)
           <div class="kick-main-slide slide-item-{{ $i }}">
            <div class="kick-main-caption">
                <div class="kick-caption-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <h2>Welcome to ASGNSPORT</h2>
                                <p></p>
                                <a href="{{ url('/blogs') }}" class="kick-btn">
                                    Read our blogs now
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @php
            $i++;
        @endphp
           @endforeach
        </div>
    </section>
    <!-- Slider Area End -->
    
    
    <!-- About Area Start -->
    <section class="kick-about-area section_100">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="kick-about-right">
                        <div class="kick-section-heading">
                            <h2>about <span>AsgnSport</span></h2>
                            <div class="title-line-one"></div>
                            <div class="title-line-two"></div>
                        </div>
                        <p>We are a sport organization that specialize on the following areas in sports, "News, blog , information and transfers deals " we update you with the latest sports news, results and updates. Our blog give your our in-dept and expert opinion on sports news, events and tournaments around the world. We analysis every matches that matters and key issues in filed of sport on daily bases for you to enjoy, and update you on the latest transfer rumors , deals and sports information as the come.</p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-about-right">
                                    <div class="single-about-right-con">
                                        <i class="fa fa-grav"></i>
                                    </div>
                                    <div class="single-about-right-text">
                                        <h3>Blogs & News</h3>
                                        <p>we update you with the latest sports news, results and updates.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-about-right">
                                    <div class="single-about-right-con">
                                        <i class="fa fa-trophy"></i>
                                    </div>
                                    <div class="single-about-right-text">
                                        <h3>Match Results</h3>
                                        <p>Our blog give your our in-dept and expert opinion on sports news, events and tournaments around the world.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-about-right">
                                    <div class="single-about-right-con">
                                        <i class="fa fa-line-chart"></i>
                                    </div>
                                    <div class="single-about-right-text">
                                        <h3>match history</h3>
                                        <p> We analysis every matches that matters and key issues in filed of sport on daily bases for you to enjoy, and update you on the latest transfer rumors , deals and sports information as the come.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-about-right">
                                    <div class="single-about-right-con">
                                        <i class="fa fa-users"></i>
                                    </div>
                                    <div class="single-about-right-text">
                                        <h3>team member</h3>
                                        <p>Our expert team members are always working hard to ensure you quality blogs after analyzing all the matches and latest sports news</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="kick-about-left">
                        <img src="{{ asset('frontend_assets/assets/img/img-03.png') }}" alt="about player" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Area End -->

    
    <!-- Last Match Result Area Start -->
    <section class="kick-last-match-result section_100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="kick-section-heading">
                        <h2>latest match <span>result of {{ $match_result->league_name }}</span></h2>
                        <div class="title-line-one"></div>
                        <div class="title-line-two"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="last-match-box">
                    <div class="col-md-5">
                        <div class="last-match-result-one last-match-result">
                            <div class="col-md-12">
                                <h3 class="result">
                                    @if($match_result->home_team_result > $match_result->away_team_result)
                                       win                                        
                                    @else
                                        lose
                                    @endif
                                </h3>
                                <div class="result-details">
                                    <h3 class="result-details-left">
                                        <a href="#">{{ $match_result->home_team_name }}</a>
                                    </h3>
                                    <ul style="height: 200px;">
                                        <li>{{ $match_result->home_team_scorer }}</li>
                                        {{-- <li><p>Jonah Jolicoeur</p><span>(39)</span></li>
                                        <li><p>Miguel Beckel</p><span>(25)</span></li> --}}
                                    </ul>
                                    <div class="last-match-logo">
                                        <a href="#"><img src="{{ asset('uploads/logos') }}/{{ $match_result->home_team_logo }}" alt="logo" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="last-match-score">
                            <h2>{{ $match_result->home_team_result }}<span class="devider">/</span> <span class="lose-point">{{ $match_result->away_team_result }}</span> </h2>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="last-match-result-two last-match-result">
                            <div class="col-md-12">
                                <h3 class="result">
                                @if($match_result->home_team_result > $match_result->away_team_result)
                                   lose 
                                 @else 
                                   win
                                 @endif
                             </h3>
                                </h3>
                                <div class="result-details">
                                    <div class="last-match-logo-right">
                                        <a href="#"><img src="{{ asset('uploads/logos') }}/{{ $match_result->away_team_logo }}" alt="logo" /></a>
                                    </div>
                                    <h3 class="result-details-right">
                                        <a href="#">
                                           {{ $match_result->away_team_name }}
                                        </a>
                                    </h3>
                                    <ul style="height: 200px;">
                                        <li>{{ $match_result->away_team_scorer }}</li>
                                        {{-- <li><p>Jonah Jolicoeur</p><span>(39)</span></li>
                                        <li><p>Miguel Beckel</p><span>(25)</span></li> --}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="view-all-result">
                    <a href="#" class="kick-btn">view all result</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Last Match Result Area End -->
    
    
    <!-- Upcoming Matches Area Start -->
    <section class="kick-upcoming-mathces-area section_100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="kick-section-heading">
                        <h2>upcoming <span>matches</span></h2>
                        <div class="title-line-one"></div>
                        <div class="title-line-two"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="upcoming-slider">
                        @forelse ($match_statistics as $statistic)
                        <div class="single-upcoming-match">
                            <h3>Upcoming Match</h3>
                            <div class="upcoming-match-box">
                                <h4>{{ $statistic->league_name }}</h4>
                                <p>{{ $statistic->match_date }}</p>
                                <div class="upcoming-teams-head">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <div class="team-head-image">
                                                <a href="#">
                                                    <img src="{{ asset('uploads/match_statistics') }}/{{ $statistic->home_team_logo }}" alt="team image" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="team-head-vs">
                                                <span>VS</span>
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="team-head-image">
                                                <a href="#">
                                                    <img src="{{ asset('uploads/match_statistics') }}/{{ $statistic->away_team_logo }}" alt="team image" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="upcoming-match-btn">
                                    <a href="#" class="kick-btn">view more </a>
                                </div>
                            </div>
                        </div>
                        @empty
                          No upcoming matches.
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Upcoming Matches Area End -->
    
    
    <!-- Video Area Start -->
    <section class="kick-video-area section_100">
        <div class="kick-video-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="youtube-text">
                        <a class="popup-youtube" href="https://www.youtube.com/watch?v=L8taGwfp2sU">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="kick-video-wrap">
                        <h2>Latest <span>video</span></h2>
                        <div class="title-line-one"></div>
                        <div class="title-line-two"></div>
                        <div class="kick-score-scroll">
                            <table class="table table-striped table-responsive">
                                <tbody>
                                    @foreach ($videos as $video)
                                        
                                    <tr>
                                        <td><p>{{ $loop->index + 1 }}</p></td>
                                        <td>
                                            <a class="popup-youtube" href="https://www.youtube.com/watch?v={{ $video->embedded }}">
                                              Play now
                                            </a>
                                        </td>
                                        <td><p> {{ $video->video_title }}</p></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Video Area End -->
    
    
    <!-- Top Player Area Start -->
    <section class="kick-top-player-area section_100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="kick-section-heading">
                        <h2>Our <span>player</span></h2>
                        <div class="title-line-one"></div>
                        <div class="title-line-two"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="top-player-slider">
                        @foreach ($players as $player)                        
                        <div class="single-top-player">
                            <img style="width: 268px;height:246px;" src="{{ asset('uploads/about_players') }}/{{ $player->about_players_image }}" alt="top player"/>
                            <div class="player-info">
                               
                                <div class="player-name">
                                    <h4><a href="{{ route('player.details', $player->id) }}">{{ substr($player->about_players_name,0, -5) }}</a></h4>
                                    <p>{{ substr($player->about_players_position, -13) }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Top Player Area End -->
    
    
    <!-- Match Gallery Area Start -->
    {{-- <section class="kick-match-gallery-area section_100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="kick-section-heading">
                        <h2>Match <span>Gallery</span></h2>
                        <div class="title-line-one"></div>
                        <div class="title-line-two"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="single-match-gallery">
                       <a href="assets/img/gallery-1.jpg" class="gallery-lightbox">
                            <div class="project-img">
                                <img src="assets/img/gallery-1.jpg" alt="single project" />
                                <div class="single-pro-overlay">
                                    <i class="fa fa-search-plus"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="single-match-gallery">
                       <a href="assets/img/gallery-2.jpg" class="gallery-lightbox">
                            <div class="project-img">
                                <img src="assets/img/gallery-2.jpg" alt="single project" />
                                <div class="single-pro-overlay">
                                    <i class="fa fa-search-plus"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="single-match-gallery">
                       <a href="assets/img/gallery-3.jpg" class="gallery-lightbox">
                            <div class="project-img">
                                <img src="assets/img/gallery-3.jpg" alt="single project" />
                                <div class="single-pro-overlay">
                                    <i class="fa fa-search-plus"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="single-match-gallery">
                       <a href="assets/img/gallery-4.jpg" class="gallery-lightbox">
                            <div class="project-img">
                                <img src="assets/img/gallery-4.jpg" alt="single project" />
                                <div class="single-pro-overlay">
                                    <i class="fa fa-search-plus"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="single-match-gallery">
                       <a href="assets/img/gallery-5.jpg" class="gallery-lightbox">
                            <div class="project-img">
                                <img src="assets/img/gallery-5.jpg" alt="single project" />
                                <div class="single-pro-overlay">
                                    <i class="fa fa-search-plus"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="single-match-gallery">
                       <a href="assets/img/gallery-6.jpg" class="gallery-lightbox">
                            <div class="project-img">
                                <img src="assets/img/gallery-6.jpg" alt="single project" />
                                <div class="single-pro-overlay">
                                    <i class="fa fa-search-plus"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="load-more">
                        <a href="#" class="kick-btn">load more</a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Match Gallery Area End -->
    
    
    <!-- Top Products Area Start -->
    {{-- <section class="kick-top-products-area section_100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="kick-section-heading">
                        <h2>top <span>products</span></h2>
                        <div class="title-line-one"></div>
                        <div class="title-line-two"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="top-product-slider">
                        <div class="single-top-product">
                            <div class="product-image">
                                <a href="#">
                                    <img src="assets/img/product-1.jpg" alt="product image" />
                                </a>
                                <div class="product-image-hover">
                                    <a href="#">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-shopping-cart"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                </div>
                                <div class="product-overlay"></div>
                            </div>
                            <div class="product-text">
                                <h3><a href="single-shop.html">Shoe</a></h3>
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star-half-o"></i></li>
                                </ul>
                                <h2>$390</h2>
                            </div>
                        </div>
                        <div class="single-top-product">
                            <div class="product-image">
                                <a href="#">
                                    <img src="assets/img/product-2.jpg" alt="product image" />
                                </a>
                                <div class="product-image-hover">
                                    <a href="#">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-shopping-cart"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                </div>
                                <div class="product-overlay"></div>
                            </div>
                            <div class="product-text">
                                <h3><a href="single-shop.html">jersey</a></h3>
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star-half-o"></i></li>
                                </ul>
                                <h2>$390</h2>
                            </div>
                        </div>
                        <div class="single-top-product">
                            <div class="product-image">
                                <a href="#">
                                    <img src="assets/img/product-3.jpg" alt="product image" />
                                </a>
                                <div class="product-image-hover">
                                    <a href="#">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-shopping-cart"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                </div>
                                <div class="product-overlay"></div>
                            </div>
                            <div class="product-text">
                                <h3><a href="single-shop.html">jersey</a></h3>
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star-half-o"></i></li>
                                </ul>
                                <h2>$390</h2>
                            </div>
                        </div>
                        <div class="single-top-product">
                            <div class="product-image">
                                <a href="#">
                                    <img src="assets/img/product-4.jpg" alt="product image" />
                                </a>
                                <div class="product-image-hover">
                                    <a href="#">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-shopping-cart"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                </div>
                                <div class="product-overlay"></div>
                            </div>
                            <div class="product-text">
                                <h3><a href="single-shop.html">Shoe</a></h3>
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star-half-o"></i></li>
                                </ul>
                                <h2>$390</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Top Products Area End -->
    
    
    <!-- Latest Post Area Start -->
    <section class="kick-latest-post-area section_100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="kick-section-heading">
                        <h2>latest <span>blog</span></h2>
                        <div class="title-line-one"></div>
                        <div class="title-line-two"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($blogs->take(2) as $blog)
                    
                <div class="col-md-6">
                    <div class="single-latest-post">
                        <a href="{{ route('blogs.single', $blog->id) }}"><img style="width: 553px;height:359px;" src="{{ asset('uploads/blogs') }}/{{ $blog->blog_image1 }}" alt="post image" /></a>
                        <div class="single-post-text">
                            <h3><a href="#">{{ $blog->blog_title }}</a></h3>
                            <p class="post-date">{{ $blog->created_at->format('d-M-Y') }}/ {{ $blog->author }}</p>
                            <p>{!! Str::limit($blog->blog_description1, 200) !!} .. <a href="">Read more</a></p>
                            <div class="post-text-bottom">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="admin-image">
                                            <a href="{{ route('blogs.single', $blog->id) }}">{{ $blog->author }}</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="admin-image-right">
                                            {{-- <ul>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-eye"></i>
                                                    90
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-heart-o"></i>
                                                    228
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-comment-o"></i>
                                                        432
                                                    </a>
                                                </li>
                                            </ul> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Latest Post Area End -->
 @endsection