@extends('layouts.customer')





{{-- section --}}
@section('content')




<script>

    var browseAttachmentsArray = @json($attachments);
    var attachmentsPath = "{{URL::asset('assets/uploads/deals')}}/";
    
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
                    <li class="tg-active">Deals</li>
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
                    <div class="tg-sectiontitle">
                        <h2>Browse the latest deals</h2>
                    </div>
                    <div class="tg-description">
                    </div>
                </div>
            </div>
            <div id="tg-twocolumns" class="tg-twocolumns mb-5">
                <div class="col-xs-12 col-sm-7 col-md-8 col-lg-9 pull-right">
                    <div class="row">
                        <div id="tg-content" class="tg-content">
                            <div class="tg-joblisting">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                                    {{-- <div class="tg-sortfilters">

                                        <div class="tg-sortfilter custom-tg-sortfilter tg-sortby">
                                            <span>Sort By:</span>
                                            <div class="tg-select">
                                                <select>
                                                    <option>Top Rated</option>
                                                    <option>Top Seller</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="tg-sortfilter custom-tg-sortfilter tg-arrange">
                                            <span>Arrange:</span>
                                            <div class="tg-select">
                                                <select>
                                                    <option>des</option>
                                                    <option>Asc</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="tg-sortfilter custom-tg-sortfilter tg-show">
                                            <span>Show:</span>
                                            <div class="tg-select">
                                                <select>
                                                    <option>12</option>
                                                    <option>24</option>
                                                    <option>all</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <table class="tg-tablejoblidting custom-browse-table">
                                        <tbody>
                                          
                                        @foreach ($deals as $deal)

                                        {{-- 1 if its already sent to --}}
                                        @php
                                        $sentAlready = 0;  
                                        @endphp


                                        {{-- chec if already sent --}}
                                        @foreach ($deal->requests as $request)
                                            @if ($request->user->id == session('user_id'))

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
                                                            {{$deal->title}}    
                                                            </a></h3>
                                                        </div>
                                                        <span>By:
                                                            <a target="_blank" class="quotation-company"
                                                                href="{{ route('customer.companies.profile', [$deal->user->id]) }}">{{$deal->user->company_name}}</a>
                                                        </span>

                                                    </div>
                                                </td>
                                                <td><span>{{$deal->items->count()}} Items </span></td>
                                                <td><span>{{date('d M Y', strtotime($deal->created_at))}}</span></td>
                                                <td><span><a href="javascript:void(0);" class="tg-btn" type="submit"
                                                data-toggle="modal" data-target=".deal-items-{{$deal->id}}">Request</a>
                                                    </span></td>
                                            </tr>

                                            @endif
                                            {{-- end of dipslay if 0 --}}


                                            @endforeach
                                            {{-- end foreach --}}
                                        </tbody>
                                    </table>
                                </div>
                                {{-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-4">
                                    <nav class="tg-pagination">
                                        <ul>
                                            <li class="tg-prevpage"><a href="#"><i class="fa fa-angle-left"></i></a>
                                            </li>
                                            <li class="tg-active"><a href="#">1</a></li>
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
                        <form class="tg-themeform tg-formrefinesearch" action="{{route('customer.deals.browseFilter')}}" method="POST">
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


@foreach ($deals as $deal)
    

{{-- send request modal --}}
<div class="modal fade deal-items-{{$deal->id}}" tabindex="-1">
    <div class="modal-dialog tg-modaldialog" role="document">
        <div class="modal-content tg-modalcontent">
            <div class="tg-modalhead">
                <h2>Send Request </h2>
                <span class="tg-selecteditems"> {{$deal->items->count()}} Requirements</span>
            </div>
            <div class="tg-modalbody">
               

                    <div class="tg-columnstyle">

                        <div class="tg-column">

                            <table class="table custom-quo-table"
                                style="border: 1px solid lightgrey; margin-bottom: 20px;">
                                <tbody>

                                    <thead>


                                        <th>
                                            Name
                                        </th>

                                        <th style="width: 340px">
                                            Category
                                        </th>

                                        <th class="text-center" style="width: 100px">
                                            Type
                                        </th>

                                        <th class="text-center" style="width: 180px;">
                                            Minimum Quantity
                                        </th>

                                        <th class="text-center" style="width: 110px;">
                                            Price (AED)
                                        </th>



                                    </thead>
                                  @foreach ($deal->items as $item)
                                      
                               

                                    <!-- tr -->
                                    <tr>



                                        <td>

                                            <div class="tg-contentbox">
                                                <!-- <a class="tg-tag tg-featuredtag" href="#"></a> -->
                                                <div class="tg-title">
                                                    <h3><a style="font-size:14px !important" href="#">
                                                    {{$item->name}}
                                                    </a></h3>
                                                </div>
                                                <span> </span>
                                            </div>
                                        </td>
                                        <td><span class="font-14" style="color:#333"> {{$item->category->name}} > {{$item->subcategory->name}} </span>
                                        </td>

                                        <td class="valign-middle text-center">
                                            <button disabled="" class="btn-sm btn-warning">{{$item->type->name}}</button>
                                        </td>


                                        <!-- minquantity + measuringunit -->
                                        <td class="valign-middle text-center"><span class="text-black-f font-13">{{$item->min_quantity}}
                                               ({{$item->measuringunit->name}})</span></td>

                                        <!-- Price -->
                                        <td class="valign-middle text-center"><span
                                                class="text-black-f font-13">{{$item->price}}</span></td>

                                    </tr>
                                    <!-- end tr -->

                                    @endforeach

                                </tbody>
                            </table>



                            <div class="row align-items-end mb-0">

                                <div class="col-12 text-left">
                                    <a href="javascript:void(0);" class="btn btn-none confirm-quotation-edit download-button" id="download-button-{{ $counter }}"
                                        style="margin-left: 0px; background-color: indianred; border-color:indianred; color:white; padding: 8px 15px !important; font-weight: 500; border-radius: 5px !important">
                                        View Attachments<i class="fa fa-download ml-2"></i>
                                    </a>
                                </div>

                            </div>

                        </div>
                    </div>

                    <div class="form-group tg-inpuicon" style="margin-top: 0px;">

                        <hr>


                        <!-- your request -->
                        <div class="tg-companyfeaturebox tg-languages pt-0">
                            <div class="tg-companyfeaturetitle">

                                <h3 style="margin: 0px 0px 0px">Your Request</h3>

                            </div>

                            <form action="{{route('customer.deals.create')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                            <div class="tg-dashboardservices pb-5">

                            <input type="hidden" name="deal_id" id="" value="{{$deal->id}}">
                              @foreach ($deal->items as $item)
                                  
                            

                                <!-- first requirement (r) -->
                                <div class="tg-dashboardservice custom-pr-quotations">

                                    <!-- requirements check -->
                                    <div class="tg-servicetitle" style="padding:18px 20px;">
                                        <h2>
                                            <input class="" type="checkbox" name="" id="">
                                            <label class="d-inline">{{$item->name}}
                                            </label>
                                        </h2>
                                    </div>





                                    <div class="tg-btntimeedit">

                                        <p style="padding: 8px 20px; margin-bottom: 0px;">
                                            <input class="d-inline" type="number" name="quantity({{$item->id}})" id="quo-quantity"
                                                style="width: 100%;" placeholder="Quantity">
                                            <!-- <input class="d-inline" type="text" name="price" id="quo-price" style="width: 49%;"
													placeholder="Price"> -->
                                        </p>

                                    </div>
                                </div>
                                <!-- end third -->

                                @endforeach

                            </div>
                        </div>
                        <!-- end quootation -->


                        <h3 style="margin: 0px 0px 15px">Attachment</h3>

                        <input type="file" name="doc" class=" attach-input" id="quot-attach">



                        <!-- <i class="lnr lnr-magnifier"></i> -->
                        <textarea name="note" id="" cols="30" class="form-control" rows="6"
                            placeholder="Additional Note!"></textarea>



                    </div>
               
            </div>
            <div class="tg-modalfoot">
                <button class="tg-btn" data-dismiss="modal">Hide</button>


                <button class="tg-btn ml-2" type="submit">Order Now!</button>
                <a class="tg-btn quotation-view-req-button" target="_blank" href="{{ route('customer.deals.view', [$deal->id]) }}">View
                    Deal</a>
            </div>
        </form>
        </div>
        </div>
    </div>
</div>
{{-- end send request modal --}}


@php
$counter++;
@endphp


@endforeach

{{-- end modals --}}





@endsection
{{-- end section --}}