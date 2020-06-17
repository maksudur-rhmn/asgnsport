@extends('layouts.frontend')  

@section('title')
    Asgnsport || Blogs
@endsection

@section('current-blogs')
current-page-item
@endsection
@section('content')
 <!-- Breadcromb Area Start -->
 <section class="kick-breadcromb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcromb-box">
                    <h2>blogs</h2>
                    <ul>
                        <li><a href="#"><i class="fa fa-home"></i> home</a></li>
                        <li>/</li>
                        <li>blogs</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcromb Area End -->


<!-- Blog Page Area Start -->
<section class="kick-blog-page-area section_100">
    <div class="container">
        <div class="row">
            @foreach ($blogs as $item)
            <div class="col-md-6">
                <div class="single-latest-post">
                    <a href="{{ route('blogs.single', $item->id) }}"><img style="width:553px; height:336px;" src="{{ asset('uploads/blogs') }}/{{ $item->blog_image1 }}" alt="post image" /></a>
                    <div class="single-post-text">
                        @php
                           $pos = strpos($item->blog_title, ' ', 20);
                        @endphp
                        <h3><a href="{{  route('blogs.single', $item->id)  }}">{!! $item->blog_title !!} ... <small> Read more</small> </a></h3>
                        <p class="post-date">{{ $item->created_at->format('d-M-Y') }}</p>
                        {{-- <p>{!! $item->blogs_subtitle1 !!}</p> --}}
                        <div class="post-text-bottom">
                      
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="pagination-box">
                    <ul class="pagination">
                       {{ $blogs->links() }}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Page Area End -->
@endsection