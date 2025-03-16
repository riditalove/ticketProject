$(function () {
    "use strict";
    $("#main-wrapper").AdminSettings({
        Theme: false, // this can be true or false ( true means dark and false means light ),
        Layout: "vertical",
        LogoBg: "skin6", // You can change the Value to be skin1/skin2/skin3/skin4/skin5/skin6
        NavbarBg: "skin1", // You can change the Value to be skin1/skin2/skin3/skin4/skin5/skin6
        SidebarType: "full", // You can change it full / mini-sidebar / iconbar / overlay
        SidebarColor: "skin6", // You can change the Value to be skin1/skin2/skin3/skin4/skin5/skin6
        SidebarPosition: true, // it can be true / false ( true means Fixed and false means absolute )
        HeaderPosition: true, // it can be true / false ( true means Fixed and false means absolute )
        BoxedLayout: false, // it can be true / false ( true means Boxed and false means Fluid )
    });
});

function _sh(id, id2) {
    $('#' + id).show();
    $('#' + id2).hide();
}

function _sel(id, area) {
    if ($(id).html() === 'Check All') {
        $('#' + area).find('input[type="checkbox"]').prop('checked', true);
        $(id).html('Uncheck All');
    } else {
        $('#' + area).find('input[type="checkbox"]').prop('checked', false);
        $(id).html('Check All');
    }
}

function _selp(id) {
    if ($(id).html() === 'Check All') {
        $('#areapermission').find('input[type="checkbox"]').prop('checked', true);
        $(id).html('Uncheck All');
    } else {
        $('#areapermission').find('input[type="checkbox"]').prop('checked', false);
        $(id).html('Check All');
    }
}

function _toast(typ, txt) {
    toastr.options = {
        'closeButton': true,
        'debug': false,
        'newestOnTop': false,
        'progressBar': true,
        'positionClass': 'toast-top-center',
        'preventDuplicates': false,
        'onclick': null,
        'showDuration': '300',
        'hideDuration': '1000',
        'timeOut': '5000',
        'extendedTimeOut': '1000',
        'showEasing': 'swing',
        'hideEasing': 'linear',
        'showMethod': 'fadeIn',
        'hideMethod': 'fadeOut'
    };
    if (typ === 'e') {
        toastr['error'](txt, 'Something Wrong !');
    } else {
        toastr['success'](txt, 'Job Done !');
    }
}

function __cip(id, src) {
    return $("#" + id + " img").attr('src', src);
}

function __cimg(id, src) {
    __cip(id, "https://erp.indesore.com/img/u/" + src + ".png")
            .on("error", function (e) {
                $("#" + id + " img").remove();
            })
            .on("load", function (e) {
                $("#" + id + " img").removeAttr('style');
                $("#" + id + " div").remove();
            });
}