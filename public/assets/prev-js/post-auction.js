
// set serialnumber
currentdate = new Date();
serialnumber = currentdate.getFullYear() +''+ currentdate.getDay() + ''+ currentdate.getHours() +''+ currentdate.getMinutes() +''+ currentdate.getSeconds();

$('#auction-serial').val(serialnumber);
$('#auction-serial-summary').html('Auction ID: '+serialnumber);


// --------------------------------- 1 ---------------------------------

var auctionItemCount = 0;
var allItemNames = "";

// 1- add item
$('#add-auction-item').click(function() {


    // check if inputs not empty first
    let itemCategory = $('#auction-category').val();
    let itemSubcategory = $('#auction-subcategory').val();
    let itemType = $('#auction-type').val();
    let itemName = $('#auction-name').val();
    let itemMeasuringunit = $('#auction-measuringunit').val();
    let itemQuantity = $('#auction-quantity').val();
    let itemDesc = $('#auction-desc').val();
    let itemPrice = $('#auction-price').val();
    


    
    // add item
    if (itemCategory != "" && itemSubcategory != "" && itemType != "" && itemName != "" && itemMeasuringunit != "" && itemQuantity != "" && itemDesc != "" && itemPrice != "") {


        // add new item count
        auctionItemCount++;

        
        // new Item html code
        let newItem = '\
        <div class="tg-dashboardservice auction-items" id="auction-item-'+auctionItemCount+'">\
            <div class="tg-servicetitle">\
                <h2>\
                \
                    <a href="javascript:void(0);">'+itemName+'</a>\
                    <span>'+itemQuantity+'</span></h2>\
            </div>\
            <div class="tg-btntimeedit">\
                <span>'+itemPrice+' (AED)</span>\
                \
                <button type="button" class="tg-btndel delete-auction-items" id="delete-auction-item-'+auctionItemCount+'"><i class="lnr lnr-trash"></i></button>\
            </div>\
        </div>\
        \
        \
        <input type="hidden" value="'+itemCategory+'" name="auction-category[]">\
        <input type="hidden" value="'+itemSubcategory+'" name="auction-subcategory[]"></input>\
        <input type="hidden" value="'+itemType+'" name="auction-type[]">\
        <input type="hidden" value="'+itemName+'" name="auction-name[]" class="auction-item-names"></input>\
        <input type="hidden" value="'+itemMeasuringunit+'" name="auction-measuringunit[]">\
        <input type="hidden" value="'+itemQuantity+'" name="auction-quantity[]"></input>\
        <input type="hidden" value="'+itemDesc+'" name="auction-desc[]">\
        <input type="hidden" value="'+itemPrice+'" name="auction-price[]"></input>\
        \
        ';


        // // append auction items wrapper html line
        $('.auction-items-wrapper').append(newItem);



        // empty the fields
        $('#auction-category').val('');
        $('#auction-subcategory').val('');
        $('#auction-type').val('');
        $('#auction-name').val('');
        $('#auction-measuringunit').val('');
        $('#auction-quantity').val('');
        $('#auction-desc').val('');
        $('#auction-comment').val('');
        $('#auction-price').val('');





        // check step two form here
        if (auctionItemCount > 0) {

            $('#step-two-button').removeClass('not-clickable');


            // get all items of post
            allItemNames = "";
            $(".auction-item-names").each(function() {

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
$('.auction-items-wrapper').on("click", "button.delete-auction-items", function(){


    // substract item count
    auctionItemCount--;

    

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
    $('#auction-item-'+idclone).remove();




    // resorting
    // 1- items
    i = 1;
    $(".auction-items").each(function(){

       
        // set new id of components
        $(this).attr('id', 'auction-item-'+i);
        
        i++;

    });



    // 2- delete buttons
    i = 1;
    $(".delete-auction-items").each(function(){

       
        // set new id of components
        $(this).attr('id', 'delete-auction-item-'+i);
        
        i++;

    });






    // check step two form here
    if (auctionItemCount > 0) {

        $('#step-two-button').removeClass('not-clickable');

        // get all items of post
        allItemNames = "";
        $(".auction-item-names").each(function() {
            
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