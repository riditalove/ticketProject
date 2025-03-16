/*
 Template Name: Admin Template
 Author: Wrappixel
 
 File: js
 */
// ==============================================================
// Auto select left navbar
// ==============================================================
$(function () {
    "use strict";
    var url = window.location + "";
    //console.log(url);
    var path = url.replace(window.location.protocol + "//" + window.location.host, "");
    //console.log(path);
    var element = $("ul#sidebarnav a").filter(function () {
        return this.href === url || this.href === path || url.indexOf(this.href) === 0;
    });
    //console.log(element);
    element.parentsUntil(".sidebar-nav").each(function (index) {
        if ($(this).is("li") && $(this).children("a").length !== 0) {
            $(this).children("a").addClass("active");
            $(this).parent("ul#sidebarnav").length === 0 ? $(this).addClass("active") : $(this).addClass("selected");
        } else if (!$(this).is("ul") && $(this).children("a").length === 0) {
            $(this).addClass("selected");
        } else if ($(this).is("ul")) {
            $(this).addClass("in");
        }
    });

    element.addClass("active");
    $("#sidebarnav a").on("click", function (e) {
        if (!$(this).hasClass("active")) {
            // hide any open menus and remove all other classes
            $("ul", $(this).parents("ul:first")).removeClass("in");
            $("a", $(this).parents("ul:first")).removeClass("active");

            // open our new menu and add the open class
            $(this).next("ul").addClass("in");
            $(this).addClass("active");
        } else if ($(this).hasClass("active")) {
            $(this).removeClass("active");
            $(this).parents("ul:first").removeClass("active");
            $(this).next("ul").removeClass("in");
        }
    });
    $("#sidebarnav >li >a.has-arrow").on("click", function (e) {
        e.preventDefault();
    });

    // Auto scroll to the active nav
    if ($(window).width() > 768 || window.Touch) {
        var otop = 0;
        if($("#sidebarnav .sidebar-item.active").length) {
            otop = $("#sidebarnav .sidebar-item.active").offset().top;
        }
        $(".scroll-sidebar").animate({
            scrollTop: otop - 50
        }, 10);
    }

    $('#sidebarnav>li>ul').each(function () {
        //console.log($(this).children('li').length);
        if ($(this).children('li').length === 0) {
            $(this).parent().remove();
        }
    });
});
