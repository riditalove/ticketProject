$(function () {
    "use strict";
    //****************************
    /* Left header Theme Change function Start */
    //****************************
    function handlelogobg() {
        $(".theme-color .theme-item .theme-link").on("click", function () {
            var logobgskin = $(this).attr("data-logobg");
            if (logobgskin !== undefined) {
                $(".topbar .top-navbar .navbar-header").attr("data-logobg", logobgskin);
                store('logobgskin', logobgskin);
                console.log(logobgskin);
            }
        });

        var logobgskin = localStorage.getItem('logobgskin');
        if (logobgskin) {
            $(".topbar .top-navbar .navbar-header").attr("data-logobg", logobgskin);
        }
    }
    handlelogobg();
    //****************************
    /* Top navbar Theme Change function Start */
    //****************************
    function handlenavbarbg() {
        if ($("#main-wrapper").attr("data-navbarbg") == "skin6") {
            // do this
            $(".topbar .navbar").addClass("navbar-light");
            $(".topbar .navbar").removeClass("navbar-dark");
        } else {
            // do that
        }
        $(".theme-color .theme-item .theme-link").on("click", function () {
            var navbarbgskin = $(this).attr("data-navbarbg");
            if (navbarbgskin !== undefined) {
                $("#main-wrapper").attr("data-navbarbg", navbarbgskin);
                $(".topbar .navbar-collapse").attr("data-navbarbg", navbarbgskin);
                store('navbarbgskin', navbarbgskin);
                console.log(navbarbgskin);
            }
            if ($("#main-wrapper").attr("data-navbarbg") == "skin6") {
                // do this
                $(".topbar .navbar").addClass("navbar-light");
                $(".topbar .navbar").removeClass("navbar-dark");
            } else {
                // do that
                $(".topbar .navbar").removeClass("navbar-light");
                $(".topbar .navbar").addClass("navbar-dark");
            }
        });

        var navbarbgskin = localStorage.getItem('navbarbgskin');
        if (navbarbgskin) {
            $("#main-wrapper").attr("data-navbarbg", navbarbgskin);
            $(".topbar .navbar-collapse").attr("data-navbarbg", navbarbgskin);
        }
    }

    handlenavbarbg();

    //****************************
    /* Manage sidebar bg color */
    //****************************
    function handlesidebarbg() {
        $(".theme-color .theme-item .theme-link").on("click", function () {
            var sidebarbgskin = $(this).attr("data-sidebarbg");
            if (sidebarbgskin !== undefined) {
                $(".left-sidebar").attr("data-sidebarbg", sidebarbgskin);
                store('sidebarbgskin', sidebarbgskin);
                console.log(sidebarbgskin);
            }
        });

        var sidebarbgskin = localStorage.getItem('sidebarbgskin');
        if (sidebarbgskin) {
            $(".left-sidebar").attr("data-sidebarbg", sidebarbgskin);
        }
    }
    handlesidebarbg();
    //****************************
    /* sidebar position */
    //****************************
    function handlesidebarposition() {
        $("#sidebar-position").change(function () {
            if ($(this).is(":checked")) {
                $("#main-wrapper").attr("data-sidebar-position", "fixed");
                $(".topbar .top-navbar .navbar-header").attr("data-navheader", "fixed");
                store('sidebar', "fixed");
            } else {
                $("#main-wrapper").attr("data-sidebar-position", "absolute");
                $(".topbar .top-navbar .navbar-header").attr("data-navheader", "relative");
                store('sidebar', "relative");
            }
        });

        var sidebar = localStorage.getItem('sidebar');
        if (sidebar) {
            $("#main-wrapper").attr("data-sidebar-position", sidebar);
            $(".topbar .top-navbar .navbar-header").attr("data-navheader", sidebar);
        }
        if (sidebar === 'relative') {
            $("#sidebar-position").prop("checked", false);
        }
    }
    handlesidebarposition();
    //****************************
    /* Header position */
    //****************************
    function handleheaderposition() {
        $("#header-position").change(function () {
            if ($(this).is(":checked")) {
                $("#main-wrapper").attr("data-header-position", "fixed");
                store('header', "fixed");
            } else {
                $("#main-wrapper").attr("data-header-position", "relative");
                store('header', "relative");
            }
        });

        var header = localStorage.getItem('header');
        if (header) {
            $("#main-wrapper").attr("data-header-position", header);
        }
        if (header === 'relative') {
            $("#header-position").prop("checked", false);
        }
    }
    handleheaderposition();
    //****************************
    /* sidebar position */
    //****************************
    function handleboxedlayout() {
        $("#boxed-layout").change(function () {
            if ($(this).is(":checked")) {
                $("#main-wrapper").attr("data-boxed-layout", "boxed");
                store('boxed', "boxed");
            } else {
                $("#main-wrapper").attr("data-boxed-layout", "full");
                store('boxed', "full");
            }
        });

        var boxed = localStorage.getItem('boxed');
        if (boxed) {
            $("#main-wrapper").attr("data-boxed-layout", boxed);
        }
        if (boxed === 'boxed') {
            $("#boxed-layout").prop("checked", true);
        }
    }
    handleboxedlayout();
    //****************************
    /* Header position */
    //****************************
    function handlethemeview() {
        $("#theme-view").change(function () {
            if ($(this).is(":checked")) {
                $("body").attr("data-theme", "dark");
                store('theme', "dark");
            } else {
                $("body").attr("data-theme", "light");
                store('theme', "light");
            }
        });

        var theme = localStorage.getItem('theme');
        if (theme) {
            $("body").attr("data-theme", theme);
        }
        if (theme === 'dark') {
            $("#theme-view").prop("checked", true);
        }
    }
    handlethemeview();
    
    
    //****************************
    // ManageSidebar Type
    //****************************
    function handlesidebartype() {
        $("#collapssidebar").change(function () {
            if ($(this).is(":checked")) {
                store('sidebarc', "mini");
            } else {
                store('sidebarc', "full");
            }
        });

        var sidebarc = localStorage.getItem('sidebarc');
        if (sidebarc === 'mini') {
            $("#main-wrapper").attr("data-sidebartype", "mini-sidebar");
            $("#main-wrapper").attr("class", "mini-sidebar");
            $("#collapssidebar").prop("checked", true);
        } else {
            $("#main-wrapper").attr("data-sidebartype", "full");
            $("#main-wrapper").removeAttr("class");
        }
    }
    handlesidebartype();

});

function store(name, val) {
    if (typeof (Storage) !== "undefined") {
        localStorage.setItem(name, val);
    } else {
        window.alert('Please use a modern browser to properly view this template!');
    }
}

