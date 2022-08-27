@extends('front.master')
@section('title')
    Project All
@endsection
@section('body')
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
                                <a class="popup-image" data-effect="mfp-zoom-in" href="{{route('show.project')}}">
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
@endsection
