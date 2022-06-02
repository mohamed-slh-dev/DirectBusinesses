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
                    <a href="{{ route('customer.home') }}" class="home-button-custom">
                        <i class="fa fa-arrow-circle-left"></i>Home</a>
                </div>
                <ol class="tg-breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="tg-active">Post Blog</li>
                </ol>
            </div>
        </div>
    </div>
</div>
{{-- end banner --}}










{{-- main --}}
<main id="tg-main" class="tg-main tg-paddingzero tg-haslayout" style="background-color: black;">

    {{-- layout --}}
    <div class="tg-main-section tg-haslayout pr-layout">
        <div class="container">
            <div class="tg-appointmentsetting">

                <form class="tg-formbookappointment" method="post" action="{{ route('customer.blogs.create') }}" enctype="multipart/form-data">
                    @csrf


                    <fieldset class="tg-formstepone tg-current">
                        <div class="tg-appointmenthead">
                            <div class="tg-appointmentheading">
                                <h2 class="custom-pr-subheading">Post Blog</h2>
                            </div>
                        </div>
                    
                    
                    
                        <div class="tg-progressbox">
                            <ul class="tg-formprogressbar formprogressbarwrapper">
                                <li class="tg-active"><span>Basic Info</span></li>
                                <li><span>Content</span></li>
                                <li><span>Tags</span></li>
                            </ul>
                    
                            <div class="col-xs-12 col-lg-12">
                                <div class="form-group">
                                    <input type="text" name="title" class="form-control blog-first-step-inputs" placeholder="Blog Title" id="blog-title">
                                </div>
                            </div>
                    
                    
                            <div class="col-xs-12 col-lg-12">
                                <div class="form-group">
                                    <textarea placeholder="Short Info" name="desc" id="blog-desc" class="blog-first-step-inputs"></textarea>
                                </div>
                            </div>
                    
                    
                            <div class="col-xs-12 col-lg-12">
                                <div class="row align-items-sm-end" style="margin-bottom: 30px;">
                    
                                    <div class="col-xs-12 col-md-6 col-lg-4">
                                        <div class="blog-img-viewer">
                                            <img src="" alt="empty" id="blogcover" style="object-fit: contain; height:250px; width: 100%;">
                                        </div>
                                    </div>
                    
                                    <div class="col-xs-12 mt-sm-3 mt-md-0 col-md-6 col-lg-8 text-left">
                                        <input class="d-none blog-first-step-inputs" type="file" name="img" id="coverimg">
                                        <label for="coverimg" class="coverimglabel">
                                            Add Cover Picture
                                        </label>
                                    </div>
                                </div>
                            </div>
                    
                            <div class="tg-btnarea">
                    
                                <div class="col-xs-12">
                                    <a href="javascript:void(0);" class="tg-btn tg-btnnext not-clickable" id="blog-step-one-button">Next</a>
                                </div>
                    
                    
                            </div>
                        </div>
                    </fieldset>
                    
                    <!-- step two -->
                    <fieldset class="tg-formsteptwo">
                        <div class="tg-appointmenthead">
                    
                            <div class="tg-appointmentheading">
                                <h2 class="custom-pr-subheading">Blog Sections</h2>
                            </div>
                        </div>
                        <div class="tg-progressbox">
                            <ul class="tg-formprogressbar formprogressbarwrapper">
                                <li class="tg-active"><span>Basic Info</span></li>
                                <li><span>Content</span></li>
                                <li><span>Tags</span></li>
                            </ul>
                    
                            <div class="tg-appointmentinfo">
                                <div class="form-group">
                                    <div class="tg-heading">
                                        <h3>Section Name</h3>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="row">
                    
                                    <!-- title -->
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="section-title" class="form-control" placeholder="Section Title"
                                                id="section-title">
                                        </div>
                                    </div>
                    
                    
                                    <!-- content -->
                                    <div class="col-xs-12 col-md-12 col-md-12 col-lg-12">
                                        <textarea placeholder="Content" id="section-content"></textarea>
                                    </div>
                    
                    
                    
                    
                                    <!-- add button -->
                                    <div class="col-xs-12 col-md-12 col-md-12 col-lg-12 mt-4">
                                        <button type="button" class="tg-btn" id="add-blog-section">Add Section</button>
                                    </div>
                    
                                </div>
                            </div>
                            <div class="tg-userdetail">
                                <div class="clearfix"></div>
                                <div class="row">
                    
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mb-5" style="margin-bottom: 30px;">
                    
                                        {{-- blogs section wrapper --}}
                                        <div class="tg-dashboardservices blog-sections-wrapper">
                    
                    
                                        </div>
                                        {{-- end blog sections wrapper --}}
                                    </div>
                    
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="tg-btnarea">
                                            <a class="tg-btn tg-btnprevious" href="javascript:void(0);">Go Back</a>
                                            <a class="tg-btn tg-btnnext not-clickable" id="blog-step-two-button" href="javascript:void(0);">Continue</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    
                    
                    
                    <!-- step 3 - tags -->
                    <fieldset class="tg-formstepthree">
                        <div class="tg-appointmenthead">
                    
                            <div class="tg-appointmentheading">
                                <h3 class="custom-pr-subheading">Website Development</h3>
                            </div>
                        </div>
                        <div class="tg-progressbox">
                            <ul class="tg-formprogressbar formprogressbarwrapper">
                                <li class="tg-active"><span>Basic Info</span></li>
                                <li><span>Content</span></li>
                                <li><span>Tags</span></li>
                            </ul>
                            <div class="form-group">
                                <div class="tg-heading">
                                    <h3>Blog Tags</h3>
                                </div>
                            </div>
                    
                            <div class="clearfix"></div>
                            <div class="row">
                    
                                <!-- category -->
                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <span class="tg-select">
                                            <select id="section-tag-category" class="category-select">
                                                <option value="">Category</option>
                                
                                                @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                
                                            </select>
                                        </span>
                                    </div>
                                </div>
                                
                                {{-- subcategory --}}
                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <span class="tg-select">
                                            <select id="section-tag-subcategory" class="subcategory-select">
                                                <option value="">Subcategory</option>
                                
                                                @foreach ($subcategories as $subcategory)
                                                <option class="d-none category-option category-option-{{ $subcategory->category_id }}"
                                                    value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                                                @endforeach
                                
                                            </select>
                                
                                        </span>
                                    </div>
                                </div>
                    
                    
                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <button type="button" id="add-blog-tag" class="tg-btn">Add Tag</button>
                                    </div>
                                </div>
                    
                    
                                {{-- tag wrapper --}}
                                <div class="col-xs-12">
                                    <div class="form-group blog-tags-wrapper">
                    
                    
                                    </div>
                                </div>
                                {{-- end tag wrapper --}}
                    
                            </div>
                            <!-- end row -->
                    
                            <div class="tg-btnarea mt-5">
                                <a class="tg-btn tg-btnprevious" href="javascript:void(0);">Go Back</a>
                                <button class="tg-btn">Publish</button>
                            </div>
                    
                        </div>
                    
                    
                    
                    </fieldset>

                    
                </form>
                {{-- end form --}}


            </div>
        </div>
    </div>
    {{-- end layout --}}

</main>
{{-- end main --}}











{{-- modals --}}

{{-- end modals --}}





@endsection
{{-- end section --}}