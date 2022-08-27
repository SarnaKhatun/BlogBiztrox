<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Project;
use App\Models\ProjectCategory;
use App\Models\Service;
use App\Models\Slider;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('front.home.home', [
            'sliders' => Slider::latest()->take(3)->get(),
            'services' => Service::latest()->take(3)->get(),
            'blogs' => Blog::latest()->take(3)->get(),
            'projects' => Project::latest()->take(3)->get(),
            'users' => User::where('access_label' , 1)->take(3)->get(),
        ]);
    }

    public function serviceAll ()
    {
        return view('front.service.all', [
            'services' => Service::latest()->get(),
        ]);
    }


    public function serviceDetail ($id)
    {
        return view('front.service.details', [
            'service' => Service::find($id),
            'services' => Service::latest()->get(),
        ]);
    }

    public function blogAll ()
    {
        return view('front.blog.all', [
            'blogs' => Blog::latest()->get(),
        ]);
    }

    public function blogDetail ($id)
    {
        return view('front.blog.details', [
            'blog' => Blog::find($id),
            'blogs' => Blog::latest()->get(),
        ]);
    }
    public function projectAll ()
    {
        return view('front.project.all', [
            'projects' => Project::latest()->get(),
        ]);
    }

    public function projectDetail ($id)
    {
        return view('front.project.details', [
            'project' => Project::find($id),
            'projects' => Project::latest()->get(),
        ]);
    }

    public function teamAll ()
    {
        return view('front.team.all', [
            'users' => User::where('access_label', 1)->get(),
        ]);
    }

    public function teamDetail ($id)
    {
        return view('front.team.details', [
            'user' => User::find($id),
            'users' => User::latest()->get(),
            'usersS' => User::where('access_label', 2)->get(),

        ]);
    }
}
