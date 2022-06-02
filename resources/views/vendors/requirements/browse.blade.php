@extends('layouts.vendor')



{{-- section --}}
@section('content')



<script>
    var browseAttachmentsArray = @json($attachments);
    var attachmentsPath = "{{URL::asset('assets/uploads/requirements')}}/";
    
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
                    <li class="tg-active">Opportunities</li>
                </ol>
            </div>
        </div>
    </div>
</div>
{{-- end banner --}}









{{-- main --}}
<main id="tg-main" class="tg-main tg-haslayout custom-connect-wrapper" style="background-color: black;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-push-1 col-lg-8 col-lg-push-2">
                <div class="tg-sectionhead">
                    <div class="tg-sectiontitle mb-1">
                        <h2>Connent with new Customers</h2>
                    </div>
                    <div class="tg-description">
                        <h5 class="text-warning">Browse Requirements</h5>
                    </div>
                </div>
            </div>
            <div id="tg-twocolumns" class="tg-twocolumns mb-5">
                <div class="col-xs-12 col-sm-7 col-md-8 col-lg-9 pull-right">
                    <div class="row">
                        <div id="tg-content" class="tg-content">
                            <div class="tg-joblisting">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">

                                    <div class="tg-sortfilters">

                                    </div>
                                </div>



                                {{-- switch button --}}
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 text-right mb-4">

                                    <a href="{{ route('vendor.auctions.browse') }}" class="btn btn-success">See Auctions<i
                                            class="fa fa-refresh ml-3"></i></a>
                                </div>


                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <table class="tg-tablejoblidting custom-browse-table">
                                        <tbody>
                                        @foreach ($requirements as $require)


                                        {{-- 1 if its already sent to --}}
                                        @php
                                            $sentAlready = 0;
                                        @endphp
                                        
                                        
                                        {{-- chec if already sent --}}
                                        @foreach ($require->quotations as $quotation)
                                        
                                            @if ($quotation->user->id == session('user_id'))
                                            
                                            @php
                                                $sentAlready = 1;
                                            @endphp
                                            
                                            @endif
                                        
                                        @endforeach
                                        
                                        
                                        {{-- display if 0 --}}
                                        @if ($sentAlready == 0)
                                            
                                            <tr>
                                                <td style="width: 339px;">

                                                    <div class="tg-contentbox">

                                                        <div class="tg-title">
                                                            <h3><a class="quotation-name" href="#">
                                                            {{$require->title}}    
                                                            </a></h3>
                                                        </div>
                                                        <span>By:
                                                            <a target="_blank" class="quotation-company"
                                                                href="{{ route('vendor.companies.profile', [$require->user->id]) }}">  {{$require->user->company_name}}   </a>
                                                        </span>

                                                    </div>
                                                </td>
                                                <td><span>{{ date('d M Y - h:i A', strtotime($require->created_at))}}</span></td>

                                                <td><span>
                                                     {{$require->items->count()}} Items
                                                       </span></td>
                                                <td><span><a href="javascript:void(0);" class="tg-btn" type="submit"
                                                            data-toggle="modal" data-target=".requirement-items-{{$require->id}}">View
                                                            Details</a>
                                                    </span></td>
                                            </tr>


                                            @endif
                                            {{-- end if --}}


                                            @endforeach
                                            {{-- end foreach --}}
                                        </tbody>
                                    </table>
                                </div>
                                {{-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <nav class="tg-pagination">
                                        <ul>
                                            <li class="tg-prevpage"><a href="#"><i class="fa fa-angle-left"></i></a>
                                            </li>
                                            <li><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li class="tg-active"><a href="#">5</a></li>
                                            <li>...</li>
                                            <li><a href="#">10</a></li>
                                            <li class="tg-nextpage"><a href="#"><i class="fa fa-angle-right"></i></a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-5 col-md-4 col-lg-3 pull-left">
                    <aside id="tg-sidebar" class="tg-sidebar">
                        <form class="tg-themeform tg-formrefinesearch" action="{{route('vendor.requirements.browseFilter')}}" method="POST">
                            @csrf

                            <fieldset>
                                <h4>Filter By Categories</h4>
                                <div class="tg-checkboxgroup">
                            
                                    <div class="form-group">
                                        <span class="tg-select">
                                            <select id="browse-category-filter" name="browse-category" required class="category-select">
                            
                                                <option value="">Category</option>
                            
                                                @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                            
                                            </select>
                            
                                        </span>
                                    </div>
                            
                                    <!-- <a href="#" data-toggle="modal" data-target=".tg-categoryModal">View All</a> -->
                                </div>
                            
                            
                            
                                <div class="tg-checkboxgroup py-0">
                            
                                    <div class="form-group">
                                        <span class="tg-select">
                                            <select id="browse-subcategory-filter" name="browse-subcategory" required="" class="subcategory-select">
                                                <option value="">Subcategory</option>
                            
                                                @foreach ($subcategories as $subcategory)
                                                <option class="d-none category-option category-option-{{ $subcategory->category_id }}"
                                                    value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                                                @endforeach
                            
                                            </select>
                                        </span>
                                    </div>
                            
                                </div>
                            </fieldset>

                            



                            <fieldset>
                                <h4>Sort Filters</h4>
                                <div class="tg-checkboxgroup">
                            
                                    <div class="form-group">
                                        <span class="tg-select">
                                            <select name="browse-arrange">
                                                <option value="asc">Ascending</option>
                                                <option value="desc">Descending</option>
                                            </select>
                            
                            
                                        </span>
                                    </div>
                            
                                    
                                </div>
                            
                            

                                <div class="tg-checkboxgroup py-0">
                                
                                    <div class="form-group">
                                        <span class="tg-select">
                                            <select name="browse-rating">
                                                <option value="toprated">Top Rated</option>
                                                <option value="topseller">Top Seller</option>
                                            </select>
                                
                                
                                        </span>
                                    </div>
                                
                                
                                </div>
                            
                    
                            </fieldset>


                            <fieldset>
                                <button class="tg-btn" type="submit" style="border:1px solid whitesmoke">apply</button>
                                <button class="tg-btn custom-reset-button" type="reset">reset</button>
                            </fieldset>
                        </form>
                        {{-- end form --}}
                    </aside>
                </div>
            </div>
        </div>
    </div>
</main>
{{-- end main --}}










{{-- modals --}}
@php
    $counter = 1; 
@endphp

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
                                        <input class="" type="checkbox" name="item-{{$item->id}}" id="item-{{$item->id}}">
                                            <label class="d-inline" for="item-{{$item->id}}">{{$item->name}}
                                            </label>
                                        </h2>
                                    </div>





                                    <div class="tg-btntimeedit">

                                        <p style="padding: 8px 20px; margin-bottom: 0px;">
                                            <input class="d-inline" type="number" name="quantity({{$item->id}})" id="quo-quantity"
                                                style="width: 49%;" placeholder="Quantity">
                                            <input class="d-inline" type="text" name="price({{$item->id}})" id="quo-price"
                                                style="width: 49%;" placeholder="Price">
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



{{-- end modals --}}


@endsection
{{-- end section --}}
