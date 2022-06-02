@extends('layouts.startups-home')




{{-- section --}}
@section('content')




{{-- main --}}
<main id="tg-main" class="tg-main tg-paddingzero tg-haslayout"
    style="background-color: black; position:relative; background-image: url();">


    <div class="logincoverdiv"></div>
    

    {{-- layout --}}
    <div class="tg-main-section tg-haslayout pr-layout" style="padding:0px 0px; z-index:100000000">
        <div class="container">

            <!-- pipelines -->
            <div class="row align-items-center" style="margin-top: 70px; margin-bottom:30px">



                <!-- table -->
                <div class="col-12" style="padding:0px 17px">

                    <table class="table custom-home-table startup-table" style="z-index:1">

                        <thead style="background-color:whitesmoke;">

                            <th style="color:black; width: 100px;">Reference</th>
                            <th style="color:black;">Requirment Title</th>
                            <th style="color:black; width: 100px;">Date</th>

                            <th style="width:110px; color:black;">Status</th>
                            <th style="color:black; width: 120px">Clarifications</th>

                            <th style="width:110px; color:black">Informations</th>


                        </thead>



                        <tbody>

                            <!-- first row -->
                            <tr>
                                <td># 121</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing.</td>
                                <td>2021-06-28</td>

                                <td>
                                    <div class="d-flex align-items-center text-warning"> <i
                                            class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
                                        <span>On-going</span>
                                    </div>
                                </td>

                                <td style="text-align: center">
                                    <a style="margin-bottom: 0px; margin-top: 3px; padding: 3px 10px; border: 1px solid #8a6d3b; background:transparent; font-size: 13px; border-radius:3px"
                                        data-toggle="modal" data-target=".clarfmodal" class="cursor-pointer"><i
                                            class="lni lni-eye" style="font-size: 17px"></i></a>
                                </td>


                                <td>
                                    <a href="{{ route('startup.requirements.view', [1]) }}" class="btn text-warning"
                                        style="margin-bottom: 0px; margin-top: 0px; padding: 2px 5px; border: 1px solid #8a6d3b; background:transparent; font-size: 13px">View
                                        Details</a>
                                </td>


                            </tr>



                            <tr>
                                <td># 88</td>
                                <td>Lorem, ipsum dolor.</td>
                                <td>2021-06-26</td>

                                <td>
                                    <div class="d-flex align-items-center text-success"> <i
                                            class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
                                        <span>Approved</span>
                                    </div>
                                </td>

                                <td style="text-align: center">
                                    <a style="margin-bottom: 0px; margin-top: 3px; padding: 3px 10px; border: 1px solid #8a6d3b; background:transparent; font-size: 13px; border-radius:3px"
                                        data-toggle="modal" data-target=".clarfmodal" class="cursor-pointer"><i
                                            class="lni lni-eye" style="font-size: 17px"></i></a>
                                </td>


                                <td>
                                    <a href="{{ route('startup.requirements.view', [1]) }}" class="btn text-warning"
                                        style="margin-bottom: 0px; margin-top: 0px; padding: 2px 5px; border: 1px solid #8a6d3b; background:transparent; font-size: 13px">View
                                        Details</a>
                                </td>





                            </tr>


                        </tbody>


                    </table>



                    <hr>

                </div>



            </div>
            <!-- end pipelines -->





            <div class="row align-items-center pt-3 mb-5">

                <!-- <div class="helpboxescol col-12 text-center">
							<h3 class="startupheading">Startup / New Businesses</h3>
						</div> -->


                <div class="helpboxescol col-md-6 col-lg-3" >
                    <div class="helpboxeswrapper row no-gutters align-items-center"
                        style="background-image: url({{ asset('assets/prev-images/startup-register.jpg') }});" data-toggle="tooltip" data-placement="top" title="Lorem, ipsum dolor sit amet consectetur adipisicing elit.">
                        <div class="col-12">
                            <p>Company Registeration & Legal</p>
                            <a href="{{ route('startup.services.view', [1]) }}" class="rs-span">
                                Request Service</a>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-lg-3 helpboxescol" >
                    <div class="helpboxeswrapper row no-gutters align-items-center"
                        style="background-image: url({{ asset('assets/prev-images/startup-office.jpg') }});" data-toggle="tooltip" data-placement="top" title="Lorem, ipsum dolor sit amet consectetur adipisicing elit.">
                        <div class="col-12">
                            <p>Office Space & Facilities</p>
                            <a href="{{ route('startup.services.view', [2]) }}" class="rs-span">Request Service</a>

                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-lg-3 helpboxescol" >
                    <div class="helpboxeswrapper row no-gutters align-items-center"
                        style="background-image: url({{ asset('assets/prev-images/startup-suppliers.jpg') }});" data-toggle="tooltip" data-placement="top" title="Lorem, ipsum dolor sit amet consectetur adipisicing elit.">
                        <div class="col-12">
                            <p>Wholesale Suppliers</p>
                            <a href="{{ route('startup.services.view', [3]) }}" class="rs-span">Request Service</a>

                        </div>
                    </div>
                </div>



                <div class="col-md-6 col-lg-3 helpboxescol" >
                    <div class="helpboxeswrapper row no-gutters align-items-center"
                        style="background-image: url({{ asset('assets/prev-images/startup-informations.jpg') }});" data-toggle="tooltip" data-placement="top" title="Lorem, ipsum dolor sit amet consectetur adipisicing elit.">
                        <div class="col-12">
                            <p>Information, Communication & Technology</p>
                            <a href="{{ route('startup.services.view', [1]) }}" class="rs-span">Request Service</a>

                        </div>
                    </div>
                </div>



                <div class="col-md-6 col-lg-3 helpboxescol" >
                    <div class="helpboxeswrapper row no-gutters align-items-center"
                        style="background-image: url({{ asset('assets/prev-images/startup-market.jpg') }});" data-toggle="tooltip" data-placement="top" title="Lorem, ipsum dolor sit amet consectetur adipisicing elit.">
                        <div class="col-12">
                            <p>Marketing & Sales</p>
                            <a href="{{ route('startup.services.view', [1]) }}" class="rs-span">Request Service</a>

                        </div>
                    </div>
                </div>



                <div class="col-md-6 col-lg-3 helpboxescol" >
                    <div class="helpboxeswrapper row no-gutters align-items-center"
                        style="background-image: url({{ asset('assets/prev-images/startup-financial.jpg') }});" data-toggle="tooltip" data-placement="top" title="Lorem, ipsum dolor sit amet consectetur adipisicing elit.">
                        <div class="col-12">
                            <p>Financial Services</p>
                            <a href="{{ route('startup.services.view', [1]) }}" class="rs-span">Request Service</a>

                        </div>
                    </div>
                </div>



                <div class="col-md-6 col-lg-3 helpboxescol" >
                    <div class="helpboxeswrapper row no-gutters align-items-center"
                        style="background-image: url({{ asset('assets/prev-images/startup-recruit.jpg') }});" data-toggle="tooltip" data-placement="top" title="Lorem, ipsum dolor sit amet consectetur adipisicing elit.">
                        <div class="col-12">
                            <p>Recruitment & Executive Services</p>
                            <a href="{{ route('startup.services.view', [1]) }}" class="rs-span">Request Service</a>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-lg-3 helpboxescol">
                    <div class="helpboxeswrapper row no-gutters align-items-center"
                        style="background-image: url({{ asset('assets/prev-images/startup-exhibitions.jpg') }});" data-toggle="tooltip" data-placement="top" title="Lorem, ipsum dolor sit amet consectetur adipisicing elit.">
                        <div class="col-12">
                            <p>Exhibitions & Events</p>
                            <a href="{{ route('startup.services.view', [1]) }}" class="rs-span">Request Service</a>
                        </div>
                    </div>
                </div>






            </div>
            <!-- end row -->

        </div>
    </div>
    {{-- layouts --}}
</main>

{{-- end main --}}









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
                            <p class="clarf-sides clarf-receiver text-left">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea dolorem
                            </p>
                        </div>


                        <div class="d-block text-right">
                            <p class="clarf-sides clarf-sender text-left">
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
<!-- end clarf modal -->

{{-- end modals --}}



@endsection
{{-- end section --}}