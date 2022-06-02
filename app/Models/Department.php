<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $table = "departments";

    protected $fillable = [
        'name',
    ];


    // functions



    // ------------ reverse

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
