


// ----------------------------------- 0 ---------------------------------

// first step form
$('.blog-first-step-inputs').change(function() {


    // if they empty button disabled
    if ($('#blog-title').val() == "" || $('#blog-desc').val() == "" || $('#blogcover').attr('src') == "") {

        $('#blog-step-one-button').addClass('not-clickable');

    } else {

        $('#blog-step-one-button').removeClass('not-clickable');

    }

});




// --------------------------------- 1 ---------------------------------

var sectionCount = 0;

// 1- add sections
$('#add-blog-section').click(function() {


    // check if inputs not empty first
    let sectionTitle = $('#section-title').val()
    let sectionContent = $('#section-content').val()

    

    
    // add section
    if (sectionTitle != "" && sectionContent != "") {

        // add new section count
        sectionCount++;


        // new Item html code
        let newSection = '\
        <div class="tg-dashboardservice blog-sections" id="blog-section-'+sectionCount+'">\
            <!-- section name -->\
            <div class="tg-servicetitle">\
                <h2><a href="javascript:void(0);">'+sectionTitle+'</a>\
                </h2>\
            </div>\
            \
            <!-- hidden title and content of section -->\
            <input type="hidden" name="section-title[]" value="'+sectionTitle+'">\
            <input type="hidden" name="section-content[]" value="'+sectionContent+'">\
            \
            <!-- delete button -->\
            <div class="tg-btntimeedit">\
                <button type="button" class="tg-btndel delete-blog-sections" id="delete-blog-section-'+sectionCount+'"><i class="lnr lnr-trash"></i></button>\
            </div>\
        </div>\
        ';


        // // append purchase html line
        $('.blog-sections-wrapper').append(newSection);



        // empty the fields
        $('#section-title').val('');
        $('#section-content').val('');
        
    } //end of add section

    


    // disabled step two button
    if (sectionCount == 0) {

    $('#blog-step-two-button').addClass('not-clickable');

    } else {

    $('#blog-step-two-button').removeClass('not-clickable');

    }


});




// --------------------


// 2- delete section
$('.blog-sections-wrapper').on("click", "button.delete-blog-sections", function(){


    // substract section count
    sectionCount--;

    

    // get id of delete button
    let id = $(this).attr('id');


    // get number of section from id number
    let slicecounter = -1;
    let idclone = '';


    while(id.slice(slicecounter) >= '0') {

        idclone = id.slice(slicecounter);
        
        slicecounter--;
    }




    // use clone to remove the component
    $('#blog-section-'+idclone).remove();




    // resorting
    // 1- sections
    i = 1;
    $(".blog-sections").each(function(){

       
        // set new id of components
        $(this).attr('id', 'blog-section-'+i);
        
        i++;

    });



    // 2- delete buttons
    i = 1;
    $(".delete-blog-sections").each(function(){

       
        // set new id of components
        $(this).attr('id', 'delete-blog-section-'+i);
        
        i++;

    });





    // disabled step two button
    if (sectionCount == 0) {

    $('#blog-step-two-button').addClass('not-clickable');

    } else {

    $('#blog-step-two-button').removeClass('not-clickable');

    }



});
















// --------------------------------- 2 ---------------------------------

var tagCount = 0;


// 1- add tag
$('#add-blog-tag').click(function() {


    // check if inputs not empty first
    let TagCategory = $('#section-tag-category').val()
    let TagSubcategory = $('#section-tag-subcategory').val()
    let TagSubcategoryName = $('#section-tag-subcategory option:selected').text()


    // add tag
    if (TagCategory != "" && TagSubcategory != "") {

        // add new tag count
        tagCount++;


        // new tag html code
        let newTag = '\
        \
        <div id="blog-tag-'+tagCount+'" class="blog-tags tg-btn">\
            <button id="delete-blog-tag-'+tagCount+'" type="button" class="delete-blog-tags" style="background-color:black"><i class="fa fa-close mr-2"></i></button>'+TagSubcategoryName+'\
        </div>\
        \
        <input type="hidden" value="'+TagCategory+'" name="section-tag-category[]">\
        <input type="hidden" value="'+TagSubcategory+'" name="section-tag-subcategory[]"></input>\
        ';


        // // append tags html line
        $('.blog-tags-wrapper').append(newTag);



        // empty the fields
        // $('#section-tag-category').val('');
        // $('#section-tag-subcategory').val('');
        
    } //end of add tag

    


});




// --------------------


// 2- delete tags
$('.blog-tags-wrapper').on("click", "button.delete-blog-tags", function(){


    // substract tag count
    tagCount--;

    

    // get id of delete button
    let id = $(this).attr('id');


    // get number of tags from id number
    let slicecounter = -1;
    let idclone = '';


    while(id.slice(slicecounter) >= '0') {

        idclone = id.slice(slicecounter);
        
        slicecounter--;
    }




    // use clone to remove
    $('#blog-tag-'+idclone).remove();




    // resorting
    // 1- tags
    i = 1;
    $(".blog-tags").each(function(){

       
        // set new id 
        $(this).attr('id', 'blog-tag-'+i);
        
        i++;

    });



    // 2- delete buttons
    i = 1;
    $(".delete-blog-tags").each(function(){

       
        // set new id
        $(this).attr('id', 'delete-blog-tag-'+i);
        
        i++;

    });




});
















// ------------------------------------------ 3 -------------------------------------


// update blog cover
$('#coverimg').change(function() {

     var file = $("#coverimg").get(0).files[0];
 
        if(file){
            var reader = new FileReader();
 
            reader.onload = function(){
                $('#blogcover').attr('src', reader.result);

                // again check the first step
                if ($('#blog-title').val() == "" || $('#blog-desc').val() == "" || $('#blogcover').attr('src') == "") {

                    $('#blog-step-one-button').addClass('not-clickable');

                } else {

                    $('#blog-step-one-button').removeClass('not-clickable');

                }

            }
 
            reader.readAsDataURL(file);


            
            
        }


});


