<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAuction extends Model
{
    use HasFactory;

    protected $table = "user_auctions";

    protected $fillable = [
        'user_id',
        'title',
        'desc',
        'attachments',
        'serial_number',
        'status',

    ];


    // functions
    public function user()
    {
        return $this->belongsTo(User::class);
    }



    // ------------ reverse

    public function items() {

        return $this->hasMany(UserAuctionItem::class, 'auction_id');

    }


    public function bids() {
        
        return $this->hasMany(UserAuctionBid::class, 'auction_id');

    }

}
