<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Measuringunit;
use App\Models\Subcategory;
use App\Models\Type;
use App\Models\UserAuction;
use App\Models\UserAuctionItem;
use App\Models\UserAuctionBid;
use App\Models\UserAuctionBidRequest;

use Illuminate\Http\Request;

class CustomerAuctionController extends Controller
{



    // auctions post function
    public function post()
    {


        $categories = Category::all();
        $subcategories = Subcategory::all();
        $types = Type::all();
        $measuringunits = Measuringunit::all();


        return view('customers.auctions.post', compact('categories', 'subcategories', 'types', 'measuringunits'));


    } //end auctions post function









    // ------------------------------------------------



    // auction create function
    public function create(Request $request)
    {


        // get info
        $title = $request->input('title');
        $desc = $request->input('desc');
        $serial = $request->input('auction-serial');
        

        // attachments
        // upload image in 2 steps
        $attachments = "";

        if ($request->hasFile('attachments')) {

            $image = $request->file('attachments');

            foreach ($image as $files) {

                $destinationPath = public_path('assets/uploads/auctions');
                $file_name = time() . "-" . $files->getClientOriginalName();
                $files->move($destinationPath, $file_name);
                $attachments .= $file_name . ',';
            }
        }

        // add to blog table
        $auction = new UserAuction();
        $auction->user_id = session('user_id');
        $auction->title = $title;
        $auction->desc = $desc;
        $auction->serial_number = $serial; //generate in page
        $auction->attachments = $attachments;
        $auction->status = 'on going';

        $auction->save();


        // items
        $auctionCategory = $request->input('auction-category');
        $auctionSubcategory = $request->input('auction-subcategory');
        $auctionType = $request->input('auction-type');
        $auctionName = $request->input('auction-name');
        $auctionMeasuringunit = $request->input('auction-measuringunit');
        $auctionQuantity = $request->input('auction-quantity');
        $auctionDesc = $request->input('auction-desc');
        $auctionPrice = $request->input('auction-price');


        // add items
        for ($i = 0; $i < count($auctionName); $i++) {

            $item = new UserAuctionItem();
            $item->quantity = $auctionQuantity[$i];
            $item->name = $auctionName[$i];
            $item->price = $auctionPrice[$i];
            $item->desc = $auctionDesc[$i];

            $item->auction_id = $auction->id;
            $item->category_id = $auctionCategory[$i];
            $item->subcategory_id = $auctionSubcategory[$i];
            $item->type_id = $auctionType[$i];
            $item->measuringunit_id = $auctionMeasuringunit[$i];


            $item->save();
        } //end for loop




        // back to browse
        return redirect()->route('customer.auctions.view', [$auction->id]);
    } //end blog create function




    // --------------------------------------------------




    // auctions view function
    public function view($id)
    {

        $auction_info = UserAuction::find($id);

        // get attachment array
        $attachments = explode(',', $auction_info->attachments);
        array_pop($attachments);

        return view('customers.auctions.view',compact('auction_info', 'attachments'));
    } //end auctions view function



    public function accept($id)
    {
        $auction_id = UserAuctionBid::where('id',$id)->first();

        UserAuction::where('id',$auction_id->auction_id)->update(['status' => 'finished']);
        
        UserAuctionBid::where('id',$id)->update(['status' => 'accepted']);

        UserAuctionBid::where('id', '!=', $id)
        ->where('auction_id',$auction_id->auction_id)
        ->update(['status' => 'rejected']);

        return redirect()->back()->with('success','Auction Accepted Successfully');

    } //end requirements accept function



} //end controller
