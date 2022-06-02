@extends('layouts.vendor')



{{-- section --}}
@section('content')



<script>

    var browseAttachmentsArray = @json($attachments);
    var attachmentsPath = "{{URL::asset('assets/uploads/auctions')}}/";
    
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
                    <li class="tg-active">Auctions</li>
                </ol>
            </div>
        </div>
    </div>
</div>
{{-- end banner --}}







{{-- main content --}}
<main id="tg-main" class="tg-main tg-haslayout custom-connect-wrapper" style="background-color: black;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-push-1 col-lg-8 col-lg-push-2">
                <div class="tg-sectionhead">
                    <div class="tg-sectiontitle mb-1">
                        <h2>Connent with new Customers </h2>
                    </div>
                    <div class="tg-description">
                        <h5 class="text-warning">Browse Auctions</h5>
                    </div>
                </div>
            </div>
            <div id="tg-twocolumns" class="tg-twocolumns mb-5">
                <div class="col-xs-12 col-sm-7 col-md-8 col-lg-9 pull-right">
                    <div class="row">
                        <div id="tg-content" class="tg-content">
                            <div class="tg-joblisting">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">

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



                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 text-right mb-4">

                                    <a href="{{ route('vendor.requirements.browse') }}" class="btn btn-success">See Requirements<i
                                            class="fa fa-refresh ml-3"></i></a>
                                </div>


                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <table class="tg-tablejoblidting custom-browse-table">
                                        <tbody>

                                            @foreach ($auctions as $auction)


                                            {{-- 1 if its already sent to --}}
                                            @php
                                            $sentAlready = 0;
                                            @endphp
                                            
                                            
                                            {{-- chec if already sent --}}
                                            @foreach ($auction->bids as $bid)
                                            
                                            @if ($bid->user->id == session('user_id'))
                                            
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
                                                            <h3><a class="quotation-name" href="#">{{$auction->title}}</a></h3>
                                                        </div>
                                                        <span>By:
                                                            <a target="_blank" class="quotation-company"
                                                        href="{{ route('vendor.companies.profile', [ $auction->user_id]) }}">
                                                        {{$auction->user->company_name}}</a>
                                                        </span>

                                                    </div>
                                                </td>
                                                <td><span>{{ date('d M Y - h:i A', strtotime($auction->created_at)) }}</span></td>

                                                <td><span>{{ $auction->items->count() }} Items</span></td>
                                                <td><span><a href="javascript:void(0);" class="tg-btn" type="submit"
                                                data-toggle="modal" data-target=".auction-items-{{$auction->id}}">View
                                                            Details</a>
                                                    </span></td>
                                            </tr>

                                            @endif

                                            @endforeach
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
                        <form class="tg-themeform tg-formrefinesearch" action="{{route('vendor.auctions.browseFilter')}}"
                            method="POST">
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
{{-- end main content --}}









{{-- modals --}}

@php
    $counter = 1; 
@endphp


@foreach ($auctions as $auction)
    


{{-- quotation modal --}}
<div class="modal fade auction-items-{{$auction->id}}" tabindex="-1">
    <div class="modal-dialog tg-modaldialog" role="document">
        <div class="modal-content tg-modalcontent">
            <div class="tg-modalhead">
                <h2>Auction Info</h2>
                <span class="tg-selecteditems">{{ $auction->items->count() }} Requirements</span>
            </div>

            <form action="{{route('vendor.auctions.send.bid')}}" method="POST">
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
                                            Price (AED)
                                        </th>



                                    </thead>

                                <input type="hidden" name="auction_id" value="{{$auction->id}}">

                                    @foreach ($auction->items as $item)
                                
                                    <!-- tr -->
                                    <tr>


                                        <td>

                                            <div class="tg-contentbox">
                                                <!-- <a class="tg-tag tg-featuredtag" href="#"></a> -->
                                                <div class="tg-title">
                                                    <h3><a class="font-14" style="font-size:14px !important"
                                                            href="#"> {{$item->name}} </a></h3>
                                                </div>
                                                <span> </span>
                                            </div>
                                        </td>

                                        <!-- category / subcategory -->
                                        <td><span class="font-14" style="color:#333">
                                            {{$item->category->name}} >   {{$item->subcategory->name}}</span></td>




                                        <td class="valign-middle text-center">
                                            <button disabled="" class="btn-sm btn-warning">  {{$item->type->name}}</button>
                                        </td>


                                        <!-- quantity + measuringunit -->
                                        <td class="valign-middle text-center"><span class="text-black-f font-13">  {{$item->quantity}}
                                                ({{$item->measuringunit->name}})</span></td>

                                        <!-- Budget -->
                                        <td class="valign-middle text-center"><span
                                                class="text-black-f font-13">  {{$item->price}}</span></td>



                                    </tr>
                                    <!-- end table row -->
                                    @endforeach

                                </tbody>
                            </table>


                            <div class="row align-items-end mb-0">

                                <div class="col-12 text-left">
                                    <a href="javascript:void(0);" class="btn btn-none confirm-quotation-edit download-button" id="download-button-{{ $counter }}" style="margin-left: 0px; background-color: indianred; border-color:indianred; color:white; padding: 8px 15px; font-weight: 500; border-radius: 5px !important">
                                        View Attachments<i class="fa fa-download ml-2"></i>
                                    </a>
                                </div>

                            </div>

                        </div>
                    </div>

                    <div class="form-group tg-inpuicon" style="margin-top: 0px;">

                        <hr>

                        <div class="tg-companyfeaturebox tg-languages pt-0">
                            <div class="tg-companyfeaturetitle">

                                <h3 style="margin: 0px 0px 0px">Your Bid</h3>

                            </div>


                            <input type="hidden" name="auction_id" value="{{$auction->id}}">

                            <div class="tg-dashboardservices pb-5">

                        @foreach ($auction->items as $item)
                               
                                <!-- first requirement (r) -->
                                <div class="tg-dashboardservice custom-pr-quotations">

                                    <!-- requirements check -->
                                    <div class="tg-servicetitle" style="padding:18px 20px;">
                                        <h2>
                                        <input class="" type="checkbox" name="{{$item->id}}" id="">
                                            <label class="d-inline">{{$item->name}}
                                            </label>
                                        </h2>
                                    </div>





                                    <div class="tg-btntimeedit">

                                        <p style="padding: 8px 20px; margin-bottom: 0px;">

                                            <input class="d-inline" type="text" name="price({{$item->id}})" id="quo-price"
                                                style="width: 100%;" placeholder="Price">

                                        </p>

                                    </div>
                                </div>
                                <!-- end third -->

                                @endforeach
                                
                            </div>


                        </div>
                        <!-- end quootation -->


                    </div>
               
            </div>
            <div class="tg-modalfoot">
                <button class="tg-btn" type="submit">Submit</button>
                <a class="tg-btn quotation-view-req-button" href="{{ route('vendor.auctions.view', [$auction->id]) }}">View Auction</a>

            </div>
        </form>
        </div>
    </div>
</div>
<!-- end quotation modal -->

@php
    $counter++;
@endphp


@endforeach
{{-- end modals --}}



@endsection
{{-- end section --}}