@extends('layouts.vendor')


{{-- make no margin in banner (only this page) --}}
<style>
    .tg-innerpagebanner {
        margin-bottom: 0px !important;
    }
</style>



{{-- section --}}
@section('content')


{{-- banner --}}
<div class="tg-innerpagebanner">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="tg-pagetitle">
                    <a href="{{ route('vendor.home') }}" class="home-button-custom">
                        <i class="fa fa-arrow-circle-left"></i>Home</a>
                </div>
                <ol class="tg-breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="tg-active">Blogs and Articles</li>
                </ol>
            </div>
        </div>
    </div>
</div>
{{-- end banner --}}







{{-- main --}}
<main id="tg-main" class="tg-main tg-paddingzero tg-haslayout" style="background-color: black;">


    {{-- layouts --}}
    <div class="tg-main-section tg-haslayout pr-layout">
        <div class="container">


            <div class="row" style="margin-top: 0px;">


                <!-- blogs -->
                <div class="tg-companyfeaturebox" style="padding-top:0px;">
                    <div class="tg-companyfeaturetitle pb-0">
                        <div class="row">







                            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">

                                <form action="{{ route('vendor.blogs.filterBlogs') }}" method="post">
                                    @csrf


                                    <div class="tg-sortfilters pb-0">


                                        <div class="tg-sortfilter custom-tg-sortfilter tg-sortby">
                                        
                                            <select class="blogsfilters category-select" name="category" required >
                                        
                                                <option value="">Category</option>
                                        
                                                @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                        
                                            </select>
                                        
                                        </div>
                                        
                                        
                                        {{-- subcategories --}}
                                        <div class="tg-sortfilter custom-tg-sortfilter tg-arrange">
                                            <select class="blogsfilters subcategory-select" name="subcategory" required="">
                                                <option value="">Subcategory</option>
                                        
                                                @foreach ($subcategories as $subcategory)
                                                <option class="d-none category-option category-option-{{ $subcategory->category_id }}" value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                                                @endforeach
                                        
                                            </select>
                                        </div>


                                        <div class="tg-sortfilter custom-tg-sortfilter tg-arrange">
                                            <button class="filterblogs-button align-items-md-stretch">
                                                Filter
                                            </button>
                                        </div>

                                    </div>

                                </form>
                                {{-- end form filter --}}


                            </div>
                            {{-- end col 9 --}}

                            <div class="col-3 text-right">
                                <a class="postblog-button" href="{{ route('vendor.blogs.post') }}"
                                    class="tg-btnaddservices text-offwhite-f"
                                    style="text-decoration: underline; text-decoration-color: #ac5454;">+
                                    Post a Blog</a>
                            </div>


                        </div>
                    </div>






                    <div class="row" style="margin-top: 90px;">


                        {{-- foreach  --}}
                        @foreach ($blogs as $blog)


                        <!-- first blog -->
                        <div class="col-sm-4 mb-5" style="border-radius: 5px; margin-bottom: 40px;">

                            <a href="{{ route('vendor.blogs.view', [$blog->id]) }}"
                                class="blog-compact-item-container">
                                <div class="blog-compact-item blog-custom-card" style="border-radius: 5px;">

                                    {{-- image + tags --}}
                                    <img src="{{ asset('assets/uploads/blogs/'.$blog->img) }}" alt=""
                                        style="border-top-left-radius: 5px; border-top-right-radius: 5px; object-fit:contain; height: 250px; width: 100%;">
                                    <span class="blog-item-tag custom-blog-tag">

                                        @foreach ($blog->tags as $tag)
                                        <span class="mr-2 mb-1"
                                            style="white-space: nowrap !important">{{ $tag->subcategory->name }}</span>
                                        @endforeach

                                    </span>
                                    {{-- end img + tags --}}

                                    <div class="blog-compact-item-content custom-blog-content">
                                        <ul class="blog-post-tags">
                                            <li class="custom-blog-date">
                                                {{ date('d M Y - h:i A', strtotime($blog->created_at)) }} </li>
                                        </ul>

                                        <h3 class="custom-blog-title">{{$blog->title}}</h3>

                                        <p class="custom-blog-parag">
                                            {{$blog->desc}}
                                        </p>
                                    </div>

                                </div>
                            </a>

                        </div>
                        <!-- first card -->


                        @endforeach
                        {{-- end for loop --}}







                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                            <nav class="tg-pagination custom-tg-pagination">
                                <ul>
                                    <li class="tg-prevpage"><a href="#"><i class="fa fa-angle-left"></i></a>
                                    </li>
                                    <li class="tg-active"><a href="#">1</a></li>
                                    {{-- <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li class="tg-active"><a href="#">5</a></li>
                                    <li>...</li>
                                    <li><a href="#">10</a></li> --}}
                                    <li class="tg-nextpage"><a href="#"><i class="fa fa-angle-right"></i></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>




                    </div>
                    <!-- end row -->

                </div>
                <!-- blogs -->


            </div>



        </div>
    </div>
    {{-- end layouts --}}


</main>
{{-- end main --}}











{{-- modals --}}

{{-- end modals --}}





@endsection
{{-- end section --}}