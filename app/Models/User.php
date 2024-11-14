<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Role;
use App\Models\SeekerInterest;
use App\Models\SeekerInformation;
use App\Models\UserSetting;
use App\Models\UserContributionItemSeeker;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'profile_picture',
        'phone',
        'password',
        'role_id',
        'created_by',
        'updated_by',
        'deleted_by'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    /**
     * Relationship with the Role model
     * Each user belongs to a single role
     */
    public function role()
    {
        return $this->belongsTo(Role::class, 'id');
    }

    /**
     * Relationship with the SeekerInterest model
     * One user can belong to many seeker interests
     */
    public function seekerInterests()
    {
        return $this->hasMany(SeekerInterest::class, 'user_id');
    }

    /**
     * Relationship with the SeekerInterest model
     * One user belongs to single seeker information
     */
    public function seekerInformation()
    {
        return $this->hasOne(SeekerInformation::class, 'user_id');
    }

    /**
     * Relationship with the UserSetting model.
     * One user can belong to many user settings
     */
    public function userSettings()
    {
        return $this->hasMany(UserSetting::class, 'user_id');
    }

    /**
     * Relationship with the UserContributionItemSeeker model.
     * One user can belong to many user contribution item seekers
     */
    public function contributionItemSeekers()
    {
        return $this->hasMany(UserContributionItemSeeker::class, 'user_id');
    }
}
