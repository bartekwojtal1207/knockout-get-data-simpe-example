document.addEventListener("DOMContentLoaded", function (e) {


    var ul = $('.ul-class');
    console.log(ul);


    var Person = {
       name : function(name)
        {
            console.log(name);
            return name;
        }

    };

    var Bartek =   Person.name("bartek");
    var Bartek2 = Person.name("bartek2");
    var Bartek3 =  Person.name("bartek3");

    var arrayName = [Bartek, Bartek2, Bartek3];


    ko.applyBindings({
        people: [ Bartek, Bartek2, Bartek3  ]
    });

    function testAjax(e) {
        $.each(arrayName , function( index, value ){
            console.log(value);

            var li = $('<li>'+value+'</li>');
            // console.log(li);
            $('#results').append( li );
        })
    }


    $.ajax({
        method: "POST",
        url: "index.php",
        data: arrayName
        })
        .done(function(  ) {
            testAjax();
            console.log('success');

        }).fail(function() {
            alert( "error" );
        });





});