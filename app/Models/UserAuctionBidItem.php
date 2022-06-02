<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAuctionBidItem extends Model
{
    use HasFactory;

    protected $table = "user_auction_bid_items";

    protected $fillable = [
        'user_id',
        'auction_bid_id',
        'item_id',
        'price',
    ];



    // functions
    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function bid()
    {
        return $this->belongsTo(UserAuctionBid::class);
    }


    public function auction_item()
    {
        return $this->belongsTo(UserAuctionItem::class, 'item_id');
    }

}
