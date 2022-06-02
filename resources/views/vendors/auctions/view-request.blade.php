@extends('layouts.vendor')



{{-- section --}}
@section('content')



{{-- download attachments arrays --}}
<script>
    var attachmentsArray = @json($attachments);
    var userAttachmentsArray = @json($userAttachments);
    var attachmentsPath = "{{URL::asset('assets/uploads/auctions')}}/";
    
</script>


{{-- banner --}}
<div class="tg-innerpagebanner">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="tg-pagetitle">
                    <h1> {{$auction_info->title}} </h1>
                </div>
                <ol class="tg-breadcrumb">
                    <li><a href="#">Auctions</a></li>
                    <li class="tg-active">Single Auction</li>
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
                                        <p class="text-offwhite-f">{{$auction_info->desc}}</p>
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
                                                <a href="#" id="download-button" class="confirm-quotation-edit"
                                                    style="margin-left: 10px; background-color: indianred; border-color:indianred; color:white; padding: 8px 10px; font-weight: 500">
                                                    Auction Attachments<i class="fa fa-download ml-2"></i>
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
                                                    Price (AED)
                                                </th>

                                            </thead>
                                            @foreach ($auction_info->items as $item)
                                                
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
                                                <td><span>  {{$item->category->name}} >  {{$item->subcategory->name}} </span></td>

                                                <td class="valign-middle text-center">
                                                    <button disabled="" class="btn-sm btn-warning"> {{$item->type->name}}</button>
                                                </td>


                                                <!-- quantity + measuringunit -->
                                                <td class="valign-middle text-center"><span
                                                        class="text-black-f"> {{$item->quantity}} ( {{$item->measuringunit->name}}) </span></td>

                                                <!-- budget -->
                                                <td class="valign-middle text-center"><span
                                                        class="text-black-f"> {{$item->price}}</span></td>

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
                                            <div class="col-12">
                                                <h3 class="text-white-f custom-pr-view-subheading"
                                                    style="margin-top: 0px;">Your Bid</h3>
                                            </div>


                                        </div>




                                    </div>
                                    <form action="{{route('vendor.auctions.update.bid')}}" method="POST">
                                        @csrf
                                    <div class="tg-dashboardservices">


                                        
                                       
                                            <input type="hidden" name="auction_bid_id" value="{{$user_bid->id}}">
                                            
                                      @foreach ($user_bid->items as $bid)
                                          
                                   
                                        <!-- first requirement (r) -->
                                        <div class="tg-dashboardservice custom-pr-quotations">

                                            <!-- requirements check -->
                                            <div class="tg-servicetitle" style="padding:18px 20px;">
                                                <h2>
                                                    <input class="" type="checkbox" name="" id="">
                                                    <label class="d-inline"> {{$bid->auction_item->name}}
                                                    </label>
                                                </h2>
                                            </div>





                                            <div class="tg-btntimeedit">

                                                <p style="padding: 8px 20px; margin-bottom: 0px;">
                                                    <input class="d-inline" type="text"name="price({{$bid->id}})"id="quo-price"
                                                style="width: 100%;" placeholder="Price" value="{{$bid->price}}">
                                                </p>

                                            </div>

                                            
                                            
                                        </div>
                                        <!-- end third -->

                                        @endforeach

                                        <button class="confirm-quotation-edit" style="margin-top: 20px; width: 120px;">
                                            Update
                                        </button>

                                   

                                        <a href="javascript:void(0);" class="confirm-quotation-edit"
                                            style="margin-left: 10px; background-color: #449d44; border-color:#449d44; color:white; padding: 12px 15px;">
													View Attachments
												</a>


                                    </div>
                                        
                                </form>
                            </div>
                                <!-- your quotation edit -->


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