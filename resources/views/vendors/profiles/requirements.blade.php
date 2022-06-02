@extends('layouts.vendor')



{{-- section --}}
@section('content')



{{-- banner --}}
<div class="tg-innerpagebanner">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="tg-pagetitle">
                    <h1>Requirements</h1>
                </div>
                <ol class="tg-breadcrumb">
                    <li><a href="#">Dashboard</a></li>
                    <li class="tg-active">Requirements</li>
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
                                
                                
                                    <li class="tg-active">
                                        <a href="{{ route('vendor.profile.requirements') }}">
                                            <i class="fa fa-tasks"></i>
                                            <span>Requirements</span>
                                        </a>
                                    </li>
                                
                                
                                    <li>
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
                            <div class="tg-dashboardhead">

                            </div>
                            {{-- <div class="tg-sortfilters">

                                <div class="tg-sortfilter custom-tg-sortfilter tg-sortby">
                                    <span>Sort By:</span>
                                    <div class="tg-select">
                                        <select>
                                            <option>Pending</option>
                                            <option>Completed</option>
                                            <option>Canceled</option>
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
                            <table class="table custom-pr-table custom-pr-table-dash">
                                <tbody>

                                    @foreach ($quotations as $quotation)
                                        
                                
                                    <!-- tr -->
                                    <tr>
                                        <td style="width: 270px;">

                                            <div class="tg-contentbox">
                                                <!-- <a class="tg-tag tg-featuredtag" href="#">22/5/2021</a> -->
                                                <div class="tg-title">
                                                    <h3><a href="#" style="font-size: 16px"> 
                                                        {{$quotation->requirement->title}} </a></h3>
                                                </div>
                                                <span style="font-size: 12px; color: green;">  {{date('d M Y', strtotime($quotation->created_at))}} </span>
                                            </div>
                                        </td>


                                        <td><span>   {{$quotation->requirement->items->count()}}  /   {{$quotation->items->where('price','!=',null)->count()}}  Items Checked</span></td>

                                        @if ($quotation->requirement->status == 'canceled')
                                        <td class="text-center"> <button disabled=""
                                            class="btn-sm btn-danger">
                                            {{$quotation->requirement->status}}
                                        </button> 
                                    </td>
                                    
                                        @elseif($quotation->requirement->status == 'on going')

                                        <td class="text-center"> <button disabled=""
                                            class="btn-sm btn-warning">
                                            {{$quotation->requirement->status}}
                                        </button> </td>

                                        @elseif($quotation->requirement->status == 'finished')

                                        <td class="text-center"> <button disabled=""
                                            class="btn-sm btn-success">
                                            {{$quotation->requirement->status}}
                                        </button> </td>

                                        @endif

                                        <td class="text-center">
                                            <a href="{{ route('vendor.requirements.viewRequest', [$quotation->requirement->id]) }}" class="btn btn-none profile-view-button">
                                                View Quotation
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