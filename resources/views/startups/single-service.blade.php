@extends('layouts.startups')




{{-- section --}}
@section('content')




{{-- main --}}
<main id="tg-main" class="tg-main tg-paddingzero tg-haslayout"
    style="background-color: black; position:relative; background-image: url();">


    {{-- layout --}}
    <div class="tg-main-section tg-haslayout pr-layout" style="padding:0px 0px">
        <div class="container">
            <div class="row align-items-center pt-4" style="min-height: 92vh">

                <div class="col-6 text-left mt-4">
                    <a href="{{ route('startup.home') }}" class="startuphomebutton">
                        Home <i class="fa fa-home"></i>
                    </a>
                </div>

                <!-- tips and catalog buttons -->
                <div class="col-6 text-right mt-4">
                    <button class="tipsbutton">
                        Tips <i class="fa fa-info-circle"></i>
                    </button>

                    <button class="catalogbutton">
                        Catalogs <i class="fa fa-archive"></i>
                    </button>
                </div>





                <!-- top rated -->
                <div class="col-xl-12"
                    style="margin-bottom: 100px; margin-top: 40px; border-bottom: 1px solid lightgrey;">

                    <div class="col-12 text-left">
                        <h3 class="startup-main-heading" data-animate="bounce slower infinite">Top Rated</h3>
                    </div>


                    <!-- carousal for top rated companies -->
                    <div class="blog-carousel">

                        <!-- card  -->
                        <div class="blog-compact-item-container">
                            <div class="blog-compact-item cursor-auto">
                                <img src="{{ asset('assets/images/blog-04a.jpg') }}" alt="">
                                <span class="blog-item-tag text-center-f"
                                    style="padding:2px 10px !important; right:32px; left: auto">
                                    <div class="star-rating star-rating-custom dashboard-stars-small mb-0 mt-1"
                                        data-rating="4.5" style="display:inline-block; text-align: center;"></div>

                                    <div class="sales-box">44 Sales</div>
                                </span>
                                <div class="blog-compact-item-content startup-card-content">


                                    <!-- img -->
                                    <img src="{{ asset('assets/prev-images/demologo6.jpg') }}" alt="">

                                    <!-- end img -->

                                    <!-- sale -->
                                    <ul class="blog-post-tags mb-2">
                                        <li class="font-13" style="background-color: transparent; border-color:white">
                                            <a href="{{ route('startup.companies.profile', [1]) }}" target="_blank"
                                                class="text-white-f">View Profile</a>
                                        </li>
                                        <li class="font-13"
                                            style="background-color: indianred; border-color:indianred;">
                                            <a data-toggle="modal" data-target=".postreqmodal"
                                                class="text-white-f cursor-pointer">Post Requirement</a>
                                        </li>
                                    </ul>

                                    <!-- name -->
                                    <h3>Orooma Ltd.</h3>

                                    <!-- desc -->
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur sunt veniam
                                        quibusdam quas accusantium obcaecati molestias aliquid eveniet!</p>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->







                        <!-- card  -->
                        <div class="blog-compact-item-container">
                            <div class="blog-compact-item cursor-auto">
                                <img src="{{ asset('assets/images/blog-04a.jpg') }}" alt="">
                                <span class="blog-item-tag text-center-f"
                                    style="padding:2px 10px !important; right:32px; left: auto">
                                    <div class="star-rating star-rating-custom dashboard-stars-small mb-0 mt-1"
                                        data-rating="4" style="display:inline-block; text-align: center;"></div>

                                    <div class="sales-box">30 Sales</div>
                                </span>
                                <div class="blog-compact-item-content startup-card-content">


                                    <!-- img -->
                                    <img src="{{ asset('assets/prev-images/demologo4.png') }}" alt="">

                                    <!-- end img -->

                                    <!-- sale -->
                                    <ul class="blog-post-tags mb-2">
                                        <li class="font-13" style="background-color: transparent; border-color:white">
                                            <a href="{{ route('startup.companies.profile', [1]) }}" target="_blank"
                                                class="text-white-f">View Profile</a>
                                        </li>
                                        <li class="font-13"
                                            style="background-color: indianred; border-color:indianred;">
                                            <a data-toggle="modal" data-target=".postreqmodal"
                                                class="text-white-f cursor-pointer">Post Requirement</a>
                                        </li>
                                    </ul>

                                    <!-- name -->
                                    <h3>Talk Business</h3>

                                    <!-- desc -->
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur sunt veniam
                                        quibusdam quas accusantium obcaecati molestias aliquid eveniet!</p>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->








                        <!-- card  -->
                        <div class="blog-compact-item-container">
                            <div class="blog-compact-item cursor-auto">
                                <img src="{{ asset('assets/images/blog-04a.jpg') }}" alt="">
                                <span class="blog-item-tag text-center-f"
                                    style="padding:2px 10px !important; right:32px; left: auto">
                                    <div class="star-rating star-rating-custom dashboard-stars-small mb-0 mt-1"
                                        data-rating="4" style="display:inline-block; text-align: center;"></div>

                                    <div class="sales-box">50 Sales</div>
                                </span>
                                <div class="blog-compact-item-content startup-card-content">


                                    <!-- img -->
                                    <img src="{{ asset('assets/prev-images/demologo1.png') }}" alt="">

                                    <!-- end img -->

                                    <!-- sale -->
                                    <ul class="blog-post-tags mb-2">
                                        <li class="font-13" style="background-color: transparent; border-color:white">
                                            <a href="{{ route('startup.companies.profile', [1]) }}" target="_blank"
                                                class="text-white-f">View Profile</a>
                                        </li>
                                        <li class="font-13"
                                            style="background-color: indianred; border-color:indianred;">
                                            <a data-toggle="modal" data-target=".postreqmodal"
                                                class="text-white-f cursor-pointer">Post Requirement</a>
                                        </li>
                                    </ul>

                                    <!-- name -->
                                    <h3>Starlad Company</h3>

                                    <!-- desc -->
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur sunt veniam
                                        quibusdam quas accusantium obcaecati molestias aliquid eveniet!</p>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->





                        <!-- card  -->
                        <div class="blog-compact-item-container">
                            <div class="blog-compact-item cursor-auto">
                                <img src="{{ asset('assets/images/blog-04a.jpg') }}" alt="">
                                <span class="blog-item-tag text-center-f"
                                    style="padding:2px 10px !important; right:32px; left: auto">
                                    <div class="star-rating star-rating-custom dashboard-stars-small mb-0 mt-1"
                                        data-rating="4" style="display:inline-block; text-align: center;"></div>

                                    <div class="sales-box">24 Sales</div>
                                </span>
                                <div class="blog-compact-item-content startup-card-content">


                                    <!-- img -->
                                    <img src="{{ asset('assets/prev-images/demologo3.png') }}" alt="">

                                    <!-- end img -->

                                    <!-- sale -->
                                    <ul class="blog-post-tags mb-2">
                                        <li class="font-13" style="background-color: transparent; border-color:white">
                                            <a href="{{ route('startup.companies.profile', [1]) }}" target="_blank"
                                                class="text-white-f">View Profile</a>
                                        </li>
                                        <li class="font-13"
                                            style="background-color: indianred; border-color:indianred;">
                                            <a data-toggle="modal" data-target=".postreqmodal"
                                                class="text-white-f cursor-pointer">Post Requirement</a>
                                        </li>
                                    </ul>

                                    <!-- name -->
                                    <h3>Paperwork Eli</h3>

                                    <!-- desc -->
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur sunt veniam
                                        quibusdam quas accusantium obcaecati molestias aliquid eveniet!</p>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->



                    </div>
                    <!-- end carousal -->

                </div>
                <!-- end col 12 -->
















                <!-- top sellers column -->
                <div class="col-12" style="margin-bottom: 100px; border-bottom: 1px solid lightgrey;">



                    <div class="col-12 text-left">
                        <h3 class="startup-main-heading" data-animate="bounce slower infinite">Best Sellers</h3>
                    </div>


                    <!-- carousal for top rated companies -->
                    <div class="blog-carousel">

                        <!-- card  -->
                        <div class="blog-compact-item-container">
                            <div class="blog-compact-item cursor-auto">
                                <img src="{{ asset('assets/images/blog-04a.jpg') }}" alt="">
                                <span class="blog-item-tag text-center-f"
                                    style="padding:2px 10px !important; right:32px; left: auto">
                                    <div class="star-rating star-rating-custom dashboard-stars-small mb-0 mt-1"
                                        data-rating="4" style="display:inline-block; text-align: center;"></div>

                                    <div class="sales-box">120 Sales</div>
                                </span>
                                <div class="blog-compact-item-content startup-card-content">


                                    <!-- img -->
                                    <img src="{{ asset('assets/prev-images/demologo5.png') }}" alt="">

                                    <!-- end img -->

                                    <!-- sale -->
                                    <ul class="blog-post-tags mb-2">
                                        <li class="font-13" style="background-color: transparent; border-color:white">
                                            <a href="{{ route('startup.companies.profile', [1]) }}" target="_blank"
                                                class="text-white-f">View Profile</a>
                                        </li>
                                        <li class="font-13"
                                            style="background-color: indianred; border-color:indianred;">
                                            <a data-toggle="modal" data-target=".postreqmodal"
                                                class="text-white-f cursor-pointer">Post Requirement</a>
                                        </li>
                                    </ul>

                                    <!-- name -->
                                    <h3>EagleNurr</h3>

                                    <!-- desc -->
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur sunt veniam
                                        quibusdam quas
                                        accusantium obcaecati molestias aliquid eveniet!</p>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->







                        <!-- card  -->
                        <div class="blog-compact-item-container">
                            <div class="blog-compact-item cursor-auto">
                                <img src="{{ asset('assets/images/blog-04a.jpg') }}" alt="">
                                <span class="blog-item-tag text-center-f"
                                    style="padding:2px 10px !important; right:32px; left: auto">
                                    <div class="star-rating star-rating-custom dashboard-stars-small mb-0 mt-1"
                                        data-rating="3" style="display:inline-block; text-align: center;"></div>

                                    <div class="sales-box">90 Sales</div>
                                </span>
                                <div class="blog-compact-item-content startup-card-content">


                                    <!-- img -->
                                    <img src="{{ asset('assets/prev-images/demologo2.jpg') }}" alt="">

                                    <!-- end img -->

                                    <!-- sale -->
                                    <ul class="blog-post-tags mb-2">
                                        <li class="font-13" style="background-color: transparent; border-color:white">
                                            <a href="{{ route('startup.companies.profile', [1]) }}" target="_blank"
                                                class="text-white-f">View Profile</a>
                                        </li>
                                        <li class="font-13"
                                            style="background-color: indianred; border-color:indianred;">
                                            <a data-toggle="modal" data-target=".postreqmodal"
                                                class="text-white-f cursor-pointer">Post Requirement</a>
                                        </li>
                                    </ul>

                                    <!-- name -->
                                    <h3>Talk Business</h3>

                                    <!-- desc -->
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur sunt veniam
                                        quibusdam quas
                                        accusantium obcaecati molestias aliquid eveniet!</p>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->








                        <!-- card  -->
                        <div class="blog-compact-item-container">
                            <div class="blog-compact-item cursor-auto">
                                <img src="{{ asset('assets/images/blog-04a.jpg') }}" alt="">
                                <span class="blog-item-tag text-center-f"
                                    style="padding:2px 10px !important; right:32px; left: auto">
                                    <div class="star-rating star-rating-custom dashboard-stars-small mb-0 mt-1"
                                        data-rating="3.5" style="display:inline-block; text-align: center;"></div>

                                    <div class="sales-box">86 Sales</div>
                                </span>
                                <div class="blog-compact-item-content startup-card-content">


                                    <!-- img -->
                                    <img src="{{ asset('assets/prev-images/demologo1.png') }}" alt="">

                                    <!-- end img -->

                                    <!-- sale -->
                                    <ul class="blog-post-tags mb-2">
                                        <li class="font-13" style="background-color: transparent; border-color:white">
                                            <a href="{{ route('startup.companies.profile', [1]) }}" target="_blank"
                                                class="text-white-f">View Profile</a>
                                        </li>
                                        <li class="font-13"
                                            style="background-color: indianred; border-color:indianred;">
                                            <a data-toggle="modal" data-target=".postreqmodal"
                                                class="text-white-f cursor-pointer">Post Requirement</a>
                                        </li>
                                    </ul>

                                    <!-- name -->
                                    <h3>Starlad Company</h3>

                                    <!-- desc -->
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur sunt veniam
                                        quibusdam quas
                                        accusantium obcaecati molestias aliquid eveniet!</p>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->





                        <!-- card  -->
                        <div class="blog-compact-item-container">
                            <div class="blog-compact-item cursor-auto">
                                <img src="{{ asset('assets/images/blog-04a.jpg') }}" alt="">
                                <span class="blog-item-tag text-center-f"
                                    style="padding:2px 10px !important; right:32px; left: auto">
                                    <div class="star-rating star-rating-custom dashboard-stars-small mb-0 mt-1"
                                        data-rating="3" style="display:inline-block; text-align: center;"></div>

                                    <div class="sales-box">67 Sales</div>
                                </span>
                                <div class="blog-compact-item-content startup-card-content">


                                    <!-- img -->
                                    <img src="{{ asset('assets/prev-images/demologo3.png') }}" alt="">

                                    <!-- end img -->

                                    <!-- sale -->
                                    <ul class="blog-post-tags mb-2">
                                        <li class="font-13" style="background-color: transparent; border-color:white">
                                            <a href="{{ route('startup.companies.profile', [1]) }}" target="_blank"
                                                class="text-white-f">View Profile</a>
                                        </li>
                                        <li class="font-13"
                                            style="background-color: indianred; border-color:indianred;">
                                            <a data-toggle="modal" data-target=".postreqmodal"
                                                class="text-white-f cursor-pointer">Post Requirement</a>
                                        </li>
                                    </ul>

                                    <!-- name -->
                                    <h3>Paperwork Eli</h3>

                                    <!-- desc -->
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur sunt veniam
                                        quibusdam quas
                                        accusantium obcaecati molestias aliquid eveniet!</p>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->



                    </div>
                    <!-- end carousal -->

                </div>
                <!-- end col 12 -->

            </div>
            <!-- end row -->

        </div>
    </div>
    {{-- end layout --}}
</main>
{{-- end main --}}










{{-- modals --}}
<!-- post req modal -->
<div class="modal fade tg-categoryModal postreqmodal" tabindex="-1">
    <div class="modal-dialog tg-modaldialog" role="document">
        <div class="modal-content tg-modalcontent">
            <div class="tg-modalhead">
                <h2>Post Requirement</h2>
                <span class="tg-selecteditems"></span>
            </div>
            <div class="tg-modalbody">

                <form class="tg-formbookappointment">

                    <div class="row entering-rows">

                        <!-- title -->
                        <div class="col-xs-12 col-lg-6">
                            <div class="form-group mb-2">
                                <input type="text" name="title" class="form-control startupinputs" placeholder="Title">
                            </div>
                        </div>

                        <!-- desc -->
                        <div class="col-xs-12 col-lg-8">
                            <div class="form-group">
                                <textarea rows="6" class="form-control startupinputs"
                                    placeholder="Description"></textarea>
                            </div>
                        </div>


                        <!-- attach -->
                        <div class="col-xs-12 col-lg-12 mb-3">
                            <label class="attachments-button" for="deal-attach" style="margin: 0px 0px 15px"><i
                                    class="fa fa-files-o mr-3"></i>Upload Attachments</label>

                            <input class="d-none" type="file" name="deal-attach" class=" attach-input" id="deal-attach"
                                style="border:1px solid lightgrey; border-radius: 5px; padding: 7px 10px; margin-left: 15px;">
                        </div>
                    </div>
                    <!-- end row -->




                    <!-- row 2 -->
                    <div class="row entering-rows">


                        <div class="col-xs-12">
                            <div class="form-group">
                                <h3 class="mt-4">New Item</h3>
                            </div>
                        </div>



                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <div class="form-group">
                                <span class="tg-select">
                                    <select class="startupinputs">
                                        <option selected>Category</option>
                                        <option>Office & Stationery</option>
                                        <option>Consumer Electronics</option>
                                        <option>Construction & Hardware</option>
                                        <option>Health & Wellness</option>
                                        <option>Sports & Fitness</option>
                                    </select>
                                </span>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <div class="form-group">
                                <span class="tg-select">
                                    <select class="startupinputs">
                                        <option selected="">Subcategory</option>
                                        <option>Weights & Resistance Training</option>
                                        <option>Fitness Accessories</option>
                                        <option>Camping Accessories</option>
                                        <option>Exercise Machines</option>
                                        <option>Ball Games</option>
                                    </select>
                                </span>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <div class="form-group">
                                <span class="tg-select">
                                    <select placeholder="Demo" class="startupinputs">

                                        <option selected="">Requirement type</option>
                                        <option>Service</option>
                                        <option>Product</option>
                                        <option>Turnkey</option>

                                    </select>
                                </span>
                            </div>
                        </div>


                        <!-- serial generated by us  -->
                        <input type="hidden" name="serialnumber" value="NL33221">

                        <!-- name -->
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control startupinputs" placeholder="Name">
                            </div>
                        </div>


                        <!-- measuringunit -->
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <div class="form-group">
                                <span class="tg-select">
                                    <select>
                                        <option selected="">Measuring Unit</option>
                                        <option>Piece</option>
                                        <option>Gram</option>
                                        <option>Kilogram</option>
                                        <option>Item</option>
                                    </select>
                                </span>
                            </div>
                        </div>



                        <!-- quantity -->
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <div class="form-group">
                                <input type="number" min="0" id="measuringunit-input" name="quantity"
                                    class="form-control startupinputs" placeholder="Quantity">
                            </div>
                        </div>



                        <div class="col-xs-12 col-md-12 col-md-6 col-lg-8">
                            <textarea class="startupinputs" placeholder="Description"></textarea>
                        </div>

                        <div class="col-xs-12 col-md-12 col-md-6 col-lg-4">
                            <textarea class="startupinputs" placeholder="Other Comments"></textarea>
                        </div>


                        <!-- budget -->
                        <div class="col-12 col-sm-4 col-md-3 col-lg-2 text-left" style="margin-top: 30px;">
                            <div class="form-group">
                                <input type="checkbox" name="text" class="mr-2 w-auto h-auto" id="budget-checkbox">
                                <label class="d-inline-block" for="budget-checkbox"
                                    style="font-size: 15px; text-decoration: underline;">Budget
                                    Limit</label>
                            </div>
                        </div>

                        <div class="col-12 col-sm-8 col-md-9 col-lg-10">
                            <fieldset class="budget-field d-none border-0 mt-3">
                                <!-- <h4 style="margin-top: 15px;">Budget Limit  </h4> -->

                                <div id="tg-filterbysalary" class="tg-filterbysalary tg-themerangeslider"></div>
                                <div class="tg-amountbox">
                                    <span>range: </span>
                                    <input class="form-control text-center budget-input startupinputs"
                                        id="tg-salaryamount" type="text" readonly>
                                </div>


                            </fieldset>
                        </div>
                        <!-- end budget  -->



                        <div class="col-xs-12 col-md-12 mt-0 col-md-12 col-lg-12">


                            <a class="btn btn-none mt-1" style="background-color: black; color:white; padding:8px 20px;"
                                href="javascript:void(0);">Add Item</a>
                        </div>

                    </div>
                    <!-- end row -->





                    <!-- row 3 -->
                    <div class="row mt-5 entering-rows">

                        <div class="col-xs-12 mb-3">
                            <hr>
                        </div>

                        <!-- wrapper column -->
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mb-5" style="margin-bottom: 30px;">


                            <div class="tg-dashboardservices">
                                <div class="tg-dashboardservice">
                                    <div class="tg-servicetitle">
                                        <h2>

                                            <a href="javascript:void(0);"> Trademail</a>
                                            <span>12</span>
                                        </h2>
                                    </div>
                                    <div class="tg-btntimeedit">
                                        <span>2,000 - 4,000 (AED)</span>
                                        <button class="tg-btnedite"><i class="lnr lnr-pencil"></i></button>
                                        <button class="tg-btndel"><i class="lnr lnr-trash"></i></button>
                                    </div>
                                </div>
                                <div class="tg-dashboardservice">
                                    <div class="tg-servicetitle">
                                        <h2><a href="javascript:void(0);">Exericxe Ball </a> <span>30</span></h2>
                                    </div>
                                    <div class="tg-btntimeedit">
                                        <span>2,000 - 3,000 (AED)</span>
                                        <button class="tg-btnedite"><i class="lnr lnr-pencil"></i></button>
                                        <button class="tg-btndel"><i class="lnr lnr-trash"></i></button>
                                    </div>
                                </div>
                                <div class="tg-dashboardservice">
                                    <div class="tg-servicetitle">
                                        <h2><a href="javascript:void(0);">Weights</a> <span>123</span></h2>
                                    </div>
                                    <div class="tg-btntimeedit">
                                        <span>3,000 - 4,500 (AED)</span>
                                        <button class="tg-btnedite"><i class="lnr lnr-pencil"></i></button>
                                        <button class="tg-btndel"><i class="lnr lnr-trash"></i></button>
                                    </div>
                                </div>
                                <div class="tg-dashboardservice">
                                    <div class="tg-servicetitle">
                                        <h2><a href="javascript:void(0);">Resisting belt</a> <span>24</span></h2>
                                    </div>
                                    <div class="tg-btntimeedit">

                                        <span>7,000 - 8,000 (AED)</span>

                                        <button class="tg-btnedite"><i class="lnr lnr-pencil"></i></button>
                                        <button class="tg-btndel"><i class="lnr lnr-trash"></i></button>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>
                    <!-- end row 3 -->




                    <!-- row 4 -->
                    <div id="review-row" class="row d-none">

                        <!-- summary -->
                        <div class="col-xs-12">
                            <div class="form-group">
                                <div class="tg-heading">
                                    <h3> Summary</h3>
                                </div>
                                <div class="tg-reminderemail">
                                    <span>Requirement ID: 1558AL</span>
                                </div>
                            </div>

                            <div class="form-group">

                                <ul class="tg-appointmentsummry pl-0">
                                    <li style="background:whitesmoke;">
                                        <strong>Date:</strong>
                                        <span>3 August 2021</span>
                                    </li>
                                    <li style="background:white;">
                                        <strong>Time:</strong>
                                        <span>12:00 PM</span>
                                    </li>
                                    <li style="background:whitesmoke;">
                                        <strong>Post by:</strong>
                                        <span>Truth &amp; Company</span>
                                    </li>
                                    <li style="background:white;">
                                        <strong>Items:</strong>
                                        <span style="max-height: 56px; overflow-y: auto;">Website Development / UI/UX
                                            Design</span>
                                    </li>



                                    <li style="background:whitesmoke;">
                                        <strong>Description:</strong>
                                        <span>
                                            <div class="tg-description">
                                                <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut
                                                    labore et dolore magna
                                                    aliqua ut enim ad minim veniam
                                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                    commodo consequat.</p>
                                            </div>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <!-- form group -->
                        </div>
                        <!-- end col -->


                    </div>
                    <!-- end row 4 -->


                </form>
                <!-- end form -->





            </div>
            <!-- modal body -->


            <!-- footer -->
            <div class="tg-modalfoot">

                <div class="row">
                    <div class="col-6 text-left">
                        <button id="startup-back-req-button" class="tg-btn d-none" style="float:left">Back</button>
                        <button id="startup-cancel-req-button" class="tg-btn" data-dismiss="modal"
                            style="float:left">Cancel</button>
                    </div>

                    <div class="col-6 text-right">
                        <button id="startup-post-req-button" class="tg-btn" style="float:right">Continue</button>
                        <button id="startup-submit-req-button" type="submit" class="tg-btn d-none"
                            style="float:right">Submit</button>
                    </div>
                </div>




            </div>
            <!-- end footer -->
        </div>
    </div>
</div>
<!-- end post req modal -->

{{-- end modals --}}

@endsection
{{-- end section --}}