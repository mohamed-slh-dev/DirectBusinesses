<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserBlogTag extends Model
{
    use HasFactory;

    protected $table = "user_blog_tags";

    protected $fillable = [
        'blog_id',
        'category_id',
        'subcategory_id',
    ];



    // functions
    public function blog()
    {
        return $this->belongsTo(UserBlog::class);
    }


    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }



    // ------------ reverse

}
