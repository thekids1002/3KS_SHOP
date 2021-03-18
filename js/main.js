$(document).ready(function() {
    $("#search_value").focus(function() {
        $("#result_search").css("display", "block");
    });
    $("#search_value").focusout(function() {
        $("#result_search").css("display", "none");
    });
});