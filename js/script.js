$(document).ready(function() {
    var duration = 200;
    $('.link-to-top').click(function(event) {
        event.preventDefault();
        $('html, body').animate({scrollTop: 0}, duration);
        return false;
    })
});