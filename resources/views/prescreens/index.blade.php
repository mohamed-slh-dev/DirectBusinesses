@extends('layouts.login')





{{-- section --}}
@section('content')



{{-- main --}}
<main id="tg-main" class="tg-main tg-paddingzero tg-haslayout" style="background-color: black; position:relative">

    <div class="logincover"></div>
    <div class="logincoverdiv"></div>

    
    {{-- layout --}}
    <div class="tg-main-section tg-haslayout pr-layout" style="padding:0px">
        <div class="container">
            <div class="row align-items-center" style="min-height:92vh;">

                <div class="col-12 col-lg-6 offset-lg-3">

                    <div class="row"
                        style="background-color: white; padding: 40px 0px; border-radius: 5px; box-shadow: 0px 0px 5px 0px lightgrey">

                        <div class="col-12 text-center">
                            <img src="{{ asset('assets/images/logo.png') }}" alt="" class="mb-5 pb-4" style="width: 180px;">
                        </div>


                        <div class="col-6 text-right">
                            <a href="index-vendor-og.html" class="tg-btn index-vendor-btn">
                                Vendor
                            </a>
                        </div>

                        <div class="col-6 text-left">
                            <a href="index-customer-og.html" class="tg-btn index-customer-btn">
                                Customer
                            </a>
                        </div>

                    </div>
                </div>

            </div>


        </div>
    </div>
    {{-- end layout --}}
</main>

{{-- end main --}}




@endsection
{{-- end section --}}