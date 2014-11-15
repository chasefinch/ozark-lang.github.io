$(document).ready(function() {
    var duration = 200;
    $('.link-to-top').click(function(event) {
        event.preventDefault();
        $('html, body').animate({scrollTop: 0}, duration);
        return false;
    });
    if(typeof(Storage)!=='undefined') {
        if(!localStorage.prompt_111414_2_status) localStorage.prompt_111414_2_status = 1;
        if(localStorage.prompt_111414_2_status == 1) $('.prompt-section').show();
    }
    $('.prompt-dismiss').click(function() {
        localStorage.prompt_111414_2_status = 2;
        $('.prompt-section').animate({"opacity":0.0}, 600).slideUp(600);
    });
});