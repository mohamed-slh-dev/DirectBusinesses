<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use App\Models\UserAuction;
use App\Models\UserAuctionBid;
use App\Models\UserAuctionBidItem;
use App\Models\UserAuctionItem;

use Illuminate\Http\Request;

class VendorAuctionController extends Controller
{



    // auctions browse function
    public function browse()
    {

        $auctions = UserAuction::where('user_id', '!=', session('user_id'))->get();
        $auction_items = UserAuctionItem::all();

        // it'll be multidimenstional array
        $attachments = array();

        // get attachments into array
        $i = 0;

        foreach ($auctions as $auction) {

            $attachments[$i] = explode(',', $auction->attachments);
            array_pop($attachments[$i]);

            $i++;
        }




        // category and sub for filter
        $categories = Category::all();
        $subcategories = Subcategory::all();


        return view('vendors.auctions.browse',compact('auctions','auction_items', 'attachments', 'categories', 'subcategories'));
    } //end auctions browse function










    // ----------------



    // requirements browse function
    public function browseFilter(Request $request)
    {

        // get arrange
        $arrange = $request->input('browse-arrange');

        // for late usage
        $rating = $request->input('browse-rating');



        $auctions = UserAuction::whereHas('items', function($query) use($request) {

            $category_id = $request->input('browse-category');
            $subcategory_id = $request->input('browse-subcategory');

            if ($category_id != "") {
                $query->where('category_id', $category_id);
            }

            if ($subcategory_id != "") {
                $query->where('subcategory_id', $subcategory_id);
            }

            
        })->get();




        // arrange sort filter
        if ($arrange == "desc") {
            $auctions = $auctions->sortByDesc('created_at');
        }

        if ($arrange == "asc") {
            $auctions = $auctions->sortBy('created_at');
        }



        $auction_items = UserAuctionItem::all();

        // it'll be multidimenstional array
        $attachments = array();

        // get attachments into array
        $i = 0;

        foreach ($auctions as $auction) {

            $attachments[$i] = explode(',', $auction->attachments);
            array_pop($attachments[$i]);

            $i++;
        }



        // category and sub for filter
        $categories = Category::all();
        $subcategories = Subcategory::all();



        return view('vendors.auctions.browse', compact('auctions', 'auction_items', 'attachments', 'categories', 'subcategories'));

    } //end requirements browse function


    // --------------------------------------------------




    // auctions view function
    public function view($id)
    {

        $auction_info = UserAuction::find($id);

        $auction_items = UserAuctionItem::where('auction_id', $id)->get();

        // get attachment array
        $attachments = explode(',', $auction_info->attachments);
        array_pop($attachments);

        return view('vendors.auctions.view',compact('auction_info','auction_items', 'attachments'));

    } //end auctions view function




    public function sendBid(Request $request)
    {
        // dd($request);
        $newbid  = new UserAuctionBid();
        $newbiditems  = new UserAuctionBidItem();

        $newbid->auction_id = $request->auction_id;
        $newbid->user_id = session('user_id');


        $newbid->save();

        $bid_id  = $newbid->id;

        $bid_items  = UserAuctionItem::where('auction_id', $request->auction_id)->get();

        foreach ($bid_items as $item) {

            $itemPrice = 'price(' . $item->id . ')';

            // dd($request->$itemQuantity);

            $newbiditems->price = $request->$itemPrice;
            $newbiditems->item_id = $item->id;
            $newbiditems->auction_bid_id = $bid_id;
            $newbiditems->user_id =  session('user_id');

            $newbiditems->save();
        }

        return redirect()->back()->with('success', 'Bid Send Successfully');    }




    // --------------------------------------------------





    // auctions view request function
    public function viewRequest($id)
    {


        $auction_info = UserAuction::find($id);

        $user_bid = UserAuctionBid::where('auction_id', $id)->where('user_id', session('user_id'))->first();

        $auction_items = UserAuctionItem::where('auction_id', $id)->get();

        // get attachment array
        $attachments = explode(',', $auction_info->attachments);
        array_pop($attachments);

        // user old attachment
        $userAttachments = explode(',', $auction_info->attachments);
        array_pop($userAttachments);

        return view('vendors.auctions.view-request', compact('auction_info', 'auction_items', 'attachments', 'userAttachments', 'user_bid'));
    } //end auctions view request function



    public function updateBid(Request $request)
    {

        $editbiditems  =  UserAuctionBidItem::where('auction_bid_id', $request->auction_bid_id)->where('user_id', session('user_id'))->get();

        //  dd($editbiditems);

        foreach ($editbiditems as $item) {

            $itemPrice = 'price(' . $item->id . ')';

            // dd($request->$itemQuantity);
            $bid_update_item =  UserAuctionBidItem::where('id', $item->id)->first();
            $bid_update_item->price = $request->$itemPrice;
            $bid_update_item->save();
        }


        return redirect()->back()->with('success', 'Bid Send Successfully');
    }







} //end controller
