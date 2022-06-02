@extends('layouts.startups-regular')

{{-- make no margin in banner (only this page) --}}
<style>
    .tg-innerpagebanner {
        margin-bottom: 0px !important;
    }


    th {
        font-size: 14px !important;
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
                    <a href="{{ route('startup.home') }}" class="home-button-custom">
                        <i class="fa fa-arrow-circle-left"></i>Home</a>
                </div>
                <ol class="tg-breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Post Requirement</a></li>
                    <li class="tg-active">Website development</li>
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
                                        <p class="text-offwhite-f">Consectetur adipisicing elit sed do eiusmod tempor
                                            incididunt ut labore et dolore magna aliqua enim ad minimat quis nostrud
                                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat aute
                                            irure dolor reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                            nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                            culpa qui officia deserunt mollit anim id est laborum ut perspiciatis unde
                                            omnis iste natus error sit voluptatem accusantium doloremque laudantium
                                            totam rem aperiam ab illo inventore veritatis quasi architecto beatae vitae
                                            dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                                            aspernatur aut fugit sed quia consequuntur magni dolores eos qui ratione
                                            voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia
                                            dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi
                                            tempora incidunt ut labore et dolore magnam aliquam quaerat
                                            voluptatem.<br>Consectetur adipisicing elit sed do eiusmod tempor incididunt
                                            ut labore et dolore magna aliqua enim ad minimat quis nostrud exercitation
                                            ullamco laboris nisi ut aliquip ex ea commodo consequat aute irure dolor
                                            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                            officia deserunt mollit anim id est laborum ut perspiciatis unde omnis iste
                                            natus error sit voluptatem accusantium doloremque laudantium totam rem
                                            aperiam ab illo inventore veritatis quasi architecto beatae vitae dicta sunt
                                            explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut fugit
                                            sed quia consequuntur magni dolores eos qui ratione voluptatem sequi
                                            nesciunt.</p>

                                    </div>
                                </div>
                                <div class="tg-companyfeaturebox tg-languages">
                                    <div class="tg-companyfeaturetitle">

                                        <div class="row align-items-end mb-2">
                                            <div class="col-6 text-left">
                                                <h3 class="text-white-f custom-pr-view-subheading">List of Items</h3>
                                            </div>

                                            <div class="col-6 text-right">
                                                <a href="javascript:void(0);" class="confirm-quotation-edit"
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
                                            <!-- tr -->
                                            <tr>
                                                <td>

                                                    <div class="tg-contentbox">
                                                        <!-- <a class="tg-tag tg-featuredtag" href="#"></a> -->
                                                        <div class="tg-title">
                                                            <h3><a href="#">Landing Page Design</a></h3>
                                                        </div>
                                                        <span> </span>
                                                    </div>
                                                </td>

                                                <!-- category / subcategory -->
                                                <td><span>Software Development > Web Design</span></td>




                                                <td class="valign-middle text-center">
                                                    <button disabled="" class="btn-sm btn-warning">Service</button>
                                                </td>


                                                <!-- quantity + measuringunit -->
                                                <td class="valign-middle text-center"><span class="text-black-f">1
                                                        Page</span></td>


                                                <!-- budget -->
                                                <td class="valign-middle text-center"><span class="text-black-f">400 -
                                                        700</span></td>

                                            </tr>
                                            <!-- end table row -->



                                            <tr>
                                                <td>

                                                    <div class="tg-contentbox">
                                                        <!-- <a class="tg-tag tg-featuredtag" href="#"></a> -->
                                                        <div class="tg-title">
                                                            <h3><a href="#">Create and Design Logo </a></h3>
                                                        </div>
                                                        <span> </span>
                                                    </div>
                                                </td>
                                                <td><span> Desing > Graphic Design </span></td>

                                                <td class="valign-middle text-center">
                                                    <button disabled="" class="btn-sm btn-warning">Service</button>
                                                </td>


                                                <!-- quantity + measuringunit -->
                                                <td class="valign-middle text-center"><span class="text-black-f">1
                                                        Logo</span></td>


                                                <!-- budget -->
                                                <td class="valign-middle text-center"><span class="text-black-f">1000 -
                                                        1200</span></td>
                                            </tr>


                                            <!-- tr -->
                                            <tr>
                                                <td>

                                                    <div class="tg-contentbox">
                                                        <!-- <a class="tg-tag tg-featuredtag" href="#"></a> -->
                                                        <div class="tg-title">
                                                            <h3><a href="#">Apply Copywriting </a></h3>
                                                        </div>
                                                        <span> </span>
                                                    </div>
                                                </td>
                                                <td><span> Marketing > Content Writing </span></td>

                                                <td class="valign-middle text-center">
                                                    <button disabled="" class="btn-sm btn-warning">Service</button>
                                                </td>


                                                <!-- quantity + measuringunit -->
                                                <td class="valign-middle text-center"><span
                                                        class="text-black-f">1</span></td>

                                                <!-- budget -->
                                                <td class="valign-middle text-center"><span class="text-black-f">700 -
                                                        900</span></td>

                                            </tr>
                                            <!-- end tr -->




                                        </tbody>
                                    </table>
                                </div>

                                <div class="tg-companyfeaturebox tg-languages">
                                    <div class="tg-companyfeaturetitle">
                                        <h3 class="text-white-f custom-pr-view-subheading" style="margin-top: 20px;">
                                            Submitted Quotation</h3>
                                    </div>
                                    <div class="tg-dashboardservices">


                                        <div class="tg-dashboardservice custom-pr-quotations">
                                            <div class="tg-servicetitle">
                                                <h2><a style="color:black !important;" href="{{ route('startup.companies.profile', [1]) }}">Truth
                                                        Co.</a>
                                                    <h2>
                                            </div>
                                            <div class="tg-btntimeedit">
                                                <span>3/3 Requirmenets</span>



                                                <button type="submit" data-toggle="modal"
                                                    data-target=".tg-categoryModal" class="tg-btnedite"><i
                                                        class="fa fa-check"></i></button>

                                                <button type="submit" class="tg-btndel"><i
                                                        class="lnr lnr-trash"></i></button>
                                            </div>
                                        </div>






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

{{-- quotation modal --}}
<div class="modal fade tg-categoryModal" tabindex="-1">
    <div class="modal-dialog tg-modaldialog" role="document">
        <div class="modal-content tg-modalcontent">
            <div class="tg-modalhead">
                <h2>Truth Co Quotation</h2>
                <span class="tg-selecteditems">3/3 Requirements</span>
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
                                        Offer Quantity
                                    </th>

                                    <th class="text-center">
                                        Offer Price
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
                                    <td class="valign-middle text-center"><span class="text-black-f">1 Page</span></td>

                                    <!-- price -->
                                    <td class="valign-middle text-center"><span class="text-black-f">600</span></td>

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
                                    <td class="valign-middle text-center"><span class="text-black-f">1 Logo</span></td>

                                    <!-- price -->
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

                                    <!-- price -->
                                    <td class="valign-middle text-center"><span class="text-black-f">900</span></td>

                                </tr>
                                <!-- end tr -->




                            </tbody>
                        </table>
                    </form>




                    <div class="form-group tg-inpuicon" style="margin-top: 0px;">


                        <hr>


                        <button class="btn download-attach-button">
                            Download Attachments
                        </button>

                        <!-- <i class="lnr lnr-magnifier"></i> -->
                        <textarea name="Budget" id="" cols="30" class="form-control" rows="6"
                            placeholder="Additional Note From Vendor" readonly></textarea>



                    </div>


                </form>
            </div>
            <div class="tg-modalfoot">

                <div class="row">

                    <div class="col-6 text-left">
                        <button class="tg-btn" data-dismiss="modal">Hide</button>

                    </div>

                    <div class="col-6 text-right">

                        <button class="tg-btn ml-2" style="float:right" type="submit">Accept</button>

                        <a class="tg-btn customer-view-profile-button" style="float:right"
                            href="{{ route('startup.companies.profile', [1]) }}">View Profile</a>
                    </div>
                </div>



            </div>
        </div>
    </div>
</div>
{{-- end quotation modal --}}


{{-- end modals --}}




@endsection
{{-- end section --}}