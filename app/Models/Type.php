<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $table = "types";

    protected $fillable = [
        'name',
    ];




    // function



    // ------------ reverse

    public function deal_items()
    {
        return $this->hasMany(UserDealItem::class);
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
