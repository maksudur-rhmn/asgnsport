@php
    error_reporting(0);
@endphp
@extends('layouts.dashboard')

@section('title')
Asgnsport | Match Result
@endsection

@section('page')
   Asgnsport | Match Result
@endsection

@section('layout-active')
    active
@endsection

@section('breadcrumb')
<div class="page-breadcrumb">
    <ol class="breadcrumb">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li class="active">Match Result</li>
        {{-- <li class="active">Blank Page</li> --}}
    </ol>
</div>
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-12 m-auto">
                <div class="card">
                    <div class="card-header">
                        <h1>Match Results</h1>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tr>
                                    <th>Sl.</th>
                                    <th>League name</th>
                                    <th>Home</th>
                                    <th>Home Scorer</th>
                                    <th>Home Logo</th>
                                    <th>Home Result</th>
                                    <th>Away Result</th>
                                    <th>Date</th>
                                    <th>Away Logo</th>
                                    <th>Away </th>
                                    <th>Away Scorer</th>
                                </tr>
                                @forelse ($match_results as $result)
                                    <tr>
                                        <td>{{ $loop-> index + 1 }}</td>
                                        <td>{{ $result->league_name }}</td>
                                        <td>{{ $result->home_team_name }}</td>
                                        <td>{{ $result->home_team_scorer }}</td>
                                        <td>
                                            <img src="{{ asset('uploads/logos') }}/{{ $result->home_team_logo }}" alt="Not Found" width="150">
                                        </td>
                                        <td>{{ $result->home_team_result }}</td>
                                        <td>{{ $result->away_team_result }}</td>
                                        <td>{{ $result->match_date }}</td>
                                        <td>
                                            <img src="{{ asset('uploads/logos') }}/{{ $result->away_team_logo }}" alt="Not found" width="150">
                                        </td>
                                        <td>{{ $result->away_team_name }}</td>
                                        <td>{{ $result->away_team_scorer }}</td>
                                        
                                    </tr>
                                @empty
                                    <tr>
                                        <td>No banners</td>
                                    </tr>
                                @endforelse
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 m-auto">
                @if(session('success'))
                   <div class="alert alert-success">
                       {{ session('success') }}
                   </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h2>Add Match Result</h2>
                    </div>
                    <div class="card-body">
                         <form action="{{ route('match_result.store') }}" class="form-group" method="post" enctype="multipart/form-data">
                            @csrf 
                            <div class="" style="padding: 20px 0;">
                                <input type="text" class="form-control" placeholder="League Name" name="league_name">
                            </div>
                            <div class="" style="padding: 20px 0;">
                                <input type="text" class="form-control" placeholder="Home Name" name="home_team_name">
                            </div>
                            <div class="" style="padding: 20px 0;">
                                <input type="text" class="form-control" placeholder="Home Scorer" name="home_team_scorer">
                            </div>
                            <div class="py-3" style="padding:20px 0;">
                                <label for="home">Home Team Logo</label>
                                <input id="home" type="file" class="form-control" placeholder="Home Logo" name="home_team_logo">
                            </div>
                            <div class="" style="padding: 20px 0;">
                                <input type="text" class="form-control" placeholder="Home Result" name="home_team_result">
                            </div>
                            <div class="" style="padding: 20px 0;">
                                <input type="text" class="form-control" placeholder="Away Result" name="away_team_result">
                            </div>
                            <div class="py-3" style="padding:20px 0;">
                                <label for="away">Away Team Logo</label>
                                <input id="away" type="file" class="form-control" placeholder="Away Logo" name="away_team_logo">
                            </div>
                            <div class="" style="padding: 20px 0;">
                                <input type="text" class="form-control" placeholder="Match Date" name="match_date">
                            </div>
                            <div class="" style="padding: 20px 0;">
                                <input type="text" class="form-control" placeholder="Away Name" name="away_team_name">
                            </div>
                            <div class="" style="padding: 20px 0;">
                                <input type="text" class="form-control" placeholder="Away Score" name="away_team_scorer">
                            </div>

                            <div class="py-3" style="padding:20px 0;">
                               <button class="btn btn-primary" type="submit">Add result</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection