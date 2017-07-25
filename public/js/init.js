$(document).ready(function(){
    $('.link').click(function(){
        $('.link').removeClass('current');
        $(this).addClass('current');
    });
})