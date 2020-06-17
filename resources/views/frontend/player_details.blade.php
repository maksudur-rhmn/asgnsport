@extends('layouts.frontend')  

@section('title')
    Asgnsport || Players
@endsection

@section('current-players')
current-page-item
@endsection
@section('content')

    <!-- Breadcromb Area Start -->
    <section class="kick-breadcromb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcromb-box">
                        <h2>player details</h2>
                        <ul>
                            <li><a href="{{ url('/') }}"><i class="fa fa-home"></i> home</a></li>
                            <li>/</li>
                            <li>player details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcromb Area End -->
    
    
    <!-- Player Page Section Start -->
    <section class="kick-player-page section_100">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="player-details-left">
                        <div class="single-top-player details">
                            <img style="width: 358px;height:329px;" src="{{ asset('uploads/about_players') }}/{{ $details->about_players_image }}" alt="top player" />
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-8">
                    <div class="player-details-right">
                        <h2>{{ $details->about_players_name }}</h2>
                        <div class="player-desc">
                            <p>{{ $details->about_players_information }}</p>
                           
                        </div>
                        {{-- <div class="player-social">
                            <h3>Social Network :</h3>
                            <a href="#" class="pl_fb"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="pl_ttr"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="pl_gp"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="pl_lnk"><i class="fa fa-linkedin"></i></a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Player Page Section Start -->
    
    
    <!-- Player Profile Info Start -->
    <section class="kick-player-profile-info section_100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="kick-section-heading">
                        <h2>Profile <Span>information</Span></h2>
                        <div class="title-line-one"></div>
                        <div class="title-line-two"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="player-profile-left">
                        <table class="table table-striped table-responsive">
                            <tbody>
                                <tr>
                                    <td>Name :</td>
                                    <td>{{ $details->about_players_name }}</td>
                                </tr>
                                <tr>
                                    <td>Birth Date :</td>
                                    <td>{{ $details->about_players_age }}</td>
                                </tr>
                                <tr>
                                    <td>Field position :</td>
                                    <td>{{ $details->about_players_position }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="player-profile-right">
                        <ul class="progress-list">
                            <li>
                                <p> Shot Accuracy</p>
                                <div class="bar" data-value="95"></div>
                            </li>
                            <li>
                                <p>Pass Accuracy</p>
                                <div class="bar" data-value="85"></div>
                            </li>
                            <li>
                                <p>timing Accuracy</p>
                                <div class="bar" data-value="90"></div>
                            </li>
                            <li>
                                <p>total Accuracy</p>
                                <div class="bar" data-value="95"></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Player Profile Info End -->
    @endsection