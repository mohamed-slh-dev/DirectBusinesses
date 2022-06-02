<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSocial extends Model
{
    use HasFactory;

    protected $table = "user_socials";

    protected $fillable = [
        'user_id',
        'platform',
        'url',
    ];


    // functions
    public function user()
    {
        return $this->belongsTo(User::class);
    }




    // ------------ reverse

}
