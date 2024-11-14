<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profession extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'professions';

    protected $fillable = [
        'profession_name',
        'created_by',
        'updated_by',
        'deleted_by'
    ];
}
