<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRequirement extends Model
{
    use HasFactory;

    protected $table = "user_requirements";

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

        return $this->hasMany(UserRequirementItem::class, 'requirement_id');
    }

    public function quotations()
    {

        return $this->hasMany(UserRequirementQuotation::class, 'requirement_id');
    }

}
