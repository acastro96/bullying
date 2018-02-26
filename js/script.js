// Variable to hold request
var request;

// Bind to the submit event of our form
$("#nuevaPersona").submit(function(event){

    // Prevent default posting of form - put here to work in case of errors
    event.preventDefault();

    // Abort any pending request
    if (request) {
        request.abort();
    }
    // setup some local variables
    var $form = $(this);

    // Let's select and cache all the fields
    var $inputs = $form.find("input, select, button, textarea");

    // Serialize the data in the form
    var serializedData = $form.serialize();

    // Let's disable the inputs for the duration of the Ajax request.
    // Note: we disable elements AFTER the form data has been serialized.
    // Disabled form elements will not be serialized.
    $inputs.prop("disabled", true);

    // Fire off the request to /form.php
    request = $.ajax({
        url: "guardarPersona.php",
        type: "post",
        data: serializedData
    });

    // Callback handler that will be called on success
    request.done(function (response, textStatus, jqXHR){
        $("#modal").modal("toggle");
    });

    // Callback handler that will be called on failure
    request.fail(function (jqXHR, textStatus, errorThrown){
        // Log the error to the console
        console.error(
            "The following error occurred: "+
            textStatus, errorThrown
        );
    });

    // Callback handler that will be called regardless
    // if the request failed or succeeded
    request.always(function () {
        // Reenable the inputs
        $inputs.prop("disabled", false);
    });
});

$("#enviar").click(function(){

    // Prevent default posting of form - put here to work in case of errors
    event.preventDefault();

    // Abort any pending request
    //if (request) {
     //   request.abort();
    //}

    var cont = $('#counter').val();
    var c = 1;
    var total = 0;
    
    while(c<=cont){
        var radio = document.getElementsByName('fila'+c);
        var val;

        for(var i=0, length = radio.length; i< length; i++){
            if(radio[i].checked){
                val = radio[i].value;
                break;
            }
        }

       // var sum = $('#fila'+c).value;

        total=total + parseInt(val);

        c++;
    }

    console.log(total);

    if(total<=70){
        $("#modalBuena").modal("toggle");
    }
    if(total>70 && total<=120){
        $("#modalMedia").modal("toggle");
    }
    if(total>120){
        $("#modalMal").modal("toggle");
    }


    

});