@extends('layouts.frontend')  

@section('title')
    Asgnsport || Scouts
@endsection

@section('current-scouts')
current-page-item
@endsection
@section('content')

    <!-- Breadcromb Area Start -->
    <section class="kick-breadcromb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcromb-box">
                        <h2>Scout details</h2>
                        <ul>
                            <li><a href="{{ url('/') }}"><i class="fa fa-home"></i> home</a></li>
                            <li>/</li>
                            <li>scout details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcromb Area End -->
    
    
    <!-- Player Page Section Start -->
    <section class="kick-player-page section_100">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="player-details-left">
                        <div class="single-top-player details">
                            <img style="width: 358px;height:329px;" src="{{ asset('uploads/scouts/scout1.jpg') }}" alt="top player" />
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-8">
                    <div class="player-details-right">
                        <h2>ADemola Adeniji</h2>
                        <div class="player-desc">
                            <p>I like to fight for every ball as if it where the last and give my all on the field</p>
                            <p>ADemola Adeniji is one of our scout one of in Nigeria .He is an ex - footballer who had several stints with Various football teams in Nigeria and several countries international. His football career started from Pepsi football academy Lagos Nigeria to Nigeria premier league side Julius Berger Fc of Lagos and He is a former Nigeria youth Under-23 National team player .</p>
                           
                        </div>
                        {{-- <div class="player-social">
                            <h3>Social Network :</h3>
                            <a href="#" class="pl_fb"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="pl_ttr"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="pl_gp"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="pl_lnk"><i class="fa fa-linkedin"></i></a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Player Page Section Start -->
    
    
    <!-- Player Profile Info Start -->
    <section class="kick-player-profile-info section_100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="kick-section-heading">
                        <h2>Profile <Span>information</Span></h2>
                        <div class="title-line-one"></div>
                        <div class="title-line-two"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="player-profile-left">
                        <table class="table table-striped table-responsive">
                            <tbody>
                                <tr>
                                    <td>Name :</td>
                                    <td>ADemola Adeniji</td>
                                </tr>
                                <tr>
                                    <td>Nationality :</td>
                                    <td>Nigeria</td>
                                </tr>
                                <tr>
                                    <td>Former :</td>
                                    <td>NIGERIA YOUTH UNDER-23 NATIONAL TEAM PLAYER</td>
                                </tr>
                                <tr>
                                    <td>Birth Date :</td>
                                    <td>20/01/1995</td>
                                </tr>
                                <tr>
                                    <td>Weight :</td>
                                    <td>78kg</td>
                                </tr>
                                <tr>
                                    <td>Previous Club :</td>
                                    <td>PEPSI FOOTBALL ACADEMY LAGOS</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="player-profile-right">
                        <ul class="progress-list">
                            <li>
                                <p> Shot Accuracy</p>
                                <div class="bar" data-value="95"></div>
                            </li>
                            <li>
                                <p>Pass Accuracy</p>
                                <div class="bar" data-value="85"></div>
                            </li>
                            <li>
                                <p>timing Accuracy</p>
                                <div class="bar" data-value="90"></div>
                            </li>
                            <li>
                                <p>total Accuracy</p>
                                <div class="bar" data-value="95"></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
             
        </div>
    </section>
    <!-- Player Profile Info End -->
    
    <!-- Player Page Section Start -->
    <section class="kick-player-page section_100">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="player-details-left">
                        <div class="single-top-player details">
                            <img style="width: 358px;height:329px;" src="{{ asset('uploads/scouts/scout2.jpg') }}" alt="top player" />
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-8">
                    <div class="player-details-right">
                        <h2>Ananias De Oliveira</h2>
                        <div class="player-desc">
                            <p>He played indoor soccer (fu.t5) on the Angola National Radio team, from the age of 14 until he was 21, He went to Germany with his elder brothers and I played 11 football with amateur team and had a trails in Hamburg, He returned to Angola ,and trained for three months with the Petro de Luanda team, but h saw studies as a better option. Today he is staff of one of the top bank in Angola. and our scout and representative in Angola.

                            </p>                           
                        </div>
                        {{-- <div class="player-social">
                            <h3>Social Network :</h3>
                            <a href="#" class="pl_fb"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="pl_ttr"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="pl_gp"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="pl_lnk"><i class="fa fa-linkedin"></i></a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Player Page Section Start -->
    
    
    <!-- Player Profile Info Start -->
    <section class="kick-player-profile-info section_100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="kick-section-heading">
                        <h2>Profile <Span>information</Span></h2>
                        <div class="title-line-one"></div>
                        <div class="title-line-two"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="player-profile-left">
                        <table class="table table-striped table-responsive">
                            <tbody>
                                <tr>
                                    <td>Name :</td>
                                    <td>Ananias De Oliveira</td>
                                </tr>
                                <tr>
                                    <td>Nationality :</td>
                                    <td>Angola</td>
                                </tr>
                                <tr>
                                    <td>Position :</td>
                                    <td>RIGHT BACK</td>
                                </tr>
                                <tr>
                                    <td>Birth Date :</td>
                                    <td>20/01/1995</td>
                                </tr>
                                <tr>
                                    <td>Weight :</td>
                                    <td>78kg</td>
                                </tr>
                                <tr>
                                    <td>Previous Club :</td>
                                    <td>Ghost Scorpions</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="player-profile-right">
                        <ul class="progress-list">
                            <li>
                                <p> Shot Accuracy</p>
                                <div class="bar" data-value="95"></div>
                            </li>
                            <li>
                                <p>Pass Accuracy</p>
                                <div class="bar" data-value="85"></div>
                            </li>
                            <li>
                                <p>timing Accuracy</p>
                                <div class="bar" data-value="90"></div>
                            </li>
                            <li>
                                <p>total Accuracy</p>
                                <div class="bar" data-value="95"></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
             
        </div>
    </section>
    <!-- Player Profile Info End -->

    <!-- Player Page Section Start -->
    <section class="kick-player-page section_100">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="player-details-left">
                        <div class="single-top-player details">
                            <img style="width: 358px;height:329px;" src="{{ asset('uploads/scouts/scout3.jpg') }}" alt="top player" />
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-8">
                    <div class="player-details-right">
                        <h2>Zaki mairiga Football Academy</h2>
                        <div class="player-desc">
                            <p>FOUNDED IN 2016
                                BASED IN GOMBE, NIGERIA
                                
                                DIRECTORS
                                S. A GORINGO. CEO
                                SULEIMAN A. GORINGO. DIRECTOR
                                SAMIRA SHEHU. DIRECTOR
                                Gombe, Nigeria. WEST AFRICA.</p>  
                                <p>NURTURING TALENTED YOUTH TO STARDOM BY SERVING AS THE CHANNEL FOR PROFESSIONAL CAREER.

                                </p>                
                        </div>
                        
                        {{-- <div class="player-social">
                            <h3>Social Network :</h3>
                            <a href="#" class="pl_fb"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="pl_ttr"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="pl_gp"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="pl_lnk"><i class="fa fa-linkedin"></i></a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Player Page Section Start -->
    
    
    <!-- Player Profile Info Start -->
    <section class="kick-player-profile-info section_100">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 m-auto" style="width:100%; padding-bottom:100px;">
                    <img width="100%" src="{{ asset('uploads/scouts/scout3.1.jpg') }}" alt="">  
                </div>
                <div class="col-md-12">
                    <div class="kick-section-heading">
                        <h2>Profile <Span>information</Span></h2>
                        <div class="title-line-one"></div>
                        <div class="title-line-two"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="player-profile-left">
                        <table class="table table-striped table-responsive">
                            <tbody>
                                <tr>
                                    <td>Name :</td>
                                    <td>Zaki mairiga</td>
                                </tr>
                                <tr>
                                    <td>Nationality :</td>
                                    <td>Nigerian</td>
                                </tr>
                                <tr>
                                    <td>Registration :</td>
                                    <td>RC : 1315240</td>
                                </tr>
                                <tr>
                                    <td>Founded :</td>
                                    <td>February, 2016</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="player-profile-right">
                        <ul class="progress-list">
                            <li>
                                <p> Shot Accuracy</p>
                                <div class="bar" data-value="95"></div>
                            </li>
                            <li>
                                <p>Pass Accuracy</p>
                                <div class="bar" data-value="85"></div>
                            </li>
                            <li>
                                <p>timing Accuracy</p>
                                <div class="bar" data-value="90"></div>
                            </li>
                            <li>
                                <p>total Accuracy</p>
                                <div class="bar" data-value="95"></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
             
        </div>
    </section>
    <!-- Player Profile Info End -->
    @endsection