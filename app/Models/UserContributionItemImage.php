<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\UserContributionItem;

class UserContributionItemImage extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'user_contribution_item_images';

    protected $fillable = [
        'user_contribution_item_id',
        'image',
        'thumbnail',
        'created_by',
        'updated_by',
        'deleted_by'
    ];

    /**
     * Relationship with the UserContributionItem model.
     */
    public function userContributionItem()
    {
        return $this->belongsTo(UserContributionItem::class, 'user_contribution_item_id');
    }
}
