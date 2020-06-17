@extends('layouts.frontend')  

@section('title')
    Asgnsport || blogs
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
                        <h2>blogs details</h2>
                        <ul>
                            <li><a href="{{ url('/') }}"><i class="fa fa-home"></i> home</a></li>
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
                <div class="col-md-12">
                    <div class="single-blog-page-section">
                        <div class="single-latest-post">
                            <img style="width: 100%" src="{{ asset('uploads/blogs') }}/{{ $blogs->blog_image1 }}" alt="post image" />
                            <div class="single-post-text">
                                <h3>{!! $blogs->blog_title !!}</h3>
                                <p>{!! $blogs->blog_subtitle1 !!}</p>
                                @if($blogs->blog_description2 != null)
                                 <p>{!! $blogs->blog_description1 !!}</p>
                                 <p>{!! $blogs->blog_subtitle2 !!}</p>
                                 <p>{!! $blogs->blog_description2 !!}</p>
                                 <p>{!! $blogs->blog_subtitle3 !!}</p>
                                 <p>{!! $blogs->blog_description3 !!}</p>
                                 <p>{!! $blogs->blog_subtitle4 !!}</p>
                                 <p>{!! $blogs->blog_description4 !!}</p>
                                 <p>{!! $blogs->blog_subtitle5 !!}</p>
                                 <p>{!! $blogs->blog_description5 !!}</p>
                                 <p>{!! $blogs->blog_subtitle6 !!}</p>
                                 <p>{!! $blogs->blog_description6 !!}</p>
                                 <p>{!! $blogs->blog_subtitle7 !!}</p>
                                 <p>{!! $blogs->blog_description7 !!}</p>
                                 <p>{!! $blogs->blog_subtitle8 !!}</p>
                                 <p>{!! $blogs->blog_description8 !!}</p>
                                 @else 
                                 {!! $blogs->blog_description1 !!}
                                @endif
                                </div>
                        </div>
                        <div style="padding-top:100px;" id="disqus_thread"></div>
                            <script>

                            /**
                            *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                            *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

                            var disqus_config = function () {
                            this.page.url = "{{ config('app.url') }}/blogs//{{ $blogs->id }}/single";  // Replace PAGE_URL with your page's canonical URL variable
                            this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                            };

                            (function() { // DON'T EDIT BELOW THIS LINE
                            var d = document, s = d.createElement('script');
                            s.src = 'https://asgnsport-com.disqus.com/embed.js';
                            s.setAttribute('data-timestamp', +new Date());
                            (d.head || d.body).appendChild(s);
                            })();
                            </script>
                            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                            
                </div>
                {{-- <div class="col-md-4">
                    <div class="single-fixture-page-right margin-top">
                        <div class="single-fixture-right-widget">
                            <form>
                                <input type="search" placeholder="keywords..." >
                                <button type="submit" >
                                    <i class="fa fa-search"></i>
                                </button>
                            </form>
                        </div>
                        <div class="single-fixture-right-widget">
                            <h3>Categories</h3>
                            <ul class="blog-catagory">
                                <li><a href="#">business market<span>(29)</span></a></li>
                                <li><a href="#">Financial Services<span>(12)</span></a></li>
                                <li><a href="#">Consumer Products<span>(22)</span></a></li>
                                <li><a href="#">Telecommunications<span>(11)</span></a></li>
                                <li><a href="#">Rebuild Services<span>(12)</span></a></li>
                                <li><a href="#">Electrical System<span>(19)</span></a></li>
                                <li><a href="#">Financial Services<span>(17)</span></a></li>
                            </ul>
                        </div>
                        <div class="single-fixture-right-widget">
                            <table class="table table-striped table-responsive">
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
                            </table>
                        </div>
                        <div class="single-fixture-right-widget">
                            <h3>best moment</h3>
                            <div class="moment-slider">
                                <div class="single-moment">
                                    <img src="assets/img/win-m.jpg" alt="best moment" />
                                </div>
                                <div class="single-moment">
                                    <img src="assets/img/win-m2.jpg" alt="best moment" />
                                </div>
                            </div>
                        </div>
                        <div class="single-fixture-right-widget">
                            <h3>gallery</h3>
                            <a href="#">
                                <img src="assets/img/widgetgallery-1.jpg" alt="Gallery" />
                            </a>
                            <a href="#">
                                <img src="assets/img/widgetgallery-2.jpg" alt="Gallery" />
                            </a>
                            <a href="#">
                                <img src="assets/img/widgetgallery-3.jpg" alt="Gallery" />
                            </a>
                            <a href="#">
                                <img src="assets/img/widgetgallery-2.jpg" alt="Gallery" />
                            </a>
                            <a href="#">
                                <img src="assets/img/widgetgallery-3.jpg" alt="Gallery" />
                            </a>
                            <a href="#">
                                <img src="assets/img/widgetgallery-1.jpg" alt="Gallery" />
                            </a>
                        </div>
                    </div>
                </div> --}}
            </>
        </div>
    </section>
    <!-- Blog Page Area End -->
@endsection