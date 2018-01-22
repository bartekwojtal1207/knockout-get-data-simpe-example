document.addEventListener("DOMContentLoaded", function (e) {


    var ul = $('.ul-class');

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

console.log('sss');
// console.log( );
    function addTableRow(elo, witam) {
        $('#mainTable tbody tr:last').after('<tr><td>'+ elo +'</td><td>'+ witam+'</td><td>'+ witam +'</td></tr>');
    };



$('.buttonAjax').on('click', function (e) {
console.log('klik');

    $.ajax({
        method: "POST",
        url: "./form.php",
        data: nowy
    }).done(function( data ) {
            console.log(data);
            console.log('success');
        addTableRow('wojtek', 'spoko')
        // $('#mainTable tbody tr:last').after('<tr> <td>"costam"</td> <td>data.witam</td> </tr>');
    }).fail(function() {
        alert( "error" );
    });


});






});