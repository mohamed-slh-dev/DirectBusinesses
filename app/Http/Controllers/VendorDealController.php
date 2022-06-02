<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Measuringunit;
use App\Models\Subcategory;
use App\Models\Type;
use App\Models\UserDeal;
use App\Models\UserDealItem;
use App\Models\UserDealRequest;
use App\Models\UserRequirementItem;
use Illuminate\Http\Request;

class VendorDealController extends Controller
{



    // post deal view function
    public function post()
    {


        $categories = Category::all();
        $subcategories = Subcategory::all();
        $types = Type::all();
        $measuringunits = Measuringunit::all();


        return view('vendors.deals.post', compact('categories', 'subcategories', 'types', 'measuringunits'));

    } //end post deal function










    // ------------------------------------------------



    // deal create function
    public function create(Request $request) {


        // get info
        $title = $request->input('title');
        $desc = $request->input('desc');
        $serial = $request->input('deal-serial');


        // attachments
        // upload image in 2 steps
        $attachments = "";

        if ($request->hasFile('attachments')) {
            
            $image = $request->file('attachments');
            
            foreach ($image as $files) {

                $destinationPath = public_path('assets/uploads/deals');
                $file_name = time() . "-" . $files->getClientOriginalName();
                $files->move($destinationPath, $file_name);
                $attachments .= $file_name . ',';

            }
        }

    

        // add to blog table
        $deal = new UserDeal();
        $deal->user_id = session('user_id');
        $deal->title = $title;
        $deal->desc = $desc;
        $deal->serial_number = $serial; //generate in page
        $deal->attachments = $attachments;
        $deal->status = 'Available';


        $deal->save();



        // items
        $dealCategory = $request->input('deal-category');
        $dealSubcategory = $request->input('deal-subcategory');
        $dealType = $request->input('deal-type');
        $dealName = $request->input('deal-name');
        $dealMeasuringunit = $request->input('deal-measuringunit');
        $dealQuantity = $request->input('deal-quantity');
        $dealDesc = $request->input('deal-desc');
        $dealPrice = $request->input('deal-price');


        // add items
        for ($i = 0; $i < count($dealName); $i++) {

            $item = new UserDealItem();
            $item->min_quantity = $dealQuantity[$i];
            $item->name = $dealName[$i];
            $item->price = $dealPrice[$i];
            $item->desc = $dealDesc[$i];

            $item->deal_id = $deal->id;
            $item->category_id = $dealCategory[$i];
            $item->subcategory_id = $dealSubcategory[$i];
            $item->type_id = $dealType[$i];
            $item->measuringunit_id = $dealMeasuringunit[$i];


            $item->save();

        } //end for loop



        // back to browse
        return redirect()->route('vendor.deals.view', [$deal->id]);

    } //end blog create function






    // --------------------------------------------------




    // view deal function
    public function view($id)
    {

        $deal_info = UserDeal::find($id);

        $deal_items = UserDealItem::where('deal_id', $id)->get();


        // get attachment array
        $attachments = explode(',', $deal_info->attachments);
        array_pop($attachments);

        // other uesers request and attachments (pending)


        return view('vendors.deals.view',compact('deal_info','deal_items', 'attachments'));
        
    } //end view deal function


    public function accept($id)
    {
        $deal_id = UserDealRequest::where('id',$id)->first();

        UserDeal::where('id',$deal_id->deal_id)->update(['status' => 'finished']);
        
        UserDealRequest::where('id',$id)->update(['status' => 'accepted']);

        UserDealRequest::where('id', '!=', $id)
        ->where('deal_id',$deal_id->deal_id)
        ->update(['status' => 'rejected']);

        return redirect()->back()->with('success','Deal Accepted Successfully');
    } //end requirements accept function





} //end controller
