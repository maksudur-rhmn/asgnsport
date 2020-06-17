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
                    <h2>our players</h2>
                    <ul>
                        <li><a href="#"><i class="fa fa-home"></i> home</a></li>
                        <li>/</li>
                        <li>player</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcromb Area End -->


<!-- Player Page Section Start -->
<section class="kick-player-page">
    <div class="kick-player-section section_t_100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="kick-section-heading">
                        <h2>our <span>players</span></h2>
                    </div>
                </div>
            </div>
            <div class="row" style="padding-bottom: 100px;">
               @foreach ($players as $player)
               <div class="col-md-3 col-sm-6">
                <div class="single-top-player">
                    <img style="width: 260px;height:246px;" src="{{ asset('uploads/about_players') }}/{{ $player->about_players_image }}" alt="top player" />
                    <div class="player-info">
                    
                        <div class="player-name">
                            <h4><a href="{{ route('player.details', $player->id) }}">{{ substr($player->about_players_name, 0, -5) }}</a></h4>
                            <p>{{ substr($player->about_players_position,-13) }}</p>
                        </div>
                    </div>
                </div>
            </div>
               @endforeach
            </div>
        </div>
    </div>
    
</section>
<!-- Player Page Section Start -->

@endsection