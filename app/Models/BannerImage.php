<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BannerImage extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'banner_images';

    protected $fillable = [
        'name',
        'banner',
        'image',
        'description',
        'cms_id',
        'created_by',
        'updated_by',
        'deleted_by'
    ];
}
