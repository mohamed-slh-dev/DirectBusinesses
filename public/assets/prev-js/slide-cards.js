

// i for direct business cards + y for general requirements
i = 1;
y = 1;


// direct business cards button
$('#db-card-slide').click(function() {

    numOfRows = Object.keys(dbcards).length;
    
    // reset loop
    if (i >= numOfRows) {
        i = 0;
    }

    

    // sleep
    setTimeout(() => {
        
        // set new values
        
        $('#db-company').html(dbcards[i]['company']);
        $('#db-logo').attr('src', dbcards[i]['logo']);
        $('#db-requirementid').html(dbcards[i]['id']);
        $('#db-requirement').html(dbcards[i]['requirement']);


        $('#db-id').val(dbcards[i]['id']);


        // increase i
        i++;

    }, 300);


});
// end of direct business function






// general req cards button
$('#gr-card-slide').click(function() {

    numOfRows = Object.keys(grcards).length;
    
    // reset loop
    if (y >= numOfRows) {
        y = 0;
    }

    

    // sleep
    setTimeout(() => {
        
        // set new values
        
        $('#gr-company').html(grcards[y]['company']);
        $('#gr-logo').attr('src', grcards[y]['logo']);
        $('#gr-requirementid').html(grcards[y]['id']);
        $('#gr-requirement').html(grcards[y]['requirement']);


        $('#gr-id').val(grcards[y]['id']);


        // increase i
        y++;

    }, 300);


});
// end of general req function