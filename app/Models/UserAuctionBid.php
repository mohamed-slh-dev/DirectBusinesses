<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAuctionBid extends Model
{
    use HasFactory;

    protected $table = "user_auction_bids";

    protected $fillable = [
        'user_id',
        'auction_id',
    ];


    // functions
    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function auction()
    {
        return $this->belongsTo(UserAuction::class);
    }

    // -----------------

    public function items()
    {
        return $this->hasMany(UserAuctionBidItem::class, 'auction_bid_id');
    }
    
}
