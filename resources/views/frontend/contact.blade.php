@extends('layouts.frontend')  

@section('title')
    Asgnsport || Contact us
@endsection

@section('current-contact')
current-page-item
@endsection
@section('content')

<!-- Breadcromb Area Start -->
<section class="kick-breadcromb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcromb-box">
                    <h2>contact us</h2>
                    <ul>
                        <li><a href="{{ url('/') }}"><i class="fa fa-home"></i> home</a></li>
                        <li>/</li>
                        <li>contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcromb Area End -->



<!-- Contact Form Area Start -->
<section class="kick-contact-form-area section_100">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="contact-form">
                    <div class="contact-heading">
                        <h3>get in touch</h3>
                        <p>Our experts will reply you very soon</p>
                    </div>
                    <form action="{{ route('contact.post') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <p>
                                    <input type="text" name="name" placeholder="Your Name" >
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </p>
                            </div>
                            <div class="col-md-4">
                                <p>
                                    <input type="email" name="email" placeholder="Your Email" >
                                    @error('email')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </p>
                            </div>
                            <div class="col-md-4">
                                <p>
                                    <input type="tel" name="phone" placeholder="Your Phone Number" >
                                    @error('phone')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <p>
                                    <textarea name="message" placeholder="Write Your Message" ></textarea>
                                    @error('message')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="contact-form-button">
                                    <button type="submit">Send message</button>
                                </div>
                                @if(session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
<!-- Contact Form Area End -->
