@extends('front.master')
@section('title')
  Team Details
@endsection
@section('body')
    <section class="page-title overlay" style="background-image: url({{asset('/')}}front-assets/images/background/page-title.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="text-white font-weight-bold">Team Single</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{route('/')}}">Home</a>
                        </li>
                        <li>
                            <a href="{{route('show.team')}}">Team All</a>
                        </li>

                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- team single -->
    <section class="section">
        <div class="container">
            <div class="row">
                <!-- sidebar -->
                <aside class="col-lg-4">
                    <!-- team member info -->
                    <div class="bg-gray rounded mb-50">
                        <img class="img-fluid w-100 rounded-top" src="{{asset($user->image)}}" alt="team member">
                        <div class="py-2 px-4 pb-3">
                            <div class="py-3 border-bottom">
                                <p class="d-inline-block font-primary m-0">
                                    <i class="mr-2 ti-notepad"></i>Projects Done</p>
                                <span class="font-weight-bold text-dark float-right">32</span>
                            </div>
                            <div class="py-3 border-bottom">
                                <p class="d-inline-block font-primary m-0">
                                    <i class="mr-2 ti-medall"></i>Success Rate</p>
                                <span class="font-weight-bold text-dark float-right">96%</span>
                            </div>
                            <div class="py-3 border-bottom">
                                <p class="d-inline-block font-primary m-0">
                                    <i class="mr-2 ti-flag-alt"></i>Experience Of</p>
                                <span class="font-weight-bold text-dark float-right">13 Years</span>
                            </div>
                            <div class="py-3">
                                <p class="d-inline-block font-primary m-0">
                                    <i class="mr-2 ti-location-pin"></i>From</p>
                                <span class="font-weight-bold text-dark float-right">San Diago. NY</span>
                            </div>
                        </div>
                    </div>
                    <!-- Brochure -->
                    <div class="rounded border py-3 px-4 mb-50">
                        <i class="d-inline-block mr-1 text-dark ti-files" style="font-size: 20px;"></i>
                        <h4 class="mb-1 d-inline-block">Professional CV</h4>
                        <a class="font-secondary text-color d-block ml-4" href="#">Download pdf</a>
                    </div>
                </aside>
                <!-- /sidebar -->

                <!-- team member details -->
                <div class="col-lg-8">
                    <div>
                        <h2>{{$user->name}}</h2>
                        <h6 class="text-primary mb-30">{{$user->access_label == 1 ? 'Accounts' : ''}}</h6>
                        <p class="mb-40">{{$user->description}}</p>
                        <div class="row">
                            <!-- contact info -->
                            <div class="col-md-6">
                                <h4>Contact Information</h4>
                                <ul class="pl-0 mb-40">
                                    <li class="font-secondary text-color my-3">
                                        <i class="mr-3 ti-mobile"></i>+88 525 325 22
                                    </li>
                                    <li class="font-secondary text-color my-3">
                                        <i class="mr-3 ti-email"></i>philipwilson@biztrox.com</li>
                                    <li class="font-secondary text-color my-3">
                                        <i class="mr-3 ti-location-pin"></i>2/A Southampton, Sandiago, USA.</li>
                                </ul>
                            </div>
                            <!-- social icon -->
                            <div class="col-md-6 mb-4 mb-md-0">
                                <h4 class="mb-20">Follow on Social</h4>
                                <ul class="list-inline">
                                    <li class="list-inline-item mr-2">
                                        <a class="social-icon-lg bg-facebook" href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item mx-2">
                                        <a class="social-icon-lg bg-twitter" href="#">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item mx-2">
                                        <a class="social-icon-lg bg-linkedin" href="#">
                                            <i class="ti-linkedin"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item mx-2">
                                        <a class="social-icon-lg bg-google" href="#">
                                            <i class="ti-google"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <h4>Work History  & Feedback</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                            aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                            dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                            officia deserunt mollit anim id est laborum. Sed ut perspiciatis.</p>
                        <h4>Profile Analytics</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                            et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    </div>
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
                </div>
            </div>
        </div>
    </section>

    <!-- team members -->
    <section class="bg-gray section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="section-title">Meet Other Teammates</h2>
                </div>
                <!-- team member -->
                @foreach($usersS as $users)
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card text-center">
                        <a href="{{route('team.details', ['id' => $users->id])}}">
                            <img class="card-img-top" src="{{asset($users->image)}}" alt="team-member" style="height: 300px; width: 300px;">
                        </a>
                        <div class="card-body card-body-2 pb-0 px-4">
                            <h5 class="card-title">{{$users->name}}</h5>
                            <h6 class="text-color mb-30">{{$users->access_label == 2 ? 'CEO' : ''}}</h6>
                            <ul class="list-inline border-top d-inline-block">
                                <li class="list-inline-item">
                                    <a href="#" class="text-color d-inline-block p-3">
                                        <i class="ti-facebook"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="text-color d-inline-block p-3">
                                        <i class="ti-twitter-alt"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="text-color d-inline-block p-3">
                                        <i class="ti-linkedin"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="text-color d-inline-block p-3">
                                        <i class="ti-google"></i>
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
    <!-- /team single -->
@endsection
