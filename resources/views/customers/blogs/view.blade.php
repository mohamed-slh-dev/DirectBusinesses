@extends('layouts.customer')



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
                    <a href="{{ route('customer.blogs.browse') }}" class="home-button-custom">
                        <i class="fa fa-arrow-circle-left"></i>Blogs</a>
                </div>
                <ol class="tg-breadcrumb">
                    <li><a href="#">Blogs</a></li>
                    <!-- <li><a href="#">Listings</a></li> -->
                    <li class="tg-active">Single Blog</li>
                </ol>
            </div>
        </div>
    </div>
</div>
{{-- end banner --}}







{{-- main --}}
<main id="tg-main" class="tg-main tg-paddingzero tg-haslayout" style="background-color: black;">



    {{-- layout --}}
    <div class="tg-main-section tg-haslayout pr-layout pt-0">

        <!-- upper container -->
        <div class="container-fluid">

            <!-- upper section -->
            <div class="row blog-hero-row" style="margin-top: 0px; background-image: url({{ asset('assets/uploads/banner-imgs/default-header.png') }}); background-size:cover; background-position:center">

                <div class="col-12 blog-hero-overlay">

                    <div class="blog-hero-box">
                        <span class="text-darkmaroon-f" style="font-size: 13px">Titled</span>
                        <h4>
                            {{ $blog->title }}
                        </h4>

                        <p class="mb-0">
                            {{ $blog->desc }}
                        </p>
                    </div>
                </div>


            </div>
            <!-- end row -->
        </div>
        <!-- end upper container -->









        <div class="container-fluid px-5 singleblog-middle">

            <!-- middle section -->
            <div class="row align-items-top" style="margin-top: 150px;">

                <div class="col-12 col-md-12 col-lg-8 mb-5">

                    {{-- sections --}}
                    @foreach ($blog->sections as $section)
                        
                    
                    <!-- heading 1 -->
                    <h4>
                        <i class="fa fa-circle"></i>{{ $section->title }}
                    </h4>

                    <p class="mb-5">
                        {{ $section->content }}
                    </p>


                    @endforeach
                    {{-- end foreach --}}



                </div>



                <!-- first blog -->
                <div class="col-4 col-lg-3 offset-lg-1 mt-5">

                    {{-- if there's some --}}
                    @if ($relatedBlogs->count() > 1)

                    <h4 style="border-color: grey !important;">Related Blogs</h4>


                    {{-- related blogs --}}
                    @foreach ($relatedBlogs as $relatedBlog)
                        

                    @if ($relatedBlog->id != $blog->id)
                        
                        <a href="{{ route('customer.blogs.view', [$relatedBlog->id]) }}" class="blog-compact-item-container">
                            <div class="blog-compact-item blog-custom-card mb-5" style="border-radius: 5px;">
                                <img src="{{ asset('assets/uploads/blogs/'.$relatedBlog->img) }}" alt=""
                                    style="border-top-left-radius: 5px; border-top-right-radius: 5px; height: 160px; width:100%; object-fit:contain;">
                        
                                <div class="blog-compact-item-content custom-blog-content">
                                    <ul class="blog-post-tags">
                                        <li class="custom-blog-date font-size-14">{{ date('d M Y - h:i A', strtotime($blog->created_at)) }}</li>
                                    </ul>
                                    <h3 class="custom-blog-title font-size-15">{{ $relatedBlog->desc }}</h3>
                        
                        
                                </div>
                            </div>
                        </a>

                        
                    @endif
                    

                    @endforeach
                    {{-- end foreach --}}


                    @endif
                    {{-- end there's some --}}

                </div>
                <!-- first card -->




            </div>
            <!-- end row -->
        </div>
        <!-- end middle container -->


    </div>
    {{-- end layout --}}

</main>
{{-- end main --}}











{{-- modals --}}

{{-- end modals --}}





@endsection
{{-- end section --}}