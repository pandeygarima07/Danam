<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;
use App\Models\Profession;
use App\Models\Reference;

class SeekerInformation extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'seeker_information';

    protected $fillable = [
        'user_id',
        'title',
        'gender',
        'birth_date',
        'profession_id',
        'location',
        'reason_to_seek',
        'know_from',
        'created_by',
        'updated_by',
        'deleted_by'
    ];

    /**
     * Relationship with the User model
     * Each SeekerInformation record belongs to a single user
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Relationship with the Profession model
     * Each SeekerInformation record may have a profession (nullable)
     */
    public function profession()
    {
        return $this->belongsTo(Profession::class, 'profession_id');
    }

    /**
     * Relationship with the Reference model
     * Each SeekerInformation record may have a reference for 'know from' (nullable)
     */
    public function reference()
    {
        return $this->belongsTo(Reference::class, 'know_from');
    }
}
