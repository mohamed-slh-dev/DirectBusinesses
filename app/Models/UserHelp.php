<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserHelp extends Model
{
    use HasFactory;

    protected $table = "user_helps";

    protected $fillable = [
        'user_id',
        'name',
        'email',
        'title',
        'message',
    ];


    // functions
    public function user()
    {
        return $this->belongsTo(User::class);
    }




    // ------------ reverse
}
