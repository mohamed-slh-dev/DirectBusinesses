@extends('layouts.customer')



{{-- make no margin in banner (only this page) --}}
<style>
    .tg-innerpagebanner {
        margin-bottom: 0px !important;
    }
</style>





{{-- section --}}
@section('content')



{{-- download attachments arrays --}}
<script>
    var attachmentsArray = @json($attachments);
    var attachmentsPath = "{{URL::asset('assets/uploads/auctions')}}/";
    
</script>




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
                    <li><a href="#">Auctions</a></li>
                    <li class="tg-active"> {{$auction_info->title}} </li>
                </ol>
            </div>
        </div>
    </div>
</div>
{{-- end banner --}}







{{-- main --}}
<main id="tg-main" class="tg-main tg-haslayout tg-paddingzero" style="background-color: black;">
    <div class="tg-serviceprovider tg-detailpage tg-serviceproviderdetail">

        <div id="tg-twocolumns" class="tg-twocolumns">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-7 col-md-12 col-lg-12 pull-left">
                        <div id="tg-content" class="tg-content">
                            <div class="tg-advertisement">
                                <!-- <img src="images/advertisement/img-01.png" alt="image description"></a> -->
                            </div>
                            <div class="tg-companyfeatures">
                                <div class="tg-companyfeaturebox tg-introduction">
                                    <div class="tg-companyfeaturetitle">
                                        <h3 class="text-white-f custom-pr-view-subheading">Description</h3>
                                    </div>
                                    <div class="tg-description">
                                        <p class="text-offwhite-f">{{$auction_info->desc}}</p>

                                    </div>
                                </div>
                                <div class="tg-companyfeaturebox tg-languages">
                                    <div class="tg-companyfeaturetitle">
                                        <div class="row align-items-center">
                                            <div class="col-6 text-left">
                                                <h3 class="text-white-f custom-pr-view-subheading mb-0">List of Items
                                                </h3>
                                            </div>

                                            <div class="col-6 text-right">
                                                <button class="btn btn-success mt-0" data-toggle="modal"
                                                    data-target=".auctionmodal" style="margin-top:-2px !important;">
                                                    View Bids
                                                </button>


                                                <a href="#" id="download-button" class="confirm-quotation-edit"
                                                    style="margin-left: 10px; background-color: indianred; border-color:indianred; color:white; padding: 8px 10px; font-weight: 500">
                                                    Auction Attachments<i class="fa fa-download ml-2"></i>
                                                </a>

                                                
                                            </div>
                                        </div>



                                    </div>
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
                                                <td><span>{{$item->category->name}} > {{$item->subcategory->name}} </span></td>

                                                <td class="valign-middle text-center">
                                                    <button disabled="" class="btn-sm btn-warning">{{$item->type->name}}</button>
                                                </td>


                                                <!-- quantity + measuringunit -->
                                                <td class="valign-middle text-center"><span class="text-black-f">{{$item->quantity}}
                                                        </span></td>


                                                <!-- budget -->
                                                <td class="valign-middle text-center"><span
                                                        class="text-black-f">{{$item->price}}</span></td>
                                            </tr>

                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                                <!-- end table -->

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    {{-- end layouts --}}

</main>
{{-- end main --}}











{{-- modals --}}


{{-- auction bids --}}
<div class="modal fade tg-servicesmodal tg-categoryModal auctionmodal" tabindex="-1">
    <div class="modal-dialog tg-modaldialog" role="document">
        <div class="modal-content tg-modalcontent">
            <div class="tg-modalhead">
                <h2>Auction Bids</h2>
            </div>
            <div class="tg-modalbody pb-0">

                <!-- bids -->
                <div class="form-row align-items-center  clarf-modal-row auc-modal-row">

                    @foreach ($auction_info->bids as $bid)
                        
                 

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