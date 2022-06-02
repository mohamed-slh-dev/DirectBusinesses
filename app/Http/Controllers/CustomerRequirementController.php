<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Measuringunit;
use App\Models\Subcategory;
use App\Models\Type;
use App\Models\UserRequirement;
use App\Models\UserRequirementItem;
use App\Models\UserRequirementQuotation;
use App\Models\UserRequirementQuotationItem;
use App\Models\UserRequirementQuotationClarification;
use Illuminate\Http\Request;

class CustomerRequirementController extends Controller
{



    // requirements posting function
    public function post()
    {


        $categories = Category::all();
        $subcategories = Subcategory::all();
        $types = Type::all();
        $measuringunits = Measuringunit::all();


        return view('customers.requirements.post', compact('categories', 'subcategories', 'types', 'measuringunits'));

    } //end requirements posting function








    // ------------------------------------------------



    // requirement create function
    public function create(Request $request)
    {


        // get info
        $title = $request->input('title');
        $desc = $request->input('desc');
        $serial = $request->input('requirement-serial');


        // attachments
        // upload image in 2 steps
        $attachments = "";

        if ($request->hasFile('attachments')) {

            $image = $request->file('attachments');

            foreach ($image as $files) {

                $destinationPath = public_path('assets/uploads/requirements');
                $file_name = time() . "-" . $files->getClientOriginalName();
                $files->move($destinationPath, $file_name);
                $attachments .= $file_name . ',';
            }
        }


        // add to blog table
        $requirement = new UserRequirement();
        $requirement->user_id = session('user_id');
        $requirement->title = $title;
        $requirement->desc = $desc;
        $requirement->serial_number = $serial; //generate in page
        $requirement->attachments = $attachments;
        $requirement->status = 'on going';

        $requirement->save();


        // items
        $requirementCategory = $request->input('requirement-category');
        $requirementSubcategory = $request->input('requirement-subcategory');
        $requirementType = $request->input('requirement-type');
        $requirementName = $request->input('requirement-name');
        $requirementMeasuringunit = $request->input('requirement-measuringunit');
        $requirementQuantity = $request->input('requirement-quantity');
        $requirementDesc = $request->input('requirement-desc');
        $requirementComment = $request->input('requirement-comment');
        $requirementBudget = $request->input('requirement-budget');


        // add items
        for ($i = 0; $i < count($requirementName); $i++) {

            $item = new UserRequirementItem();
            $item->quantity = $requirementQuantity[$i];
            $item->name = $requirementName[$i];
            $item->desc = $requirementDesc[$i];
            $item->comment = $requirementComment[$i];


            $item->requirement_id = $requirement->id;
            $item->category_id = $requirementCategory[$i];
            $item->subcategory_id = $requirementSubcategory[$i];
            $item->type_id = $requirementType[$i];
            $item->measuringunit_id = $requirementMeasuringunit[$i];



            // split budget into two
            $budgetArray = explode(' - ', $requirementBudget[$i]);

            if ($budgetArray[0] != "null") {
                
                $item->budget_from = (int)str_replace(' AED', '', $budgetArray[0]);
                $item->budget_to = (int)str_replace(' AED', '', $budgetArray[1]);

            }


            $item->save();

        } //end for loop




        // back to browse
        return redirect()->route('customer.requirements.view', [$requirement->id]);


    } //end blog create function






    // --------------------------------------------------




    // requirements view function
    public function view($id)
    {
        
        $requirement_info = UserRequirement::find($id);

        // get attachment array
        $attachments = explode(',', $requirement_info->attachments);
        array_pop($attachments);

        return view('customers.requirements.view',compact('requirement_info', 'attachments'));
    } //end requirements view function



    public function accept($id)
    {
        $requirement_id = UserRequirementQuotation::where('id',$id)->first();

        UserRequirement::where('id',$requirement_id->requirement_id)->update(['status' => 'finished']);
        
        UserRequirementQuotation::where('id',$id)->update(['status' => 'accepted']);

        UserRequirementQuotation::where('id', '!=', $id)
        ->where('requirement_id',$requirement_id->requirement_id)
        ->update(['status' => 'rejected']);

        return redirect()->back()->with('success','Quotation Accepted Successfully');
    } //end requirements accept function

    public function delete($id)
    {
        $req_quot_ids = UserRequirementQuotation::where('requirement_id',$id)->get();

        foreach ($req_quot_ids as $req_id) {
            UserRequirementQuotationItem::where('req_quo_id',$req_id->id)->delete();
            UserRequirementQuotationClarification::where('req_quo_id',$req_id->id)->delete();
        }
      
        UserRequirementQuotation::where('requirement_id',$id)->delete();

        UserRequirementItem::where('requirement_id',$id)->delete();

        UserRequirement::where('id',$id)->delete();


        return redirect()->back()->with('success','Requirement Deleted Successfully');
    } //end requirements delete function



    // --------------------------------------------------




    // requirements evaluation request function
    public function evaluation($id)
    {


        return view('customers.requirements.evaluation');
    } //end requirements evaluation request function






} //end controller