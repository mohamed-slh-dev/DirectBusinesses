

$('#nav-profile-button').click(function() {


    // window.location.href = 'dashboard.html';

});


$('#nav-profile-button-customer').click(function() {


    // window.location.href = 'dashboard-customer.html';

});




$('#tg-hidemeasuringunit').change(function() {

    if ($(this).is(':checked')) {

        $('#measuringunit-input').attr('disabled', true);

    } else {

        $('#measuringunit-input').attr('disabled', false);
        
    }
});




// ========================= switch reviews ===============================

$('.switch-reviews-button').click(function() {


    // 1- if vendor hidden
    if ($('#switch-reviews-vendors').hasClass('d-none')) {

        $('#switch-reviews-customers').addClass('d-none');
        $('#switch-reviews-vendors').removeClass('d-none');

        // change title
        $('#switch-reviews-title').html('Vendors Reviews');

    }

    // if vendors shown
    else {

        $('#switch-reviews-vendors').addClass('d-none');
        $('#switch-reviews-customers').removeClass('d-none');

        // change title
        $('#switch-reviews-title').html('Customers Reviews');

    }

});






// ====================== budget in posting things ========================

$('#budget-checkbox').change(function() {

    if ($(this).is(':checked')) {

        $('.budget-field').removeClass('d-none');
        $('.budget-input').attr('required', true);

    } else {

        $('.budget-field').addClass('d-none');
        $('.budget-input').attr('required', false);
    }
});







// ==================== clarfication quotation vendor ============================


$('#clarf-quo-checkbox').change(function() {

    if ($(this).is(':checked')) {

        $('.clarf-items').removeClass('d-none');
        $('.clarf-input').attr('required', true);

    } else {

        $('.clarf-items').addClass('d-none');
        $('.clarf-input').attr('required', false);
    }
});





$('.clarf-quo-checkbox').change(function() {

    // get id
    let id = $(this).attr('id');


    // slicer and y
    let slicecounter = -1;
    let idclone = '';

    while(id.slice(slicecounter) >= '0') {

        idclone = id.slice(slicecounter);
        
        slicecounter--;
    }



    if ($(this).is(':checked')) {

        $('#clarf-button-'+idclone).removeClass('d-none');
        $('#clarf-input-'+idclone).removeClass('d-none');

        $('#clarf-input-'+idclone).attr('required', true);

    } else {

        $('#clarf-button-'+idclone).addClass('d-none');
        $('#clarf-input-'+idclone).addClass('d-none');

        $('#clarf-input-'+idclone).attr('required', false);

    }
});






// ==================== auction bids customer homepage ============================


$('.auction-companies-dropdown').click(function() {


    let k = $(this).attr('id');

    // slicer and y
    let slicecounter = -1;
    let y = '';

    while(k.slice(slicecounter) >= '0') {

        y = k.slice(slicecounter);
        
        slicecounter--;
    }




    // if not shown then show the target one
    if ($(this).hasClass('fa-chevron-down')) {

        $('.auction-companies-content').addClass('d-none');
        $('#auction-company-content-'+y).removeClass('d-none');

        // change class for icon
        $('.auction-companies-dropdown').removeClass('fa-chevron-up');
        $('.auction-companies-dropdown').addClass('fa-chevron-down');

        $(this).removeClass('fa-chevron-down');
        $(this).addClass('fa-chevron-up');

        
        

    } 
    
    // hide all
    else {

        $('.auction-companies-content').addClass('d-none');

        // change class for icon
        $('.auction-companies-dropdown').removeClass('fa-chevron-up');
        $('.auction-companies-dropdown').addClass('fa-chevron-down');


    }

});















// ==================== clarf customer index page ============================


$('.clarf-companies-tabs').click(function() {


    let k = $(this).attr('id');

    // slicer and y
    let slicecounter = -1;
    let y = '';

    while(k.slice(slicecounter) >= '0') {

        y = k.slice(slicecounter);
        
        slicecounter--;
    }




    // if not has active class
    if (!$(this).hasClass('active')) {

        // make tab active
        $('.clarf-companies-tabs').removeClass('active');
        $(this).addClass('active');


        // make convo appear
        $('.clarf-companies-tabs-content').addClass('d-none');
        $('#clarf-company-tab-content-'+y).removeClass('d-none');

    } 


});









// ==================== startup post requirements previews ==================
    
$('#startup-post-req-button').click(function() {

    
    // hide inputs phase rows
    $('.entering-rows').addClass('d-none');


    // show the preview row
    $('#review-row').removeClass('d-none');


    // hide this button and show the submit button or back button
    $(this).addClass('d-none');
    $('#startup-cancel-req-button').addClass('d-none');

    $('#startup-back-req-button').removeClass('d-none');
    $('#startup-submit-req-button').removeClass('d-none');


});




$('#startup-back-req-button').click(function() {

    
    // show inputs phase rows
    $('.entering-rows').removeClass('d-none');


    // hide the preview row
    $('#review-row').addClass('d-none');


    // hide this button and show the hide button
    $(this).addClass('d-none');
    $('#startup-submit-req-button').addClass('d-none');

    $('#startup-cancel-req-button').removeClass('d-none');
    $('#startup-post-req-button').removeClass('d-none');



});