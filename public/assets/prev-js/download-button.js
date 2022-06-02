

// -------------------------------------- 1 ------------------------------------

$('#download-button').click(function(e) {

    e.preventDefault();

    for (let index = 0; index < attachmentsArray.length; index++) {

        window.open(attachmentsPath+attachmentsArray[index]);
        
    }
    
});




// -------------------------------------- 2 ------------------------------------

$('#user-download-button').click(function(e) {

    e.preventDefault();

    for (let index = 0; index < userAttachmentsArray.length; index++) {

        window.open(attachmentsPath+userAttachmentsArray[index]);
        
    }
    
});






// ----------------------------------- 3 ----------------------------------

// browse pages download

$('.download-button').click(function(e) {


    e.preventDefault();


    // get id
    let id = $(this).attr('id');


    // slicer and y
    let slicecounter = -1;
    let idclone = '';

    while(id.slice(slicecounter) >= '0') {

        idclone = id.slice(slicecounter);
        
        slicecounter--;
    }



    for (let index = 0; index < browseAttachmentsArray[idclone - 1].length; index++) {
    
        window.open(attachmentsPath+browseAttachmentsArray[idclone - 1][index]);

    }
        
    
});