<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRequirementQuotationItem extends Model
{
    use HasFactory;

    protected $table = "user_requirement_quotation_items";

    protected $fillable = [
        'user_id',
        'req_quo_id',
        'item_id',
        'quantity',
        'price',
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


    public function requirement_item()
    {
        return $this->belongsTo(UserRequirementItem::class, 'item_id');
    }
    
}
