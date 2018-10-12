$(document).ready(function(){
    $('#js-button').click(function(){
        $('#js-div').toggleClass("d-none");
    });
    $('#js-icon').click(function(){
        $('#js-search').toggleClass("d-none");
        
    });
    $('#js-icon').addClass("d-none");
});