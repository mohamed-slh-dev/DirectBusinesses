<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserBlog extends Model
{
    use HasFactory;

    protected $table = "user_blogs";

    protected $fillable = [
        'user_id',
        'title',
        'desc',
        'img',

    ];



    // functions
    public function user()
    {
        return $this->belongsTo(User::class);
    }



    // ------------ reverse

    public function sections() {

        return $this->hasMany(UserBlogSection::class, 'blog_id');
    }


    public function tags()
    {

        return $this->hasMany(UserBlogTag::class, 'blog_id');
    }

}
