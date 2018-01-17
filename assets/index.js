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
    var nowy = {
      elo: 'siema',
      witam: 'mordo'
    };
    var arrayName = [nowy.elo, nowy.witam];

$('.buttonAjax').on('click', function (e) {
console.log('klik');

    $.ajax({
        method: "POST",
        url: "./form.php",
        data: nowy
    }).done(function( data ) {
            testAjax();
            console.log(data);
            console.log('success');
    }).fail(function() {
        alert( "error" );
    });




});






});