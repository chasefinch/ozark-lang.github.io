var reserved = ["&lt;-", "class", "clear", "create", "enumeration", "extension", "for", "function", "if", "in", "index", "inheritance", "let", "member", "method", "property", "requirement", "return", "set", "state", "type", "while", "with", "without"];
var symbols = ["*", "/", "+", "-", "%", "=", "&gt;", "&gt;=", "&lt;", "&lt;=", "and", "or"];

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

    $('.code-sample-header').each(function() {
        var text = $(this).html().split(".");
        var newText = "";
        for(var i=0; i<text.length; i++) {
            if(i == 1) newText += "<span class='extension'>";
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
            lines[i] = process(line, true);
        });
        $(this).html(lines.join("\n"));
    });

});

function process(token, newline) {

    // need list, set, bag processing

    full = typeof newline !== 'undefined' ? newline : true;

    if(token.match(/^".*?"$/) && token.match(/^".*?"$/).length == 1) return "<span class='string'>"+token+"</span>"; 

    var pieces = new Array("");
    var segment = 0;
    var contexts = 0;
    var stringlevels = 0;

    var buffer = "";

    for(var i=0;i<token.length;i++) {

        if(token[i] == "{" && contexts == 0 && stringlevels == 0) {
            return process(token.substring(0, i), true)+"{"+process(token.substring(i+1, i+1+token.substring(i+1).indexOf("}")), false)+"}"+process(token.substring(i+2+token.substring(i+1).indexOf("}")), false);
        } else if(token[i] == "[" && contexts == 0 && stringlevels == 0) {
            return process(token.substring(0, i), true)+"["+process(token.substring(i+1, i+1+token.substring(i+1).indexOf("]")), false)+"]"+process(token.substring(i+2+token.substring(i+1).indexOf("]")), false);
        } else if(token[i] == ")" && contexts == 0) {
            //error.
            return "Malformed code.";
        } else if(token[i] == ")") {
            pieces[segment] += token[i];
            contexts--;
            if(contexts == 0 && i < token.length - 1) {
                segment++;
                pieces[segment] = new Array();
            }
        } else if(contexts > 0 || (stringlevels > 0 && token[i] != '"')) {
            pieces[segment] += token[i];
        } else if(token[i] == "(") {
            if(pieces[segment].length > 0) {
                segment++;
                pieces[segment] = new Array();
            }
            for(var j=0;j<buffer.length;j++) {
                pieces[segment] += buffer[j];
            }
            buffer = "";
            pieces[segment] += token[i];
            contexts++;
        } else if(token[i].match(/^[a-z]$/)) {
            buffer += token[i];
        } else if(token[i].match(/^[A-Za-z0-9]$/) && buffer.length > 0) {
            buffer += token[i];
        } else if(token[i] == '"' && stringlevels == 0) {
            if(pieces[segment].length > 0) {
                segment++;
                pieces[segment] = new Array();
            }
            for(var j=0;j<buffer.length;j++) {
                pieces[segment] += buffer[j];
            }
            buffer = "";
            stringlevels++;
            pieces[segment] += token[i];
        } else if(token[i] == '"' && stringlevels == 1) {
            pieces[segment] += token[i];
            stringlevels--;
            if(i < token.length - 1) {
                segment++;
                pieces[segment] = new Array();
            }
        } else {
            for(var j=0;j<buffer.length;j++) {
                pieces[segment] += buffer[j];
            }
            buffer = "";
            pieces[segment] += token[i];
        }
    }

    for(var i=0;i<buffer.length;i++) {
        pieces[segment] += buffer[i];
    }

    if(contexts != 0) return "Malformed code.";

    if(pieces.length > 1) {
        for(var i=0;i<pieces.length;i++) {
            if(i == 0) pieces[i] = process(pieces[i], full);
            else pieces[i] = process(pieces[i], false);
        }
        return pieces.join("");
    }

    if(token.indexOf("(") > -1 && token.indexOf(")") > -1) {
        return "<span class='function'>"+token.substring(0, token.indexOf("(")+1)+"</span>"+process(token.substring(token.indexOf("(")+1, token.length-1), false)+"<span class='function'>"+token.substring(token.length-1)+"</span>";
    }

    var words = token.split(/ /);
    var method = true;
    var declaration = false;
    $.each(words, function(i, word) {
        var tabs = "";
        var comma = false;
        while(word.indexOf("\t") == 0) {
            words[i] = word.substring(1);
            word = words[i];
            tabs += "\t";
        }
        if(word.indexOf(",") > -1 && word.indexOf(",") == word.length - 1) {
            words[i] = word.substring(0, word.length - 1);
            word = words[i];
            comma = true;
        }
        if(i==1 && method && full || i==2 && declaration) {
            words[i] = "<span class='method'>"+word+"</span>";
        } else if(word.indexOf(":") >= 0) {
            parts = word.split(":");
            parts[0] += ":";
            if(method) parts[0] = "<span class='argument'>"+parts[0]+"</span>";
            for(var j=1;j<parts.length;j++) {
                parts[j] = process(parts[j], false);
            }
            words[i] = parts.join("");
        } else if(reserved.indexOf(word) >= 0) {
            words[i] = "<span class='reserved'>"+word+"</span>";
            if(i == 0 && ["extension", "method"].indexOf(word) == -1) method = false;
            if(i == 0 && word == 'create') declaration = true;
        } else if(symbols.indexOf(word) >= 0) {
            words[i] = "<span class='symbol'>"+word+"</span>";
        } else if(word == "-&gt;") {
            words[i] = "<span class='method'>"+word+"</span>";
        } else if(word.match(/^[A-Z][A-Za-z0-9]*((\.|\||\\|&)?[A-Z][A-Za-z0-9]*)*\??$/)) {
            var match = word.match(/\.|\||\\|&/g);
            var set = word.split(/\.|\||\\|&/);
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
        } else if(word == "true" || word == "false" || word.match(/^'.*?'$/) || word.match(/^[0-9]+(\.[0-9]+)?$/)) {
            words[i] = "<span class='literal'>"+word+"</span>";
        } else if(word.match(/@[a-z][A-Za-z0-9]*/)) {
            words[i] = "<span class='property'>"+word+"</span>";
        }
        if(comma) words[i] += ",";
        words[i] = tabs + words[i];
    });

    return words.join(" "); 
}




