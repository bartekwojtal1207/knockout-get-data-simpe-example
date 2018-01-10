$(function () {

    $("form").validate();

    $( "#myinput" ).rules( "add", {
        required: true,
        minlength: 2,
        messages: {
            required: "Required input",
            minlength: jQuery.validator.format("Please, at least {0} characters are necessary")
        }
    });

    $("#myinputtwo").rules("add", {
        required: true,
        minlength: 5,
        maxlength: 20,
        messages: {
            required: "to pole jest wymagane",
            minlength: jQuery.validator.format("Please, at least {0} characters are necessary"),
            maxlength: jQuery.validator.format("Please, at least {0} characters are necessary"),
        }
    })

    $( "input:filled" ).css( "background-color", "lightgreen" );

});