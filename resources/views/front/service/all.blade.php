@extends('front.master')
@section('title')
    Service  All
@endsection
@section('body')
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

@endsection
