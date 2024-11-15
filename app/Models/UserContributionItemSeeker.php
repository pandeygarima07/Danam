<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\UserContributionItem;
use App\Models\User;

class UserContributionItemSeeker extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'user_contribution_item_seekers';

    protected $fillable = [
        'user_contribution_item_id',
        'user_id',
        'created_by',
        'updated_by',
        'deleted_by'
    ];

    /**
     * Relationship with the UserContributionItem model.
     * Each UserContributionItemSeeker belongs to a single user contribution item
     */
    public function userContributionItem()
    {
        return $this->belongsTo(UserContributionItem::class, 'user_contribution_item_id');
    }

    /**
     * Relationship with the User model.
     * Each UserContributionItemSeeker belongs to a single user
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
