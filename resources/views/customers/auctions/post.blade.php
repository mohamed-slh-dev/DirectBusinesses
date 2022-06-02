@extends('layouts.customer')



{{-- make no margin in banner (only this page) --}}
<style>
    .tg-innerpagebanner {
        margin-bottom: 0px !important;
    }

    .tg-dashboardservice:hover .tg-btntimeedit span {
        margin: 0 60px 0 0 !important;
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
                    <li class="tg-active">Post Auction</li>
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

                <form class="tg-formbookappointment" method="post" action="{{ route('customer.auctions.create') }}" enctype="multipart/form-data">
                    @csrf

                    <fieldset class="tg-formstepone tg-current">
                        <div class="tg-appointmenthead">
                            <!-- <a class="tg-btn tg-btnedite" href="javascript:void(0);"><i class="lnr lnr-pencil"></i></a> -->
                            <div class="tg-appointmentheading">
                                <h2 class="custom-pr-subheading">Post Auction</h2>
                            </div>
                        </div>
                        <div class="tg-progressbox">
                            <ul class="tg-formprogressbar formprogressbarwrapper">
                                <li class="tg-active"><span>Main Info</span></li>
                                <li><span>Main Info</span></li>
                                <li><span>Main Info</span></li>

                            </ul>
                            <div class="col-xs-12 col-lg-12">
                                <div class="form-group">
                                    <input type="text" name="title" id="post-title" class="form-control first-step-inputs" placeholder="Title">
                                </div>
                            </div>

                            <div class="col-xs-12 col-lg-12">
                                <div class="form-group">
                                    <textarea class="form-control first-step-inputs" id="post-desc" placeholder="Description" name="desc"></textarea>
                                </div>
                            </div>

                            <div class="col-xs-12 col-lg-12 mb-3">
                                <label class="attachments-button" for="auction-attach" style="margin: 0px 0px 15px"><i
                                        class="fa fa-files-o mr-3"></i>Upload Attachments</label>

                                <input class="d-none" type="file" name="attachments[]" class=" attach-input" multiple
                                    id="auction-attach" style="border:1px solid lightgrey; border-radius: 5px; padding: 7px 10px; margin-left: 15px;">
                            </div>


                            <div class="tg-btnarea">

                                <div class="col-xs-12">
                                    <a id="step-one-button" href="javascript:void(0);" class="tg-btn tg-btnnext not-clickable">Next</a>
                                </div>

                                <!-- <a href="javascript:void(0);" class="tg-btndontwant">No I Don't Want</a> -->
                            </div>
                        </div>
                    </fieldset>



                    <fieldset class="tg-formsteptwo">
                        <div class="tg-appointmenthead">
                            <!-- <a class="tg-btn tg-btnedite" href="javascript:void(0);"><i class="lnr lnr-pencil"></i></a> -->
                            <div class="tg-appointmentheading">
                                <h2 class="custom-pr-subheading">Auction Items</h2>
                            </div>
                        </div>
                        <div class="tg-progressbox">
                            <ul class="tg-formprogressbar formprogressbarwrapper">
                                <li class="tg-active"><span>Main Info</span></li>
                                <li><span>Auction Items</span></li>
                                <li><span>Instructions</span></li>

                            </ul>
                            <div class="tg-appointmentinfo">
                                <div class="form-group">
                                    <div class="tg-heading">
                                        <!-- <h3>Requirements</h3> -->
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="row align-items-start">

                                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <span class="tg-select">
                                                <select id="auction-category" class="category-select">
                                                    <option value="">Category</option>
                                    
                                                    @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endforeach
                                
                                                </select>
                                            </span>
                                        </div>
                                    </div>
                                    
                                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <span class="tg-select">
                                                <select id="auction-subcategory" class="subcategory-select">
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
                                            <span class="tg-select">
                                                <select id="auction-type">
                                    
                                                    <option selected="" value="">Requirement type</option>
                                    
                                                    @foreach ($types as $type)
                                                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                                                    @endforeach
                                    
                                                </select>
                                            </span>
                                        </div>
                                    </div>
                                    
                                    
                                    <!-- serial generated by us  -->
                                    <input type="hidden" name="auction-serial" id="auction-serial" value="">
                                    
                                    
                                    <!-- name -->
                                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <input type="text" id="auction-name" name="name" class="form-control" placeholder="Name">
                                        </div>
                                    </div>
                                    
                                    
                                    <!-- measuringunit -->
                                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <span class="tg-select">
                                                <select id="auction-measuringunit">
                                                    <option selected="" value="">Measuring Unit</option>
                                    
                                                    @foreach ($measuringunits as $unit)
                                                    <option value="{{ $unit->id }}">{{ $unit->name }}</option>
                                                    @endforeach
                                    
                                                </select>
                                            </span>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    <!-- quantity -->
                                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <input type="number" min="0" id="auction-quantity" name="quantity" class="form-control"
                                                placeholder="Quantity">
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    
                                    <div class="col-xs-12 col-md-8 col-lg-8">
                                        <textarea id="auction-desc" placeholder="Description"></textarea>
                                    </div>
                                    
                                    
                                    <div class="col-xs-12 col-md-4">
                                        <div class="form-group">
                                            <input id="auction-price" type="number" name="text" class="form-control" placeholder="Price (AED)">
                                        </div>
                                    </div>


                                    <div class="col-xs-12 col-md-12 mt-4 col-md-12 col-lg-12">

                                        <button type="button" id="add-auction-item" class="tg-btn next-item-button">Add Item</button>
                                    </div>





                                </div>
                            </div>
                            <div class="tg-userdetail mt-4">
                                <div class="clearfix"></div>
                                <div class="row">

                                    {{-- auction wrapper --}}
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mb-5"
                                        style="margin-bottom: 30px;">
                                        <div class="tg-dashboardservices auction-items-wrapper">
                                            

                                        </div>
                                    </div>

                                    
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="tg-btnarea">
                                            <a class="tg-btn tg-btnprevious" href="javascript:void(0);">Go Back</a>
                                            <a id="step-two-button" class="tg-btn tg-btnnext not-clickable" href="javascript:void(0);">Continue</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>




                    <fieldset class="tg-formstepfive">
                        <div class="tg-appointmenthead">

                            <div class="tg-appointmentheading">
                                <h2 class="custom-pr-subheading">Preview</h2>
                            </div>
                        </div>
                        <div class="tg-progressbox">
                            <ul class="tg-formprogressbar formprogressbarwrapper">
                                <li class="tg-active"><span>Main Info</span></li>
                                <li><span>Auction Items </span></li>
                                <li><span>Preview</span></li>

                            </ul>
                            <div class="form-group">
                                <div class="tg-heading">
                                    <h3> Summary</h3>
                                </div>
                                <div class="tg-reminderemail">
                                    <span id="auction-serial-summary"></span>
                                </div>
                            </div>
                            <ul class="tg-appointmentsummry">
                                <li>
                                    <strong>Date:</strong>
                                    <span>{{ date('d M Y') }}</span>
                                </li>
                                <li>
                                    <strong>Time:</strong>
                                    <span>{{ date('h:i A') }}</span>
                                </li>
                                <li>
                                    <strong>Titled:</strong>
                                    <span id="post-title-preview">Truth &amp; Company</span>
                                </li>
                                <li>
                                    <strong>Items:</strong>
                                    <span id="post-items-preview" style="max-height: 56px; overflow-y: auto;">Website Development / UI/UX
                                        Design</span>
                                </li>



                                <li>
                                    <strong>Description:</strong>
                                    <span>
                                        <div class="tg-description">
                                            <p id="post-desc-preview">Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore
                                                et dolore magna aliqua ut enim ad minim veniam
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat.</p>
                                        </div>
                                    </span>
                                </li>
                            </ul>
                            <div class="tg-btnarea">
                                <a class="tg-btn tg-btnprevious" href="javascript:void(0);">Go Back</a>
                                <button class="tg-btn">finish</button>
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