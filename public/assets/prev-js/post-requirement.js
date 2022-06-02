// set serialnumber
currentdate = new Date();
serialnumber = currentdate.getFullYear() +''+ currentdate.getDay() + ''+ currentdate.getHours() +''+ currentdate.getMinutes() +''+ currentdate.getSeconds();

$('#requirement-serial').val(serialnumber);
$('#requirement-serial-summary').html('Requirement ID: '+serialnumber);



// --------------------------------- 1 ---------------------------------

var requirementItemCount = 0;

// 1- add item
$('#add-requirement-item').click(function() {

    
    // check if inputs not empty first
    let itemCategory = $('#requirement-category').val();
    let itemSubcategory = $('#requirement-subcategory').val();
    let itemType = $('#requirement-type').val();
    let itemName = $('#requirement-name').val();
    let itemMeasuringunit = $('#requirement-measuringunit').val();
    let itemQuantity = $('#requirement-quantity').val();
    let itemDesc = $('#requirement-desc').val();
    let itemComment = $('#requirement-comment').val();

    let itemBudgetClone = $('#tg-salaryamount').val();
    let itemBudget = null;
    let itemBudgetToView = '-';
    



    // add section
    if (itemCategory != "" && itemSubcategory != "" && itemType != "" && itemName != "" && itemMeasuringunit != "" && itemQuantity != "" && itemDesc != "" && itemComment != "") {


        // add new item count
        requirementItemCount++;


        // check if budget is on
        if ($('#budget-checkbox').is(':checked')) {
            itemBudget = itemBudgetClone;
            itemBudgetToView = itemBudgetClone;

        }

        
        // new Item html code
        let newItem = '\
        <div class="tg-dashboardservice requirement-items" id="requirement-item-'+requirementItemCount+'">\
            <div class="tg-servicetitle">\
                <h2>\
                \
                    <a href="javascript:void(0);">'+itemName+'</a>\
                    <span>'+itemQuantity+'</span></h2>\
            </div>\
            <div class="tg-btntimeedit">\
                <span>'+itemBudgetToView+' (AED)</span>\
                \
                <button type="button" class="tg-btndel delete-requirement-items" id="delete-requirement-item-'+requirementItemCount+'"><i class="lnr lnr-trash"></i></button>\
            </div>\
        </div>\
        \
        \
        <input type="hidden" value="'+itemCategory+'" name="requirement-category[]">\
        <input type="hidden" value="'+itemSubcategory+'" name="requirement-subcategory[]"></input>\
        <input type="hidden" value="'+itemType+'" name="requirement-type[]">\
        <input type="hidden" value="'+itemName+'" name="requirement-name[]" class="requirement-item-names"></input>\
        <input type="hidden" value="'+itemMeasuringunit+'" name="requirement-measuringunit[]">\
        <input type="hidden" value="'+itemQuantity+'" name="requirement-quantity[]"></input>\
        <input type="hidden" value="'+itemDesc+'" name="requirement-desc[]">\
        <input type="hidden" value="'+itemComment+'" name="requirement-comment[]"></input>\
        <input type="hidden" value="'+itemBudget+'" name="requirement-budget[]"></input>\
        \
        ';


        // // append requirement items wrapper html line
        $('.requirement-items-wrapper').append(newItem);



        // empty the fields
        $('#requirement-category').val('');
        $('#requirement-subcategory').val('');
        $('#requirement-type').val('');
        $('#requirement-name').val('');
        $('#requirement-measuringunit').val('');
        $('#requirement-quantity').val('');
        $('#requirement-desc').val('');
        $('#requirement-comment').val('');
        $('#requirement-budget-checkbox').val('off');





        // check step two form here
        if (requirementItemCount > 0) {

            $('#step-two-button').removeClass('not-clickable');


            // get all items of post
            allItemNames = "";
            $(".requirement-item-names").each(function() {

                allItemNames += $(this).val() + ' / ';

            });

            // update items 
            $('#post-items-preview').text(allItemNames);


        } else {

            $('#step-two-button').addClass('not-clickable');
        }

        
    } //end of add section

    


});




// --------------------






// 2- delete item
$('.requirement-items-wrapper').on("click", "button.delete-requirement-items", function(){


    // substract item count
    requirementItemCount--;

    

    // get id of delete button
    let id = $(this).attr('id');


    // get number of item
    let slicecounter = -1;
    let idclone = '';


    while(id.slice(slicecounter) >= '0') {

        idclone = id.slice(slicecounter);
        
        slicecounter--;
    }




    // use clone to remove the item
    $('#requirement-item-'+idclone).remove();




    // resorting
    // 1- items
    i = 1;
    $(".requirement-items").each(function(){

       
        // set new id of components
        $(this).attr('id', 'requirement-item-'+i);
        
        i++;

    });



    // 2- delete buttons
    i = 1;
    $(".delete-requirement-items").each(function(){

       
        // set new id of components
        $(this).attr('id', 'delete-requirement-item-'+i);
        
        i++;

    });







    // check step two form here
    if (requirementItemCount > 0) {

        $('#step-two-button').removeClass('not-clickable');


        // get all items of post
            allItemNames = "";
            $(".requirement-item-names").each(function() {

                allItemNames += $(this).val() + ' / ';

            });

            // update items 
            $('#post-items-preview').text(allItemNames);

        
    } else {

        $('#step-two-button').addClass('not-clickable');
    }



});





// ----------------------------------- 3 ---------------------------------

// first step form
$('.first-step-inputs').change(function() {

    // if they empty button disabled
    if ($('#post-title').val() == "" || $('#post-desc').val() == "") {

        $('#step-one-button').addClass('not-clickable');

    } else {

        $('#step-one-button').removeClass('not-clickable');

        // copy desc and title to preview
        $('#post-title-preview').text($('#post-title').val());
        $('#post-desc-preview').text($('#post-desc').val());
z

    }

});

