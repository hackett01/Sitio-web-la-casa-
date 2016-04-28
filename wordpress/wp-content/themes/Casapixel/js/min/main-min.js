WebFontConfig = {
    google: {
        families: [ "Open+Sans:400,300,700:latin" ]
    }
};

(function() {
    var e = document.createElement("script");
    e.src = ("https:" == document.location.protocol ? "https" : "http") + "://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js";
    e.type = "text/javascript";
    e.async = "true";
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(e, s);
})();

(function(e, s, a, t, o, n) {
    e.GoogleAnalyticsObject = t;
    e[t] || (e[t] = function() {
        (e[t].q = e[t].q || []).push(arguments);
    });
    e[t].l = +new Date();
    o = s.createElement(a);
    n = s.getElementsByTagName(a)[0];
    o.src = "https://www.google-analytics.com/analytics.js";
    n.parentNode.insertBefore(o, n);
})(window, document, "script", "ga");

ga("create", "UA-60639905-1", "auto");

ga("send", "pageview");

$(document).ready(function() {
    $("head").append('<link rel="stylesheet" type="text/css" href="//:lacasadelospixeles.com/css/animate.css" media="all">');
    $("head").append('<link rel="stylesheet" type="text/css" href="//:lacasadelospixeles.com/css/normalize.css" media="all">');
    $("#mail-me").append('<a href="mailto:hola@lacasadelospixeles.com;">hola@lacasadelospixeles.com</a>');
    $("#main-screen").cycle({
        timeout: 0,
        fx: "scrollLeft",
        prev: "#prev",
        next: "#next"
    });
    if ($(document).width() > 768) {
        new WOW().init();
    }
    $(".item-match").matchHeight();
    $("#recaptchaLabel").click(function() {
        var e = $(this).attr("for");
        $("#recaptcha").attr("checked", "checked");
        $(".recaptcha").removeClass("error");
        $("#recaptcha-status").val("true");
    });
    $("nav ul .has-child").hover(function() {
        $(this).find(".sub-menu").addClass("in");
        $(this).find(".sub-menu").removeClass("out");
    }, function() {
        var e = $(this);
        e.find(".sub-menu").removeClass("in");
        setTimeout(function() {
            e.find(".sub-menu").addClass("out");
        }, 400);
    });
    $("*[background]").each(function() {
        var e = $(this).attr("background");
        var s = $(this).attr("background-size");
        if (!s) {
            s = "cover";
        }
        $(this).css({
            "background-image": "url(" + e + ")",
            "background-size": s
        });
    });
    $("*[data-background]").each(function() {
        var e = $(this).attr("data-background");
        var s = $(this).attr("background-size");
        if (!s) {
            s = "cover";
        }
        $(this).css({
            "background-image": "url(" + e + ")",
            "background-size": s
        });
    });
    $('a[href="#"]').click(function(e) {
        e.preventDefault();
    });
    $("a.scroll-to").on("click", function(e) {
        e.preventDefault();
        var s = this.hash, a = $(s);
        $("html, body").stop().animate({
            scrollTop: a.offset().top
        }, 500, "swing", function() {
            if ($("body").hasClass("ych-menu-in")) {
                $("body").removeClass("ych-menu-in");
                $(".ych-menu-content").removeClass("in");
                $("header").removeClass("in");
                $("#offcanvasmenu").removeClass("in");
            }
        });
    });
    $('*[data-toggle="ych-menu"]').each(function() {
        var e = $(this).attr("data-target");
        $(e).addClass("ych-menu");
    });
    $('*[data-toggle="ych-menu"]').click(function(e) {
        var s = $(this).attr("data-target");
        if ($("body").hasClass("ych-menu-in")) {
            $("body").removeClass("ych-menu-in");
            $(".ych-menu-content").removeClass("in");
            $("header").removeClass("in");
            $(s).removeClass("in");
        } else {
            $("body").addClass("ych-menu-in");
            $(".ych-menu-content").addClass("in");
            $("header").addClass("in");
            $(s).addClass("in");
        }
    });
    $('form button[type="submit"]').click(function(e) {
        e.preventDefault();
        var s = 0;
        $("form.on .form-control").each(function() {
            var e = $(this).attr("id");
            var a = $(this);
            var t = $(this).val();
            if (e == "correo") {
                if (!isMail(t)) {
                    $(this).addClass("error");
                    s++;
                }
            } else if (a.hasClass("number")) {
                if (!isNumber(t)) {
                    $(this).addClass("error");
                    s++;
                }
            } else if (!validate(t)) {
                $(this).addClass("error");
                s++;
            }
        });
        if (s > 0) {
            if ($(!validate("#recaptcha-status"))) {
                $("#success-msg div").html("¿Acaso eres un robot?");
                $("#g-recaptcha").addClass("error");
            } else {
                $("#success-msg div").html("Llena correctamente los campos marcados");
            }
            $("#success-msg").addClass("error");
            $("#success-msg").addClass("shows");
            return false;
        }
        dataForm = $("form.on").serialize();
        $.ajax({
            url: "./send/send.php",
            data: dataForm
        }).done(function(e) {
            e = $.parseJSON(e);
            if (e.response == "success") {
                $(".form-control").removeClass("error");
                $("#success-msg").removeClass("error");
                $("#success-msg div").html("¡Tu mensaje ha sido enviado!");
                $("#success-msg").addClass("shows");
                flag = false;
                setTimeout(function() {
                    $("#success-msg").removeClass("shows");
                }, 3e3);
                $("form.on .form-control").each(function() {
                    $(this).val("");
                });
                grecaptcha.reset();
                $("#recaptcha-status").val("");
                $("#recaptcha").removeAttr("checked");
            }
        }).fail(function() {
            $("#success-msg div").html("¡Ups! Esto no deberia pasar. Intentalo una vez más");
            $("#success-msg").addClass("wrong");
            $("#success-msg").addClass("shows");
        });
    });
    function e() {
        var e = $(window), s = $(".go-up"), a = 20;
        var t = e.scrollTop() + e.height();
        var o = $(document).height();
        var n = o / 2;
        if (t >= n) {
            s.addClass("visible");
        } else {
            s.removeClass("visible");
        }
    }
    function s() {
        e();
        $(document).on("scroll", function() {
            e();
        });
    }
    s();
    $(".go-up").on("click", function() {
        $("html, body").stop().animate({
            scrollTop: 0
        }, 600, "linear");
        return false;
    });
    $(".read-more-btn").click(function() {
        $(this).children("img").toggleClass("icon-expand");
    });
    $("#upload-cv").on("change", function() {
        var e = $(this).val().replace("C:\\fakepath\\", "");
        $(".upload-value").html(e);
    });
    $(".apply").click(function() {
        $(".apply-form-content").toggleClass("active-form");
        setTimeout(function() {
            $(".apply-form").toggleClass("showed-form");
        }, 400);
    });
    $(".close-form").click(function() {
        $(".apply-form").toggleClass("showed-form");
        setTimeout(function() {
            $(".apply-form-content").toggleClass("active-form");
        }, 400);
    });
});

function isMail(e) {
    var s = /^[a-z][a-z-_0-9\.]+@[a-z-_=>0-9\.]+\.[a-z]{2,3}$/i;
    return s.test(e);
}

function isNumber(e) {
    var s = /^\s*\d+\s*$/;
    return s.test(e);
}

function validate(e) {
    var s = /^([A-Za-z,\.\-\'\sñÑáéíóú0-9]+ ?)*$/;
    _size = e.lenght;
    _empty = "";
    for (i = 0; i < _size; i++) {
        _empty = _empty + " ";
    }
    if (e != _empty) {
        return s.test(e);
    } else {
        return false;
    }
}