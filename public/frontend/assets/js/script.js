(function ($) {
    // Navbar fixed top
    var yourNavigation = $(".navbar_bottom");
    stickyDiv = "sticky";
    yourHeader = $(".navbar_bottom").height();

    $(window).scroll(function () {
        if ($(this).scrollTop() > yourHeader) {
            yourNavigation.addClass(stickyDiv);
        } else {
            yourNavigation.removeClass(stickyDiv);
        }
    });
    //Search Switch
    $(".search-switch").on("click", function () {
        $(".search-model").css("display", "block");
    });

    $(".search-close-switch").on("click", function () {
        $(".search-model").css("display", "none");
    });
    // Submenu on Hover

    $(".has-children").hover(function () {
        $("#women-pane").css("display", "none");
        $("#men-pane").css("display", "none");
        $("#accessories-pane").css("display", "none");
        $("#world-pane").css("display", "none");
        $("#cashmere-pane").css("display", "none");
        $("#home-pane").css("display", "none");
        $("#lookbook-pane").css("display", "none");
    });

    // Cashmere sub-menu
    $("#sub-menu-cashmere").hover(function () {
        $("#women-pane").css("display", "none");
        $("#men-pane").css("display", "none");
        $("#cashmere-pane").css("display", "block");
        $("#world-pane").css("display", "none");
        $("#accessories-pane").css("display", "none");
        $("#home-pane").css("display", "none");
        $("#lookbook-pane").css("display", "none");
    });
    $("#cashmere-pane").hover(
        function () {},
        function () {
            $(this).css("display", "none");
        }
    );
    // women sub-menu
    $("#sub-menu-women").hover(function () {
        $("#women-pane").css("display", "block");
        $("#men-pane").css("display", "none");
        $("#accessories-pane").css("display", "none");
        $("#world-pane").css("display", "none");
        $("#cashmere-pane").css("display", "none");
        $("#home-pane").css("display", "none");
        $("#lookbook-pane").css("display", "none");
    });
    $("#women-pane").hover(
        function () {},
        function () {
            $(this).css("display", "none");
        }
    );

    //  Men Sub-menu
    $("#sub-menu-men").hover(function () {
        $("#men-pane").css("display", "block");
        $("#women-pane").css("display", "none");
        $("#lookbook-pane").css("display", "none");
        $("#accessories-pane").css("display", "none");
        $("#world-pane").css("display", "none");
        $("#cashmere-pane").css("display", "none");
        $("#home-pane").css("display", "none");
    });
    $("#men-pane").hover(
        function () {},
        function () {
            $(this).css("display", "none");
        }
    );

    // Accesssories Sub-menu
    $("#sub-menu-accessories").hover(function () {
        $("#lookbook-pane").css("display", "none");
        $("#accessories-pane").css("display", "block");
        $("#cashmere-pane").css("display", "none");
        $("#men-pane").css("display", "none");
        $("#women-pane").css("display", "none");
        $("#home-pane").css("display", "none");
        $("#world-pane").css("display", "none");
    });
    $("#accessories-pane").hover(
        function () {},
        function () {
            $(this).css("display", "none");
        }
    );
    // Lookbook submenu
    $("#sub-menu-lookbook").hover(function () {
        $("#lookbook-pane").css("display", "block");
        $("#accessories-pane").css("display", "none");
        $("#cashmere-pane").css("display", "none");

        $("#men-pane").css("display", "none");
        $("#women-pane").css("display", "none");
        $("#home-pane").css("display", "none");
        $("#world-pane").css("display", "none");
    });
    $("#lookbook-pane").hover(
        function () {},
        function () {
            $(this).css("display", "none");
        }
    );
    // Home sub-menu
    $("#sub-menu-home").hover(function () {
        $("#women-pane").css("display", "none");
        $("#lookbook-pane").css("display", "none");
        $("#men-pane").css("display", "none");
        $("#home-pane").css("display", "block");
        $("#world-pane").css("display", "none");
        $("#accessories-pane").css("display", "none");
    });
    $("#home-pane").hover(
        function () {},
        function () {
            $(this).css("display", "none");
        }
    );
    // Our World Sub menu

    $("#sub-menu-world").hover(function () {
        $("#world-pane").css("display", "block");
        $("#cashmere-pane").css("display", "none");
        $("#lookbook-pane").css("display", "none");
        $("#men-pane").css("display", "none");
        $("#women-pane").css("display", "none");
        $("#home-pane").css("display", "none");

        $("#accessories-pane").css("display", "none");
    });
    $("#world-pane").hover(
        function () {},
        function () {
            $(this).css("display", "none");
        }
    );

    // offcanvas search switch

    $(".offcanvas-search").on("click", function () {
        $(".search-model").css("display", "block");
    });

    $(".offcanvas-search-close-switch").on("click", function () {
        $(".search-model").css("display", "none");
    });
    // offcanvas Sub menu
    $("#offcanvas-women-li").on("click", function () {
        $("#women-submenu").toggleClass("active");
        $("#rotate-icon").toggleClass("arrow-rotate");
    });
    $("#offcanvas-men-li").on("click", function () {
        $("#men-submenu").toggleClass("active");
        $("#rotate-icon6").toggleClass("arrow-rotate");
    });
    // women submenu ready to wear Section
    $("#submenu-menu").on("click", function () {
        $("#women-clothes").toggleClass("active");
        $("#rotate-icon").toggleClass("arrow-rotate");
        $("#women-submenu").toggleClass("active");

        $("#rotate-icon1").toggleClass("arrow-rotate");
    });
    // Women Submenu Accessories Section

    $("#submenu-menu1").on("click", function () {
        $("#women-accessories").toggleClass("active");
        $("#rotate-icon").toggleClass("arrow-rotate");
        $("#women-submenu").toggleClass("active");

        $("#rotate-icon2").toggleClass("arrow-rotate");
    });
    // women submenu Shoe Section
    $("#submenu-menu2").on("click", function () {
        $("#women-shoes").toggleClass("active");
        $("#rotate-icon").toggleClass("arrow-rotate");
        $("#women-submenu").toggleClass("active");

        $("#rotate-icon3").toggleClass("arrow-rotate");
    });
    // women submenu Bags Section
    $("#submenu-menu3").on("click", function () {
        $("#women-bags").toggleClass("active");
        $("#rotate-icon").toggleClass("arrow-rotate");
        $("#women-submenu").toggleClass("active");

        $("#rotate-icon4").toggleClass("arrow-rotate");
    });
    // women submenu Home Section
    $("#submenu-menu4").on("click", function () {
        $("#women-home").toggleClass("active");
        $("#rotate-icon").toggleClass("arrow-rotate");
        $("#women-submenu").toggleClass("active");

        $("#rotate-icon5").toggleClass("arrow-rotate");
    });
    // men submenu Ready to wear section
    $("#submenu-menu5").on("click", function () {
        $("#men-clothes").toggleClass("active");
        $("#men-submenu").toggleClass("active");
        $("#rotate-icon7").toggleClass("arrow-rotate");
        $("#rotate-icon6").toggleClass("arrow-rotate");
    });
    // Men submenu Accessories Section
    $("#submenu-menu6").on("click", function () {
        $("#men-accessories").toggleClass("active");
        $("#men-submenu").toggleClass("active");
        $("#rotate-icon8").toggleClass("arrow-rotate");
        $("#rotate-icon6").toggleClass("arrow-rotate");
    });
    // Men submenu Shoe Section
    $("#submenu-menu7").on("click", function () {
        $("#men-shoes").toggleClass("active");
        $("#men-submenu").toggleClass("active");
        $("#rotate-icon9").toggleClass("arrow-rotate");
        $("#rotate-icon6").toggleClass("arrow-rotate");
    });
    // Accessories submenu  Section
    $("#accessories-submenu-li").on("click", function () {
        $("#accessories-submenu").toggleClass("active");

        $("#rotate-icon10").toggleClass("arrow-rotate");
    });
    // Accesories Earring Section
    $("#submenu-menu8").on("click", function () {
        $("#accessories-submenu").toggleClass("active");
        $("#accessories-earring").toggleClass("active");
        $("#rotate-icon11").toggleClass("arrow-rotate");

        $("#rotate-icon10").toggleClass("arrow-rotate");
    });
    // Accessories Belt Section
    $("#submenu-menu9").on("click", function () {
        $("#accessories-submenu").toggleClass("active");
        $("#accessories-belt").toggleClass("active");
        $("#rotate-icon12").toggleClass("arrow-rotate");

        $("#rotate-icon10").toggleClass("arrow-rotate");
    });
    // Accessories Hats Section
    $("#submenu-menu10").on("click", function () {
        $("#accessories-submenu").toggleClass("active");
        $("#accessories-hat").toggleClass("active");
        $("#rotate-icon13").toggleClass("arrow-rotate");

        $("#rotate-icon10").toggleClass("arrow-rotate");
    });
    // Accessories Sunglasses Section
    $("#submenu-menu11").on("click", function () {
        $("#accessories-submenu").toggleClass("active");
        $("#accessories-sunglasses").toggleClass("active");
        $("#rotate-icon14").toggleClass("arrow-rotate");

        $("#rotate-icon10").toggleClass("arrow-rotate");
    });

    //Canvas Menu
    $(".canvas__open").on("click", function () {
        $(".offcanvas-menu-wrapper").addClass("active");
        $(".offcanvas-menu-overlay").addClass("active");
    });

    $(".offcanvas-menu-overlay").on("click", function () {
        $(".offcanvas-menu-wrapper").removeClass("active");
        $(".offcanvas-menu-overlay").removeClass("active");
    });
    $(".offcanvas-close-switch").on("click", function () {
        $(".offcanvas-menu-wrapper").removeClass("active");
        $(".offcanvas-menu-overlay").removeClass("active");
    });
    // product size active
    $(".size-circle").on("click", function () {
        $(".size-circle").removeClass("active");
        $(this).addClass("active");
    });
    // product select reccomendation section
    $("#men-link").on("click", function () {
        $("#men-product").toggleClass("active");
        $("#women-product").removeClass("active");
        $("#accessories-product").removeClass("active");
    });
    $("#women-link").on("click", function () {
        $("#women-product").toggleClass("active");
        $("#men-product").removeClass("active");
        $("#accessories-product").removeClass("active");
    });
    $("#accessories-link").on("click", function () {
        $("#accessories-product").toggleClass("active");
        $("#women-product").removeClass("active");
        $("#men-product").removeClass("active");
    });
    // scroll main-images on click
    $(".image1").click(function () {
        $(".product-image1").scroll();
    });
})(jQuery);
$(window).load(function() {
    $('.google-icon').css('opacity','1');
});
(function () {
    "use strict";
    var jQueryPlugin = (window.jQueryPlugin = function (ident, func) {
        return function (arg) {
            if (this.length > 1) {
                this.each(function () {
                    var $this = $(this);

                    if (!$this.data(ident)) {
                        $this.data(ident, func($this, arg));
                    }
                });

                return this;
            } else if (this.length === 1) {
                if (!this.data(ident)) {
                    this.data(ident, func(this, arg));
                }

                return this.data(ident);
            }
        };
    });
})();

// Quantity Incrementer
(function () {
    "use strict";

    function Guantity($root) {
        const element = $root;
        const quantity = $root.first("data-quantity");
        const quantity_target = $root.find("[data-quantity-target]");
        const quantity_minus = $root.find("[data-quantity-minus]");
        const quantity_plus = $root.find("[data-quantity-plus]");
        var quantity_ = quantity_target.val();
        $(quantity_minus).click(function () {
            quantity_target.val(--quantity_);
        });
        $(quantity_plus).click(function () {
            quantity_target.val(++quantity_);
        });
    }
    $.fn.Guantity = jQueryPlugin("Guantity", Guantity);
    $("[data-quantity]").Guantity();
})();

$(document).ready(function () {
    $('input[type="radio"]').click(function () {
        if ($(this).attr("id") == "shipNewAddress") {
            $("#newAddress").show();
        } else {
            $("#newAddress").hide();
        }
    });
});

$(document).ready(function () {
    $('input[type="radio"]').click(function () {
        if (
            $(this).attr("id") == "shipNewAddress" ||
            $(this).attr("id") == "shipSaveAddress"
        ) {
            $("#billingAddress").show();
        }
    });
});

$(document).ready(function () {
    $('input[type="radio"]').click(function () {
        if ($(this).attr("id") == "billNewAddress") {
            $("#newBillingAddress").show();
        } else if ($(this).attr("id") == "billSaveAddress") {
            $("#newBillingAddress").hide();
        }
    });
});

$(document).ready(function () {
    $("#toggleDiv").click(function () {
        $("#filter-container").toggle();
    });
});

// validation Login form
$("#btnLogin").click(function (event) {
    var form = $("#loginForm");

    if (form[0].checkValidity() === false) {
        event.preventDefault();
        event.stopPropagation();
    }

    // if validation passed form
    // would post to the server here

    form.addClass("was-validated");
});

// faq toggle script
const toggles = document.querySelectorAll(".faq-toggle");

toggles.forEach((toggle) => {
    toggle.addEventListener("click", () => {
        toggle.parentNode.classList.toggle("active");
    });
});

$(document).ready(function () {
    //For Card Number formatted input
    var cardNum = document.getElementById("cr_no");
    cardNum.onkeyup = function (e) {
        if (this.value == this.lastValue) return;
        var caretPosition = this.selectionStart;
        var sanitizedValue = this.value.replace(/[^0-9]/gi, "");
        var parts = [];

        for (var i = 0, len = sanitizedValue.length; i < len; i += 4) {
            parts.push(sanitizedValue.substring(i, i + 4));
        }

        for (var i = caretPosition - 1; i >= 0; i--) {
            var c = this.value[i];
            if (c < "0" || c > "9") {
                caretPosition--;
            }
        }
        caretPosition += Math.floor(caretPosition / 4);

        this.value = this.lastValue = parts.join("-");
        this.selectionStart = this.selectionEnd = caretPosition;
    };

    //For Date formatted input
    var expDate = document.getElementById("exp");
    expDate.onkeyup = function (e) {
        if (this.value == this.lastValue) return;
        var caretPosition = this.selectionStart;
        var sanitizedValue = this.value.replace(/[^0-9]/gi, "");
        var parts = [];

        for (var i = 0, len = sanitizedValue.length; i < len; i += 2) {
            parts.push(sanitizedValue.substring(i, i + 2));
        }

        for (var i = caretPosition - 1; i >= 0; i--) {
            var c = this.value[i];
            if (c < "0" || c > "9") {
                caretPosition--;
            }
        }
        caretPosition += Math.floor(caretPosition / 2);

        this.value = this.lastValue = parts.join("/");
        this.selectionStart = this.selectionEnd = caretPosition;
    };
});
