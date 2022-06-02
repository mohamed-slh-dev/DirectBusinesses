<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Measuringunit;
use App\Models\Subcategory;
use App\Models\Type;
use App\Models\UserDeal;
use App\Models\UserDealItem;
use App\Models\UserDealRequest;
use App\Models\UserDealRequestItem;
use Illuminate\Http\Request;

class CustomerDealController extends Controller
{


    // browse deals function
    public function browse()
    {

        $deals = UserDeal::where('user_id', '!=', session('user_id'))->get();
        $deals_items = UserDealItem::all();


        // it'll be multidimenstional array
        $attachments = array();

        // get attachments into array
        $i = 0;

        foreach ($deals as $deal) {

            $attachments[$i] = explode(',', $deal->attachments);
            array_pop($attachments[$i]);

            $i++;
        }


        // category and sub for filter
        $categories = Category::all();
        $subcategories = Subcategory::all();

        return view('customers.deals.browse',compact('deals','deals_items', 'categories', 'subcategories', 'attachments'));

    } //end browse deal function













    // ----------------



    // deals browse function
    public function browseFilter(Request $request)
    {

        // get arrange
        $arrange = $request->input('browse-arrange');

        // for late usage
        $rating = $request->input('browse-rating');



        $deals = UserDeal::whereHas('items', function ($query) use ($request) {

            $category_id = $request->input('browse-category');
            $subcategory_id = $request->input('browse-subcategory');

            if ($category_id != "") {
                $query->where('category_id', $category_id);
            }

            if ($subcategory_id != ""
            ) {
                $query->where('subcategory_id', $subcategory_id);
            }
        })->get();




        // arrange sort filter
        if ($arrange == "desc") {
            $deals = $deals->sortByDesc('created_at');
        }

        if ($arrange == "asc") {
            $deals = $deals->sortBy('created_at');
        }



        $deals_items = UserDealItem::all();

        // it'll be multidimenstional array
        $attachments = array();

        // get attachments into array
        $i = 0;

        
        foreach ($deals as $deal) {

            $attachments[$i] = explode(',', $deal->attachments);
            array_pop($attachments[$i]);

            $i++;
        }



        // category and sub for filter
        $categories = Category::all();
        $subcategories = Subcategory::all();



        return view('customers.deals.browse', compact('deals', 'deals_items', 'attachments', 'categories', 'subcategories'));
    } //end requirements browse function








    // -----------------------------------------------


    public function create(Request $request) {

        
        $newdeal  = new UserDealRequest();

        $newdeal->deal_id = $request->deal_id;
        $newdeal->notes = $request->note;
        $newdeal->user_id = session('user_id');

        if (!empty($request->file('doc'))) {
            $quo_doc = time() . '-' . $request->file('doc')->getClientOriginalName();
            $request->file('doc')->move(public_path('assets/uploads/dealsrequests'), $quo_doc);

            $newdeal->attachments = $quo_doc;
        }


        $newdeal->save();

        $bid_id  = $newdeal->id;

        $deal_items  = UserDealItem::where('deal_id', $request->deal_id)->get();

        foreach ($deal_items as $item) {
            $newdealitems  = new UserDealRequestItem();

            $itemQuantity = 'quantity(' . $item->id . ')';

            // dd($request->$itemQuantity);

            $newdealitems->quantity = $request->$itemQuantity;
            $newdealitems->item_id = $item->id;
            $newdealitems->deal_request_id = $bid_id;
            $newdealitems->user_id =  session('user_id');

            $newdealitems->save();
        }

        return redirect()->back()->with('success', 'Deal Request Send Successfully');
    }







    // --------------------------------------------------




    // view deal function
    public function view($id)
    {


        $deal_info = UserDeal::find($id);

        // get attachment array
        $attachments = explode(',', $deal_info->attachments);
        array_pop($attachments);

        return view('customers.deals.view',compact('deal_info', 'attachments'));
    } //end view deal function







    // --------------------------------------------------




    // view deal request function
    public function viewRequest($id)
    {

        $deal_info = UserDeal::find($id);

        $user_request = UserDealRequest::where('deal_id', $deal_info->id)->where('user_id',session('user_id'))->first();
        
        // get attachment array
        $attachments = explode(',', $deal_info->attachments);
        array_pop($attachments);

        // get request attachment array
        $userAttachments = explode(',', $deal_info->attachments);
        array_pop($userAttachments);


        return view('customers.deals.view-request', compact('deal_info', 'user_request', 'attachments', 'userAttachments'));
        
    } //end view deal request function


    public function update(Request $request)
    {
        //    dd($request);
        $editdealrequest  = UserDealRequest::find($request->deal_request_id);


        $editdealrequest->notes = $request->note;

        if (!empty($request->file('doc'))) {
            $quo_doc = time() . '-' . $request->file('doc')->getClientOriginalName();
            $request->file('doc')->move(public_path('assets/uploads/quotations'), $quo_doc);

            $editdealrequest->attachments = $quo_doc;
        }

        $editdealrequest->save();

        $editdealrequestitems  =  UserDealRequestItem::where('deal_request_id', $request->deal_request_id)->where('user_id', session('user_id'))->get();

        //  dd($editdealrequestitems);

        foreach ($editdealrequestitems as $item) {

            $itemQuantity = 'quantity(' . $item->id . ')';

            // dd($request->$itemQuantity);
            $updatedealrequest =  UserDealRequestItem::where('id', $item->id)->first();
            $updatedealrequest->quantity = $request->$itemQuantity;
            $updatedealrequest->save();
        }




        return redirect()->back()->with('success', 'Deal Request Send Successfully');
    }
} //end controller
