<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserBlogSection extends Model
{
    use HasFactory;

    protected $table = "user_blog_sections";

    protected $fillable = [
        'blog_id',
        'title',
        'content',

    ];



    // functions
    public function blog()
    {
        return $this->belongsTo(UserBlog::class);
    }



    // ------------ reverse

}
