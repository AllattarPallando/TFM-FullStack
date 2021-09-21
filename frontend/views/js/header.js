/* function dropDownMenu() {
    const dropDownMenu = document.querySelector("#dropDownMenu");
    if (dropDownMenu.style.display === "block") {
        dropDownMenu.style.display = "none";
    } else {
        dropDownMenu.style.display = "block";
    }
} */

$(document).ready(function() {
    let boxWidth = $(window).width();
    $(".menuIcon").click(function() {
        if ($("#dropDownMenu").width() == boxWidth) {
            $("#dropDownMenu").animate({
                width: 0,
                marginLeft: boxWidth
            });
            $("#dropDownMenu").css("display", "none");
        } else {
            $("#dropDownMenu").animate({
                width: boxWidth,
                marginLeft: 0
            });
            $("#dropDownMenu").css("display", "block");
        }
    });
});