<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\SeekerInformation;

class Reference extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'references';

    protected $fillable = [
        'title',
        'created_by',
        'updated_by',
        'deleted_by'
    ];

    /**
     * Relationship with the SeekerInformation model
     * One reference can belong to many seekers
     */
    public function seekers()
    {
        return $this->hasMany(SeekerInformation::class, 'know_from');
    }

}
