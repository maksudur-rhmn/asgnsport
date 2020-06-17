@extends('layouts.dashboard')

@section('title')
Asgnsport | Banners
@endsection

@section('page')
   Asgnsport | Banners
@endsection

@section('layout-active')
    active
@endsection

@section('breadcrumb')
<div class="page-breadcrumb">
    <ol class="breadcrumb">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li class="active">Banner</li>
        {{-- <li class="active">Blank Page</li> --}}
    </ol>
</div>
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h1>Banners</h1>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tr>
                                    <th>Sl.</th>
                                    <th>Banner name</th>
                                    <th>Banner image</th>
                                    <th>Created at</th>
                                    <th>Action</th>
                                </tr>
                                @forelse ($banners as $banner)
                                    <tr>
                                        <td>{{ $loop-> index + 1 }}</td>
                                        <td>{{ $banner->banner_name }}</td>
                                        <td>
                                             <img src="{{ asset('uploads/banners') }}/{{ $banner->banner_image }}" alt="Not found" width="400">
                                        </td>
                                        <td>{{ $banner->created_at->diffForHumans() }}</td>
                                        <td>
                                            @if($banner->status == 0)
                                                <a href="{{ route('banners.edit', $banner->id) }}" class="btn btn-info">Activate</a>
                                            @else 
                                               <a href="{{ route('banners.edit', $banner->id) }}" class="btn btn-danger">Deactivate</a>                                                
                                            @endif
                                        </td>
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
            <div class="col-lg-6">
                @if(session('success'))
                   <div class="alert alert-success">
                       {{ session('success') }}
                   </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h2>Add Banners</h2>
                    </div>
                    <div class="card-body">
                         <form action="{{ route('banners.store') }}" class="form-group" method="post" enctype="multipart/form-data">
                            @csrf 
                            <div class="" style="padding: 20px 0;">
                                <input type="text" class="form-control" placeholder="Banner Title" name="banner_name">
                            </div>
                            <div class="py-3" style="padding:20px 0;">
                                <input type="file" class="form-control" placeholder="Banner Image" name="banner_image">
                            </div>
                            <div class="py-3" style="padding:20px 0;">
                               <button class="btn btn-primary" type="submit">Add Banner</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection