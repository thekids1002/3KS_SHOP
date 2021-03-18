$(document).ready(function() {
    $("#search-inp").focusin(function() {
        $("#result-search").css("display", "block");
    });
    $("#search-inp").focusout(function() {
        $("#result-search").css("display", "none");
    });
});