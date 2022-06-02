@extends('layouts.vendor')



{{-- section --}}
@section('content')



{{-- download attachments arrays --}}
<script>
    var attachmentsArray = @json($attachments);
    var attachmentsPath = "{{URL::asset('assets/uploads/deals')}}/";
    
</script>




{{-- banner --}}
<div class="tg-innerpagebanner">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="tg-pagetitle">
                    <a href="{{ route('vendor.home') }}" class="home-button-custom">
                        <i class="fa fa-arrow-circle-left"></i>Home</a>
                </div>
                <ol class="tg-breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Post Deals</a></li>
                    <li class="tg-active">{{$deal_info->title}}</li>
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
                                            {{$deal_info->desc}}
                                        </p>

                                    </div>
                                </div>
                                <div class="tg-companyfeaturebox tg-languages">
                                    <div class="tg-companyfeaturetitle">
                                        <div class="row align-items-end mb-2">
                                            <div class="col-6 text-left">
                                                <h3 class="text-white-f custom-pr-view-subheading">List of Items</h3>
                                            </div>

                                            <div class="col-6 text-right">
                                                <a type="button" href="#" id="download-button" class="confirm-quotation-edit"
                                                    style="margin-left: 10px; background-color: indianred; border-color:indianred; color:white; padding: 8px 10px; font-weight: 500" >
                                                    Deal Attachments<i class="fa fa-download ml-2"></i>
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
                                                    Minimum Quantity
                                                </th>

                                                <th class="text-center">
                                                    Price (AED)
                                                </th>

                                            </thead>
                                            <!-- tr -->
                                            @foreach ($deal_items as $item)
                                                
                                         
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

                                                <!-- category / subcategory -->
                                                <td><span>{{$item->category->name}} > {{$item->subcategory->name}}</span></td>




                                                <td class="valign-middle text-center">
                                                    <button disabled="" class="btn-sm btn-warning">{{$item->type->name}}</button>
                                                </td>


                                                <!-- quantity + measuringunit -->
                                                <td class="valign-middle text-center"><span class="text-black-f">{{ $item->min_quantity }} {{$item->measuringunit->name}}</span></td>


                                                <!-- price -->
                                                <td class="valign-middle text-center"><span
                                                        class="text-black-f"> {{$item->price}}</span></td>


                                            </tr>
                                            <!-- end table row -->

                                            @endforeach


                                        </tbody>
                                    </table>
                                </div>

                                <div class="tg-companyfeaturebox tg-languages">
                                    <div class="tg-companyfeaturetitle">
                                        <h3 class="text-white-f custom-pr-view-subheading" style="margin-top: 20px;">
                                            List of Pending Requests</h3>
                                    </div>
                                    <div class="tg-dashboardservices">

                                        @foreach ($deal_info->requests as $request)
                                            
                                       


                                        <div class="tg-dashboardservice custom-pr-quotations">
                                            <div class="tg-servicetitle">
                                                <h2><a style="color:black !important;" href="{{ route('vendor.companies.profile', [$request->user->id]) }}">
                                                {{$request->user->company_name}}
                                                </a>
                                                    <h2>
                                            </div>
                                            <div class="tg-btntimeedit">
                                                <span>  {{$request->items->count()}} /{{$deal_info->items->count()}} Items</span>

                                                <button type="submit" data-toggle="modal"
                                            data-target=".tg-categoryModal-{{$request->id}}" class="tg-btnedite"><i
                                                        class="fa fa-check"></i></button>

                                                <button type="submit" class="tg-btndel"><i
                                                        class="lnr lnr-trash"></i></button>
                                            </div>
                                        </div>

                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>
{{-- end main --}}











{{-- modals --}}


@foreach ($deal_info->requests as $request)
    

{{-- single request --}}
<div class="modal fade tg-categoryModal-{{$request->id}}" tabindex="-1">
    <div class="modal-dialog tg-modaldialog" role="document">
        <div class="modal-content tg-modalcontent">
            <div class="tg-modalhead">
                <h2> {{$request->user->company_name}} </h2>
                <span class="tg-selecteditems"></span>
            </div>
            <div class="tg-modalbody">
                <form class="tg-themeform tg-formrefinesearch">

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
                                        Requested Quantity
                                    </th>


                                </thead>
                                @foreach ($request->items as $item)
                                    
                               
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
                                                <h3><a href="#"> {{$item->deal_item->name}} </a></h3>
                                            </div>
                                            <span> </span>
                                        </div>
                                    </td>



                                    <!-- quantity + measuringunit -->
                                    <td class="valign-middle text-center"><span class="text-black-f"> {{$item->quantity}}</span></td>

                                </tr>
                                <!-- end table row -->

                                @endforeach

                               
                            </tbody>
                        </table>
                    </form>



                    <div class="form-group tg-inpuicon" style="margin-top: 0px;">


                        <hr>


                        <a target="_blank" href="{{asset('assets/uploads/dealrequests/'.$request->attachments)}}" class="btn download-attach-button">
                            View Attachments
                        </a>

                        <!-- <i class="lnr lnr-magnifier"></i> -->
                        <textarea name="Budget" id="" cols="30" class="form-control" rows="6"
                    placeholder="{{$request->notes}}"></textarea>



                    </div>


                </form>
            </div>

            <div class="tg-modalfoot">

                <div class="row">

                    <div class="col-6 text-left">
                        <button class="tg-btn" data-dismiss="modal">Hide</button>

                    </div>

                    <div class="col-6 text-right">

                        <a class="tg-btn ml-2" style="float:right" href="{{ route('vendor.deals.accept',[$request->id])}}">Accept Order</a>


                        <a class="tg-btn customer-view-profile-button" href="{{ route('vendor.companies.profile', [$request->user->id]) }}">View Profile</a>
                    </div>
                </div>



            </div>



        </div>
    </div>
</div>
{{-- end single request modal --}}
@endforeach

{{-- end modals --}}





@endsection
{{-- end section --}}