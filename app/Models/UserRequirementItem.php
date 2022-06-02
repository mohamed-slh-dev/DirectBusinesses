<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRequirementItem extends Model
{
    use HasFactory;

    protected $table = "user_requirement_items";

    protected $fillable = [
        'requirement_id',
        'category_id',
        'subcategory_id',
        'type_id',
        'measuringunit_id',
        
        'name',
        'quantity',
        'desc',
        'comment',
        'budget_from',
        'budget_to',
        
    ];


    // functions
    public function requirement()
    {
        return $this->belongsTo(UserRequirement::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }


    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function measuringunit()
    {
        return $this->belongsTo(Measuringunit::class);
    }



    // ------------ reverse



    public function quotation_items()
    {
        return $this->hasMany(UserRequirementQuotationItem::class, 'item_id');
    }

}
