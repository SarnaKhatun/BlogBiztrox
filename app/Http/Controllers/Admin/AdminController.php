<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Project;
use App\Models\ProjectCategory;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\Slider;
use App\Models\SliderCategory;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function userStatus($id)
    {
        $user = User::find($id);
        if ($user->status == 1)
        {
            $user->status = 0;
        }
        elseif ($user->status == 0)
        {
            $user->status = 1;
        }
        $user->save();
        return back()->with('message', 'User status changed successfully');
    }


    protected static $sliderCategory;

    public function sliderCategoryStatus ($id)
    {
        self::$sliderCategory = SliderCategory::find($id);
        if (self::$sliderCategory->status == 1)
        {
            self::$sliderCategory->status = 0;
        }
        elseif (self::$sliderCategory->status == 0)
        {
            self::$sliderCategory->status = 1;
        }
        self::$sliderCategory->save();
        return back()->with('message', 'Category status changed successfully');
    }



    protected static $blogCategory;

    public function blogCategoryStatus ($id)
    {
        self::$blogCategory = BlogCategory::find($id);
        if (self::$blogCategory->status == 1)
        {
            self::$blogCategory->status = 0;
        }
        elseif (self::$blogCategory->status == 0)
        {
            self::$blogCategory->status = 1;
        }
        self::$blogCategory->save();
        return back()->with('message', 'Category status changed successfully');
    }


     protected static $serviceCategory;

        public function serviceCategoryStatus ($id)
        {
            self::$serviceCategory = ServiceCategory::find($id);
            if (self::$serviceCategory->status == 1)
            {
                self::$serviceCategory->status = 0;
            }
            elseif (self::$serviceCategory->status == 0)
            {
                self::$serviceCategory->status = 1;
            }
            self::$serviceCategory->save();
            return back()->with('message', 'Category status changed successfully');
        }


        protected static $projectCategory;

        public function projectCategoryStatus ($id)
        {
            self::$projectCategory = ProjectCategory::find($id);
            if (self::$projectCategory->status == 1)
            {
                self::$projectCategory->status = 0;
            }
            elseif (self::$projectCategory->status == 0)
            {
                self::$projectCategory->status = 1;
            }
            self::$projectCategory->save();
            return back()->with('message', 'Category status changed successfully');
        }

    protected static $slider;
    public function sliderStatus ($id)
    {
        self::$slider = Slider::find($id);
        if (self::$slider->status == 1)
        {
            self::$slider->status = 0;
        }
        elseif (self::$slider->status == 0)
        {
            self::$slider->status = 1;
        }
        self::$slider->save();
        return back()->with('message', 'Slider status changed successfully');
    }

    protected static $blog;
    public function blogStatus ($id)
    {
        self::$blog = Blog::find($id);
        if (self::$blog->status == 1)
        {
            self::$blog->status = 0;
        }
        elseif (self::$blog->status == 0)
        {
            self::$blog->status = 1;
        }
        self::$blog->save();
        return back()->with('message', 'Blog status changed successfully');
    }

    protected static $service;
    public function serviceStatus ($id)
    {
        self::$service = Service::find($id);
        if (self::$service->status == 1)
        {
            self::$service->status = 0;
        }
        elseif (self::$service->status == 0)
        {
            self::$service->status = 1;
        }
        self::$service->save();
        return back()->with('message', 'Service status changed successfully');
    }

    protected static $project;
    public function projectStatus ($id)
    {
        self::$project = Project::find($id);
        if (self::$project->status == 1)
        {
            self::$project->status = 0;
        }
        elseif (self::$project->status == 0)
        {
            self::$project->status = 1;
        }
        self::$project->save();
        return back()->with('message', 'Project status changed successfully');
    }
}
