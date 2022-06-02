<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = "categories";

    protected $fillable = [
        'name',
        'hidden',
    ];


    // function



    // ------------ reverse

    public function subcategories()
    {
        return $this->hasMany(Subcategory::class);
    }


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
