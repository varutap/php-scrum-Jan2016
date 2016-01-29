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
            } else{
                element.click(function () {
                    $(this).addClass("safe");
                    $(this).text("1");
                });
            }
        }
    }
};

