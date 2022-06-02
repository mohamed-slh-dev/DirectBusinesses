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
                    <li><a href="#">Deals</a></li>
                    <li class="tg-active">{{ $deal_info->title }}</li>
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
                                                <a href="#" id="download-button" class="confirm-quotation-edit"
                                                    style="margin-left: 10px; background-color: indianred; border-color:indianred; color:white; padding: 8px 10px; font-weight: 500">
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
                                            
                                            @foreach ($deal_info->items as $item)
                                                
                                        

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

                                                <!-- category / subcategory -->
                                                <td><span>{{$item->category->name}}  > {{$item->subcategory->name}}</span></td>




                                                <td class="valign-middle text-center">
                                                    <button disabled="" class="btn-sm btn-warning">{{$item->type->name}}</button>
                                                </td>


                                                <!-- quantity + measuringunit -->
                                                <td class="valign-middle text-center"><span class="text-black-f">{{$item->min_quantity}}
                                                        ({{$item->measuringunit->name}})</span></td>


                                                <!-- price -->
                                                <td class="valign-middle text-center"><span
                                                        class="text-black-f">{{$item->price}}</span></td>

                                            </tr>
                                            <!-- end table row -->

                                            @endforeach


                                        </tbody>
                                    </table>



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

{{-- end modals --}}





@endsection
{{-- end section --}}