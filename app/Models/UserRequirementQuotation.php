<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRequirementQuotation extends Model
{
    use HasFactory;


    protected $table = "user_requirement_quotations";

    protected $fillable = [
        'user_id',
        'requirement_id',
        'attachments',
        'hide',
        'note',

    ];



    // functions
    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function requirement()
    {
        return $this->belongsTo(UserRequirement::class);
    }


    // ------------- reverse

    public function clarifications()
    {
        return $this->hasMany(UserRequirementQuotationClarification::class, 'req_quo_id');
    }

    public function items()
    {
        return $this->hasMany(UserRequirementQuotationItem::class, 'req_quo_id');
    }



}
