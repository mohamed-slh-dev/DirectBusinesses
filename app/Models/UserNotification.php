<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserNotification extends Model
{
    use HasFactory;


    protected $table = "user_notifications";

    protected $fillable = [
        'receiver_id',
        'user_type',
        'date',
        'time',
        'title',
        'desc',
        'sender_id'
    ];


    // functions
    public function receiver()
    {
        return $this->belongsTo(User::class, 'receiver_id');
    }


    // functions
    public function sender()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }




}
