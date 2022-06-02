<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRequirementQuotationClarification extends Model
{
    use HasFactory;


    protected $table = "user_requirement_quotation_clarifications";

    protected $fillable = [
        'user_id',
        'req_quo_id',
        'message',

    ];


    // functions
    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function quotation()
    {
        return $this->belongsTo(UserRequirementQuotation::class);
    }

    

}
