@extends('layouts.customer-home')



{{-- section --}}
@section('content')


{{-- banner --}}

{{-- end banner --}}







{{-- main --}}
<div class="tg-haslayout">
    <div class="container">
        <div class="row align-items-center row row-cols-1 row-cols-md-2 row-cols-xl-4"
            style="margin-top: 40px; margin-bottom:70px">


            <div class="col-sm-12 text-center">
                <h3 class="home-main-heading" data-animate="bounce slower infinite"
                    style="color:white; font-weight: bold; margin-bottom: 30px;">Business Overview</h3>
            </div>


            <div class="col">
                <div class="card radius-10">
                    <div class="card-body custom-analytic-upper" style="position:relative">


                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0">Requirements
                                    <i class="fa fa-info-circle ml-2 cursor-pointer-f text-warning" data-toggle="tooltip" data-placement="right" title="Lorem, ipsum dolor sit amet consectetur adipisicing elit."></i>
                                </p>
                                <p class="mb-0 text-warning font-size-15">- 20 July 2021</p>

                                <h5 class="mb-0 text-white">85,028</h5>
                            </div>
                            <div class="dropdown ms-auto">
                                <a data-toggle="modal" data-target=".filterdatemodal"
                                    class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer">

                                    <i class='bx bx-dots-horizontal-rounded font-22 text-white' data-toggle="tooltip" data-placement="right" title="Time Filter"></i>

                                </a>

                            </div>
                        </div>
                        <div class="" id="chart2"></div>
                    </div>
                </div>
            </div>


            <!-- 2nd -->
            <div class="col">
                <div class="card radius-10">
                    <div class="card-body custom-analytic-upper">
                        <div class="d-flex align-items-center">
                            <div>

                                <p class="mb-0 ">Matched Requirements
                                    <i class="fa fa-info-circle ml-2 cursor-pointer-f text-warning" data-toggle="tooltip" data-placement="right" title="Lorem, ipsum dolor sit amet consectetur adipisicing elit."></i>
                                </p>

                                <p class="mb-0 text-warning font-size-15">- 19 July 2021</p>

                                <h5 class="mb-0  text-white">42,892</h5>
                            </div>
                            <div class="dropdown ms-auto">
                                <a data-toggle="modal" data-target=".filterdatemodal"
                                    class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer">

                                    <i class='bx bx-dots-horizontal-rounded font-22 text-white' data-toggle="tooltip" data-placement="right" title="Time Filter"></i>

                                </a>

                            </div>
                        </div>
                        <div class="" id="chart3"></div>
                    </div>
                </div>
            </div>


            <!-- 3rd -->
            <div class="col">
                <div class="card radius-10">
                    <div class="card-body custom-analytic-upper">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0">High demand Categories
                                    <i class="fa fa-info-circle ml-2 cursor-pointer-f text-warning" data-toggle="tooltip" data-placement="right" title="Lorem, ipsum dolor sit amet consectetur adipisicing elit."></i>
                                </p>

                                <p class="mb-0 text-warning font-size-15">- Products & Services</p>

                                <h5 class="mb-0  text-white">22,10</h5>
                            </div>
                            <div class="dropdown ms-auto">
                                <a data-toggle="modal" data-target="." class="dropdown-toggle dropdown-toggle-nocaret">

                                    <i class='bx bx-dots-horizontal-rounded font-22 text-white' ></i>

                                </a>

                            </div>
                        </div>
                        <div class="" id="chart4"></div>
                    </div>
                </div>
            </div>


            <!-- 4rth -->
            <div class="col">
                <div class="card radius-10">
                    <div class="card-body custom-analytic-upper">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0">Requirements Analytics
                                    <i class="fa fa-info-circle ml-2 cursor-pointer-f text-warning" data-toggle="tooltip" data-placement="right" title="Lorem, ipsum dolor sit amet consectetur adipisicing elit."></i>
                                </p>
                                <p class="mb-0 text-warning font-size-15">-</p>

                                <h5 class="mb-0  text-white">-</h5>

                            </div>
                            <div class="dropdown ms-auto">
                                <a data-toggle="modal" data-target="." class="dropdown-toggle dropdown-toggle-nocaret">

                                    <i class='bx bx-dots-horizontal-rounded font-22 text-white'></i>

                                </a>

                            </div>
                        </div>
                        <div class="" id="chart5"></div>
                    </div>
                </div>
            </div>






        </div>
    </div>
</div>
<!-- business -->





<!-- hr -->
<div class="tg-haslayout">
    <div class="container">
        <div class="row align-items-center" style="margin-top: 0px; margin-bottom:0px">

            <hr>

        </div>
    </div>
</div>





<!-- pipeline -->
<div class="tg-haslayout">
    <div class="container">
        <div class="row align-items-center" style="margin-top: 70px; margin-bottom:70px">


            <div class="col-12 text-center">
                <h3 class="home-main-heading" data-animate="bounce slower infinite"
                    style="color:white; font-weight: bold;  margin-bottom: 30px;">Requirements Overview</h3>
            </div>



            <!-- table -->
            <table class="table custom-home-table">

                <thead style="background-color:whitesmoke;">

                    <th style="color:black; width: 130px;">Reference</th>
                    <th style="color:black;">Requirment Title</th>
                    <th style="color:black; width: 140px;">Date</th>

                    <th style="width:110px; color:black;">Status</th>
                    <th style="color:black; width: 120px">Clarifications</th>

                    <th style="width:110px; color:black">Informations</th>
                    <th style="width:110px; color:black;">Evaluation</th>


                </thead>



                <tbody>

                    @foreach ($requirements as $requirement)
                        
                    <tr>
                        <td># {{$requirement->serial_number}}</td>
                        <td>{{$requirement->title}}</td>
                        <td>{{date('d M Y - h:i A', strtotime($requirement->created_at))}}</td>

                        <td>
                            @if ($requirement->status == 'canceled')
                            <div class="d-flex align-items-center text-danger"> <i
                                class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
                            <span>{{$requirement->status}}</span>
                        </div>
                            @elseif($requirement->status == 'on going')
                            <div class="d-flex align-items-center text-warning"> <i
                                class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
                            <span>{{$requirement->status}}</span>
                        </div>
                            @elseif($requirement->status == 'finished')
                            <div class="d-flex align-items-center text-success"> <i
                                class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
                            <span>{{$requirement->status}}</span>
                             </div>
                            @endif
                           
                        </td>

                        <td style="text-align: center">
                            <a style="margin-bottom: 0px; margin-top: 3px; padding: 3px 10px; border: 1px solid #8a6d3b; background:transparent; font-size: 13px; border-radius:3px"
                        data-toggle="modal" data-target=".clarfmodal-{{$requirement->id}}" class="cursor-pointer"><i
                                    class="lni lni-eye" style="font-size: 17px"></i></a>
                        </td>


                        <td>
                            <a href="{{ route('customer.requirements.view', [$requirement->id]) }}" class="btn text-warning"
                                style="margin-bottom: 0px; margin-top: 0px; padding: 2px 5px; border: 1px solid #8a6d3b; background:transparent; font-size: 13px">View
                                Details</a>
                        </td>



                        <td>
                            <a href="{{ route('customer.requirements.evaluation', [1]) }}" class="btn text-warning"
                                style="margin-bottom: 0px; margin-top: 0px; padding: 2px 5px; border: 1px solid #8a6d3b; background:transparent; font-size: 13px">View
                                Details</a>
                        </td>



                    </tr>
                    @endforeach

                </tbody>


            </table>








        </div>
    </div>
</div>
<!-- pipeline -->







<!-- hr -->
<div class="tg-haslayout">
    <div class="container">
        <div class="row align-items-center" style="margin-top: 0px; margin-bottom:0px">

            <hr>

        </div>
    </div>
</div>




<!-- pipeline -->
<div class="tg-haslayout">
    <div class="container">
        <div class="row" style="margin-top: 70px; margin-bottom:70px">


            <div class="col-12 text-center">
                <h3 class="home-main-heading" data-animate="bounce slower infinite"
                    style="color:white; font-weight: bold;  margin-bottom: 70px;">New Requirements</h3>
            </div>



            <div class="col-sm-4" style="background-color: #ac5454; border-radius: 3px;">

                <h4 class="opp-subheadings" style="padding-top: 25px; padding-bottom: 10px;">Post New Requirements</h4>

                <p class="card-requirements">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Et assumenda delectus quisquam, veniam
                    repudiandae tenetur
                    autem explicabo, esse illum eaque! Quas.
                </p>

                <a href="{{ route('customer.requirements.post') }}" class="custom-card-submit customer-custom-card-submit">
                    Start Now!
                </a>




                <!-- end card -->

            </div>


            <div class="col-sm-8">





                <!-- card -->
                @if (!empty($auction))
                    <div class="custom-card">
                    
                        <h4 class="opp-subheadings">Latest Auctions</h4>
                    
                    
                    
                        <p class="card-ref" style="display: inline-block; width: 100%; margin-top: 10px">
                            {{ $auction->title }}
                        </p>
                    
                        <p class="card-ref" style="width: 29%; display: inline-block;">
                            # {{ $auction->serial_number }}
                        </p>
                    
                    
                        <h5 class="custom-card-subheading">{{ date('d M Y', strtotime($auction->created_at)) }}</h5>
                    
                        <p class="card-requirements">
                            {{ $auction->desc }}
                        </p>
                    
                    
                    
                    
                        <p class="pl-1 mt-3">
                            <a href="javascript:void(0);" class="custom-card-submit"
                                style="font-size: 15px; padding: 10px 20px !important; text-decoration: none !important;"
                                data-toggle="modal" data-target=".auctionmodal">
                                View Bids
                            </a>
                    
                            <a href="{{ route('customer.auctions.post') }}" class="custom-card-submit"
                                style="font-size: 15px; padding: 10px 25px !important; background:whitesmoke; color: #ac5454 !important; text-decoration:none !important;">
                                Post Auction
                            </a>
                        </p>
                    
                    
                        <div>
                            <p class="text-right" style="margin-bottom:0px; margin-top:10px; padding-right:20px;">
                                {{-- <i class="bx bx-right-arrow-circle" style="font-size: 30px"></i> --}}
                            </p>
                        </div>
                    
                    </div>
                    <!-- end card -->


                {{-- no auction --}}
                @else
                    
                    <div class="custom-card">
                    
                        <h4 class="opp-subheadings">Latest Auctions</h4>
                    
                    
                    
                        <h3 class="card-ref text-center" style="display: block; width: 100%; margin-bottom:0px; padding-top:65px">
                            No Auctions yet
                        </h3>
                      
                    
                        <p class="pl-1 text-center" style="padding-top:75px;">
                            
                            <a href="{{ route('customer.auctions.post') }}" class="custom-card-submit"
                                style="font-size: 15px; padding: 10px 30px !important; background:whitesmoke; color: #ac5454 !important; text-decoration:none !important;">
                                Post Auction
                            </a>
                        </p>
                    
                    
                        <div>
                            <p class="text-right" style="margin-bottom:0px; margin-top:10px; padding-right:20px;">
                                {{-- <i class="bx bx-right-arrow-circle" style="font-size: 30px"></i> --}}
                            </p>
                        </div>
                    
                    </div>
                    <!-- end card -->

                @endif
                



            </div>
            <!-- end of reverse auction -->


        </div>
    </div>
</div>
<!-- end new requirements section -->






<!-- Highest Rated Freelancers -->
<div class="tg-haslayout section padding-top-65 padding-bottom-70 full-width-carousel-fix"
    style="background-color: rgb(245, 245, 245);">
    <div class="container">
        <div class="row">

            <div class="col-12 text-center">
                <h3 class="home-main-heading" data-animate="bounce slower infinite"
                    style="color:black; font-weight: bold;  margin-bottom: 70px;">High Demand
                    Categories in
                    Market</h3>
            </div>

            <div class="col-xl-12">
                <div class="default-slick-carousel freelancers-container freelancers-grid-layout">
            
                    @foreach ($categories as $category)
            
            
                    <!--Freelancer -->
                    <div class="freelancer">
            
                        <!-- Overview -->
                        <div class="freelancer-overview">
                            <div class="freelancer-overview-inner">
            
                                <!-- Bookmark Icon -->
                                <span class="bookmark-icon"></span>
            
                                <!-- Avatar -->
                                <div class="freelancer-avatar">
                                    <div class="verified-badge"></div>
                                    <a href="javascript:void(0);"><img src="{{ asset('assets/prev-images/category.png') }}"
                                            alt=""></a>
                                </div>
            
                                <!-- Name -->
                                <div class="freelancer-name">
                                    <h4><a href="javascript:void(0);">{{ $category->name }}<img class="flag"
                                                src="{{ asset('assets/images/flags/gb.svg') }}" alt="" title="United Kingdom"
                                                data-tippy-placement="top"></a></h4>
                                    <span>
                                        @foreach ($category->subcategories as $subcategory)
                                        | {{ $subcategory->name }}
                                        @endforeach
                                    </span>
                                </div>
            
            
                            </div>
                        </div>
            
            
            
                        <!-- Details -->
                        <div class="freelancer-details">
                            <div class="freelancer-details-list">
                                <ul class="text-center">
                                    <li>No. of Published Items
            
                                        <strong>
                                            <i class="lni lni-calendar mr-1 text-warning-f"></i> <label for="monthinput-1"
                                                class="text-warning-f d-inline font-weight-bold">{{ date('M') }}</label> |
                                            <i class="lni lni-pencil mr-1"></i>
                                            {{ $category->requirement_items->where('created_at', '>=', date('Y-m-01'))->count() }}
                                        </strong>
            
                                        <input class="d-none date-picker" type="month" name="" id="monthinput-1">
                                    </li>
            
                                </ul>
                            </div>
                            <a href="{{ route('vendor.requirements.browse') }}"
                                class="button button-sliding-icon ripple-effect custom-view-profile">View More<i
                                    class="icon-material-outline-arrow-right-alt"></i></a>
                        </div>
                    </div>
                    <!-- Freelancer / End -->
            
            
            
                    @endforeach
                    {{-- end foreach --}}
            
            
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Highest Rated Freelancers / End-->







<!-- hr -->
<div class="tg-haslayout">
    <div class="container">
        <div class="row align-items-center" style="margin-top: 0px; margin-bottom:0px">

            <hr>

        </div>
    </div>
</div>






<!-- Recent Blog Posts -->
<div class="tg-haslayout section padding-top-0 padding-bottom-60 full-width-carousel-fix">
    <div class="container">
        <div class="row" style="margin-top: 70px;">





            <div class="col-12 text-center">
                <h3 class="home-main-heading" data-animate="bounce slower infinite"
                    style="font-weight: bold; color:white;  margin-bottom: 70px;">Blogs and Articles
                </h3>
            </div>


            <div class="col-xl-12">
                <div class="blog-carousel">

                @foreach ($blogs as $blog)
              
                    <a href="{{ route('customer.blogs.view', [$blog->id]) }}" class="blog-compact-item-container">
                        <div class="blog-compact-item">
                            <img src="{{ asset('assets/uploads/blogs/'.$blog->img) }}" alt="">
                            @foreach ($blog->tags as $tag)

                            <span class="blog-item-tag">
                                {{$tag->subcategory->name}}
                            </span>

                            @endforeach
                            
                            <div class="blog-compact-item-content">
                                <ul class="blog-post-tags">
                                    <li>{{date('d M Y', strtotime($blog->created_at))}}</li>
                                </ul>
                                <h3>{{$blog->title}}</h3>
                                <p>{{$blog->desc}}</p>
                            </div>
                        </div>
                    </a>
                    @endforeach

                </div>

            </div>
            <!-- end carousal -->

            <!-- view more -->
            <div class="col-12 text-center mt-5">
                <a href="{{ route('customer.blogs.browse') }}"
                    class="button button-sliding-icon ripple-effect custom-view-profile blogsviewall-button">View
                    More<i class="icon-material-outline-arrow-right-alt"></i></a>

            </div>


        </div>
    </div>
</div>
<!-- Recent Blog Posts / End -->
{{-- end main --}}











{{-- modals --}}


{{-- quotation modal --}}
<div class="modal fade tg-categoryModal" tabindex="-1">
    <div class="modal-dialog tg-modaldialog" role="document">
        <div class="modal-content tg-modalcontent">
            <div class="tg-modalhead">
                <h2>Truth Co Quotation</h2>
                <span class="tg-selecteditems">3/3 Requirements</span>
            </div>
            <div class="tg-modalbody">
                <form class="tg-themeform tg-formrefinesearch">

                    <div class="tg-columnstyle">
                        <div class="tg-column">
                            <h3>Business</h3>
                            <div class="tg-checkboxgroup">
                                <span class="tg-checkbox">
                                    <input disabled type="checkbox" id="tg-eventorganizer" name="business"
                                        value="Event Organizer" checked>
                                    <label for="tg-eventorganizer">Landing Page - <span class="text-warning-f"> 2,000
                                            AED</span></label>
                                </span>
                                <span class="tg-checkbox">
                                    <input disabled type="checkbox" id="tg-financeandlegal" name="business"
                                        value="Finance &amp; Legal" checked>
                                    <label for="tg-financeandlegal">Logo Design - <span class="text-warning-f"> 1,000
                                            AED</span></label>
                                </span>
                                <span class="tg-checkbox">
                                    <input disabled type="checkbox" id="tg-marketing" name="business" value="Marketing"
                                        checked>
                                    <label for="tg-marketing">Copywriter - <span class="text-warning-f"> 12,000
                                            AED</span></label>
                                </span>

                            </div>
                        </div>
                    </div>
                    <!-- end col style -->



                    <div class="form-group tg-inpuicon" style="margin-top: 20px;">


                        <h3 style="margin: 0px 0px 15px">Attachment</h3>

                        <button class="btn download-attach-button">
                            Download
                        </button>

                        <!-- <i class="lnr lnr-magnifier"></i> -->
                        <textarea name="Budget" id="" cols="30" class="form-control index-ta" rows="6"
                            placeholder="Additional Note!"></textarea>



                    </div>


                </form>
            </div>
            <div class="tg-modalfoot">

                <div class="row">

                    <div class="col-xs-6 text-left">
                        <button class="tg-btn" type="submit">Accept</button>

                    </div>

                    <div class="col-xs-6 text-right">

                        <a class="tg-btn customer-view-profile-button" href="{{ route('customer.companies.profile', [1]) }}"
                            style="float: right;">View Profile</a>

                    </div>
                </div>



            </div>
        </div>
    </div>
</div>
{{-- quotation modal --}}








<!-- require filters modal -->
<div class="modal fade tg-servicesmodal tg-categoryModal filterdatemodal" tabindex="-1">
    <div class="modal-dialog tg-modaldialog" role="document">
        <div class="modal-content tg-modalcontent">
            <div class="tg-modalhead">
                <h2>Overview Filter</h2>
            </div>
            <div class="tg-modalbody">

                <div class="form-row reqfilter-modal-row">

                    <div class="col-6 text-left">
                        <label for="">From Date</label>
                    </div>
                    
                    <div class="col-6 text-left">
                        <label for="">To Date</label>
                    </div>
                    
                    <div class="col-6 mb-1" style="border-right:1px solid lightgrey;">
                        <input type="date" name="" id="">
                    </div>
                    
                    <div class="col-6 mb-1">
                        <input type="date" name="" id="">
                    </div>
                    
                    <div class="col-6" style="border-right:1px solid lightgrey;">
                        <input type="time" name="" id="">
                    </div>
                    
                    
                    <div class="col-6">
                        <input type="time" name="" id="">
                    </div>


                </div>
            </div>

            <!-- filter button -->
            <div class="tg-modalfoot">

                <div class="row">
                
                    <div class="col-xs-6 text-left">
                        <button class="tg-btn" data-dismiss="modal">Hide</button>
                    </div>
                
                    <div class="col-xs-6 text-right">
                        <button class="tg-btn" type="submit">Submit</button>
                    </div>
                
                </div>

            </div>
        </div>
    </div>
</div>
<!-- end req filter modal -->











<!-- requirement clarafications modal -->
{{-- @foreach ($clarifications->groupBy('req_quo_id') as $calrf_quot=>$clarf) --}}

@foreach ($requirements as $req)
    
<div class="modal fade tg-categoryModal clarfmodal-{{$req->id}}" tabindex="-1">
    <div class="modal-dialog tg-modaldialog" role="document">
        <div class="modal-content tg-modalcontent">
            <div class="tg-modalhead">
                <h2>Clarifications</h2>
            </div>
            
            <div class="tg-modalbody pb-4">


                
                <!-- row -->
                <div class="form-row clarf-modal-row mb-0">

                    <!-- companies -->
                    <div class="col-12 overflow-auto mb-5" style="white-space: nowrap;">
                  
                            @foreach ($req->quotations->where('requirement_id',$req->id) as $req_quotations)
                          
                            @foreach ($req_quotations->clarifications
                            ->groupBy('req_quo_id') as $calrf_comps=>$comps)
                       
                         <div id="clarf-company-tab-{{$calrf_comps}}" class="clarf-companies-tabs">
                                <p><img class="clarflogo" src="{{ asset('assets/uploads/profile-logos/'.$req_quotations->user->profile_img) }}" alt=""></p>
                                <h3></h3>
                                <div class="star-rating star-rating-custom mb-3 mt-3" data-rating="4.5" style="display:inline-block; text-align: center;">
                                    <p class="mb-0">{{$req_quotations->user->company_name}} </p>
                                </div>
    
                                <i class="fa fa-circle"></i>
                            </div>

                        <!-- end convo for company 1  -->
                        @endforeach

                        @endforeach

                      
                          
                        <!-- company 1 -->
                   

                    
                    </div>
                    <!-- end companies -->

                    @foreach ($req->quotations->where('requirement_id',$req->id) as $req_quotations)
                          
                    @foreach ($req_quotations->clarifications
                    ->groupBy('req_quo_id') as $calrf_comps=>$comps)


                    <form id="clarf-company-tab-content-{{$calrf_comps}}" class="col-12 mx-3 mt-3 clarf-companies-tabs-content d-none" style="max-height: 250px; overflow-y: auto;"
                        action="{{ route('vendor.requirements.send.clarification') }}" method="post">

                            @csrf  
                        <div class="col-12">
                            @foreach ($comps as $comp)
                        
                            <input type="hidden" name="quotation_id" value="{{$comp->req_quo_id}}">
                           
                                    @if ($comp->user_id == session('user_id'))
                           
                                    <div class="d-inline-block w-100 text-right">
        
                                      <p class="clarf-sides clarf-sender text-left" style="float:right">
                                         {{ $comp->message}}
                                      </p>
        
                                     </div>
        
                                    @else
                                    <div class="d-inline-block w-100 text-left">
        
                                      <p class="clarf-sides clarf-receiver text-left" style="float:left">
                                          {{ $comp->message}}
                                       </p>
        
                                     </div> 
                                    @endif
                              
                        
    
                            @endforeach
                        </div>
                               
            
                        <!-- sending textarea message -->
                     
                              
                                <div class="col-12" style="position: relative;">
                                    <textarea class="form-control clarfinput mb-0" name="reply" id=""
                                        placeholder="Your Reply!"></textarea>
                                    <button class="clarf-modal-btn d-block" style="bottom: 10px;"><i
                                            class="fa fa-chevron-circle-right"></i></button>
                                </div>
                    

                </form>

                    @endforeach
                    @endforeach



                    <!-- convo for company 1 -->
                   





                 <!-- convo for company 2 -->
                    {{-- <div id="clarf-company-tab-content-2" class="col-12 mt-3 clarf-companies-tabs-content d-none"
                        style="max-height: 250px; overflow-y: auto;">



                    </div> --}}
                    <!-- end convo for company 2  -->




                  


                </div>
                <!-- end row -->


              

            </div>
            <!-- modal body -->
             

            <!-- filter button -->
            <div class="tg-modalfoot">

                <div class="row">

                    <div class="col-xs-6 text-left">
                        <button class="tg-btn" type="button" data-dismiss="modal">Hide</button>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
<!-- end req clarifications modal -->


@endforeach



<!-- end auction modal modal -->
<div class="modal fade tg-servicesmodal tg-categoryModal auctionmodal" tabindex="-1">
    <div class="modal-dialog tg-modaldialog" role="document">
        <div class="modal-content tg-modalcontent">
            <div class="tg-modalhead">
                <h2>Auction Bids</h2>
            </div>
            <div class="tg-modalbody pb-0">

                <!-- bids -->
                <div class="form-row align-items-center  clarf-modal-row auc-modal-row">

                    @foreach ($auction->bids as $bid)
                        
                 

                    <!-- bid 2 -->
                    <div class="col-12">
                        <p class="index-bidcompany mb-0">
                        <i id="auction-company-{{$bid->id}}"
                                class="auction-companies-dropdown cursor-pointer-f fa fa-chevron-down text-success"></i><a
                                class="" href="{{ route('customer.companies.profile', [$bid->user->id]) }}">{{$bid->user->company_name}}</a>
                        </p>


                        <div id="auction-company-content-{{$bid->id}}" class="auction-companies-content d-none">

                            @foreach ($bid->items as $item)
                                
                           
                            <!-- 1st checkbox -->
                            <div class="row px-3">
                                <div class="col-12">
                                    <input type="checkbox" checked="" disabled name="" id="auction-checkbox-1"
                                        class="mr-2 d-inline-block h-auto w-auto font-14">
                                    <label for="" class="d-inline-block font-14"> 
                                        {{$item->auction_item->name}} 
                                        : <span
                                            class="text-success">{{$item->price}}
                                            (AED)</span></label>
                                </div>
                            </div>

                            @endforeach
                            <!-- confirm button -->
                            <div class="row pl-5 mt-1 mb-3">
                                <div class="col-12 text-left">
                                    
                                    <a class="btn btn-success ml-2" style="float:left" href="{{ route('customer.auctions.accept',[$bid->id])}}">Accept This Bid</a>

                                </div>
                            </div>

                        </div>
                        <!-- end company 2 checkboxes -->
                    </div>
                    <!-- end bid 2 -->


                    @endforeach

                </div>
                <!-- end bids-->




            </div>

            <!-- filter button -->
            <div class="tg-modalfoot">

                <div class="row">

                    <div class="col-xs-6 text-left">
                        <button class="tg-btn" type="button" data-dismiss="modal">Hide</button>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
<!-- end auction modal -->



{{-- end modals --}}





@endsection
{{-- end section --}}