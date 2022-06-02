@extends('layouts.customer')



{{-- make no margin in banner (only this page) --}}
<style>
    .tg-innerpagebanner {
        margin-bottom: 0px !important;
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
                    <li><a href="#">Requirement Evaluation</a></li>
                    <li class="tg-active">Website Development</li>
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

                            <div class="tg-companyfeatures">

                                <div class="tg-companyfeaturebox tg-languages">

                                    <!-- <div class="tg-companyfeaturetitle">
												<h3 class="text-white-f custom-pr-view-subheading">Ev</h3>
											</div> -->


                                    <table class="table custom-pr-table"
                                        style="overflow-x: auto !important; white-space: nowrap !important; width: auto; display: block !important; border-right:none;">
                                        <tbody>

                                            <thead>

                                                <!-- empty for item name -->
                                                <th class="eval-company-th" style="width:150px;">
                                                    <h6 class="mb-0">Item Name <br>(Product - Service)</h6>
                                                </th>


                                                <!-- company 1 -->
                                                <th colspan="2" class="eval-company-th">
                                                    <img src="{{ asset('assets/prev-images/demologo6.jpg') }}" alt="">
                                                    <h6 class="mb-0">
                                                        Eishar Ltd.
                                                    </h6>

                                                    <!-- rating -->
                                                    <div class="star-rating star-rating-custom dashboard-stars-small mb-0 mt-0"
                                                        data-rating="4"
                                                        style="display:inline-block; text-align: center;"></div>

                                                </th>

                                                <!-- company 2 -->
                                                <th colspan="2" class="eval-company-th">
                                                    <img src="{{ asset('assets/prev-images/demologo3.png') }}" alt="">
                                                    <h6 class="mb-0">
                                                        Paperwork Company
                                                    </h6>

                                                    <!-- rating -->
                                                    <div class="star-rating star-rating-custom dashboard-stars-small mb-0 mt-0"
                                                        data-rating="3"
                                                        style="display:inline-block; text-align: center;"></div>
                                                </th>


                                                <!-- company 3 -->
                                                <th colspan="2" class="eval-company-th">
                                                    <img src="{{ asset('assets/prev-images/demologo5.png') }}" alt="">
                                                    <h6 class="mb-0">
                                                        Coffetta
                                                    </h6>

                                                    <!-- rating -->
                                                    <div class="star-rating star-rating-custom dashboard-stars-small mb-0 mt-0"
                                                        data-rating="4.5"
                                                        style="display:inline-block; text-align: center;"></div>

                                                </th>



                                                <!-- company 3 -->
                                                <th colspan="2" class="eval-company-th">
                                                    <img src="{{ asset('assets/prev-images/demologo2.jpg') }}" alt="">
                                                    <h6 class="mb-0">
                                                        Aiuba Ltd.
                                                    </h6>

                                                    <!-- rating -->
                                                    <div class="star-rating star-rating-custom dashboard-stars-small mb-0 mt-0"
                                                        data-rating="2.5"
                                                        style="display:inline-block; text-align: center;"></div>
                                                </th>



                                                <!-- company 4 -->
                                                <th colspan="2" class="eval-company-th">
                                                    <img src="{{ asset('assets/prev-images/demologo1.png') }}" alt="">
                                                    <h6 class="mb-0">
                                                        Starbank.
                                                    </h6>

                                                    <!-- rating -->
                                                    <div class="star-rating star-rating-custom dashboard-stars-small mb-0 mt-0"
                                                        data-rating="3.5"
                                                        style="display:inline-block; text-align: center;"></div>
                                                </th>


                                            </thead>


                                            <!-- titles row -->
                                            <tr class="eval-tr">

                                                <!-- empty for item name -->
                                                <td></td>


                                                <!-- quantity + price for company 1 -->
                                                <td>
                                                    Quantity
                                                </td>

                                                <td>
                                                    Price
                                                </td>

                                                <!-- quantity + price for company 2 -->
                                                <td>
                                                    Quantity
                                                </td>

                                                <td>
                                                    Price
                                                </td>


                                                <!-- quantity + price for company 3 -->
                                                <td>
                                                    Quantity
                                                </td>

                                                <td>
                                                    Price
                                                </td>



                                                <!-- quantity + price for company 4 -->
                                                <td>
                                                    Quantity
                                                </td>

                                                <td>
                                                    Price
                                                </td>

                                                <!-- quantity + price for company 5 -->
                                                <td>
                                                    Quantity
                                                </td>

                                                <td>
                                                    Price
                                                </td>

                                            </tr>
                                            <!-- end titles row -->


                                            <!-- content item 1 (repeat this) -->
                                            <tr class="eval-tr">

                                                <!-- item Name -->
                                                <td class="font-13">
                                                    Mouses and Keyboards
                                                </td>


                                                <!-- quantity + price for company 1 -->
                                                <td>
                                                    20
                                                </td>

                                                <td>
                                                    8,000
                                                </td>



                                                <!-- quantity + price for company 2 -->
                                                <td>
                                                    30
                                                </td>

                                                <td>
                                                    10,000
                                                </td>



                                                <!-- quantity + price for company 3 -->
                                                <td class="eval-border-success-l">
                                                    18
                                                </td>

                                                <td class="eval-border-success-r">
                                                    7,000
                                                </td>


                                                <!-- quantity + price for company 4 -->
                                                <td>
                                                    18
                                                </td>

                                                <td>
                                                    8,000
                                                </td>



                                                <!-- quantity + price for company 5 -->
                                                <td>
                                                    18
                                                </td>

                                                <td>
                                                    11,000
                                                </td>


                                            </tr>
                                            <!-- end content item 1 (repeat this) -->









                                            <!-- content item 2 (repeat this) -->
                                            <tr class="eval-tr">

                                                <!-- item Name -->
                                                <td class="font-13">
                                                    PC Desktop Screens
                                                </td>


                                                <!-- quantity + price for company 1 -->
                                                <td class="eval-border-success-l">
                                                    10
                                                </td>

                                                <td class="eval-border-success-r">
                                                    16,000
                                                </td>



                                                <!-- quantity + price for company 2 -->
                                                <td>
                                                    10
                                                </td>

                                                <td>
                                                    19,000
                                                </td>



                                                <!-- quantity + price for company 3 -->
                                                <td class="eval-border-danger-l">
                                                    -
                                                </td>

                                                <td class="eval-border-danger-r">
                                                    -
                                                </td>



                                                <!-- quantity + price for company 4 -->
                                                <td>
                                                    10
                                                </td>

                                                <td>
                                                    20,000
                                                </td>



                                                <!-- quantity + price for company 5 -->
                                                <td class="eval-border-danger-l">
                                                    -
                                                </td>

                                                <td class="eval-border-danger-r">
                                                    -
                                                </td>


                                            </tr>
                                            <!-- end content item 2 (repeat this) -->



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