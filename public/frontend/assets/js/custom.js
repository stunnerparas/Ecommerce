// product color active
$(".color-circle").on("click", function () {
    $(".color-circle").removeClass("color1").addClass("color2");
    $(this).removeClass("color2").addClass("color1");
});
