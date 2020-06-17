@extends('layouts.frontend')  

@section('title')
    Asgnsport || Home
@endsection

@section('current-about')
current-page-item
@endsection
  
@section('content')
    



    <!-- Breadcromb Area Start -->
    <section class="kick-breadcromb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcromb-box">
                        <h2>About Us</h2>
                        <ul>
                            <li><a href="{{ url('/') }}"><i class="fa fa-home"></i> home</a></li>
                            <li>/</li>
                            <li>About</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcromb Area End -->
    
    
    <!-- About Page Section Start -->
    <section class="kick-about-page-welcome section_100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="kick-section-heading">
                        <h2>Welcome To <span>asgnsport</span></h2>
                        <div class="title-line-one"></div>
                        <div class="title-line-two"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="about-page-welcome-right">
                        <p>We are a sport organization that specialize on the following areas in sports, "News, blog , information and transfers deals " we update you with the latest sports news, results and updates. Our blog give your our in-dept and expert opinion on sports news, events and tournaments around the world. We analysis every matches that matters and key issues in filed of sport on daily bases for you to enjoy, and update you on the latest transfer rumors , deals and sports information as the come.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-page-welcome-left">
                        <img src="{{ asset('frontend_assets/assets/img/abt-wel.jpg') }}" alt="about welcome" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Page Section End -->

   <!-- CEO --> 
   <section class="kick-about-page-welcome section_100">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="kick-section-heading">
                    <h2>Chijioke<span> Akuneziri</span></h2>
                    <div class="title-line-one"></div>
                    <div class="title-line-two"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="about-page-welcome-left">
                    <img src="{{ asset('uploads/boards/boardMember03.jpg') }}" alt="about welcome" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="about-page-welcome-right">
                    <p>Our CEO Chijioke is the founder and brain behind Asgsnport Vision. He have worked at different capacities in sports, from coaching, referee, scouting and as well as player, in various countries in Africa, Asia And Europe, He is studying Economics and administration at UIT Troms첩 Norway.</p>
                    <p>Economics and Leadership at USN Drammen Norway. Chijioke, holds UEFA coaching license with English FA and Norwegian Football Federations, As well a licensed intermediary with Norwegian Football Federations. With 5 years working experience with sports projects in Asia.</p>
                </div>
            </div>
        </div>
    </div>
</section>
   <!-- CEO ENds -->
   <!-- CEO --> 
   <section class="kick-about-page-welcome section_100">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="kick-section-heading">
                    <h2>Onyeka<span> Akuneziri</span></h2>
                    <div class="title-line-one"></div>
                    <div class="title-line-two"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="about-page-welcome-right">
                    <p>Our Director of Operation Onyeka is a product of Unilag, he was the former secretary of Festac Allstars Lagos, he is in charge of our operation and day to day runs our filed activities. He was member of Unliag team and has vast experiences on how to discover talents. He is currently based and run the affaires in Lagos.</p>
                    
                </div>
            </div>
                            <div class="col-md-6">
                                <div class="about-page-welcome-left">
                                    <img style="width:550px;height:350px;" src="{{ asset('uploads/boards/boardMember02.jpg') }}" alt="about welcome" />
                                </div>
                            </div>
        </div>
    </div>
</section>
   <!-- CEO ENds -->
   <!-- CEO --> 
   <section class="kick-about-page-welcome section_100">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="kick-section-heading">
                    <h2>Tobias<span> Akuneziri</span></h2>
                    <div class="title-line-one"></div>
                    <div class="title-line-two"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="about-page-welcome-left">
                    <img style="width:550px;height:350px;" src="{{ asset('uploads/boards/tobias.jpg') }}" alt="about welcome" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="about-page-welcome-right">
                    <p>Tobias studied Bachelor degrees in Public Administration with Ambros Ali University In Akpoma Nigeria; he was for region manager of Apex mail limited Nigeria ltd.

                    </p>
                    <p>He is currently our Administrive director that supervises the day-to-day runs of the affairs of the Organizations. He is a great sports contributor and with vast experience with European football. Tobias lives in Port Harcourt - Norwegian Football Federations. With 5 years working experience with sports projects in Asia. Norwegian Football Federations. With 5 years working experience with sports projects in Asia.

                    </p>
                    
                </div>
            </div>
                       
        </div>
    </div>
</section>
   <!-- CEO ENds -->
    
    
    @endsection
