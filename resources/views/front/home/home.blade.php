@extends('front.master')
@section('title')
    Home Page
@endsection
@section('body')
    <section>
        <div class="hero-slider position-relative">
            @foreach($sliders as $slider)
            <div class="hero-slider-item py-160" style="background-image: url({{asset($slider->image)}}); height: 650px; width: 650px;"
                 data-icon="ti-bar-chart" data-text="{{$slider->category->category_name}}">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-content">
                                <h4 class="text-uppercase mb-1" data-duration-in=".5" data-animation-in="fadeInLeft" data-delay-in=".1">{{$slider->title}}</h4>
                                <p class="text-dark mb-50" data-duration-in=".5" data-animation-in="fadeInLeft" data-delay-in=".9">
                                    {!! $slider->description !!}
                                </p>
                                <a data-duration-in=".5" data-animation-in="fadeInDown" data-delay-in="1.3" href="{{route('/')}}"
                                   class="btn btn-outline text-uppercase">more details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <!-- service -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <h5 class="section-title-sm">Best Service</h5>
                    <h2 class="section-title section-title-border">Service We Provide</h2>
                </div>

                <!-- service item -->
                @foreach($services as $service)
                <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                    <div class="card text-center">
                        <h4 class="card-title pt-3">{{$service->title}}</h4>
                        <div class="card-img-wrapper">
                            <img class="card-img-top rounded-0" src="{{asset($service->image)}}" alt="">
                        </div>
                        <div class="card-body p-0">
                            <i class="square-icon translateY-33 rounded ti-bar-chart"></i>
                            <p class="card-text mx-2 mb-0">{{$service->description}}</p>
                            <a href="{{route('service.details', ['id' => $service->id])}}" class="btn btn-secondary ">Read
                                More</a>
                        </div>
                    </div>
                </div>
                <!-- service item -->
                @endforeach

            </div>
        </div>
    </section>

    <section class="about section-sm overlay" style="background-image: url({{asset('/')}}front-assets/images/background/about-bg.jpg);" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 ml-auto">
                    <div class="rounded p-sm-5 px-3 py-5 bg-secondary">
                        <h3 class="section-title section-title-border-half text-white">Who We Are?</h3>
                        <p class="text-white mb-40">Excepteur sint occaecat cupidatat non proident sunt culpa qui officia deserunt mollit anim id est laborum.</p>
                        <div>
                            <ul class="d-inline-block pl-0 mr-5">
                                <li class="font-secondary mb-10 text-white">
                                    <i class="text-primary mr-2 ti-arrow-circle-right"></i>Business Services</li>
                                <li class="font-secondary mb-10 text-white">
                                    <i class="text-primary mr-2 ti-arrow-circle-right"></i>Audit &amp; Assurance</li>
                                <li class="font-secondary mb-10 text-white">
                                    <i class="text-primary mr-2 ti-arrow-circle-right"></i>IT Control Solutions</li>
                            </ul>
                            <ul class="d-inline-block pl-0">
                                <li class="font-secondary mb-10 text-white">
                                    <i class="text-primary mr-2 ti-arrow-circle-right"></i>Business Services</li>
                                <li class="font-secondary mb-10 text-white">
                                    <i class="text-primary mr-2 ti-arrow-circle-right"></i>Audit &amp; Assurance</li>
                                <li class="font-secondary mb-10 text-white">
                                    <i class="text-primary mr-2 ti-arrow-circle-right"></i>IT Control Solutions</li>
                            </ul>
                        </div>
                        <a href="{{asset('/')}}front-assets/service.html" class="btn btn-primary mt-4">Explore More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- skill -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h5 class="section-title-sm">Best Service</h5>
                    <h2 class="section-title section-title-border-half">Why Choose Us</h2>
                </div>
                <div class="col-lg-7">
                    <div class="mb-40">
                        <p class="text-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed eiusmod tempor incididunt laboris nisi
                            ut aliquip ex ea commodo consequat. </p>
                        <p class="text-dark mb-30">Duis aute irure dolor in reprehenderit voluptate
                            velit esse cillum dolore fugiat nulla pariatur.Excepteur
                            sint ocaecat cupidatat non proident sunt culpa qui officia deserunt mollit
                            anim id est laborum. sed
                            perspiciatis unde omnisiste natus error sit voluptatem
                            accusantium.doloremque ladantium totam rem
                            aperieaque ipsa quae ab illo inventore.veritatis. et quasi architecto beatae
                            vitae dicta sunt explicabo.</p>
                    </div>
                    <!-- fun-fact -->
                    <div class="mb-md-50">
                        <div class="row">
                            <div class="col-4">
                                <div class="d-flex flex-column flex-sm-row align-items-center">
                                    <i class="round-icon mr-sm-3 ti-server"></i>
                                    <div class="text-center text-sm-left">
                                        <h2 class="count mb-0" data-count="230">0</h2>
                                        <p class="mb-0">Projects Done</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="d-flex flex-column flex-sm-row align-items-center">
                                    <i class="round-icon mr-sm-3 ti-face-smile"></i>
                                    <div class="text-center text-sm-left">
                                        <h2 class="count mb-0" data-count="789">0</h2>
                                        <p class="mb-0">Satisfied Clients</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="d-flex flex-column flex-sm-row align-items-center">
                                    <i class="round-icon mr-sm-3 ti-thumb-up"></i>
                                    <div class="text-center text-sm-left">
                                        <h2 class="count mb-0" data-count="580">0</h2>
                                        <p class="mb-0">Cup Of Coffee</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- progressbar -->
                <div class="col-lg-4 offset-lg-1">
                    <div class="progressbar">
                        <h5 class="progressbar-title">Branding</h5>
                        <div class="progress" data-percent="85%">
                            <div class="progress-bar progress-bar-striped" style="width: 85%;">
                                <div class="progress-bar-value">85%</div>
                            </div>
                        </div>
                    </div>
                    <div class="progressbar">
                        <h5 class="progressbar-title">Consulting</h5>
                        <div class="progress" data-percent="90%">
                            <div class="progress-bar progress-bar-striped" style="width: 90%;">
                                <div class="progress-bar-value">90%</div>
                            </div>
                        </div>
                    </div>
                    <div class="progressbar">
                        <h5 class="progressbar-title">Business</h5>
                        <div class="progress" data-percent="75%">
                            <div class="progress-bar progress-bar-striped" style="width: 75%;">
                                <div class="progress-bar-value">75%</div>
                            </div>
                        </div>
                    </div>
                    <div class="progressbar">
                        <h5 class="progressbar-title">Promotion</h5>
                        <div class="progress" data-percent="90%">
                            <div class="progress-bar progress-bar-striped" style="width: 90%;">
                                <div class="progress-bar-value">90%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /skill -->

    <!-- work -->
    <section class="section bg-gray">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">
                    <h5 class="section-title-sm">Our Works</h5>
                    <h2 class="section-title section-title-border-gray">Latest Projects</h2>
                </div>
            </div>
            <!-- work slider -->
            <div class="row work-slider">
                @foreach($projects as $project)
                <div class="col-lg-4 px-0">
                    <div class="work-slider-image">
                        <img class="img-fluid w-100" src="{{asset($project->image)}}" alt="work-image" style="height: 300px;">
                        <div class="image-overlay">
                            <a class="popup-image" data-effect="mfp-zoom-in" href="{{route('/')}}">
                                <i class="ti-search"></i>
                            </a>
                            <a class="h4" href="{{route('project.details', ['id' => $project->id])}}">{{$project->title}}</a>
                            <p>by Admin</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- /work -->

    <section class="section" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-1 col-md-5">
                    <h2 class="section-title">Contact Us</h2>
                    <ul class="pl-0">
                        <!-- contact items -->
                        <li class="d-flex mb-30">
                            <i class="round-icon mr-3 ti-mobile"></i>
                            <div class="align-self-center font-primary">
                                <p>+88 0123 456 789</p>
                                <p>+88 987 654 3210</p>
                            </div>
                        </li>
                        <li class="d-flex mb-30">
                            <i class="round-icon mr-3 ti-email"></i>
                            <div class="align-self-center font-primary">
                                <p>info@biztrox.com</p>
                                <p>biztrox@email.com</p>
                            </div>
                        </li>
                        <li class="d-flex mb-30">
                            <i class="round-icon mr-3 ti-map-alt"></i>
                            <div class="align-self-center font-primary">
                                <p>24/B Garden Street.</p>
                                <p>Northambia, Weals, UK</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- form -->
                <div class="col-lg-6 col-md-7">
                    <div class="p-5 rounded box-shadow">
                        <form action="#" class="row">
                            <div class="col-12">
                                <h3>Contact Form</h3>
                            </div>
                            <div class="col-lg-6">
                                <input type="text" name="name" id="name" class="form-control" placeholder="Name" required>
                            </div>
                            <div class="col-lg-6">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email Address" required>
                            </div>
                            <div class="col-12">
                                <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject" required>
                            </div>
                            <div class="col-12">
                                <textarea class="form-control p-2" name="message" id="message" placeholder="Your Message Here..." required style="height: 150px;"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit" value="send">Submit Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- mission -->
    <section class="mission section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h5 class="section-title-sm">Our Goal</h5>
                    <h2 class="section-title section-title-border-half">Company Mission</h2>
                    <div class="row">
                        <div class="col-lg-6">
                            <p class="mb-40">Lorem ipsum dolor sit amet consectetur adipisicing elit sed
                                eiusmod tempor didunt laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- accordion -->
                    <div id="accordion" class="mb-md-50">
                        <div class="card border-0 mb-4">
                            <div class="card-header bg-gray border p-0">
                                <a class="card-link h5 d-block text-dark mb-0 py-10 px-4" data-toggle="collapse" href="{{asset('/')}}front-assets/#collapseOne">
                                    <i class="ti-minus text-primary mr-2"></i> Our Company Mission
                                </a>
                            </div>
                            <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                <div class="card-body font-secondary text-color pl-0 pb-0">
                                    Duis aute irure dolor in reprehenderit voluptate velit esse cillum
                                    dolore fugiat nulla pariatur.Excepteur sint ocaecat cupidatat
                                    non proident sunt culpa qui officia deserunt mollit anim id est
                                    laborum.
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 mb-4">
                            <div class="card-header bg-gray border p-0">
                                <a class="collapsed card-link h5 d-block text-dark mb-0 py-10 px-4" data-toggle="collapse"
                                   href="{{asset('/')}}front-assets/#collapseTwo">
                                    <i class="ti-plus text-primary mr-2"></i> Our Company Mission
                                </a>
                            </div>
                            <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                <div class="card-body font-secondary text-color pl-0 pb-0">
                                    Duis aute irure dolor in reprehenderit voluptate velit esse cillum
                                    dolore fugiat nulla pariatur.Excepteur sint ocaecat cupidatat
                                    non proident sunt culpa qui officia deserunt mollit anim id est
                                    laborum.
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 mb-4">
                            <div class="card-header bg-gray border p-0">
                                <a class="collapsed card-link h5 d-block text-dark mb-0 py-10 px-4" data-toggle="collapse"
                                   href="{{asset('/')}}front-assets/#collapseThree">
                                    <i class="ti-plus text-primary mr-2"></i> Our Company Mission
                                </a>
                            </div>
                            <div id="collapseThree" class="collapse" data-parent="#accordion">
                                <div class="card-body font-secondary text-color pl-0 pb-0">
                                    Duis aute irure dolor in reprehenderit voluptate velit esse cillum
                                    dolore fugiat nulla pariatur.Excepteur sint ocaecat cupidatat
                                    non proident sunt culpa qui officia deserunt mollit anim id est
                                    laborum.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- chart -->
                <div class="col-lg-6">
                    <img src="{{asset('/')}}front-assets/images/chart.png" alt="chart" class="img-fluid w-100">
                </div>
            </div>
        </div>
    </section>
    <!-- /mission -->

    <!-- promo-video -->
    <section class="promo-video overlay section" style="background-image: url({{asset('/')}}front-assets/images/background/promo-video.jpg);" >
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-white mb-20 font-weight-normal">We Are Alawys <br> Comited</h1>
                    <div class="d-flex">
                        <a class="popup-youtube play-icon mr-4" href="{{asset('/')}}front-assets/https://www.youtube.com/watch?v=6ZfuNTqbHE8">
                            <i class="ti-control-play"></i>
                        </a>
                        <p class="text-white align-self-center h4">Lorem ipsum dolor <br> sit amet con.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /promo-video -->

    <!-- team -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <h5 class="section-title-sm">Our Team</h5>
                    <h2 class="section-title section-title-border">Experts Team</h2>
                </div>
                <!-- team member -->
                @foreach($users as $user)
                <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <div class="card text-center p-3">
                        <img class="card-img-top rounded" src="{{asset($user->image)}}" alt="team member image" style="height: 300px; width: 300px;">
                        <div class="card-body pb-0">
                            <a href="{{route('team.details', ['id' => $user->id])}}" class="card-title h4 font-primary text-dark">{{$user->name}}</a>
                            <h6 class="text-color">{{$user->access_label == 1 ? 'Accounts' : ''}}</h6>
                            <p class="card-text border-bottom pb-3">{{$user->userDetail->description}}</p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="#" class="text-color d-inline-block py-1 px-2 px-xl-3">
                                        <i class="ti-facebook"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="text-color d-inline-block py-1 px-2 px-xl-3">
                                        <i class="ti-twitter-alt"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="text-color d-inline-block py-1 px-2 px-xl-3">
                                        <i class="ti-linkedin"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="text-color d-inline-block py-1 px-2 px-xl-3">
                                        <i class="ti-skype"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- team member -->
                @endforeach

            </div>
        </div>
    </section>
    <!-- /team -->

    <section class="cta overlay-primary py-50 text-center text-lg-left" style="background-image: url({{asset('/')}}front-assets/images/background/cta.jpg);" >
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <h3 class="text-white">Biztrox give the smart solution for your business</h3>
                </div>
                <div class="col-lg-6 text-lg-right align-self-center">
                    <a href="{{asset('/')}}front-assets/contact.html" class="btn btn-light">GET AN QUOTE</a>
                </div>
            </div>
        </div>
    </section>

    <!-- blog -->
    <section class="section bg-gray">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <h5 class="section-title-sm">Latest News</h5>
                    <h2 class="section-title section-title-border-gray">Company News</h2>
                </div>
                <!-- blog-item -->
                @foreach($blogs as $blog)
                <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <div class="card">
                        <div class="card-img-wrapper overlay-rounded-top">
                            <img class="card-img-top" src="{{asset($blog->image)}}" alt="blog-thumbnail" style="height: 300px; width: 300px;">
                        </div>
                        <div class="card-body p-0">
                            <div class="d-flex">
                                <div class="py-3 px-4 border-right text-center">
                                    <h3 class="text-primary mb-0">{{\Illuminate\Support\Carbon::parse($blog->created_at)->format('d')}}</h3>
                                    <p class="mb-0">{{\Illuminate\Support\Carbon::parse($blog->created_at)->format('M')}}</p>
                                </div>
                                <div class="p-3">
                                    <a href="{{route('blog.details', ['id' => $blog->id])}}" class="h4 font-primary text-dark">{{$blog->title}}</a>
                                    @php
                                    $author = \App\Models\User::find($blog->author_id);
                                    @endphp
                                    <p>Posted by {{$author->name}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- blog-item -->
                @endforeach

            </div>
        </div>
    </section>
    <!-- /blog -->

    <!-- client logo slider -->
    <section class="bg-white py-4">
        <div class="container">
            <div class="client-logo-slider align-self-center">
                <a href="{{asset('/')}}front-assets/#" class="text-center d-block outline-0 py-3 px-2"><img class="d-unset"
                                                                                                            src="{{asset('/')}}front-assets/images/client-logo/client-logo-1.png" alt="client-logo"></a>
                <a href="{{asset('/')}}front-assets/#" class="text-center d-block outline-0 py-3 px-2"><img class="d-unset"
                                                                                                            src="{{asset('/')}}front-assets/images/client-logo/client-logo-2.png" alt="client-logo"></a>
                <a href="{{asset('/')}}front-assets/#" class="text-center d-block outline-0 py-3 px-2"><img class="d-unset"
                                                                                                            src="{{asset('/')}}front-assets/images/client-logo/client-logo-3.png" alt="client-logo"></a>
                <a href="{{asset('/')}}front-assets/#" class="text-center d-block outline-0 py-3 px-2"><img class="d-unset"
                                                                                                            src="{{asset('/')}}front-assets/images/client-logo/client-logo-4.png" alt="client-logo"></a>
                <a href="{{asset('/')}}front-assets/#" class="text-center d-block outline-0 py-3 px-2"><img class="d-unset"
                                                                                                            src="{{asset('/')}}front-assets/images/client-logo/client-logo-5.png" alt="client-logo"></a>
                <a href="{{asset('/')}}front-assets/#" class="text-center d-block outline-0 py-3 px-2"><img class="d-unset"
                                                                                                            src="{{asset('/')}}front-assets/images/client-logo/client-logo-1.png" alt="client-logo"></a>
                <a href="{{asset('/')}}front-assets/#" class="text-center d-block outline-0 py-3 px-2"><img class="d-unset"
                                                                                                            src="{{asset('/')}}front-assets/images/client-logo/client-logo-2.png" alt="client-logo"></a>
                <a href="{{asset('/')}}front-assets/#" class="text-center d-block outline-0 py-3 px-2"><img class="d-unset"
                                                                                                            src="{{asset('/')}}front-assets/images/client-logo/client-logo-3.png" alt="client-logo"></a>
                <a href="{{asset('/')}}front-assets/#" class="text-center d-block outline-0 py-3 px-2"><img class="d-unset"
                                                                                                            src="{{asset('/')}}front-assets/images/client-logo/client-logo-4.png" alt="client-logo"></a>
                <a href="{{asset('/')}}front-assets/#" class="text-center d-block outline-0 py-3 px-2"><img class="d-unset"
                                                                                                            src="{{asset('/')}}front-assets/images/client-logo/client-logo-5.png" alt="client-logo"></a>
            </div>
        </div>
    </section>
    <!-- /client logo slider -->


@endsection
