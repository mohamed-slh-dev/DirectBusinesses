<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use App\Models\UserRequirement;
use App\Models\UserRequirementItem;
use App\Models\UserRequirementQuotation;
use App\Models\UserRequirementQuotationClarification;
use App\Models\UserRequirementQuotationItem;
use Illuminate\Http\Request;

class VendorRequirementController extends Controller
{



    // requirements browse function
    public function browse()
    {

        $requirements = UserRequirement::where('user_id', '!=', session('user_id'))->get();


        // it'll be multidimenstional array
        $attachments = array();

        // get attachments into array
        $i = 0;
        
        foreach ($requirements as $requirement) {
            
            $attachments[$i] = explode(',', $requirement->attachments);
            array_pop($attachments[$i]);

            $i++;
        }


        // category and sub for filter
        $categories = Category::all();
        $subcategories = Subcategory::all();


        
        return view('vendors.requirements.browse',compact('requirements', 'attachments', 'categories', 'subcategories'));

    } //end requirements browse function









    // requirements browse function
    public function browseFilter(Request $request)
    {

        // get arrange
        $arrange = $request->input('browse-arrange');

        // for late usage
        $rating = $request->input('browse-rating');



        $requirements = UserRequirement::whereHas('items', function($query) use($request) {

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
            $requirements = $requirements->sortByDesc('created_at');
        }

        if ($arrange == "asc") {
            $requirements = $requirements->sortBy('created_at');
        }


        // it'll be multidimenstional array
        $attachments = array();

        // get attachments into array
        $i = 0;
        
        foreach ($requirements as $requirement) {
            
            $attachments[$i] = explode(',', $requirement->attachments);
            array_pop($attachments[$i]);

            $i++;
        }


        // category and sub for filter
        $categories = Category::all();
        $subcategories = Subcategory::all();


        return view('vendors.requirements.browse', compact('requirements', 'attachments', 'categories', 'subcategories'));

    } //end requirements browse function





    // -------------




    public function sendQuotation(Request $request)
    {
        // dd($request);
        $newquotation  = new UserRequirementQuotation();

        $newquotation->note = $request->note;
        $newquotation->requirement_id = $request->requirement_id;
        $newquotation->user_id = session('user_id');

        ($request->hide == 'hide') ?   $newquotation->hide = 'true' :   $newquotation->hide = 'false';

        if (!empty($request->file('doc'))) {
            $quo_doc = time() . '-' . $request->file('doc')->getClientOriginalName();
            $request->file('doc')->move(public_path('assets/uploads/quotations'), $quo_doc);

            $newquotation->attachments = $quo_doc;
        }

        $newquotation->save();

        $quotation_id  = $newquotation->id;

        $quotation_items  = UserRequirementItem::where('requirement_id', $request->requirement_id)->get();

        foreach ($quotation_items as $item) {

            $newquotationitems  = new UserRequirementQuotationItem();

            $itemQuantity = 'quantity(' . $item->id . ')';
            $itemPrice = 'price(' . $item->id . ')';

            // dd($request->$itemQuantity);

            $newquotationitems->quantity = $request->$itemQuantity;
            $newquotationitems->price = $request->$itemPrice;
            $newquotationitems->item_id = $item->id;
            $newquotationitems->req_quo_id = $quotation_id;
            $newquotationitems->user_id =  session('user_id');

            $newquotationitems->save();
        }

        if ($request->clarification_check == 'checked') {
            $newclarification  = new UserRequirementQuotationClarification();

            $newclarification->message = $request->reply;
            $newclarification->req_quo_id = $quotation_id;
            $newclarification->user_id = session('user_id');

            $newclarification->save();
        }
        

        return redirect()->back()->with('success', 'Quotation Send Successfully');
    }



    // --------------------------------------------------




    // requirements view function
    public function view($id)
    {
        $requirement_info = UserRequirement::find($id);

        $requirement_items = UserRequirementItem::where('requirement_id', $id)->get();


        // get attachment array
        $attachments = explode(',', $requirement_info->attachments);
        array_pop($attachments);
    

        return view('vendors.requirements.view',compact('requirement_info','requirement_items', 'attachments'));


    } //end requirements view function








    // --------------------------------------------------




    // requirements view request function
    public function viewRequest($id)
    {


        $requirement_info = UserRequirement::find($id);

        $user_quotation = UserRequirementQuotation::where('requirement_id', $id)->where('user_id', session('user_id'))->first();


        $requirement_items = UserRequirementItem::where('requirement_id', $id)->get();

        $clarifications = UserRequirementQuotationClarification::where('req_quo_id', $user_quotation->id)->get();




        // get attachment array
        $attachments = explode(',', $requirement_info->attachments);
        array_pop($attachments);

        // user request and attachments (pending)
        $userAttachments = explode(',', $requirement_info->attachments);
        array_pop($userAttachments);



        

        return view('vendors.requirements.view-request', compact('requirement_info', 'requirement_items', 'attachments', 'userAttachments', 'user_quotation', 'clarifications'));
    } //end requirements view request function


    public function updateQuotation(Request $request)
    {

        $editquotation  =  UserRequirementQuotationItem::where('req_quo_id', $request->quotation_id)->where('user_id', session('user_id'))->get();

        //  dd($editbiditems);

        foreach ($editquotation as $item) {

            $itemPrice = 'price(' . $item->id . ')';
            $itemQuantity = 'quantity(' . $item->id . ')';

            // dd($request->$itemQuantity);
            $quotation_update_item =  UserRequirementQuotationItem::where('id', $item->id)->first();
            $quotation_update_item->price = $request->$itemPrice;
            $quotation_update_item->quantity = $request->$itemQuantity;

            $quotation_update =  UserRequirementQuotation::where('id', $quotation_update_item->req_quo_id)->first();

            $quotation_update->note = $request->note;

            if (!empty($request->file('doc'))) {
                $quo_doc = time() . '-' . $request->file('doc')->getClientOriginalName();
                $request->file('doc')->move(public_path('assets/uploads/quotations'), $quo_doc);

                $quotation_update->attachments = $quo_doc;
            }

            $quotation_update_item->save();
            $quotation_update->save();
        }


        return redirect()->back()->with('success', 'Bid Send Successfully');
    }
    public function sendClarification(Request $request)
    {
        $newclarification  = new UserRequirementQuotationClarification();

        $newclarification->message = $request->reply;
        $newclarification->req_quo_id = $request->quotation_id;
        $newclarification->user_id = session('user_id');

        $newclarification->save();

        return redirect()->back()->with('success', 'Clarfication Added Successfully');
    }



} //end controller
