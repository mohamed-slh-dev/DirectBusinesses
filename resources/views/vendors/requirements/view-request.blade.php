@extends('layouts.vendor')



{{-- section --}}
@section('content')



{{-- download attachments arrays --}}
<script>
    var attachmentsArray = @json($attachments);
    var userAttachmentsArray = @json($userAttachments);
    var attachmentsPath = "{{URL::asset('assets/uploads/requirements')}}/";
    
</script>




{{-- banner --}}
<div class="tg-innerpagebanner">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="tg-pagetitle">
                    <h1> {{$requirement_info->title}} </h1>
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
                                        <p class="text-offwhite-f">{{$requirement_info->desc}}</p>
                                    </div>
                                </div>
                                <div class="tg-companyfeaturebox tg-languages">
                                    <div class="tg-companyfeaturetitle">
                                        <div class="row align-items-end mb-2">
                                            <div class="col-6 text-left">
                                                <h3 class="text-white-f custom-pr-view-subheading">List of Items</h3>
                                            </div>

                                            <div class="col-6 text-right">
                                                <a href="javascript:void(0);" class="confirm-quotation-edit" id="download-button"
                                                    style="margin-left: 10px; background-color: indianred; border-color:indianred; color:white; padding: 8px 10px; font-weight: 500">
                                                    Requirement Attachments<i class="fa fa-download ml-2"></i>
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
                                                    Budget (AED)
                                                </th>

                                            </thead>
                                           
                                           @foreach ($requirement_info->items as $item)
                                               

                                            <!-- tr -->
                                            <tr>
                                                <td>

                                                    <div class="tg-contentbox">
                                                        <!-- <a class="tg-tag tg-featuredtag" href="#"></a> -->
                                                        <div class="tg-title">
                                                            <h3><a href="#">{{$item->name}} </a></h3>
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
                                                        class="text-black-f"> {{$item->quantity}}</span></td>

                                                <!-- budget -->
                                                <td class="valign-middle text-center"><span class="text-black-f">{{$item->budget_from}} -
                                                    {{$item->budget_to}}</span></td>

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
                                    <form action="{{route('vendor.requirements.update.quotation')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                    <div class="tg-dashboardservices">

                                        <input type="hidden" name="quotation_id" value="{{$user_quotation->id}}">
                                   @foreach ($user_quotation->items as $quotation)
                                       
                                 

                                        <!-- first requirement (r) -->
                                        <div class="tg-dashboardservice custom-pr-quotations">

                                            <!-- requirements check -->
                                            <div class="tg-servicetitle" style="padding:18px 20px;">
                                                <h2>
                                                    <input class="" type="checkbox" name="" id="" checked="">
                                                    <label class="d-inline"> 
                                                        {{$quotation->requirement_item->name}}
                                                    </label>
                                                </h2>
                                            </div>





                                            <div class="tg-btntimeedit">

                                                <p style="padding: 8px 20px; margin-bottom: 0px;">
                                                    <input class="d-inline" type="number" name="quantity({{$quotation->id}})"
                                                        id="quo-quantity" style="width: 49%;" placeholder="Quantity"
                                                        value="{{$quotation->quantity}}">
                                                    <input class="d-inline" type="text" name="price({{$quotation->id}})" id="quo-price"
                                                        style="width: 49%;" placeholder="Price" value="{{$quotation->price}}">
                                                </p>

                                            </div>
                                        </div>
                                        <!-- end third -->



                                        @endforeach


                                        <!-- note -->
                                        <textarea class="quotation-note-edit mt-5" name="note" id="" cols="30" rows="6"
                                            placeholder="Additional Note">{{ $user_quotation->note}}</textarea>

                                        <div class="tg-companyfeaturetitle">
                                            <h3 class="text-white-f custom-pr-view-subheading"
                                                style="margin-top: 35px;">Attachment</h3>
                                        </div>

                                        <input type="file" name="doc" class="attach-input" id="quot-attach">

                                        <button class="confirm-quotation-edit" style="margin-left: 10px;">
                                            Update
                                        </button>

                                        <a target="_blank" href="{{ asset('assets/uploads/quotations/'.$user_quotation->attachments) }}" class="confirm-quotation-edit"
                                            style="margin-left: 10px; background-color: #449d44; border-color:#449d44; color:white; padding: 12px 15px;">
													View Attachments
												</a>
										
                                            </div>
                                    </form>
							</div>
						<!-- your quotation edit -->






                                        @if ($requirement_info->quotations->where('hide', 'false')->count() > 0)
                                            

										<!-- submitted quo -->
										<div class=" tg-companyfeaturebox tg-languages">
                                            <div class="tg-companyfeaturetitle">
                                                <h3 class="text-white-f custom-pr-view-subheading"
                                                    style="margin-top: 20px;">List of Submitted Quotations</h3>
                                            </div>
                                            <div class="tg-dashboardservices">

                                                @foreach ($requirement_info->quotations->where('hide', 'false') as $quotation)
                                                    
                                             

                                                <div class="tg-dashboardservice custom-pr-quotations">
                                                    <div class="tg-servicetitle">
                                                        <h2><a style="color:black !important;"
                                                                href="{{ route('vendor.companies.profile', [$quotation->user->id]) }}">{{$quotation->user->company_name}} </a>
                                                            <h2>
                                                    </div>
                                                    <div class="tg-btntimeedit">
                                                        <span> {{$quotation->items->where('price','!=',null)->count()}} /{{$requirement_info->items->count()}} Requirmenets</span>




                                                        <button type="submit" data-toggle="modal"
                                                    data-target=".quotation-{{$quotation->id}}" class="tg-btnedite"><i
                                                                class="fa fa-eye"></i></button>

                                                    </div>
                                                </div>

                                                @endforeach

                                            </div>
                                    </div>
                                    <!-- list of submitted quo -->

                                    @endif

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

@foreach ($requirement_info->quotations as $quotation)    
{{-- other quotations modal --}}
<div class="modal fade quotation-{{$quotation->id}}" tabindex="-1">
    <div class="modal-dialog tg-modaldialog" role="document">
        <div class="modal-content tg-modalcontent">
            <div class="tg-modalhead">
                <h2>Truth Co Quotation</h2>
                <span class="tg-selecteditems"> {{$quotation->items->where('price','!=',null)->count()}} / {{$requirement_info->items->count()}}   Requirements</span>
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

                            @foreach ($quotation->items->where('price','!=',null) as $item)
                                

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
                                            <h3><a href="#">{{$item->requirement_item->name}} </a></h3>
                                        </div>
                                        <span> </span>
                                    </div>
                                </td>


                                <!-- quantity + measuringunit -->
                                <td class="valign-middle text-center"><span class="text-black-f">
                                    {{$item->quantity}}</span></td>

                                <!-- budget -->
                                <td class="valign-middle text-center"><span class="text-black-f">  {{$item->price}}</span></td>

                            </tr>
                            <!-- end tr -->

                            @endforeach
                        </tbody>
                    </table>
                </form>

            </div>

        </div>
    </div>
</div>
{{-- other quotation modal --}}



@endforeach








<!-- requirement clarafications modal -->
<div class="modal fade clarfmodal" tabindex="-1">
    <div class="modal-dialog tg-modaldialog" role="document">
        <div class="modal-content tg-modalcontent">
            <div class="tg-modalhead">
                <h2>Clarifications</h2>
            </div>
            <div class="tg-modalbody pb-0">

                <!-- clarf 1 -->
                <div class="form-row clarf-modal-row mb-0">
                    <div class="col-12">
                        <h5><img class="clarflogo" class="mr-2" src="{{ asset('assets/uploads/profile-logos/'.$requirement_info->user->profile_img) }}" alt="">{{$requirement_info->user->company_name}}</h5>
                    </div>

                    <div class="col-12 mt-3" style="max-height: 250px; overflow-y: auto;">


                        @foreach ($clarifications as $reply)
                            
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

                    <form class="col-12 mb-4" action="{{ route('vendor.requirements.send.clarification') }}" method="post">
                        @csrf
                            <input type="hidden" name="quotation_id" value="{{$user_quotation->id}}">
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



{{-- end modals --}}



@endsection
{{-- end section --}}