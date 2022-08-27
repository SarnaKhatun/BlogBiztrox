<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SliderCategory extends Model
{
    use HasFactory;

    protected $fillable = [
      'category_name',
      'status',
    ];

    public static function saveSliderCategoryData($request, $id = null)
    {
        SliderCategory::updateOrCreate(['id' => $id],[
            'category_name' => $request->category_name,
            'status' => $request->status,
        ]);
    }
}
