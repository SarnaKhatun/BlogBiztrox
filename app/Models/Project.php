<?php

namespace App\Models;

use App\Helper\Helper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'title',
        'author_id',
        'short_description',
        'long_description',
        'image',
        'expertise',
        'status',
    ];


    public static function saveProjectData($request, $id = null)
    {
        Project::updateOrCreate(['id' => $id], [
            'category_id' => $request->category_id,
            'title' => $request->title,
            'author_id' => Auth()->id(),
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'image' => Helper::imageUpload($request->file('image'), 'project-assets/img/', isset($id) ? Project::where('id', $id)->first()->image : null),
            'expertise' => $request->expertise,
            'status' => $request->status,
        ]);
    }


    public function category()
    {
        return $this->belongsTo(ProjectCategory::class);
    }

}
