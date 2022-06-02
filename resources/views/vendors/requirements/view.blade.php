@extends('layouts.vendor')



{{-- section --}}
@section('content')



<script>
    var attachmentsArray = @json($attachments);
    var attachmentsPath = "{{URL::asset('assets/uploads/requirements')}}/";
    
</script>


{{-- banner --}}
<div class="tg-innerpagebanner">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="tg-pagetitle">
                    <h1>  {{$requirement_info->title}} </h1>
                </div>
                <ol class="tg-breadcrumb">
                    <li><a href="#">Opportunities</a></li>
                    <li class="tg-active">Quotation</li>
                </ol>
            </div>
        </div>
    </div>
</div>
{{-- end banner --}}







{{-- main content --}}
<main id="tg-main" class="tg-main tg-haslayout tg-paddingzero" style="background-color: black;">
    <div class="tg-serviceprovider tg-detailpage tg-serviceproviderdetail">

        <div id="tg-twocolumns" class="tg-twocolumns">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-7 col-md-12 col-lg-12 pull-left">
                        <div id="tg-content" class="tg-content pt-0">
                            <div class="tg-advertisement">
                                <!-- <img src="images/advertisement/img-01.png" alt="image description"></a> -->
                            </div>
                            <div class="tg-companyfeatures">
                                <div class="tg-companyfeaturebox tg-introduction pt-0">
                                    <div class="tg-companyfeaturetitle">
                                        <h3 class="text-white-f custom-pr-view-subheading">Description</h3>
                                    </div>
                                    <div class="tg-description">
                                        <p class="text-offwhite-f">
                                            {{$requirement_info->desc}}
                                        </p>
                                    </div>
                                </div>
                                <div class="tg-companyfeaturebox tg-languages">
                                    <div class="tg-companyfeaturetitle">
                                        <div class="row align-items-end mb-1">
                                            <div class="col-6 text-left">
                                                <h3 class="text-white-f custom-pr-view-subheading">List of Items
                                                </h3>
                                            </div>

                                            <div class="col-6 text-right">
                                                <a type="button" href="#" id="download-button" class="confirm-quotation-edit"
                                                    style="margin-left: 10px; background-color: indianred; border-color:indianred; color:white; padding: 8px 10px; font-weight: 500">
                                                    Requirement Attachments<i class="fa fa-download ml-2"></i>
                                                </a>
                                            </div>
                                        </div>

                                    </div>


                                    <!-- table -->
                                    <table class="table custom-pr-table">
                                        <tbody>

                                            <thead>
                                                <th>
                                                    Name
                                                </th>

                                                <th>
                                                    Category
                                                </th>

                                                <th class="text-center">
                                                    Item Type
                                                </th>

                                                <th class="text-center">
                                                    Quantity
                                                </th>

                                                <th class="text-center">
                                                    Budget (AED)
                                                </th>

                                            </thead>
                                            @foreach ($requirement_items as $item)
                                                
                                           
                                            <!-- tr -->
                                            <tr>
                                                <td>

                                                    <div class="tg-contentbox">
                                                        <!-- <a class="tg-tag tg-featuredtag" href="#"></a> -->
                                                        <div class="tg-title">
                                                            <h3><a href="#"> {{$item->name}} </a></h3>
                                                        </div>
                                                        <span> </span>
                                                    </div>
                                                </td>
                                                <td><span> {{$item->category->name}} >  {{$item->subcategory->name}} </span></td>

                                                <td class="valign-middle text-center">
                                                    <button disabled="" class="btn-sm btn-warning"> {{$item->type->name}}</button>
                                                </td>


                                                <!-- quantity + measuringunit -->
                                                <td class="valign-middle text-center"><span
                                                        class="text-black-f">1</span></td>

                                                <!-- budget -->
                                                <td class="valign-middle text-center"><span class="text-black-f"> {{$item->budget_from}} -  {{$item->budget_to}}</span></td>

                                            </tr>
                                            <!-- end tr -->

                                            @endforeach



                                        </tbody>
                                    </table>
                                </div>


                                <!-- your quotation edit -->
                                <div class="tg-companyfeaturebox tg-languages">
                                    <div class="tg-companyfeaturetitle">

                                        <hr>


                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <h3 class="text-white-f custom-pr-view-subheading"
                                                    style="margin-top: 0px;">Your Quotation</h3>
                                            </div>

                                            <div class="col-6 text-right">
                                                <button class="btn btn-success" data-toggle="modal"
                                                    data-target=".clarfmodal">
                                                    Send Clarifications
                                                </button>
                                            </div>
                                        </div>




                                    </div>
                                    <div class="tg-dashboardservices">

                                        @foreach ($requirement_items as $item)
                                            
                                   


                                        <!-- first requirement (r) -->
                                        <div class="tg-dashboardservice custom-pr-quotations">

                                            <!-- requirements check -->
                                            <div class="tg-servicetitle" style="padding:18px 20px;">
                                                <h2>
                                                    <input class="" type="checkbox" name="" id="">
                                                    <label class="d-inline"> {{$item->name}}
                                                    </label>
                                                </h2>
                                            </div>





                                            <div class="tg-btntimeedit">

                                                <p style="padding: 8px 20px; margin-bottom: 0px;">
                                                    <input class="d-inline" type="number" name="quantity"
                                                        id="quo-quantity" style="width: 49%;" placeholder="Quantity">
                                                    <input class="d-inline" type="text" name="price" id="quo-price"
                                                        style="width: 49%;" placeholder="Price">
                                                </p>

                                            </div>
                                        </div>
                                        <!-- end third -->

                                        @endforeach





                                        <!-- <div class="row d-block no-gutters align-items-center mb-4">
													<div class="col-12" style="margin-top: 190px !important">
												
														<h4 class="text-white-f custom-pr-view-subheading mr-4 mb-0" style="margin-top: 0px; border-left: 0px; padding-left: 0px; margin-bottom: 40px;">
															<i class="fa fa-circle quo-circle"></i>
															Your Offer Price
														</h4>

												
													</div>
													
													<div class="col-12 mt-3">
														<span class="text-warning-f"> <input class="bidprice-input mb-0" type="number" name="bidprice" id="" value="" style="width: 190px !important;"></span>
												
													</div>
												
												
												</div> -->
                                        <!-- end inner row -->



                                        <!-- note -->
                                        <textarea class="quotation-note-edit mt-5" name="" id="" cols="30" rows="6"
                                            placeholder="Additional Note"></textarea>

                                        <div class="tg-companyfeaturetitle">
                                            <h3 class="text-white-f custom-pr-view-subheading"
                                                style="margin-top: 35px;">Attachment</h3>
                                        </div>

                                        <input type="file" name="quot-attach" class=" attach-input" id="quot-attach">

                                        <button class="confirm-quotation-edit" style="margin-left: 10px;">
                                            Submit
                                        </button>


                                        {{-- <a href="javascript:void(0);" class="confirm-quotation-edit"
                                            style="margin-left: 10px; background-color: #449d44; border-color:#245324; color:white; padding: 12px 15px;" onclick="" id="user-download-button">
                                            Download Attachments
                                        </a> --}}


                                    </div>
                                </div>
                                <!-- your quotation edit -->







                                <!-- submitted quo -->
                                <div class="tg-companyfeaturebox tg-languages">
                                    <div class="tg-companyfeaturetitle">
                                        <h3 class="text-white-f custom-pr-view-subheading" style="margin-top: 20px;">
                                            List of Submitted Quotations</h3>
                                    </div>
                                    <div class="tg-dashboardservices">


                                        <div class="tg-dashboardservice custom-pr-quotations">
                                            <div class="tg-servicetitle">
                                                <h2><a style="color:black !important;" href="{{ route('vendor.companies.profile', [1]) }}">Truth
                                                        Co. </a>
                                                    <h2>
                                            </div>
                                            <div class="tg-btntimeedit">
                                                <span>3/3 Requirmenets</span>




                                                <button type="submit" data-toggle="modal"
                                                    data-target=".tg-categoryModal" class="tg-btnedite"><i
                                                        class="fa fa-eye"></i></button>

                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <!-- list of submitted quo -->


                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>






</main>
{{-- end main content --}}












{{-- modals --}}


{{-- quotation of other --}}
<div class="modal fade tg-categoryModal" tabindex="-1">
    <div class="modal-dialog tg-modaldialog" role="document">
        <div class="modal-content tg-modalcontent">
            <div class="tg-modalhead">
                <h2>Truth Co Quotation</h2>
                <span class="tg-selecteditems">3/3 Requirements</span>
            </div>
            <div class="tg-modalbody" style="padding-bottom: 0px;">
                <form class="tg-themeform tg-formrefinesearch">

                    <table class="table custom-pr-table">
                        <tbody>

                            <thead>
                                <th>

                                </th>

                                <th>
                                    Name
                                </th>

                                <th class="text-center">
                                    Offer Quantity
                                </th>

                                <th class="text-center">
                                    Offer Price (AED)
                                </th>

                            </thead>
                            <!-- tr -->
                            <tr>

                                <td class="text-center">
                                    <input type="checkbox" id="" name="business" value="Event Organizer" disabled
                                        checked="">
                                </td>

                                <td>

                                    <div class="tg-contentbox">
                                        <!-- <a class="tg-tag tg-featuredtag" href="#"></a> -->
                                        <div class="tg-title">
                                            <h3><a href="#">Landing Page Design</a></h3>
                                        </div>
                                        <span> </span>
                                    </div>
                                </td>



                                <!-- quantity + measuringunit -->
                                <td class="valign-middle text-center"><span class="text-black-f">1</span></td>


                                <!-- budget -->
                                <td class="valign-middle text-center"><span class="text-black-f">400</span></td>

                            </tr>
                            <!-- end table row -->



                            <tr>

                                <td class="text-center">
                                    <input type="checkbox" id="" name="business" value="Event Organizer" disabled
                                        checked="">
                                </td>


                                <td>

                                    <div class="tg-contentbox">
                                        <!-- <a class="tg-tag tg-featuredtag" href="#"></a> -->
                                        <div class="tg-title">
                                            <h3><a href="#">Create and Design Logo </a></h3>
                                        </div>
                                        <span> </span>
                                    </div>
                                </td>


                                <!-- quantity + measuringunit -->
                                <td class="valign-middle text-center"><span class="text-black-f">1</span></td>


                                <!-- budget -->
                                <td class="valign-middle text-center"><span class="text-black-f">1000</span></td>
                            </tr>


                            <!-- tr -->
                            <tr>

                                <td class="text-center">
                                    <input type="checkbox" id="" name="business" value="Event Organizer" disabled
                                        checked="">
                                </td>


                                <td>

                                    <div class="tg-contentbox">
                                        <!-- <a class="tg-tag tg-featuredtag" href="#"></a> -->
                                        <div class="tg-title">
                                            <h3><a href="#">Apply Copywriting </a></h3>
                                        </div>
                                        <span> </span>
                                    </div>
                                </td>


                                <!-- quantity + measuringunit -->
                                <td class="valign-middle text-center"><span class="text-black-f">1</span></td>

                                <!-- budget -->
                                <td class="valign-middle text-center"><span class="text-black-f">900</span></td>

                            </tr>
                            <!-- end tr -->




                        </tbody>
                    </table>
                </form>


            </div>

        </div>
    </div>
</div>
{{-- quotations of other modal --}}











<!-- requirement clarafications modal -->
<div class="modal fade clarfmodal" tabindex="-1">
    <div class="modal-dialog tg-modaldialog" role="document">
        <div class="modal-content tg-modalcontent">
            <div class="tg-modalhead">
                <h2>Clarifications</h2>
            </div>
            <div class="tg-modalbody pb-4">

                <!-- clarf 1 -->
                <div class="form-row clarf-modal-row mb-0">
                    <div class="col-12">
                        <h5><img class="clarflogo" src="{{ asset('assets/prev-images/demologo6.jpg') }}" alt="">Eishar Ltd.</h5>
                    </div>

                    <div class="col-12 mt-3" style="max-height: 250px; overflow-y: auto;">


                        <div class="d-block text-left">
                            <p class="clarf-sides clarf-receiver">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea dolorem
                            </p>
                        </div>


                        <div class="d-block text-right">
                            <p class="clarf-sides clarf-sender">
                                architecto minus mollitia numquam velit rerum, optio
                                itaque ea quasi
                            </p>
                        </div>

                    </div>
                    <!-- end col 12 -->

                    <div class="col-12" style="position: relative;">
                        <textarea class="form-control clarfinput mb-0" name="reply" id=""
                            placeholder="Your Reply!"></textarea>
                        <button class="clarf-modal-btn" style="bottom: 10px;"><i
                                class="fa fa-chevron-circle-right"></i></button>
                    </div>

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
<!-- end req clarifications modal -->


{{-- end modals --}}



@endsection
{{-- end section --}}