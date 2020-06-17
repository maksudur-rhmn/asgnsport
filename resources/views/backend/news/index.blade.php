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
@section('top-script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.3/trix.js"></script>
@endsection

@section('top-css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.3/trix.css" rel="stylesheet" type="text/css"/>
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
                        <h1>Match Statistics</h1>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tr>
                                    <th>Sl.</th>
                                    <th>news_image1</th>
                                    <th>news_title</th>
                                    <th>news_subtitle1</th>
                                    <th>news_description1</th>
                                </tr>
                                @forelse ($news as $result)
                                    <tr>
                                        <td>{{ $loop-> index + 1 }}</td>
                                        <td>
                                            <img src="{{ asset('uploads/news') }}/{{ $result->news_image1 }}" alt="Not Found" width="150">
                                        </td>
                                        <td>{{ $result->news_title }}</td>
                                        <td>{{ $result->news_subtitle1 }}</td>
                                        <td>{{ $result->news_description1 }}</td>
                                      
                                        
                                    </tr>
                                @empty
                                    <tr>
                                        <td>No banners</td>
                                    </tr>
                                @endforelse


                            </table>
                            {{ $news->links() }}
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
                         <form action="{{ route('news.store') }}" class="form-group" method="post" enctype="multipart/form-data">
                            @csrf 
                            <div class="" style="padding: 20px 0;">
                                <input type="text" class="form-control" placeholder="news title" name="news_title">
                            </div>
                            <div class="" style="padding: 20px 0;">
                                <input type="text" class="form-control" placeholder="news subtitle" name="news_subtitle1">
                            </div>
                            
                            <div class="" style="padding: 20px 0;">
                                <input id="x" value="Editor content goes here" type="hidden" name="news_description1">
                                <trix-editor input="x"></trix-editor>
                            </div>
                            
                            <div class="py-3" style="padding:20px 0;">
                                <label for="home">news image</label>
                                <input id="home" type="file" class="form-control" placeholder="Home Logo" name="news_image1">
                            </div>
                            <div class="py-3" style="padding:20px 0;">
                               <button class="btn btn-primary" type="submit">Add news</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection