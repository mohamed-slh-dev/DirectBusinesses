<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;

    protected $table = "subcategories";

    protected $fillable = [
        'name',
        'hidden',
        'category_id'
    ];




    // function


    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    // ------------ reverse

    public function deal_items()
    {
        return $this->hasMany(UserDealItem::class);
    }

    public function blog_tags()
    {
        return $this->hasMany(UserBlogTag::class);
    }

    public function requirement_items()
    {
        return $this->hasMany(UserRequirementItem::class);
    }

    public function auction_items()
    {
        return $this->hasMany(UserAuctionItem::class);
    }

}
