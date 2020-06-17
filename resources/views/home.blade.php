@extends('layouts.dashboard')

@section('title')
Asgnsport | Admin Panel
@endsection

@section('page')
   Asgnsport | Home
@endsection

@section('home-active')
    active
@endsection

@section('breadcrumb')
<div class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="active"><a href="{{ route('home') }}">Home</a></li>
        {{-- <li><a href="#">Layouts</a></li>
        <li class="active">Blank Page</li> --}}
    </ol>
</div>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Welcome to Asgnsport</div>

                <div class="card-body text-center text-white py-3">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
