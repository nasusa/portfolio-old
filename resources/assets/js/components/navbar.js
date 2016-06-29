$(document).ready(function(){
    $( "#nav-trigger" ).click(function() {
        $( "#nav" ).toggle( "slow", function() {
            // Animation complete.
        });
    });
});