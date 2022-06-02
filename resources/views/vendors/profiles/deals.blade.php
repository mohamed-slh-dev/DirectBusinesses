@extends('layouts.vendor')



{{-- section --}}
@section('content')



{{-- banners --}}
<div class="tg-innerpagebanner">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="tg-pagetitle">
                    <h1>Deals</h1>
                </div>
                <ol class="tg-breadcrumb">
                    <li><a href="#">Dashboard</a></li>
                    <li class="tg-active">Deals</li>
                </ol>
            </div>
        </div>
    </div>
</div>
{{-- end banner --}}







{{-- main --}}
<main id="tg-main" class="tg-main tg-haslayout" style="background-color: black;">
    <div class="container">
        <div class="row">
            <div id="tg-twocolumns" class="tg-twocolumns">
                <div class="col-xs-12 col-sm-5 col-md-4 col-lg-3">
                    <aside id="tg-sidebar" class="tg-sidebar">
                        <div class="tg-widgetprofile">
                            <figure class="tg-profilebannerimg">
                                <img src="{{ asset('assets/uploads/profile-logos/'.$user->profile_img) }}" alt="image description">
                            </figure>
                            <div class="tg-widgetcontent">
                            
                                <div class="tg-admininfo">
                                    <h3>{{$user->company_name}}</h3>
                                    <h4>{{$user->industry->name}}</h4>
                                    
                                    <ul class="tg-matadata">

                                        <li style="width: 140px;">

                                            <div class="star-rating star-rating-custom dashboard-stars-small mb-0 mt-1"
                                                data-rating="4" style="display:inline-block; text-align: center;"></div>


                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tg-widgetdashboard">
                            <nav id="tg-dashboardnav" class="tg-dashboardnav">
                                <ul>
                                    <li>
                                        <a href="{{ route('vendor.profile') }}">
                                            <i class="fa fa-user"></i>
                                            <span>Profile</span>
                                        </a>
                                    </li>
                                
                                    <li>
                                        <a href="{{ route('vendor.home') }}">
                                            <i class="fa fa-home"></i>
                                            <span>Home</span>
                                        </a>
                                    </li>
                                
                                
                                    <li>
                                        <a href="{{ route('vendor.profile.requirements') }}">
                                            <i class="fa fa-tasks"></i>
                                            <span>Requirements</span>
                                        </a>
                                    </li>
                                
                                
                                    <li class="tg-active">
                                        <a href="{{ route('vendor.profile.deals') }}">
                                            <i class="fa fa-briefcase"></i>
                                            <span>Deals</span>
                                        </a>
                                    </li>
                                
                                
                                    <li>
                                        <a href="{{ route('vendor.profile.auctions') }}">
                                            <i class="fa fa-dropbox"></i>
                                            <span>Auctions</span>
                                        </a>
                                    </li>
                                
                                
                                    <li>
                                        <a href="{{ route('vendor.profile.reviews') }}">
                                            <i class="fa fa-comments"></i>
                                            <span>Reviews</span>
                                        </a>
                                    </li>
                                
                                    <li>
                                        <a href="{{ route('vendor.profile.settings') }}">
                                            <i class="fa fa-gears"></i>
                                            <span>Profile Settings</span>
                                        </a>
                                    </li>
                                
                                
                                    <li>
                                        <a href="{{ route('vendor.profile.help') }}">
                                            <i class="fa fa-info-circle"></i>
                                            <span>Help</span>
                                        </a>
                                    </li>
                                
                                
                                    <li class="bottom-radius">
                                        <a href="{{ route('login') }}">
                                            <i class="fa fa-sign-out"></i>
                                            <span>Logout</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                    </aside>
                </div>
                <div class="col-xs-12 col-sm-7 col-md-8 col-lg-9">
                    <div id="tg-content" class="tg-content">
                        <div class="tg-joblisting tg-dashboardmanagejobs">


                            <table class="table custom-pr-table custom-pr-table-dash">
                                <tbody>

                                    @foreach ($deals as $deal)
                                  
                                    <!-- tr -->
                                    <tr>
                                        <td style="width: 270px;">

                                            <div class="tg-contentbox">
                                                <!-- <a class="tg-tag tg-featuredtag" href="#">22/5/2021</a> -->
                                                <div class="tg-title">
                                                    <h3><a href="#" style="font-size: 16px">
                                                    {{$deal->title}}
                                                    </a></h3>
                                                </div>
                                                <span style="font-size: 12px; color: green;">  {{date('d M Y', strtotime($deal->created_at))}} </span>
                                            </div>
                                        </td>


                                        <td><span>{{$deal->items->count()}} Items - {{ $deal->requests->count() }} Requests</span></td>

                                        <td class="text-center"> 
                                            @if ($deal->status == "finished")
                                            <button disabled="" class="btn-sm btn-success">{{$deal->status}}</button></td>

                                            @elseif ($deal->status == "canceled")
                                            <button disabled="" class="btn-sm btn-danger">{{$deal->status}}</button></td>

                                            @else
                                            <button disabled="" class="btn-sm btn-warning">{{$deal->status}}</button></td>

                                            @endif

                                        <td class="text-center">
                                            <a href="{{ route('vendor.deals.view', [$deal->id]) }}" class="btn btn-none profile-view-button">
                                                View Deal
                                            </a>
                                        </td>


                                        <!-- delete button -->
                                        <td class="text-center">
                                            <a href="javascript:void(0);"
                                                class="btn btn-none text-danger profile-view-button">
                                                <i class="fa fa-trash text-danger"></i>
                                            </a>
                                        </td>


                                    </tr>
                                    <!-- end tr -->
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

{{-- end main --}}



@endsection
{{-- end section --}}