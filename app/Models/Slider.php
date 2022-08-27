<?php

namespace App\Models;

use App\Helper\Helper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'title',
        'description',
        'image',
        'status',
    ];

    public static function saveSliderData($request, $id = null)
    {
        Slider::updateOrCreate (['id' => $id], [
            'category_id' => $request->category_id,
            'title' => $request->title,
            'description' => $request->description,
            'image' => Helper::imageUpload($request->file('image'), 'slider-assets/img/', isset($id) ? Slider::find($id)->image : null),
            'status' => $request->status,
        ]);
    }

    public function category()
    {
        return $this->belongsTo(SliderCategory::class);
    }
}
