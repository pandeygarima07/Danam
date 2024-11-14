<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;
use App\Models\SettingManagement;

class Role extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'roles';

    protected $fillable = [
        'name',
        'status'
    ];

    /**
     * Relationship with the User model
     * One role can belong to many users
     */
    public function users()
    {
        return $this->hasMany(User::class, 'role_id');
    }

    /**
     * Relationship with the SettingManagement model
     * One role can belong to many setting managements
     */
    public function settings()
    {
        return $this->hasMany(SettingManagement::class, 'role_id');
    }
}
