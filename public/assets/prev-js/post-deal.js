


// set serialnumber
currentdate = new Date();
serialnumber = currentdate.getFullYear() +''+ currentdate.getDay() + ''+ currentdate.getHours() +''+ currentdate.getMinutes() +''+ currentdate.getSeconds();


$('#deal-serial').val(serialnumber);
$('#deal-serial-summary').html('Deal ID: '+serialnumber);


// --------------------------------- 1 ---------------------------------



var dealItemCount = 0;

// 1- add item
$('#add-deal-item').click(function() {


    // check if inputs not empty first
    let itemCategory = $('#deal-category').val();
    let itemSubcategory = $('#deal-subcategory').val();
    let itemType = $('#deal-type').val();
    let itemName = $('#deal-name').val();
    let itemMeasuringunit = $('#deal-measuringunit').val();
    let itemQuantity = $('#deal-quantity').val();
    let itemDesc = $('#deal-desc').val();
    let itemPrice = $('#deal-price').val();
    



    // add item
    if (itemCategory != "" && itemSubcategory != "" && itemType != "" && itemName != "" && itemMeasuringunit != "" && itemQuantity != "" && itemDesc != "" && itemPrice != "") {


        // add new item count
        dealItemCount++;


        
        // new Item html code
        let newItem = '\
        <div class="tg-dashboardservice deal-items" id="deal-item-'+dealItemCount+'">\
            <div class="tg-servicetitle">\
                <h2>\
                \
                    <a href="javascript:void(0);">'+itemName+'</a>\
                    <span>'+itemQuantity+'</span></h2>\
            </div>\
            <div class="tg-btntimeedit">\
                <span>'+itemPrice+' (AED)</span>\
                \
                <button type="button" class="tg-btndel delete-deal-items" id="delete-deal-item-'+dealItemCount+'"><i class="lnr lnr-trash"></i></button>\
            </div>\
        </div>\
        \
        \
        <input type="hidden" value="'+itemCategory+'" name="deal-category[]">\
        <input type="hidden" value="'+itemSubcategory+'" name="deal-subcategory[]"></input>\
        <input type="hidden" value="'+itemType+'" name="deal-type[]">\
        <input type="hidden" value="'+itemName+'" name="deal-name[]" class="deal-item-names"></input>\
        <input type="hidden" value="'+itemMeasuringunit+'" name="deal-measuringunit[]">\
        <input type="hidden" value="'+itemQuantity+'" name="deal-quantity[]"></input>\
        <input type="hidden" value="'+itemDesc+'" name="deal-desc[]">\
        <input type="hidden" value="'+itemPrice+'" name="deal-price[]"></input>\
        \
        ';


        // // append deal items wrapper html line
        $('.deal-items-wrapper').append(newItem);



        // empty the fields
        $('#deal-category').val('');
        $('#deal-subcategory').val('');
        $('#deal-type').val('');
        $('#deal-name').val('');
        $('#deal-measuringunit').val('');
        $('#deal-quantity').val('');
        $('#deal-desc').val('');
        $('#deal-comment').val('');
        $('#deal-price').val('');



        // check step two form here
        if (dealItemCount > 0) {

            $('#step-two-button').removeClass('not-clickable');
            

            // get all items of post
            allItemNames = "";
            $(".deal-item-names").each(function() {

                allItemNames += $(this).val() + ' / ';

            });

            // update items 
            $('#post-items-preview').text(allItemNames);

            
        } else {

            $('#step-two-button').addClass('not-clickable');
        }

        
    } //end of add item

    



    



});





// --------------------






// 2- delete item
$('.deal-items-wrapper').on("click", "button.delete-deal-items", function(){


    // substract item count
    dealItemCount--;

    

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
    $('#deal-item-'+idclone).remove();




    // resorting
    // 1- items
    i = 1;
    $(".deal-items").each(function(){

       
        // set new id of components
        $(this).attr('id', 'deal-item-'+i);
        
        i++;

    });



    // 2- delete buttons
    i = 1;
    $(".delete-deal-items").each(function(){

       
        // set new id of components
        $(this).attr('id', 'delete-deal-item-'+i);
        
        i++;

    });





    // check step two form here
    if (dealItemCount > 0) {

        $('#step-two-button').removeClass('not-clickable');


        // get all items of post
        allItemNames = "";
        $(".deal-item-names").each(function() {

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


    }

});