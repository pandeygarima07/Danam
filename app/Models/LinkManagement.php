<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LinkManagement extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'link_management';

    protected $fillable = [
        'name',
        'link',
        'category',
        'status',
        'created_by',
        'updated_by',
        'deleted_by'
    ];
}
