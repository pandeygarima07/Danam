<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;
use App\Models\UserContributionItem;

class SeekerInterest extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'seeker_interests';

    protected $fillable = [
        'user_id',
        'user_contribution_item_id',
        'is_interested',
        'is_favourite',
        'report_issue',
        'created_by',
        'updated_by',
        'deleted_by'
    ];

    /**
     * Relationship with the User model
     * Each SeekerInterest record belongs to a single user
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Relationship with the UserContributionItem model
     * Each SeekerInterest record belongs to a specific contribution item
     */
    public function contributionItem()
    {
        return $this->belongsTo(UserContributionItem::class, 'user_contribution_item_id');
    }
}
