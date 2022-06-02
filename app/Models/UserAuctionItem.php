<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAuctionItem extends Model
{
    use HasFactory;

    protected $table = "user_auction_items";

    protected $fillable = [
        'auction_id',
        'category_id',
        'subcategory_id',
        'type_id',
        'measuringunit_id',
        'name',
        'quantity',
        'desc',
        'price',
    ];



    // functions
    public function auction()
    {
        return $this->belongsTo(UserAuction::class);
    }


    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }


    public function type()
    {
        return $this->belongsTo(Type::class);
    }


    public function measuringunit()
    {
        return $this->belongsTo(Measuringunit::class);
    }




    // ------------ reverse



    public function bid_items()
    {
        return $this->hasMany(UserAuctionBidItem::class, 'item_id');
    }

}
