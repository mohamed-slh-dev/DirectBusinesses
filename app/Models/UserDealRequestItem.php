<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDealRequestItem extends Model
{
    use HasFactory;


    protected $table = "user_deal_request_items";

    protected $fillable = [
        'user_id',
        'deal_request_id',
        'item_id',
        'quantity',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function request()
    {
        return $this->belongsTo(UserDealRequest::class);
    }


    public function deal_item()
    {
        return $this->belongsTo(UserDealItem::class,'item_id');
    }

}
