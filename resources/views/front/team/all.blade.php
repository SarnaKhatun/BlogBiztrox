@extends('front.master')
@section('title')
    Project All
@endsection
@section('body')
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
@endsection
