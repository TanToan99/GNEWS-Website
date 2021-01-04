<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'file_name',
        'uuid',
        'conversions_disk',
        'thumbnail_id',
        'model',
        'collection_name',
        'mime_type',
        'disk',
        'size',
        'manipulations',
        'custom_properties',
        'responsive_images',
        'posted_at',
        'order_column'
    ];

    protected $dates = [
        'posted_at'
    ];
}
