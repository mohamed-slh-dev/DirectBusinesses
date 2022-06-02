

// ----------------------------------- 1-------------------------------

$('.category-select').change(function() {


    // get categoryid
    let categoryid = $(this).val();


    // hide all options in subcategory and default value
    $('.subcategory-select').val("");
    $('.category-option').addClass('d-none');
    $('.category-option-'+categoryid).removeClass('d-none');


});