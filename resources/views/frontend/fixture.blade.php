@extends('layouts.frontend')  

@section('title')
    Asgnsport || Fixture
@endsection

@section('current-fixture')
current-page-item
@endsection
@section('content')
 
    <!-- Breadcromb Area Start -->
    <section class="kick-breadcromb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcromb-box">
                        <h2>fixture</h2>
                        <ul>
                            <li><a href="{{ url('/') }}"><i class="fa fa-home"></i> home</a></li>
                            <li>/</li>
                            <li>fixture</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcromb Area End -->
    
    @forelse ($statistics as $stats)
        
   
    <!-- Fixture Page Next Match Start -->
    <section class="kick-fixture-page-next-match section_100">
        <div class="container">
           <div style="padding-bottom:100px;"> 
            <h1 class="text-center">{{ $stats->league_name }}</h1>
           </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="fixture-page-next-match-left">
                        <div class="single-upcoming-match">
                            <div id="coming-soon"></div>
                            <h2>next match starts</h2>
                            <div class="upcoming-match-box">
                                <h4>{{ $stats->league_name }}</h4>
                                <p>{{ $stats->match_date }}</p>
                                <div class="upcoming-teams-head">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <div class="team-head-image">
                                                <a href="#">
                                                    <img src="{{ asset('uploads/match_statistics') }}/{{ $stats->home_team_logo }}" alt="team image" />
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
                                                    <img src="{{ asset('uploads/match_statistics') }}/{{ $stats->away_team_logo }}" alt="team image" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="upcoming-match-btn">
                                    {{-- <a href="#" class="kick-btn">view more</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12">
                    {{-- <div class="fixture-page-next-match-right"> --}}
                        {{-- <table class="table table-striped table-responsive">
                            <thead>
                                <tr>
                                    <th>team</th>
                                    <th>w</th>
                                    <th>d</th>
                                    <th>l</th>
                                    <th>pts</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Chelsea</td>
                                    <td>12</td>
                                    <td>03</td>
                                    <td>00</td>
                                    <td>54</td>
                                </tr>
                                <tr>
                                    <td>Aresenal</td>
                                    <td>12</td>
                                    <td>03</td>
                                    <td>00</td>
                                    <td>54</td>
                                </tr>
                                <tr>
                                    <td>Real Soccer</td>
                                    <td>12</td>
                                    <td>03</td>
                                    <td>00</td>
                                    <td>54</td>
                                </tr>
                                <tr>
                                    <td>Real Madrid</td>
                                    <td>12</td>
                                    <td>03</td>
                                    <td>00</td>
                                    <td>54</td>
                                </tr>
                                <tr>
                                    <td>City Club</td>
                                    <td>12</td>
                                    <td>03</td>
                                    <td>00</td>
                                    <td>54</td>
                                </tr>
                                <tr>
                                    <td>Aresenal</td>
                                    <td>12</td>
                                    <td>03</td>
                                    <td>00</td>
                                    <td>54</td>
                                </tr>
                                <tr>
                                    <td>Real Soccer</td>
                                    <td>12</td>
                                    <td>03</td>
                                    <td>00</td>
                                    <td>54</td>
                                </tr>
                                <tr>
                                    <td>Real Madrid</td>
                                    <td>12</td>
                                    <td>03</td>
                                    <td>00</td>
                                    <td>54</td>
                                </tr>
                                <tr>
                                    <td>Chelsea</td>
                                    <td>12</td>
                                    <td>03</td>
                                    <td>00</td>
                                    <td>54</td>
                                </tr>
                                <tr>
                                    <td>Aresenal</td>
                                    <td>12</td>
                                    <td>03</td>
                                    <td>00</td>
                                    <td>54</td>
                                </tr>
                                <tr>
                                    <td>Chelsea</td>
                                    <td>12</td>
                                    <td>03</td>
                                    <td>00</td>
                                    <td>54</td>
                                </tr>
                            </tbody>
                        </table> --}}
                        <img class="a" style="width:700px !important;height:430px;" src="{{ asset('uploads/match_statistics') }}/{{ $stats->match_table}}" alt="">
                    {{-- </div> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- Fixture Page Next Match End -->
    
    
    <!-- Last Match Result Area Start -->
    {{-- <section class="kick-last-match-result section_100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="kick-section-heading">
                        <h2>last match <span>result</span></h2>
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
                                <h3 class="result">win</h3>
                                <div class="result-details">
                                    <h3 class="result-details-left">
                                        <a href="#">kick dragon</a>
                                    </h3>
                                    <ul>
                                        <li><p>Roman Fenley</p><span>(15)</span></li>
                                        <li><p>Jonah Jolicoeur</p><span>(39)</span></li>
                                        <li><p>Miguel Beckel</p><span>(25)</span></li>
                                    </ul>
                                    <div class="last-match-logo">
                                        <a href="#"><img src="assets/img/team-4.png" alt="logo" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="last-match-score">
                            <h2>3 <span class="devider">/</span> <span class="lose-point">2</span> </h2>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="last-match-result-two last-match-result">
                            <div class="col-md-12">
                                <h3 class="result">lose</h3>
                                <div class="result-details">
                                    <div class="last-match-logo-right">
                                        <a href="#"><img src="assets/img/team-2.png" alt="logo" /></a>
                                    </div>
                                    <h3 class="result-details-right">
                                        <a href="#">
                                            kick ninja
                                        </a>
                                    </h3>
                                    <ul>
                                        <li><p>Roman Fenley</p><span>(15)</span></li>
                                        <li><p>Jonah Jolicoeur</p><span>(39)</span></li>
                                        <li><p>Miguel Beckel</p><span>(25)</span></li>
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
    </section> --}}
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
                {{-- <div class="col-md-12">
                    <div class="single-upcoming-match">
                        <h3>Upcoming Match</h3>
                        <p>10th sep<span>2017</span></p>
                        <div class="upcoming-match-box">
                            <h4>Laliga Semi Finals at city stadium</h4>
                            <p>Friday, 10th Sep, 2016, 16:00GMT</p>
                            <div class="upcoming-teams-head">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="team-head-image">
                                            <a href="#">
                                                <img src="assets/img/team-2.png" alt="team image" />
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
                                                <img src="assets/img/team-3.png" alt="team image" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="upcoming-match-btn">
                                <a href="#" class="kick-btn">Buy tickets </a>
                                <a href="#" class="kick-btn">view more</a>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="col-md-12">
                    <div class="single-upcoming-match">
                        {{-- <h3>Upcoming Match</h3>
                        <p>10th sep<span>2017</span></p>
                        <div class="upcoming-match-box">
                            <h4>Laliga Semi Finals at city stadium</h4>
                            <p>Friday, 10th Sep, 2016, 16:00GMT</p>
                            <div class="upcoming-teams-head">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="team-head-image">
                                            <a href="#">
                                                <img src="assets/img/team-4.png" alt="team image" />
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
                                                <img src="assets/img/team-2.png" alt="team image" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="upcoming-match-btn">
                                <a href="#" class="kick-btn">Buy tickets </a>
                                <a href="#" class="kick-btn">view more</a>
                            </div>
                        </div> --}}
                        <img src="{{ asset('uploads/match_statistics') }}/{{ $stats->match_fixture }}" alt="">
                    </div>
                </div>
                {{-- <div class="col-md-4">
                    <div class="single-upcoming-match">
                        <h3>Upcoming Match</h3>
                        <p>10th sep<span>2017</span></p>
                        <div class="upcoming-match-box">
                            <h4>Laliga Semi Finals at city stadium</h4>
                            <p>Friday, 10th Sep, 2016, 16:00GMT</p>
                            <div class="upcoming-teams-head">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="team-head-image">
                                            <a href="#">
                                                <img src="assets/img/team-4.png" alt="team image" />
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
                                                <img src="assets/img/team-2.png" alt="team image" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="upcoming-match-btn">
                                <a href="#" class="kick-btn">Buy tickets </a>
                                <a href="#" class="kick-btn">view more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="single-upcoming-match">
                        <h3>Upcoming Match</h3>
                        <p>10th sep<span>2017</span></p>
                        <div class="upcoming-match-box">
                            <h4>Laliga Semi Finals at city stadium</h4>
                            <p>Friday, 10th Sep, 2016, 16:00GMT</p>
                            <div class="upcoming-teams-head">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="team-head-image">
                                            <a href="#">
                                                <img src="assets/img/team-4.png" alt="team image" />
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
                                                <img src="assets/img/team-2.png" alt="team image" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="upcoming-match-btn">
                                <a href="#" class="kick-btn">Buy tickets </a>
                                <a href="#" class="kick-btn">view more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-upcoming-match">
                        <h3>Upcoming Match</h3>
                        <p>10th sep<span>2017</span></p>
                        <div class="upcoming-match-box">
                            <h4>Laliga Semi Finals at city stadium</h4>
                            <p>Friday, 10th Sep, 2016, 16:00GMT</p>
                            <div class="upcoming-teams-head">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="team-head-image">
                                            <a href="#">
                                                <img src="assets/img/team-4.png" alt="team image" />
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
                                                <img src="assets/img/team-2.png" alt="team image" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="upcoming-match-btn">
                                <a href="#" class="kick-btn">Buy tickets </a>
                                <a href="#" class="kick-btn">view more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-upcoming-match">
                        <h3>Upcoming Match</h3>
                        <p>10th sep<span>2017</span></p>
                        <div class="upcoming-match-box">
                            <h4>Laliga Semi Finals at city stadium</h4>
                            <p>Friday, 10th Sep, 2016, 16:00GMT</p>
                            <div class="upcoming-teams-head">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="team-head-image">
                                            <a href="#">
                                                <img src="assets/img/team-3.png" alt="team image" />
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
                                                <img src="assets/img/team-2.png" alt="team image" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="upcoming-match-btn">
                                <a href="#" class="kick-btn">Buy tickets </a>
                                <a href="#" class="kick-btn">view more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
          
        </div>
    </section>
    <!-- Upcoming Matches Area End -->
    @empty
        
    @endforelse

    <div class="row">
        <div class="col-md-12">
            <div class="pagination-box">
                <ul class="pagination">
                    {{ $statistics->links() }}
                </ul>
            </div>
        </div>
    </div>
@endsection