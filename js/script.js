var reserved = ["&lt;-", "...", "|", "as", "create", "each", "else", "extension", "for", "if", "in", "is", "inheritance", "method", "new", "print", "property", "repeat", "run", "replacement", "set", "split", "state", "times", "type", "unless", "until", "where", "while", "with"];
var symbols = ["!", "+", "-", "&gt;", "&lt;", "≥", "≤", "^", "¬", "*", "÷", "√", "∫", "∑", "=", "≠"];

$(document).ready(function() {

    var duration = 200;

    $('.link-to-top').click(function(event) {
        event.preventDefault();
        $('html, body').animate({scrollTop: 0}, duration);
        return false;
    });

    if(typeof(Storage)!=='undefined') {
        try {
            if(!localStorage.prompt_111414_5_status) localStorage.prompt_111414_5_status = 1;
            if(localStorage.prompt_111414_5_status == 1) $('.prompt-section').show();
        } catch(e) {
            // do nothing
        }
    }

    $('.prompt-dismiss').click(function() {
        localStorage.prompt_111414_5_status = 2;
        $('.prompt-section').animate({"opacity":0.0}, 600).slideUp(600);
    });

    $('.subnav-open').click(function() {
        $('.subnav').slideDown(600);
        $(this).animate({"opacity":0.0}, 600);
    }).show().css("display", "block");

    $('.code-sample-header').each(function() {
        var text = $(this).html().split(".");
        var newText = "";
        for(var i=0; i<text.length; i++) {
            if(i == text.length-2) newText += "<span class='extension'>";
            if(i >= 1) newText += ".";
            newText += text[i];
            if(i >= 1 && i == text.length-1) newText += "</span>";
        }
        $(this).html(newText);
    });

    $('.code-sample pre').each(function() {
        var code = new Array();
        var lines = $(this).html().split("\n");
        $.each(lines, function(i, line) {
            lines[i] = process(line);
        });
        $(this).html(lines.join("\n"));
    });

});

function process(line) {

    var words = line.split(/ /);
    var declaration = false;
    var compound = false;
    var output = false;

    $.each(words, function(i, word) {
        var tabs = "";

        while(word.indexOf("\t") == 0) {
            words[i] = word.substring(1);
            word = words[i];
            tabs += "\t";
        }

        if(word.match(/^\".*\"$/g)) {
            words[i] = "<span class='string'>"+word+"</span>";
        } else if(word.indexOf(":") >= 0) {
            parts = word.split(":");

            if(parts[0].match(/@([a-z][A-Za-z0-9]*)?/)) {
                parts[0] = "<span class='property'>"+parts[0]+":</span>";
            } else if(parts[0].match(/inheritance/) || parts[0].match(/create/)) {
                parts[0] = "<span class='reserved'>"+parts[0]+":</span>";
            } else if(parts[0].match(/&amp;[a-z][A-Za-z0-9]*/)){
                parts[0] = "<span class='argument'><span class='add'>&amp;</span>"+parts[0].substr(5)+":</span>";
            } else if(!declaration) {
                parts[0] = "<span class='argument'>"+parts[0]+":</span>";
            } else {
                parts[0] = parts[0]+":";
            }

            var brackets = 0;

            while(parts[1].match(/^\[.*\]$/)) {
                brackets++;
                parts[1] = parts[1].substring(1, parts[1].length - 1);
            }

            if(parts[1].match(/^\".*\"$/g)) {
                parts[1] = "<span class='string'>"+word+"</span>";
            } else if(parts[1].match(/^\[?[A-Z][A-Za-z0-9]*((\.|\\)?[A-Z][A-Za-z0-9]*)*\??\]?(,|;)?$/)) {
                var match = parts[1].match(/\.|\\|\;|\,|\[|\]/g);
                var set = parts[1].split(/\.|\\|\;|\,|\[|\]/);
                var whole = new Array();

                whole[0] = "<span class='type'>"+set[0]+"</span>";
                if(match) {
                    for(var j=0; j<match.length; j++) {
                        if(match[j] != ';') {
                            whole[j+1] = "<span class='separator'>"+match[j]+"</span><span class='type'>"+set[j+1]+"</span>";
                        } else {
                            compound = true;
                            whole[j+1] = ";";
                        }
                    }
                }
                parts[1] = whole.join("");
            } else if(parts[1].match(/^[A-Z][A-Za-z0-9]*(\.?[A-Z][A-Za-z0-9]*)*(\.?[a-z][A-Za-z0-9]*)?$/)) {
                var set = parts[1].split(".");
                for(var j=0; j<set.length; j++) {
                    if(j == set.length-1) {
                        set[j] = "<span class='literal'>"+set[j]+"</span>";
                    } else {
                        set[j] = "<span class='type'>"+set[j]+"</span>";
                    }
                }
                parts[1] = set.join(".");
            } else if(parts[1] == "true" || parts[1] == "false" || parts[1] == "any" || parts[1] == "none" || parts[1] == "nil" || parts[1].match(/^'.*?'$/) || parts[1].match(/^-?[0-9]+(\.[0-9]+)?$/)) {
                parts[1] = "<span class='literal'>"+parts[1]+"</span>";
            } else if(parts[1].match(/@[a-z][A-Za-z0-9]*/)) {
                parts[1] = "<span class='property'>"+parts[1]+"</span>";
            }

            while(brackets > 0) {
                parts[1] = "["+parts[1]+"]";
                brackets--;
            }

            words[i] = parts.join("");
        } else if(i == 1 && !declaration) {
            words[i] = "<span class='method'>"+word+"</span>";
        } else if(reserved.indexOf(word) >= 0) {
            words[i] = "<span class='reserved'>"+word+"</span>";
            if(i == 0 && ["extension", "method"].indexOf(word) == -1) {
                declaration = true;
            }
        } else if(words[i].match(/^\[?[A-Z][A-Za-z0-9]*((\.|\\)?[A-Z][A-Za-z0-9]*)*\??\]?(,|;)?$/)) {
            var match = words[i].match(/\.|\\|\;|\,|\[|\]/g);
            var set = words[i].split(/\.|\\|\;|\,|\[|\]/);
            var whole = new Array();

            whole[0] = "<span class='type'>"+set[0]+"</span>";
            if(match) {
                for(var j=0; j<match.length; j++) {
                    if(match[j] != ';') {
                        whole[j+1] = "<span class='separator'>"+match[j]+"</span><span class='type'>"+set[j+1]+"</span>";
                    } else {
                        compound = true;
                        whole[j+1] = ";";
                    }
                }
            }
            words[i] = whole.join("");
        } else if(i == 1 && words[1].match(/^[A-Z][A-Za-z0-9]*(\.?[A-Z][A-Za-z0-9]*)*(\.?[a-z][A-Za-z0-9]*)?$/)) {
            var set = words[1].split(".");
            for(var j=0; j<set.length; j++) {
                if(j == set.length-1) {
                    set[j] = "<span class='literal'>"+set[j]+"</span>";
                } else {
                    set[j] = "<span class='type'>"+set[j]+"</span>";
                }
            }
            words[1] = set.join(".");
        } else if(reserved.indexOf(word.substring(0, word.length-1)) >= 0 && word[word.length-1] == ";") {
            words[i] = "<span class='reserved'>"+word.substring(0, word.length-1)+"</span>;";
            if(i == 0 && ["extension", "method"].indexOf(word) == -1) {
                declaration = true;
            }
        } else if(symbols.indexOf(word) >= 0) {
            words[i] = "<span class='method'>"+word+"</span>";
        } else if(word == "-&gt;") {
            words[i] = "<span class='method'>"+word+"</span>";
            output = true;
        } else if(word == "not" || word == "true" || word == "false" || word == "any" || word == "none" || word == "nil" || word.match(/^'.*?'$/) || word.match(/^-?[0-9]+(\.[0-9]+)?$/)) {
            words[i] = "<span class='literal'>"+word+"</span>";
        } else if(word == "true," || word == "false," || word == "any," || word == "none," || word == "nil,") {
            words[i] = "<span class='literal'>"+word.substring(0, word.length-1)+"</span>,";
        } else if(i > 1 && compound && word[word.length-1] != ";") {
            words[i] = "<span class='method'>"+word+"</span>";
        } else if(word.match(/^[A-Z][A-Za-z0-9]*((\.|\|)?[A-Z][A-Za-z0-9]*)*\??$/)) {
            var match = word.match(/\.|\|/g);
            var set = word.split(/\.|\|/);
            var whole = new Array();

            whole[0] = "<span class='type'>"+set[0]+"</span>";
            if(match) {
                for(var j=0; j<match.length; j++) {
                    whole[j+1] = "<span class='separator'>"+match[j]+"</span><span class='type'>"+set[j+1]+"</span>";
                }
            }
            words[i] = whole.join("");
        } else if(word.match(/^[A-Z][A-Za-z0-9]*(\.?[A-Z][A-Za-z0-9]*)*(\.?[a-z][A-Za-z0-9]*)?$/)) {
            var set = word.split(".");
            for(var j=0; j<set.length; j++) {
                if(j == set.length-1) {
                    set[j] = "<span class='literal'>"+set[j]+"</span>";
                } else {
                    set[j] = "<span class='type'>"+set[j]+"</span>";
                }
            }
            words[i] = set.join(".");
        } else if(word.match(/@[a-z]?[A-Za-z0-9]*/)) {
            if(word[word.length-1] == ";") {
                words[i] = "<span class='property'>"+word.substring(0, word.length-1)+"</span>;";
            } else {
                words[i] = "<span class='property'>"+word+"</span>";
            }
        } else if(word.match(/^[a-z][A-Za-z0-9]*;$/) && output) {
            words[i] = "<span class='method'>"+word.substring(0, word.length-1)+"</span>;";
        }
        words[i] = tabs + words[i];
    });

    return words.join(" "); 
}