var arrayWidth = 8;
var arrayHeight = 8;
document.grid = [];

var bombWidth = -1;
var bombHeight = -1;

function load() {

};

function clickCell(element) {
    var elementId = element.getAttribute("id");
    console.log(elementId);
    $("#" + elementId).addClass("lost");

    findBombPosition(elementId);
};

function createGrid() {
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
            //if (randomWidth == bombWidth && randomHeight == bombHeight) {
            var element = $("#" + rowId);
            var childAppend = "<td id='" + id + "' onclick='clickCell(this);'>empty</td>";
            element.append(childAppend);
            //}
            //else {
            //    var childAppend = "<td id='" + id + ">empty</td>";
            //    $("#" + rowId).append(childAppend);
            //}
        }
    }
};

function findBombPosition(elementId) {
    var colAndRow = parseElementId(elementId);

    for (var n = 1; n <= arrayWidth; n++) {
        for (var p = 1; p <= arrayHeight; p++) {
            if (document.grid[n - 1][p - 1] === "bomb") {
                bombWidth = n;
                bombHeight = p;
                break;
            }
        }
    }
};

function parseElementId(elementId){
    var colAndRow = [];

    // do the logic to find the row and column number

    return colAndRow;
}

$(document).ready(function () {
    load();
    createGrid();
});