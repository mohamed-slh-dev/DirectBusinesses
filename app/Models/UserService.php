<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserService extends Model
{
    use HasFactory;

    protected $table = "user_services";

    protected $fillable = [
        'user_id',
        'service',
        'desc',
    ];


    // functions
    public function user()
    {
        return $this->belongsTo(User::class);
    }




    // ------------ reverse
}
