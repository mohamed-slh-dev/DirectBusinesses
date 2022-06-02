@extends('layouts.customer')



{{-- section --}}
@section('content')



{{-- banner --}}
<div class="tg-innerpagebanner">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="tg-pagetitle">
                    <h1>Profile Settings</h1>
                </div>
                <ol class="tg-breadcrumb">
                    <li><a href="#">Dashboard</a></li>
                    <li class="tg-active">Profile Settings</li>
                </ol>
            </div>
        </div>
    </div>
</div>
{{-- end banner --}}






{{-- main --}}
<main id="tg-main" class="tg-main tg-haslayout" style="background-color: black;">
    <div class="container">
        <div class="row">
            <div id="tg-twocolumns" class="tg-twocolumns">
                <div class="col-xs-12 col-sm-5 col-md-4 col-lg-3">
                    <aside id="tg-sidebar" class="tg-sidebar">
                        <div class="tg-widgetprofile">
                            <figure class="tg-profilebannerimg">
                                <img src="{{ asset('assets/uploads/profile-logos/'.$user->profile_img) }}" alt="image description">
                            </figure>
                            <div class="tg-widgetcontent">

                                <div class="tg-admininfo">
                                    <h3>{{$user->company_name}}</h3>
                                    <h4> {{$user->industry->name}} </h4>
                                    <ul class="tg-matadata">

                                        <li style="width: 140px;">

                                            <div class="star-rating star-rating-custom dashboard-stars-small mb-0 mt-1"
                                                data-rating="4" style="display:inline-block; text-align: center;"></div>

                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tg-widgetdashboard">
                            <nav id="tg-dashboardnav" class="tg-dashboardnav">
                                <ul>
                                    <li>
                                        <a href="{{ route('customer.profile') }}">
                                            <i class="fa fa-user"></i>
                                            <span>Profile</span>
                                        </a>
                                    </li>
                                
                                    <li>
                                        <a href="{{ route('customer.home') }}">
                                            <i class="fa fa-home"></i>
                                            <span>Home</span>
                                        </a>
                                    </li>
                                
                                
                                    <li>
                                        <a href="{{ route('customer.profile.requirements') }}">
                                            <i class="fa fa-tasks"></i>
                                            <span>Requirements</span>
                                        </a>
                                    </li>
                                
                                
                                    <li>
                                        <a href="{{ route('customer.profile.deals') }}">
                                            <i class="fa fa-briefcase"></i>
                                            <span>Deals</span>
                                        </a>
                                    </li>
                                
                                
                                    <li>
                                        <a href="{{ route('customer.profile.auctions') }}">
                                            <i class="fa fa-dropbox"></i>
                                            <span>Auctions</span>
                                        </a>
                                    </li>
                                
                                
                                    <li>
                                        <a href="{{ route('customer.profile.reviews') }}">
                                            <i class="fa fa-comments"></i>
                                            <span>Reviews</span>
                                        </a>
                                    </li>
                                
                                    <li class="tg-active">
                                        <a href="{{ route('customer.profile.settings') }}">
                                            <i class="fa fa-gears"></i>
                                            <span>Profile Settings</span>
                                        </a>
                                    </li>
                                
                                
                                    <li>
                                        <a href="{{ route('customer.profile.help') }}">
                                            <i class="fa fa-info-circle"></i>
                                            <span>Help</span>
                                        </a>
                                    </li>
                                
                                
                                    <li class="bottom-radius">
                                        <a href="{{ route('login') }}">
                                            <i class="fa fa-sign-out"></i>
                                            <span>Logout</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                    </aside>
                </div>

                <div class="col-xs-12 col-sm-7 col-md-8 col-lg-9">
                    <div id="tg-content" class="tg-content">
                        <div class="tg-dashboard tg-dashboardprofilesetting">
                            <form class="tg-themeform"  action="{{ route('vendor.profile.settings.update') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                    <div class="tg-dashboardbox tg-uploadphotos">
                                        <div class="tg-dashboardtitle">
                                            <h2 class="text-white-f">Upload Photos</h2>
                                        </div>
                                        <div class="tg-uploadbox">

                                            <!-- row inner -->
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                                    <div class="tg-upload">
                                                        <div class="tg-uploadhead" style="background:#ac5454">
                                                            <span>
                                                                <h3>Upload Profile Photo/Logo</h3>
                                                                <i class="fa fa-exclamation-circle"></i>
                                                            </span>
                                                            <i class="lnr lnr-upload"></i>
                                                        </div>
                                                        <div class="tg-box">

                                                            <!-- image input -->
                                                            <label class="tg-fileuploadlabel" for="tg-photoandlogo">
                                                                <i class="lnr lnr-cloud-upload"></i>
                                                                <span>Or Drag Your Files Here To Upload</span>
                                                                <input id="tg-photoandlogo" class="tg-fileinput"
                                                                    type="file" name="profile_img">
                                                            </label>


                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col 12 -->


                                                <!-- col 12 -->
                                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                                    <div class="tg-upload">
                                                        <div class="tg-uploadhead" style="background:#ac5454">
                                                            <span>
                                                                <h3>Upload Banner Photo</h3>
                                                                <i class="fa fa-exclamation-circle"></i>
                                                            </span>
                                                            <i class="lnr lnr-upload"></i>
                                                        </div>
                                                        <div class="tg-box">

                                                            <!-- banner image -->
                                                            <label class="tg-fileuploadlabel" for="tg-bannerphoto">
                                                                <i class="lnr lnr-cloud-upload"></i>
                                                                <span>Or Drag Your Files Here To Upload</span>
                                                                <input id="tg-bannerphoto" class="tg-fileinput"
                                                                    type="file" name="banner_img">
                                                            </label>



                                                        </div>
                                                        <!-- end col 12 -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- images -->



                                    <form action="">
                                    <!-- informations -->
                                    <div class="tg-dashboardbox tg-basicinformation">
                                        <div class="tg-dashboardtitle">
                                            <h2 class="text-white-f">Basic Infomartion</h2>
                                        </div>
                                        <div class="tg-basicinformationbox">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                                                    <div class="form-group">
                                                    <input type="text" value="{{$user->fname}}" class="form-control" name="fname"
                                                            placeholder="First Name">
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                                                    <div class="form-group">
                                                    <input type="text" value="{{$user->lname}}" class="form-control" name="lname"
                                                            placeholder="Last Name">
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="company_name" value="{{$user->company_name}}"
                                                            placeholder="Company Name">
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" value="{{$user->phone}}" name="phone"
                                                            placeholder="Phone">
                                                    </div>
                                                </div>


                                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" value="{{$user->email}}" name="email"
                                                            placeholder="Email">
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                                                    <input type="text" class="form-control" value="{{$user->company_url}}" name="company_url"
                                                        placeholder="Company Url">
                                                </div>

                                                <div class="col-12">
                                                    <textarea class="form-control" name="desc" placeholder="Description" rows="7">{{$user->desc}}</textarea>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    <!-- basic info -->





                                    <!-- socials -->
                                    <div class="tg-dashboardbox tg-socialinformation">
                                        <div class="tg-dashboardtitle">
                                            <h2 class="text-white-f">Links</h2>

                                        </div>
                                        <div class="tg-socialinformationbox">
                                          
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                    <div class="form-group tg-inputwithicon tg-facebook">
                                                        <i class="tg-icon fa fa-facebook"></i>
                                                    <input type="text" class="form-control"
                                                    value="{{(!empty($user_social->where('platform','facebook')->first()->url) ? $user_social->where('platform','facebook')->first()->url : '')}}" name="facebook" placeholder="Facebook Link">
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                    <div class="form-group tg-inputwithicon tg-twitter">
                                                        <i class="tg-icon fa fa-twitter"></i>
                                                        <input type="text"
                                                       class="form-control"
                                                       value="{{(!empty($user_social->where('platform','twitter')->first()->url) ? $user_social->where('platform','twitter')->first()->url : '')}}" name="twitter"
                                                            placeholder="twitter Link">
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                    <div class="form-group tg-inputwithicon tg-linkedin">
                                                        <i class="tg-icon fa fa-linkedin"></i>
                                                        <input type="text" class="form-control" 
                                                        value="{{(!empty($user_social->where('platform','linkedin')->first()->url) ? $user_social->where('platform','linkedin')->first()->url : '')}}"name="linkedin"
                                                            placeholder="linkedin Link">
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                    <div class="form-group tg-inputwithicon tg-skype">
                                                        <i class="tg-icon fa fa-skype"></i>
                                                        <input type="text" class="form-control"
                                                        value="{{(!empty($user_social->where('platform','skype')->first()->url) ? $user_social->where('platform','skype')->first()->url : '')}}" name="skype"
                                                            placeholder="skype Link">
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                    <div class="form-group tg-inputwithicon tg-googleplus">
                                                        <i class="tg-icon fa fa-google-plus"></i>
                                                        <input type="text"
                                                        value="{{(!empty($user_social->where('platform','googleplus')->first()->url) ? $user_social->where('platform','googleplus')->first()->url : '')}}" class="form-control" name="googleplus"
                                                            placeholder="google Plus Link">
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                    <div class="form-group tg-inputwithicon tg-pinterestp">
                                                        <i class="tg-icon fa fa-pinterest-p"></i>
                                                        <input type="text" class="form-control" 
                                                        value="{{(!empty($user_social->where('platform','painterest')->first()->url) ? $user_social->where('platform','painterest')->first()->url : '')}}" name="painterest"
                                                            placeholder="pinterest Link">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end socials -->
                                  



                                    <!-- location -->
                                    <div class="tg-dashboardbox tg-location">
                                        <div class="tg-dashboardtitle">
                                            <h2 class="text-white-f">Location</h2>

                                        </div>
                                        <div class="tg-locationbox">
                                            <div class="row">
                                                {{-- <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                    <div class="form-group tg-inputwithicon">
                                                        <input type="text" class="form-control" name="country"
                                                            placeholder="Country">
                                                        <i class="fa fa-crosshairs tg-icon"></i>
                                                        <i class="fa fa-angle-down tg-icon"></i>
                                                    </div>
                                                </div> --}}
                                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                                    <div class="form-group">
                                                    <input type="text" class="form-control" value="{{$user->city}}" name="city"
                                                            placeholder="City">
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                                    <div class="form-group">
                                                        <button class="btn btn-success float-right mb-0 px-5 py-2" type="submit" style="padding:9px 30px !important;">
                                                            Update
                                                        </button>
                                                    </div>
                                                </div>
                                               
                                            </div>

                                            {{-- <div id="tg-locationmap" class="tg-locationmap"></div> --}}
                                        </div>
                                    </div>
                                    <!-- end location -->


                                    
 

                                    <hr style="border-color: whitesmoke !important;">

                                 </form>


                                    

                                    <!-- services  -->
                                    <div class="tg-dashboard tg-dashboardmanageservices" style="margin: 40px 0px;">
                                        <div class="tg-dashboardhead">
                                            <div class="tg-dashboardtitle">
                                                <h2 class="text-white-f">Services</h2>
                                            </div>
                                            <a href="javascript:void(0);" class="tg-btnaddservices text-offwhite-f" data-toggle="modal"
                                                data-target=".tg-categoryModal" style="text-decoration: underline;">+
                                                Add Service</a>
                                        </div>
                                    
                                    
                                    
                                    
                                        {{-- if there's some --}}
                                        @if ($user->services->count() > 0)
                                    
                                        <div class="tg-dashboardservices">
                                    
                                            @foreach ($user->services as $service)
                                    
                                    
                                            <div class="tg-dashboardservice">
                                                <div class="tg-servicetitle">
                                                    <h2><a href="javascript:void(0);">{{$service->service}}</a></h2>
                                                </div>
                                                <div class="tg-btntimeedit">
                                                    <span></span>
                                                    <!-- <button class="tg-btnedite"><i class="lnr lnr-pencil"></i></button> -->
                                                    <a href="{{route('vendor.profile.settings.deleteservice',[$service->id])}}" style="color: white">
                                                        <button class="tg-btndel">
                                    
                                                            <i class="lnr lnr-trash"></i>
                                    
                                                        </button>
                                                    </a>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    
                                        {{-- else --}}
                                        @else
                                    
                                    
                                        <div class="tg-dashboardservices empty-section">
                                            <h4>Empty</h4>
                                        </div>
                                    
                                        @endif
                                        {{-- end if --}}
                                    
                                    </div>
                                    
                                    <!-- services -->
                                    
                                    
                                    
                                    
                                    
                                    <div class="tg-dashboardbox tg-certificatesawards">
                                        <div class="tg-dashboardtitle">
                                            <h2 class="text-white-f">Certificates &amp; Awards</h2>
                                            <a class="tg-btnaddnew text-offwhite-f" href="#" class="" data-toggle="modal"
                                                data-target=".tg-certificatesawardsModal" style="text-decoration: underline;">+ add
                                                new</a>
                                        </div>
                                    
                                    
                                        {{-- if there's some --}}
                                        @if ($user->certificates->count() > 0)
                                    
                                        <div class="tg-certificatesawardsbox">
                                    
                                            @foreach ($user->certificates as $cert)
                                    
                                            <div class="tg-certificatesaward">
                                                <div class="tg-imgandtitle">
                                                    <figure><a href="#">
                                                            @if ($cert->img)
                                                            <img src="{{ asset('assets/uploads/certifications-docs/'.$cert->img) }}">
                                                            @else()
                                                            <img src="{{ asset('assets/prev-images/blog/img-01.jpg') }}">
                                                            @endif
                                    
                                                        </a></figure>
                                                    <h3><a href="javascript:void(0);">{{$cert->title}}</a></h3>
                                                </div>
                                                <div class="tg-btntimeedit">
                                                    <span>{{$cert->date}}</span>
                                    
                                                    <button type="button" data-toggle="modal" data-target=".edit-certi-{{$cert->id}}" class="tg-btnedite"><i
                                                            class="lnr lnr-pencil"></i>
                                                    </button>
                                    
                                                    <a class="tg-btndel text-center" style="color: white;"
                                                        href="{{route('vendor.profile.settings.deletecertificate',[$cert->id])}}">
                                                        <i class="lnr lnr-trash"></i>
                                                    </a>
                                    
                                    
                                                </div>
                                            </div>
                                    
                                            @endforeach
                                    
                                    
                                        </div>
                                    
                                        @else
                                    
                                        <div class="tg-certificatesawardsbox empty-section">
                                            <h4>Empty</h4>
                                        </div>
                                    
                                        @endif
                                    
                                    </div>
                                    <!-- end certificates -->
                                    
                                    
                                    
                                    
                                    
                                    <!-- blogs -->
                                    <div class="tg-companyfeaturebox" style="padding-top:35px;">
                                        <div class="tg-companyfeaturetitle">
                                            <div class="row">
                                                <div class="col-6">
                                                    <h3 class="text-white-f profile-subtitles-custom">Blogs</h3>
                                                </div>
                                    
                                                <div class="col-6">
                                                    <a href="{{ route('customer.blogs.post') }}" class="tg-btnaddservices text-offwhite-f"
                                                        style="text-decoration: underline;">+
                                                        Add Blog</a>
                                                </div>
                                            </div>
                                        </div>
                                    
                                    
                                        {{-- if there's some --}}
                                        @if ($user->blogs->count() > 0)
                                    
                                        <div class="row" style="margin-top: 43px;">
                                    
                                    
                                            @foreach ($user->blogs as $blog)
                                    
                                            <!-- first blog -->
                                            <div class="col-sm-4">
                                    
                                                <a href="{{ route('customer.blogs.view', [$blog->id]) }}" class="blog-compact-item-container">
                                                    <div class="blog-compact-item blog-custom-card border-all-radius">
                                                        <img src="{{ asset('assets/uploads/blogs/'.$blog->img) }}" alt="" class="border-bothtop-radius"
                                                            style="height: 170px; width: 100%; object-fit:contain">
                                    
                                                        {{-- tags --}}
                                                        <span class="blog-item-tag custom-blog-tag" style="word-break:break-all;">
                                    
                                                            @foreach ($blog->tags as $tag)
                                                            <span class="mr-1" style="word-break:break-word;">{{ $tag->subcategory->name }}</span>
                                                            @endforeach
                                    
                                                        </span>
                                                        {{-- end tags --}}
                                    
                                                        <div class="blog-compact-item-content custom-blog-content">
                                                            <ul class="blog-post-tags">
                                                                <li class="custom-blog-date">{{ date('d M Y', strtotime($blog->created_at)) }}</li>
                                                            </ul>
                                                            <h3 class="custom-blog-title">{{ $blog->title }}</h3>
                                    
                                                            <p class="custom-blog-parag">{{ $blog->desc }}</p>
                                                        </div>
                                                    </div>
                                                </a>
                                    
                                            </div>
                                            <!-- first card -->
                                    
                                    
                                            @endforeach
                                            {{-- end foreach --}}
                                    
                                    
                                    
                                    
                                    
                                    
                                        </div>
                                        <!-- end row -->
                                    
                                        @else
                                    
                                        <div class="row empty-section" style="margin-top: 43px;">
                                            <div class="col-12 text-center">
                                                <h4>Empty</h4>
                                            </div>
                                        </div>
                                        @endif
                                    
                                    </div>
                                    <!-- blogs -->
                            </form>
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
        </div>
    </div>
</main>
{{-- end main --}}














{{-- modal --}}


{{-- add social --}}
<div class="modal fade tg-socialModal" tabindex="-1">
    <div class="modal-dialog tg-modaldialog" role="document">
        <div class="modal-content tg-modalcontent">
            <div class="tg-modalhead">
                <h2>Select Social</h2>
                <span class="tg-selecteditems">06 Items Selected</span>
            </div>
            <div class="tg-modalbody">
                <form class="tg-themeform tg-formaddsocial">
                    <ul class="tg-radiosocials">
                        <li>
                            <span class="tg-checkbox tg-facebook">
                                <input type="checkbox" id="facebook" name="addsocial" value="facebook" checked>
                                <label for="facebook">
                                    <i class="fa fa-facebook"></i>
                                    <em>Facebook</em>
                                </label>
                            </span>
                        </li>
                        <li>
                            <span class="tg-checkbox tg-linkedin">
                                <input type="checkbox" id="linkedin" name="addsocial" value="linkedin" checked>
                                <label for="linkedin">
                                    <i class="fa fa-facebook"></i>
                                    <em>linkedin</em>
                                </label>
                            </span>
                        </li>
                        <li>
                            <span class="tg-checkbox tg-twitter">
                                <input type="checkbox" id="twitter" name="addsocial" value="twitter" checked>
                                <label for="twitter">
                                    <i class="fa fa-facebook"></i>
                                    <em>twitter</em>
                                </label>
                            </span>
                        </li>
                        <li>
                            <span class="tg-checkbox tg-skype">
                                <input type="checkbox" id="skype" name="addsocial" value="skype" checked>
                                <label for="skype">
                                    <i class="fa fa-facebook"></i>
                                    <em>skype</em>
                                </label>
                            </span>
                        </li>
                        <li>
                            <span class="tg-checkbox tg-dropbox">
                                <input type="checkbox" id="dropbox" name="addsocial" value="dropbox">
                                <label for="dropbox">
                                    <i class="fa fa-facebook"></i>
                                    <em>dropbox</em>
                                </label>
                            </span>
                        </li>
                        <li>
                            <span class="tg-checkbox tg-vimeo">
                                <input type="checkbox" id="vimeo" name="addsocial" value="vimeo">
                                <label for="vimeo">
                                    <i class="fa fa-facebook"></i>
                                    <em>vimeo</em>
                                </label>
                            </span>
                        </li>
                        <li>
                            <span class="tg-checkbox tg-tumblr">
                                <input type="checkbox" id="tumblr" name="addsocial" value="tumblr">
                                <label for="tumblr">
                                    <i class="fa fa-facebook"></i>
                                    <em>tumblr</em>
                                </label>
                            </span>
                        </li>
                        <li>
                            <span class="tg-checkbox tg-yahoo">
                                <input type="checkbox" id="yahoo" name="addsocial" value="yahoo">
                                <label for="yahoo">
                                    <i class="fa fa-facebook"></i>
                                    <em>yahoo</em>
                                </label>
                            </span>
                        </li>
                        <li>
                            <span class="tg-checkbox tg-googleplus">
                                <input type="checkbox" id="googleplus" name="addsocial" value="googleplus" checked>
                                <label for="googleplus">
                                    <i class="fa fa-facebook"></i>
                                    <em>google plus</em>
                                </label>
                            </span>
                        </li>
                        <li>
                            <span class="tg-checkbox tg-pinterestp">
                                <input type="checkbox" id="pinterestp" name="addsocial" value="pinterestp" checked>
                                <label for="pinterestp">
                                    <i class="fa fa-facebook"></i>
                                    <em>pinterest</em>
                                </label>
                            </span>
                        </li>
                        <li>
                            <span class="tg-checkbox tg-youtube">
                                <input type="checkbox" id="youtube" name="addsocial" value="youtube">
                                <label for="youtube">
                                    <i class="fa fa-facebook"></i>
                                    <em>youtube</em>
                                </label>
                            </span>
                        </li>
                        <li>
                            <span class="tg-checkbox tg-stumbleupon">
                                <input type="checkbox" id="stumbleupon" name="addsocial" value="stumbleupon">
                                <label for="stumbleupon">
                                    <i class="fa fa-facebook"></i>
                                    <em>stumbleupon</em>
                                </label>
                            </span>
                        </li>
                        <li>
                            <span class="tg-checkbox tg-reddit">
                                <input type="checkbox" id="reddit" name="addsocial" value="reddit">
                                <label for="reddit">
                                    <i class="fa fa-facebook"></i>
                                    <em>reddit</em>
                                </label>
                            </span>
                        </li>
                        <li>
                            <span class="tg-checkbox tg-quora">
                                <input type="checkbox" id="quora" name="addsocial" value="quora">
                                <label for="quora">
                                    <i class="fa fa-facebook"></i>
                                    <em>quora</em>
                                </label>
                            </span>
                        </li>
                        <li>
                            <span class="tg-checkbox tg-yelp">
                                <input type="checkbox" id="yelp" name="addsocial" value="yelp">
                                <label for="yelp">
                                    <i class="fa fa-facebook"></i>
                                    <em>yelp</em>
                                </label>
                            </span>
                        </li>
                        <li>
                            <span class="tg-checkbox tg-soundcloud">
                                <input type="checkbox" id="soundcloud" name="addsocial" value="soundcloud">
                                <label for="soundcloud">
                                    <i class="fa fa-facebook"></i>
                                    <em>soundcloud</em>
                                </label>
                            </span>
                        </li>
                        <li>
                            <span class="tg-checkbox tg-whatsapp">
                                <input type="checkbox" id="whatsapp" name="addsocial" value="whatsapp">
                                <label for="whatsapp">
                                    <i class="fa fa-facebook"></i>
                                    <em>whatsapp</em>
                                </label>
                            </span>
                        </li>
                        <li>
                            <span class="tg-checkbox tg-wechat">
                                <input type="checkbox" id="wechat" name="addsocial" value="wechat">
                                <label for="wechat">
                                    <i class="fa fa-facebook"></i>
                                    <em>wechat</em>
                                </label>
                            </span>
                        </li>
                        <li>
                            <span class="tg-checkbox tg-instagram">
                                <input type="checkbox" id="instagram" name="addsocial" value="instagram">
                                <label for="instagram">
                                    <i class="fa fa-facebook"></i>
                                    <em>instagram</em>
                                </label>
                            </span>
                        </li>
                        <li>
                            <span class="tg-checkbox tg-dribbble">
                                <input type="checkbox" id="dribbble" name="addsocial" value="dribbble">
                                <label for="dribbble">
                                    <i class="fa fa-facebook"></i>
                                    <em>dribbble</em>
                                </label>
                            </span>
                        </li>
                        <li>
                            <span class="tg-checkbox tg-flickr">
                                <input type="checkbox" id="flickr" name="addsocial" value="flickr">
                                <label for="flickr">
                                    <i class="fa fa-facebook"></i>
                                    <em>flickr</em>
                                </label>
                            </span>
                        </li>
                    </ul>
                </form>
            </div>
            <div class="tg-modalfoot">
                <button class="tg-btn" type="submit">add</button>
            </div>
        </div>
    </div>
</div>
<!-- new social modal -->










<!-- certificate modal -->
<div class="modal fade tg-certificatesawardsModal" tabindex="-1">
    <div class="modal-dialog tg-modaldialog" role="document">
        <div class="modal-content tg-modalcontent">
            <div class="tg-modalhead">
                <h2>Add Certificates &amp; Awards</h2>
            </div>
            <form class="tg-themeform tg-formaddservices" action="{{ route('vendor.profile.settings.addcertification') }}" method="post" enctype="multipart/form-data">
                @csrf
            <div class="tg-modalbody">
               
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <div class="tg-imggallerybox">
                                <div class="tg-upload">
                                    <div class="tg-uploadhead">
                                        <span>
                                            <h3>Upload Photo</h3>
                                            <i class="fa fa-exclamation-circle"></i>
                                        </span>
                                        <i class="lnr lnr-upload"></i>
                                    </div>

                                    <!-- files image -->
                                    <div class="tg-box">
                                        <label class="tg-fileuploadlabel" for="tg-photogallery">
                                            <i class="lnr lnr-cloud-upload"></i>
                                            <span>Or Drag Your Files Here To Upload</span>
                                            <input id="tg-photogallery" class="tg-fileinput" type="file" name="doc">
                                        </label>
                                    </div>
                                    <!-- end image -->


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="title"
                                placeholder="Certificates / Awards Title">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                            <input type="date" class="form-control" name="date" placeholder="Date">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <textarea class="form-control" name="desc" placeholder="Description"></textarea>
                    </div>
                
            </div>
            <div class="tg-modalfoot">
                <button class="tg-btn" type="submit">add</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- new certifcate modal -->




@foreach ($user->certificates as $certi)
    

<div class="modal fade edit-certi-{{$certi->id}}" tabindex="-1">
    <div class="modal-dialog tg-modaldialog" role="document">
        <div class="modal-content tg-modalcontent">
            <div class="tg-modalhead">
                <h2>Update Certificates &amp; Awards</h2>
            </div>
            <form class="tg-themeform tg-formaddservices" action="{{ route('vendor.profile.settings.updatecertification') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="certi_id" value="{{$certi->id}}">
            <div class="tg-modalbody">
               
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <div class="tg-imggallerybox">
                                <div class="tg-upload">
                                    <div class="tg-uploadhead">
                                        <span>
                                            <h3>Upload Photo</h3>
                                            <i class="fa fa-exclamation-circle"></i>
                                        </span>
                                        <i class="lnr lnr-upload"></i>
                                    </div>

                                    <!-- files image -->
                                    <div class="tg-box">
                                    <label class="tg-fileuploadlabel" for="update-certi-{{$certi->id}}">
                                            <i class="lnr lnr-cloud-upload"></i>
                                            <span>Or Drag Your Files Here To Upload</span>
                                            <input id="update-certi-{{$certi->id}}" class="tg-fileinput" type="file" name="certificate_doc">
                                        </label>
                                    </div>
                                    <!-- end image -->


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                        <input type="text" class="form-control" value="{{$certi->title}}" name="title"
                                placeholder="Certificates / Awards Title">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                            <input type="date" value="{{$certi->date}}" class="form-control" name="date" placeholder="Date">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <textarea class="form-control" name="desc" placeholder="Description">{{$certi->desc}}</textarea>
                    </div>
                
            </div>
            <div class="tg-modalfoot text-center">
                <button class="tg-btn " type="submit">Update</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- edit certifcate modal -->
@endforeach










<!-- add service modal -->
<div class="modal fade tg-servicesmodal tg-categoryModal" tabindex="-1">
    <div class="modal-dialog tg-modaldialog" role="document">
        <div class="modal-content tg-modalcontent">
            <div class="tg-modalhead">
                <h2>Add Service</h2>
            </div>
            <form class="tg-themeform tg-formaddservices" action="{{ route('vendor.profile.settings.addservice') }}" method="post">
                @csrf
            <div class="tg-modalbody">
               
                    <fieldset>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <input type="text" required name="service" class="form-control" placeholder="Service Title">
                                </div>
                            </div>
                          
                          
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <textarea name="desc" required placeholder="Description"></textarea>
                                </div>
                            </div>
                            {{-- <div class="col-sm-12">
                                <div class="tg-checkbox">
                                    <input type="checkbox" name="appointment" id="appointment">
                                    <label for="appointment">Add This Service in Appointment List</label>
                                </div>
                                <div class="tg-checkbox">
                                    <input type="checkbox" name="freeservice" id="freeservice">
                                    <label for="freeservice">This is a Free Service</label>
                                </div>
                            </div> --}}
                        </div>
                    </fieldset>
               
            </div>
            <div class="tg-modalfoot">
                <button class="tg-btn" type="submit">add</button>
            </div>
        </form>
        </div>
    </div>
</div>
{{-- end modal --}}





@endsection
{{-- end section --}}