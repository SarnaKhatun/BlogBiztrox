<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use HasFactory;

    protected $fillable = [
       'category_name',
       'status',
    ];

    public static function blogCategoryData($request, $id = null)
    {
        BlogCategory::updateOrCreate(['id' => $id], [
            'category_name' => $request->category_name,
            'status' => $request->status,
        ]);
    }
}
