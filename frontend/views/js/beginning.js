let isOpen = false;
$(document).ready(function() {
    $(".infoIcon").click(function() {
        if (!isOpen) {
            $(".infoHover").css("display", "block");
            isOpen = true;
        } else {
            $(".infoHover").css("display", "none");
            isOpen = false;
        }
    });

    $(".faqIcon").hover(
        function() {
            $(".faqAlert").css("display", "block");
        },
        function() {
            $(".faqAlert").css("display", "none");
        }
    );

    $(".aboutUsIcon").hover(
        function() {
            $(".aboutUsAlert").css("display", "block");
        },
        function() {
            $(".aboutUsAlert").css("display", "none");
        }
    );

});