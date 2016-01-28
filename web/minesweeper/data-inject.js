var arrayWidth = 8;
var arrayHeight = 8;

function load() {
    var randomWidth = Math.floor((Math.random() * arrayWidth) + 1);
    var randomHeight = Math.floor((Math.random() * arrayHeight) + 1);
    console.log(randomHeight);
    console.log(randomWidth);
    var bombArray = [];
    for (var n = 1; n <= arrayWidth; n++) {
        var rowId = "row" + n;
        $("#minesweeper").append("<tr id='" + rowId + "'></td>");
        for (var p = 1; p <= arrayHeight; p++) {
            var id = "cell-" + n + "x" + p;
            if (randomWidth == n && randomHeight == p) {
                var childAppend = "<td id='" + id + "'><a href='#'>bomb</a></td>";
                var element = $("#" + rowId);
                element.append(childAppend);
                var childElement = $("#" + id);
                element.click(function () {
                    childElement.addClass("lost");
                });
            }
            else {
                var childAppend = "<td id='" + id + "'>empty</td>";
                $("#" + rowId).append(childAppend);
            }
        }
    }
};

$(document).ready(function () {
    load();
});