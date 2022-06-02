<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDeal extends Model
{
    use HasFactory;

    protected $table = "user_deals";

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

    public function items()
    {
        return $this->hasMany(UserDealItem::class, 'deal_id');
    }

    public function requests()
    {
        return $this->hasMany(UserDealRequest::class, 'deal_id');
    }



    
}
