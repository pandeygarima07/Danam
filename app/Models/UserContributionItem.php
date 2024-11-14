<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\SeekerInterest;
use App\Models\UserContributionItemSeeker;
use App\Models\UserContributionItemImage;

class UserContributionItem extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'user_contribution_items';

    protected $fillable = [
        'seeker_id',
        'category_id',
        'title',
        'description',
        'location',
        'status',
        'is_contributed',
        'issue_report',
        'uploaded_at',
        'created_by',
        'updated_by',
        'deleted_by'
    ];

    /**
     * Relationship with the SeekerInterest model
     * One item can belong to many seeker interests
     */
    public function seekerInterests()
    {
        return $this->hasMany(SeekerInterest::class, 'user_contribution_item_id');
    }

    /**
     * Relationship with the UserContributionItemSeeker model.
     * One item can belong to many item seekers
     */
    public function itemSeekers()
    {
        return $this->hasMany(UserContributionItemSeeker::class, 'user_contribution_item_id');
    }

    /**
     * Relationship with the UserContributionItemImage model.
     */
    public function images()
    {
        return $this->hasMany(UserContributionItemImage::class, 'user_contribution_item_id');
    }
}
