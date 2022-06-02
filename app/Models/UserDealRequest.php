<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDealRequest extends Model
{
    use HasFactory;

    protected $table = "user_deal_requests";

    protected $fillable = [
        'user_id',
        'deal_id',
        'attachments',
        'note',
    ];




    // functions
    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function deal()
    {
        return $this->belongsTo(UserDeal::class);
    }

    // -----------------

    public function items()
    {
        return $this->hasMany(UserDealRequestItem::class, 'deal_request_id');
    }

}
