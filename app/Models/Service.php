<?php

namespace App\Models;

use App\Helper\Helper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'title',
        'description',
        'image',
        'status',
    ];

    public static function saveServiceData($request, $id = null)
    {
        Service::updateOrCreate (['id' => $id], [
            'category_id' => $request->category_id,
            'title' => $request->title,
            'description' => $request->description,
            'image' => Helper::imageUpload($request->file('image'), 'service-assets/img/', isset($id) ? Service::where('id', $id)->first()->image : null),
            'status' => $request->status,
        ]);
    }

    public function category()
    {
        return $this->belongsTo(ServiceCategory::class);
    }
}
