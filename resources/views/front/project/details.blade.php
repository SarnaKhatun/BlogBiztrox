@extends('front.master')
@section('title')
  Project Details
@endsection
@section('body')
    <section class="page-title overlay" style="background-image: url({{asset('/')}}front-assets/images/background/page-title.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="text-white font-weight-bold">Finance Consultancy</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{route('/')}}">Home</a>
                        </li>
                        <li>
                            <a href="{{route('show.project')}}">Project All</a>
                        </li>

                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- project single -->
    <section class="section">
        <div class="container">
            <div class="row">
                <aside class="col-lg-4 order-lg-1 order-2">
                    <!-- overview -->
                    <div class="p-4 rounded border mb-50">
                        <h4 class="text-color mb-20">Overview</h4>
                        <ul class="pl-0 mb-20">
                            @php
                            $author = \App\Models\User::find($project->author_id);
                            @endphp
                            <li class="py-3 border-bottom">
                                <span class="d-inline-block" style="width: 140px;">Project Name:</span>{{$project->category->category_name}}</li>
                            <li class="py-3 border-bottom">
                                <span class="d-inline-block" style="width: 140px;">Client:</span> {{$author->name}}</li>
                            <li class="py-3 border-bottom">
                                <span class="d-inline-block" style="width: 140px;">Expertise:</span>{{$project->expertise}}</li>
                            <li class="py-3 border-bottom">
                                <span class="d-inline-block" style="width: 140px;">Date:</span>{{\Illuminate\Support\Carbon::parse($project->created_at)->format('d M, Y')}}</li>
                        </ul>
                        <a href="#" class="btn btn-primary">Watch Live Demo</a>
                    </div>
                    <!-- case study -->
                    <div class="rounded bg-gray border py-3 px-4 mb-50">
                        <i class="d-inline-block mr-1 text-dark ti-files" style="font-size: 20px;"></i>
                        <h4 class="mb-1 d-inline-block">Complete Case Study</h4>
                        <a class="font-secondary text-color d-block ml-4" href="#">Download pdf</a>
                    </div>
                    <!-- Consultation -->
                    <div class="mb-50">
                        <h5 class="mb-20">Request Free Consultation</h5>
                        <form action="#" class="row">
                            <div class="col-12">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
                            </div>
                            <div class="col-12">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email Address"
                                       required>
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                       required>
                            </div>
                            <div class="col-12">
                            <textarea name="question" id="question" class="form-control p-2" placeholder="Your Question Here..."
                                      style="height: 150px;"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit" value="send">Submit Request</button>
                            </div>
                        </form>
                    </div>
                </aside>
                <!-- project content -->
                <div class="col-lg-8 order-lg-2 order-1">
                    <img class="img-fluid w-100 mb-60" src="{{asset($project->image)}}" alt="project image">
                    <h3 class="mb-10">{{$project->title}}. Australia</h3>
                    <p class="mb-40">{!! $project->long_description !!}</p>
                    <!-- nav tabs menu -->
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="challanges-tab" data-toggle="tab" href="#challanges" role="tab"
                               aria-controls="challanges" aria-selected="true">Challanges</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="solution-tab" data-toggle="tab" href="#solution" role="tab"
                               aria-controls="solution" aria-selected="false">Solution</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="results-tab" data-toggle="tab" href="#results" role="tab" aria-controls="results"
                               aria-selected="false">Results</a>
                        </li>
                    </ul>
                    <!-- tab content -->
                    <div class="tab-content" id="myTabContent">
                        <!-- tab 1 -->
                        <div class="tab-pane fade show active" id="challanges" role="tabpanel" aria-labelledby="challanges-tab">
                            <p>{{$project->short_description}}</p>
                            <div class="tab-content-item">
                                <h6>{{$project->title}}</h6>
                                <p>{!! $project->long_description !!}</p>
                            </div>
                        </div>
                        <div class="tab-pane fade show " id="solution" role="tabpanel" aria-labelledby="challanges-tab">
                            <p>{{$project->short_description}}</p>
                            <div class="tab-content-item">
                                <h6>{{$project->title}}</h6>
                                <p>{!! $project->long_description !!}</p>
                            </div>
                        </div>
                        <div class="tab-pane fade show " id="results" role="tabpanel" aria-labelledby="challanges-tab">
                            <p>{{$project->short_description}}</p>
                            <div class="tab-content-item">
                                <h6>{{$project->title}}</h6>
                                <p>{!! $project->long_description !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
