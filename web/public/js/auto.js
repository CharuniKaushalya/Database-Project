 var nama = [
        "Ghazali",
        "Ghazali Abbas",
        "T Ghazali",
        "Ghazali Samudra",
        "Ghazali Usman",
        "Abbas",
        "Abbas Usman"
    ];

    var distric = [
        "Kandy",
        "Matale",
        "Nuwara Eliya",
        "Ampara",
        "Batticaloa",
        "Trincomalee",
        "Anuradhapura",
        "Polonnaruwa",
        "Jaffna",
        "Kilinochchi",
        "Mannar",
        "Mullaitivu",
        "Vavuniya",
        "Kurunegala",
        "Puttalam",
        "Kegalle",
        "Ratnapura",
        "Galle",
        "Hambantota",
        "Matara",
        "Badulla",
        "Moneragala",
        "Colombo",
        "Gampaha",
        "Kalutara"
    ];
 
    $( "#single" ).autocomplete({
        source: distric
    });
    
     function split( val ) {
        return val.split( /,\s*/ );
    }
    function extractLast( term ) {
        return split( term ).pop();
    }
    $( "#multi" )
        .bind( "keydown", function( event ) {
    if ( event.keyCode === $.ui.keyCode.TAB &&
        $( this ).autocomplete( "instance" ).menu.active ) {
            event.preventDefault();
        }
    })
    .autocomplete({
        minLength: 0,
        source: function( request, response ) {
            response( $.ui.autocomplete.filter(
            nama, extractLast( request.term ) ) );
        },
        focus: function() {
            return false;
        },
        select: function( event, ui ) {
            var terms = split( this.value );
            terms.pop();
            terms.push( ui.item.value );
            terms.push( "" );
            this.value = terms.join( ", " );
            return false;
        }
    });