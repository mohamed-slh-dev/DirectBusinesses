<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCertificate extends Model
{
    use HasFactory;

    protected $table = "user_certificates";

    protected $fillable = [
        'user_id',
        'title',
        'date',
        'desc',
        'img',
    ];


    // functions
    public function user()
    {
        return $this->belongsTo(User::class);
    }




    // ------------ reverse
}
