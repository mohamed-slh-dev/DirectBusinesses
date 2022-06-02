<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDealItem extends Model
{
    use HasFactory;

    protected $table = "user_deal_items";

    protected $fillable = [
        'deal_id',
        'category_id',
        'subcategory_id',
        'type_id',
        'measuringunit_id',
        'name',
        'min_quantity',
        'price',
        'desc',
        'date',

    ];




    // functions
    public function deal()
    {
        return $this->belongsTo(UserDeal::class);
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

    

    public function request_items()
    {
        return $this->hasMany(UserDealRequestItem::class, 'item_id');
    }
}
