<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;
use App\Models\SettingManagement;

class UserSetting extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'user_settings';

    protected $fillable = [
        'setting_id',
        'user_id',
        'status',
        'created_by',
        'updated_by',
        'deleted_by'
    ];

    /**
     * Relationship with the SettingManagement model.
     * Each user setting belongs to a single setting management
     */
    public function setting()
    {
        return $this->belongsTo(SettingManagement::class, 'setting_id');
    }

    /**
     * Relationship with the User model.
     * Each user setting belongs to a single user
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
