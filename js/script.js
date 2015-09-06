$(document).ready(function() {

    var duration = 200;

    $('.link-to-top').click(function(event) {
        event.preventDefault();
        $('html, body').animate({scrollTop: 0}, duration);
        return false;
    });

    if(typeof(Storage)!=='undefined') {
        if(!localStorage.prompt_111414_5_status) localStorage.prompt_111414_5_status = 1;
        if(localStorage.prompt_111414_5_status == 1) $('.prompt-section').show();
    }

    $('.prompt-dismiss').click(function() {
        localStorage.prompt_111414_5_status = 2;
        $('.prompt-section').animate({"opacity":0.0}, 600).slideUp(600);
    });

    $('.subnav-open').click(function() {
        $('.subnav').slideDown(600);
        $(this).animate({"opacity":0.0}, 600);
    }).show().css("display", "block");

    reserved = ["and", "class", "clear", "create", "enumeration", "extension", "false", "for", "function", "if", "in", "index", "inheritance", "let", "member", "method", "or", "property", "requirement", "set", "state", "true", "type", "while", "with", "without"];
    symbols = ["&lt;-", "-&gt;"];

    $('.code-sample pre').each(function() {
        var code = new Array();
        var lines = $(this).html().split("\n");
        $.each(lines, function(i, line) {
            tokens = line.split('\"');
            //...
            words = line.split(" ");
            type = 'method';
            $.each(words, function(i, word) {
                if(word.indexOf(":") >= 0) {
                    pieces = word.split(":");
                    pieces[0] = "<span class='argument'>"+pieces[0]+":</span>";
                    if(pieces[1].match(/^[A-Z][A-Za-z0-9]*\??$/)) {
                        pieces[1] = "<span class='type'>"+pieces[1]+"</span>";
                    }
                    words[i] = pieces.join("");
                } else if(reserved.indexOf(word) >= 0) {
                    words[i] = "<span class='reserved'>"+word+"</span>";
                } else if(symbols.indexOf(word) >= 0) {
                    words[i] = "<span class='symbol'>"+word+"</span>";
                } else if(word.match(/^[A-Z][A-Za-z0-9]*$/)) {
                    words[i] = "<span class='type'>"+word+"</span>";
                }
            });
            code.push(words.join(" "));
        });
        $(this).html(code.join("\n"));
    });

});