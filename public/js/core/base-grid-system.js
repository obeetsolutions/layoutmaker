

var add_new_line = function (e) {
    var content = "<div class='row line'></div>";
    $(e).append(content);
}

var functions = {
    add_new_line: add_new_line
};

window.obeetlayout = {};
window.obeetlayout.grid = functions;
