<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Startup extends Model
{
    use HasFactory;

    protected $table = "startups";

    protected $fillable = [
        'name',
        'company_name',
        'company_location',
        'email',
        'password',
        'industry_id',
        'country_id',
      
    ];

    public function industry()
    {
        return $this->belongsTo(Industry::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }


}
