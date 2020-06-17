@php
    error_reporting(0);
@endphp
@extends('layouts.dashboard')

@section('title')
Asgnsport | Match Statistics
@endsection

@section('page')
   Asgnsport | Match Statistics
@endsection

@section('layout-active')
    active
@endsection

@section('breadcrumb')
<div class="page-breadcrumb">
    <ol class="breadcrumb">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li class="active">Match Statistics</li>
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
                        <h1>Players</h1>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tr>
                                    <th>Sl.</th>
                                    <th>Player name</th>
                                    <th>Player image</th>
                                    <th>Player age</th>
                                    <th>Player position</th>
                                    <th>player information</th>
                                </tr>
                                @forelse ($players as $result)
                                    <tr>
                                        <td>{{ $loop-> index + 1 }}</td>
                                        <td>{{ $result->about_players_name }}</td>
                                        <td>
                                            <img src="{{ asset('uploads/about_players') }}/{{ $result->about_players_image }}" alt="Not Found" width="150">
                                        </td>
                                        <td>{{ $result->about_players_age }}</td>
                                        <td>{{ $result->about_players_position }}</td>
                                        <td>{{ $result->about_players_information }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td>No players</td>
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
                         <form action="{{ route('aboutplayer.post') }}" class="form-group" method="post" enctype="multipart/form-data">
                            @csrf 
                            
                            
                            
                            
                            
                            <div class="" style="padding: 20px 0;">
                                <input type="text" class="form-control" placeholder="Player Name" name="about_players_name">
                            </div>
                            <div class="" style="padding: 20px 0;">
                                <input type="text" class="form-control" placeholder="Player age" name="about_players_age">
                            </div>
                            <div class="" style="padding: 20px 0;">
                                <input type="text" class="form-control" placeholder="Player position" name="about_players_position">
                            </div>
                            <div class="" style="padding: 20px 0;">
                                <textarea type="text" class="form-control" placeholder="Player information" name="about_players_information"></textarea>
                            </div>
                            
                            <div class="py-3" style="padding:20px 0;">
                                <label for="home">Player image</label>
                                <input id="home" type="file" class="form-control" placeholder="Home Logo" name="about_players_image">
                            </div>
                           

                            <div class="py-3" style="padding:20px 0;">
                               <button class="btn btn-primary" type="submit">Add Players</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection