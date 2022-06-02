<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRating extends Model
{
    use HasFactory;

    protected $table = "user_ratings";

    protected $fillable = [
        'title',
        'reviewer_id',
        'rating', //1 - 5
        'reviewed_id',

        'relationship',
        'comment',
        'date',
        'reviewer_type', //customer - vendor
        
    ];



    // functions
    public function reviewer()
    {
        return $this->belongsTo(User::class, 'reviewer_id');
    }


    // functions
    public function reviewed()
    {
        return $this->belongsTo(User::class, 'reviewed_id');
    }




    // ------------ reverse
}
