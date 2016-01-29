var arrayWidth = 8;
var arrayHeight = 8;
document.grid = [];

function load() {
    for (var n = 1; n <= arrayWidth; n++) {
        for (var p = 1; p <= arrayHeight; p++) {
            var id = "cell-" + n + "x" + p;
            var element = $("#" + id);
            if (document.grid[n - 1][p - 1] === "bomb") {
                element.click(function () {
                    $(this).addClass("lost");
                    $(this).text("bomb");
                });
            } else {
                element.click(function () {
                    var totalBomb = 0;
                    totalBomb += totalBombLeft(n, p);
                    totalBomb += totalBombAbove(n, p);
                    totalBomb += totalBombBelow(n, p);
                    totalBomb += totalBombRight(n, p);
                    $(this).addClass("safe");
                    $(this).text(totalBomb);
                });
            }
        }
    }
};

function totalBombLeft(n, p) {
    return n - 1 > 0 ? 1 : 0;
};

function totalBombAbove(n, p) {
    return p - 1 > 0 ? 1 : 0;
};

function totalBombBelow(n, p) {
    return p + 1 < arrayHeight ? 1 : 0;
};

function totalBombRight(n, p) {
    return n + 1 < arrayWidth ? 1 : 0;
};

