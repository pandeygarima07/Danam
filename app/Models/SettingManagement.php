<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Role;
use App\Models\UserSetting;

class SettingManagement extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'setting_management';

    protected $fillable = [
        'name',
        'role_id',
        'description',
        'created_by',
        'updated_by',
        'deleted_by'
    ];

    /**
     * Relationship with the Role model
     * Each SettingManagement record is linked to a single role
     */
    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }

    /**
     * Relationship with the UserSetting model
     * One SettingManagement can belong to many user settings
     */
    public function userSettings()
    {
        return $this->hasMany(UserSetting::class, 'setting_id');
    }
}
