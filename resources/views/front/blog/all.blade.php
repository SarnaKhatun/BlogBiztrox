@extends('front.master')
@section('title')
    Blog All
@endsection
@section('body')
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
@endsection
