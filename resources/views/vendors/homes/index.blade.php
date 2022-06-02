@extends('layouts.vendor-home')



{{-- section --}}
@section('content')
    

    <div class="tg-haslayout">
        <div class="container">
            <div class="row align-items-center row row-cols-1 row-cols-md-2 row-cols-xl-4"
                style="margin-top: 40px; margin-bottom:70px">
    
    
                <div class="col-sm-12 text-center">
                    <h3 class="home-main-heading" data-animate="bounce slower infinite"
                        style="color:white; font-weight: bold;  margin-bottom: 30px;">Business Overview</h3>
                </div>
    
    
                <div class="col">
                    <div class="card radius-10">
                        <div class="card-body custom-analytic-upper">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0">
                                        Requirements<i class="fa fa-info-circle ml-2 cursor-pointer-f text-warning" data-toggle="tooltip" data-placement="right" title="Lorem, ipsum dolor sit amet consectetur adipisicing elit."></i>
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
    
                                    <p class="mb-0 ">Approved Quotations
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
    
                                    <p class="mb-0 text-warning">- Products & Services</p>
    
                                    <h5 class="mb-0  text-white">22,10</h5>
                                </div>
                                <div class="dropdown ms-auto">
                                    <a class="dropdown-toggle dropdown-toggle-nocaret" href="javascript:void(0);"
                                        data-bs-toggle="dropdown"> <i
                                            class='bx bx-dots-horizontal-rounded font-22 text-white'></i>
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
                                    <p class="mb-0">Sales/Pipeline Analytics
                                        <i class="fa fa-info-circle ml-2 cursor-pointer-f text-warning" data-toggle="tooltip" data-placement="right" title="Lorem, ipsum dolor sit amet consectetur adipisicing elit."></i>
                                    </p>
                                    <p class="mb-0 text-warning">-</p>
    
                                    <h5 class="mb-0  text-white">-</h5>
    
                                </div>
                                <div class="dropdown ms-auto">
                                    <a class="dropdown-toggle dropdown-toggle-nocaret" href="javascript:void(0);"
                                        data-bs-toggle="dropdown"> <i
                                            class='bx bx-dots-horizontal-rounded font-22 text-white'></i>
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
                        style="color:white; font-weight: bold; border:2px solid #393939;  margin-bottom: 30px;">Pipeline
                        Overview</h3>
                </div>
    
    
    
                <!-- table -->
                <table class="table custom-home-table">
    
                    <thead style="background-color:whitesmoke;">
    
                        <th style="color:black; width: 140px;">Reference</th>
                        <th style="color:black;">Requirment Title</th>
                        <th style="color:black; width: 140px;">Date</th>
    
                        <th style="width:110px; color:black;">Status</th>
                        <th style="color:black; width: 120px">Clarifications</th>
    
                        <th style="width:100px; color:black">Informations</th>
                        <!-- <th style="color:black;">Evaluation</th> -->
                    </thead>
    
    
    
                    <tbody>
                        

                        @foreach ($quotations as $quotation)
                            
                        <!-- first row -->
                        <tr>
                            <td># {{ $quotation->requirement->serial_number }}</td>
                            <td>{{ $quotation->requirement->title }}</td>
                            <td>{{ (date('d M Y - h:i A', strtotime($quotation->requirement->created_at))) }}</td>
    
                            <td>

                                @if ($quotation->requirement->status == "finished")
                                    <div class="d-flex align-items-center text-success"> <i
                                            class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
                                        <span>{{ $quotation->requirement->status }}</span>
                                    </div>
                                @elseif ($quotation->requirement->status == "canceled")
                                    <div class="d-flex align-items-center text-warning"> <i
                                            class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
                                        <span>{{ $quotation->requirement->status }}</span>
                                    </div>

                                @else
                                    <div class="d-flex align-items-center text-warning"> <i
                                            class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
                                        <span>{{ $quotation->requirement->status }}</span>
                                    </div>
                                @endif
                                
                            </td>
    
                            <td style="text-align: center">
                                <button
                                    style="margin-bottom: 0px; margin-top: 3px; padding: 3px 10px; border: 1px solid #8a6d3b; background:transparent; font-size: 13px; border-radius:3px"
                            data-toggle="modal" data-target=".clarfmodal-{{$quotation->id}}"><i class="lni lni-eye"
                                        style="font-size: 17px"></i></button>
                            </td>
    
                            <td>
                                <a href="{{ route('vendor.requirements.viewRequest', [$quotation->requirement->id]) }}" class="btn text-warning"
                                    style="margin-bottom: 0px; margin-top: 3px; padding: 2px 5px; border: 1px solid #8a6d3b; background:transparent; font-size: 13px">View
                                    Details</a>
                            </td>
    
                            <!-- <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla inventore itaque, cum.</td> -->
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
                        style="color:white; font-weight: bold; border:2px solid #393939;  margin-bottom: 70px;">New
                        Opportunities</h3>
                </div>
    
    
                @php
                    $counter = 1;
                @endphp


                @foreach ($requirements as $requirement)
                
                @if ($counter == 1)
                    
                <div class="col-sm-4">
                    
                    <h4 class="opp-subheadings">General Requirements</h4>
    
                    <img id="db-logo" src="{{ asset('assets/uploads/profile-logos/'.$requirement->user->profile_img) }}" class="card-img-top profile-p" alt="...">
    
                    <!-- card -->
                    <div class="custom-card">
    
                        <p class="card-ref" style="display: inline-block; width: 100%; margin-top: 50px;" id="db-company">
                            {{ $requirement->title }}
                        </p>
    
                        <p class="card-ref" id="db-requirementid" style="width: 42%; font-size:14px; display: inline-block;">
                            # {{ $requirement->serial_number }}
                        </p>
    
    
                        <input type="hidden" name="id" id="db-id">
    
    
                        <h5 class="custom-card-subheading" style="font-size:14px;">{{ date('d M Y', strtotime($requirement->created_at)) }}</h5>
    
                        <p class="card-requirements" id="db-requirement" style="height: 120px; overflow:hidden">
                            {{ $requirement->desc }}
                        </p>
    
    
                        <a href="javascript:void(0);" class="custom-card-submit" data-toggle="modal"
                            data-target=".requirement-items-{{$requirement->id}}">
                            Submit Quotation
                        </a>
    
    
                        <a href="{{ route('vendor.requirements.browse') }}" class="custom-card-view">
                            View All
                        </a>
    
    
                        <div>
                            <p class="text-right" style="margin-bottom:0px; margin-top:20px; padding-right:20px;">
                                {{-- <i id="db-card-slide" class="bx bx-right-arrow-circle slide-icon-home"
                                    style="font-size: 30px"></i> --}}
                            </p>
                        </div>
    
                    </div>
                    <!-- end card -->
    
                </div>


                @php
                    $counter++;
                @endphp

                @endif

                

                @endforeach
                {{-- end foreach --}}
    
    
                <div class="col-sm-4">
    
                </div>

                @php
                    $counter = 1;
                @endphp
    
                @foreach ($requirements as $requirement)
                
                @if ($counter == 2)
                
                <div class="col-sm-4">
                
                    <h4 class="opp-subheadings">Direct Business</h4>
                
                    <img id="db-logo" src="{{ asset('assets/uploads/profile-logos/'.$requirement->user->profile_img) }}"
                        class="card-img-top profile-p" alt="...">
                
                    <!-- card -->
                    <div class="custom-card">
                
                        <p class="card-ref" style="display: inline-block; width: 100%; margin-top: 50px;" id="db-company">
                            {{ $requirement->title }}
                        </p>
                
                        <p class="card-ref" id="db-requirementid" style="width: 42%; font-size:14px; display: inline-block;">
                            # {{ $requirement->serial_number }}
                        </p>
                
                
                        <input type="hidden" name="id" id="db-id">
                
                
                        <h5 class="custom-card-subheading" style="font-size:14px;">
                            {{ date('d M Y', strtotime($requirement->created_at)) }}</h5>
                
                        <p class="card-requirements" id="db-requirement" style="height: 120px; overflow:hidden">
                            {{ $requirement->desc }}
                        </p>
                
                
                        <a href="javascript:void(0);" class="custom-card-submit" data-toggle="modal" data-target=".requirement-items-{{$requirement->id}}">
                            Submit Quotation
                        </a>
                
                
                        <a href="{{ route('vendor.requirements.browse') }}" class="custom-card-view">
                            View All
                        </a>
                
                
                        <div>
                            <p class="text-right" style="margin-bottom:0px; margin-top:20px; padding-right:20px;">
                                {{-- <i id="db-card-slide" class="bx bx-right-arrow-circle slide-icon-home"
                                                    style="font-size: 30px"></i> --}}
                            </p>
                        </div>
                
                    </div>
                    <!-- end card -->
                
                </div>
                
                
                
                @endif

                
                @php
                $counter++;
                @endphp
                
                
                @endforeach
                {{-- end foreach --}}
    
    
            </div>
        </div>
    </div>
    
    
    
    
    
    
    
    
    <!-- Highest Rated Freelancers -->
    <div class="tg-haslayout section padding-top-65 padding-bottom-70 full-width-carousel-fix"
        style="background-color: rgb(245, 245, 245);">
        <div class="container">
            <div class="row">
    
                <div class="col-12 text-center">
                    <h3 class="home-main-heading" data-animate="bounce slower infinite"
                        style="color:black; border:2px solid #393939; font-weight: bold;  margin-bottom: 70px;">High Demand
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
                                        <a href="javascript:void(0);"><img src="{{ asset('assets/prev-images/category.png') }}" alt=""></a>
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
                                                <i class="lni lni-calendar mr-1 text-warning-f"></i> <label
                                                    for="monthinput-1"
                                                    class="text-warning-f d-inline font-weight-bold">{{ date('M') }}</label> |
                                                <i class="lni lni-pencil mr-1"></i> {{ $category->requirement_items->where('created_at', '>=', date('Y-m-01'))->count() }}
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
    
    
    
    
    
                <div class="col-12 text-center ">
                    <h3 class="home-main-heading" data-animate="bounce slower infinite"
                        style="font-weight: bold; border:2px solid #393939; color:white;  margin-bottom: 70px;">Blogs and
                        Articles
                    </h3>
                </div>
    
    
                <div class="col-xl-12">
                    <div class="blog-carousel">
                
                        @foreach ($blogs as $blog)
                
                        <a href="{{ route('vendor.blogs.view', [$blog->id]) }}" class="blog-compact-item-container">
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
                    <a href="{{ route('vendor.blogs.browse') }}"
                        class="button button-sliding-icon ripple-effect custom-view-profile blogsviewall-button">View
                        More<i class="icon-material-outline-arrow-right-alt"></i></a>
                
                </div>

            </div>
        </div>
    </div>
    <!-- Recent Blog Posts / End -->
    
    
    
    













    {{-- ---------------------------- --}}
    {{-- modals --}}

  
@foreach ($requirements as $requirement)
    
{{-- quotation modal --}}
<div class="modal fade requirement-items-{{$requirement->id}}" tabindex="-1">
    <div class="modal-dialog tg-modaldialog" role="document">
        <div class="modal-content tg-modalcontent">
            <div class="tg-modalhead">
                <h2>Send Quotation </h2>
                <span class="tg-selecteditems">{{ $requirement->items->count() }} Requirements</span>
            </div>
        <form action="{{route('vendor.requirements.send.quotation')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="tg-modalbody">
              
                    <div class="tg-columnstyle">

                        <div class="tg-column table-caption">


                            <table class="table custom-quo-table"
                                style="border: 1px solid lightgrey; margin-bottom: 20px;">
                                <tbody>

                                    <thead>


                                        <th>
                                            Name
                                        </th>

                                        <th>
                                            Category
                                        </th>

                                        <th class="text-center">
                                            Type
                                        </th>

                                        <th class="text-center" style="width: 100px;">
                                            Quantity
                                        </th>

                                        <th class="text-center" style="width: 130px;">
                                            Budget (AED)
                                        </th>



                                    </thead>
                                    @foreach ($requirement->items as $item)
                                        
                                  
                                    <!-- tr -->
                                    <tr>


                                        <td>

                                            <div class="tg-contentbox">
                                                <!-- <a class="tg-tag tg-featuredtag" href="#"></a> -->
                                                <div class="tg-title">
                                                    <h3><a class="font-14" style="font-size:14px !important"
                                                    href="#">{{$item->name}}</a></h3>
                                                </div>
                                                <span> </span>
                                            </div>
                                        </td>

                                        <!-- category / subcategory -->
                                        <td><span class="font-14" style="color:#333">{{$item->category->name}} > {{$item->subcategory->name}}</span></td>




                                        <td class="valign-middle text-center">
                                            <button disabled="" class="btn-sm btn-warning">{{$item->type->name}}</button>
                                        </td>


                                        <!-- quantity + measuringunit -->
                                        <td class="valign-middle text-center"><span class="text-black-f font-13">{{$item->quantity}}
                                                {{-- ({{$item->measuringunit->name}}) --}}
                                            </span></td>

                                        <!-- Budget -->
                                        <td class="valign-middle text-center"><span class="text-black-f font-13">{{$item->budget_from}} -
                                            {{$item->budget_to}}</span></td>



                                    </tr>
                                    <!-- end table row -->

                                    @endforeach

                                   


                                </tbody>
                            </table>


                            <div class="row align-items-end mb-0">

                                <div class="col-12 text-left">
                                    <a href="#" class="btn btn-none confirm-quotation-edit download-button" id="download-button-{{ $counter }}"
                                        style="margin-left: 0px; background-color: indianred; border-color:indianred; color:white; padding: 8px 15px; font-weight: 500; border-radius: 5px !important">
                                        View Attachments<i class="fa fa-download ml-2"></i>
                                    </a>
                                </div>

                            </div>

                        </div>
                    </div>

                    <div class="form-group tg-inpuicon" style="margin-top: 0px;">

                        <!-- total price  bild price -->
                        <!-- <h3 style="margin: 0px 0px 5px 0px"><i class="fa fa-circle quo-circle quo-circle-yellow"></i> Bid Price For Checked Requirements: <span class="text-warning-f">0 AED</span></h3> -->

                        <hr>

                        <!-- offer price (as whole) -->
                        <!-- <div class="row no-gutters align-items-center mb-4">
								<div class="col-xs-auto">
									
									<h3 style="margin: 0px 15px 0px 0px" style="display:inline !important;"><i class="fa fa-circle quo-circle"></i>Your Offer Price:</h3>

								</div>
								<div class="col-xs-auto">
									<span class="text-warning-f"> <input class="bidprice-input mb-0" type="number" name="bidprice" id=""></span>
									
								</div>

								
							</div> -->
                        <!-- end inner row -->


                        <div class="tg-companyfeaturebox tg-languages pt-0">
                            <div class="tg-companyfeaturetitle">

                                <h3 style="margin: 0px 0px 0px">Your Quotation</h3>

                            </div>

                        <input type="hidden" name="requirement_id" value="{{$requirement->id}}">
                            <div class="tg-dashboardservices pb-5">


                                @foreach ($requirement->items as $item)
                                <!-- first requirement (r) -->
                                <div class="tg-dashboardservice custom-pr-quotations">

                                    <!-- requirements check -->
                                    <div class="tg-servicetitle" style="padding:18px 20px;">
                                        <h2>
                                        <input class="" type="checkbox" name="item-{{$item->id}}" id="item-{{$item->id}}" style="width: auto; height: auto;">
                                            <label class="d-inline" for="item-{{$item->id}}">{{$item->name}}
                                            </label>
                                        </h2>
                                    </div>





                                    <div class="tg-btntimeedit">

                                        <p style="padding: 8px 20px; margin-bottom: 0px;">
                                            <input class="d-inline" type="number" name="quantity({{$item->id}})" id="quo-quantity"
                                                style="width: 49%; margin-bottom:0px;" placeholder="Quantity" >
                                            <input class="d-inline" type="text" name="price({{$item->id}})" id="quo-price"
                                                style="width: 49%; margin-bottom:0px;" placeholder="Price">
                                        </p>

                                    </div>
                                </div>
                                <!-- end first req -->

                                @endforeach






                            </div>
                        </div>
                        <!-- end quootation -->


                        <h3 style="margin: 0px 0px 15px">Attachment</h3>

                        <input type="file" name="doc" class=" attach-input" id="quot-attach">

                        <!-- <i class="lnr lnr-magnifier"></i> -->
                        <textarea name="note" id="" cols="30" class="form-control" rows="6"
                            placeholder="Additional Note!"></textarea>



                        <!-- hide from competitors -->
                        <span class="tg-checkbox" style="margin-top: 15px;">
                        <input type="checkbox" id="tg-hidequotation-{{$item->id}}" name="hide" value="hide">
                            <label for="tg-hidequotation-{{$item->id}}"><span class="text-warning-f">Hide This Quotation From Other
                                    Competitors</span>
                            </label>
                        </span>



                        <div class="row w-100 no-gutters mt-4 align-items-center" style="margin-top: 65px !important">
                            <div class="col-3">
                                <!-- clarifications -->
                                <span class="tg-checkbox pb-0">
                                <input type="checkbox" id="clarf-quo-checkbox-{{ $requirement->id }}" name="clarification_check"
                                value="checked" class="clarf-quo-checkbox">
                                    <label for="clarf-quo-checkbox-{{ $requirement->id }}"><span class="text-warning-f">Send
                                            Clarification</span>
                                    </label>
                                </span>
                            </div>
                            <div class="col-9">
                                <hr class="d-inline-block w-100 my-0">
                            </div>
                        </div>



                        <!-- <i class="lnr lnr-magnifier"></i> -->
                        <textarea name="reply" id="clarf-input-{{ $requirement->id }}" cols="30" class="clarf-input clarf-items form-control mt-4 d-none"
                            rows="6" placeholder="Clarification Message"></textarea>

                        <p class="clarf-items text-left mb-0 mt-3 d-none" id="clarf-button-{{ $requirement->id }}">
                            <button type="submit" class="btn btn-success" style="padding: 8px 40px;">Send</button>
                        </p>

                    </div>
               
            </div>
            <div class="tg-modalfoot">
                <button class="tg-btn" type="submit">Submit</button>
                <a class="tg-btn quotation-view-req-button" href="{{ route('vendor.requirements.view', [$requirement->id]) }}">View Requirement</a>

            </div>

        </form>
        </div>
    </div>
</div>

{{-- end quotation modal --}}


@php
    $counter++;
@endphp


@endforeach
    
    
    
    
    
    
    
    
    
    
    
    
    
    <!-- require filters modal -->
    <div class="modal fade tg-servicesmodal tg-categoryModal filterdatemodal" tabindex="-1">
        <div class="modal-dialog tg-modaldialog" role="document">
            <div class="modal-content tg-modalcontent">
                <div class="tg-modalhead">
                    <h2>Overview Filter</h2>
                </div>
                <div class="tg-modalbody">
    
                    <div class="form-row align-items-center reqfilter-modal-row">
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
    
    
    


    
    
    
    @foreach ($quotations as $quot)
        
    
    <!-- requirement clarafications modal -->
<div class="modal fade clarfmodal-{{$quot->id}}" tabindex="-1">
        <div class="modal-dialog tg-modaldialog" role="document">
            <div class="modal-content tg-modalcontent">
                <div class="tg-modalhead">
                    <h2>Clarifications</h2>
                </div>
                <div class="tg-modalbody pb-4">
    
                    <!-- clarf 1 -->
                    <div class="form-row clarf-modal-row mb-0">
                        <div class="col-12">
                            <h5><img class="clarflogo"src="{{ asset('assets/uploads/profile-logos/'.$quot->user->profile_img) }}" alt="">{{$quot->user->company_name}}</h5>
                        </div>
    
                        <div class="col-12 mt-3" style="max-height: 250px; overflow-y: auto;">
    
    
                            @foreach ($quot->clarifications as $reply)
                            
                      @if ($reply->user_id == session('user_id'))
                      <div class="d-block text-right">
                        <p class="clarf-sides clarf-sender text-left">
                           {{ $reply->message}}
                        </p>
                    </div>
                      @else
                      <div class="d-block text-left">
                        <p class="clarf-sides clarf-receiver text-left">
                            {{ $reply->message}}
                         </p>
                    </div> 
                      @endif
                       


                      
                        @endforeach
    
                        </div>
                        <!-- end col 12 -->
                        <form class="col-12" action="{{ route('vendor.requirements.send.clarification') }}" method="post">
                            @csrf
                                <input type="hidden" name="quotation_id" value="{{$quot->id}}">
                                <div class="col-12" style="position: relative;">
                                    <textarea class="form-control clarfinput mb-0" name="reply" id=""
                                        placeholder="Your Reply!"></textarea>
                                    <button class="clarf-modal-btn" style="bottom: 10px;"><i
                                            class="fa fa-chevron-circle-right"></i></button>
                                </div>
                            
                    </form>
    
                    </div>
                    <!-- end clarf 1 -->
    
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
    <!-- end clarf modal -->


    @endforeach



    {{-- end modals --}}
    {{-- ----------------------------- --}}




@endsection
{{-- end section --}}