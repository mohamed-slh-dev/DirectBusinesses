<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use App\Models\UserBlog;
use App\Models\UserBlogSection;
use App\Models\UserBlogTag;
use Illuminate\Http\Request;

class CustomerBlogController extends Controller
{



    // blog browse function
    public function browse()
    {

        $blogs = UserBlog::all();

        $categories = Category::all();
        $subcategories = SubCategory::all();

        return view('customers.blogs.browse', compact('blogs', 'categories', 'subcategories'));

    } //end blog browse function






    // ---------------



    // blog filter browse function
    public function filterBlogs(Request $request)
    {


        // get blogs
        $blogs = UserBlog::whereHas('tags', function ($query) use ($request) {
            $query->where('subcategory_id', $request->subcategory);
        })->get();


        // depeneds
        $categories = Category::all();
        $subcategories = SubCategory::all();


        return view('customers.blogs.browse', compact('blogs', 'categories', 'subcategories'));
    } //end blog browse function





    // --------------------------------------------------




    // blog post function
    public function post()
    {

        $categories = Category::all();
        $subcategories = Subcategory::all();

        return view('customers.blogs.post', compact('categories', 'subcategories'));
    } //end blog post function







    // ------------------------------------------------



    // blog create function
    public function create(Request $request)
    {


        // get info
        $title = $request->input('title');
        $desc = $request->input('desc');


        // attachments
        // upload image in 2 steps
        $img = time() . '-' . $request->file('img')->getClientOriginalName();
        $request->file('img')->move(public_path('assets/uploads/blogs'), $img);


        // add to blog table
        $blog = new UserBlog();
        $blog->user_id = session('user_id');
        $blog->title = $title;
        $blog->desc = $desc;
        $blog->img = $img;

        $blog->save();


        // sections
        $sectionTitle = $request->input('section-title');
        $sectionContent = $request->input('section-content');


        // add blog sections
        for ($i = 0; $i < count($sectionTitle); $i++) {

            $blogSection = new UserBlogSection();
            $blogSection->title = $sectionTitle[$i];
            $blogSection->content = $sectionContent[$i];
            $blogSection->blog_id = $blog->id;

            $blogSection->save();
        } //end for loop


        // tags
        $tagCategory = $request->input('section-tag-category');
        $tagSubcategory = $request->input('section-tag-subcategory');


        // add blog sections
        for ($i = 0; $i < count($tagCategory); $i++) {

            $blogTag = new UserBlogTag();
            $blogTag->blog_id = $blog->id;
            $blogTag->category_id = $tagCategory[$i];
            $blogTag->subcategory_id = $tagSubcategory[$i];

            $blogTag->save();
            
        } //end for loop




        // back to browse
        return redirect()->route('customer.blogs.browse');

    } //end blog create function





    // --------------------------------------------------




    // blog view function
    public function view($id)
    {   

        $blog = UserBlog::find($id);

        // blogs from same category
        $subcategory_id = (!empty($blog->tags[0]->subcategory->id) ? $blog->tags[0]->subcategory->id : null);
        
        $relatedBlogs = UserBlog::whereHas('tags', function($query) use($subcategory_id) {
            $query->where('subcategory_id', $subcategory_id);
        })->get();



        return view('customers.blogs.view', compact('blog', 'relatedBlogs'));


    } //end blog view function



} //end controller
