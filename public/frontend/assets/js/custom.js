// product color active
$(".color-circle").on("click", function () {
    $(".color-circle").removeClass("color1").addClass("color2");
    $(this).removeClass("color2").addClass("color1");
});

$(".sub-menu-click").hover(function () {
    var category = $(this).attr("data-category");
    $('.pane').css("display", "none");
    $("." + category).css("display", "block");
});

$(".pane").hover(
    function () {},
    function () {
        $(this).css("display", "none");
    }
);

reply = () => {
    let replyInput = document.getElementById("replyComment");
    replyInput.style.display ="block";
}
