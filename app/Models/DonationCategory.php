<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DonationCategory extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'donation_categories';

    protected $fillable = [
        'name',
        'parent_category',
        'icon',
        'status',
        'created_by',
        'updated_by',
        'deleted_by'
    ];
}
