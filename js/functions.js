var date = new Date();
var month = date.getMonth();
var year = date.getFullYear();

function resMes() {
    if (month > 0) {
        month = month - 1;
    } else {
        year = year -1;
        month = 11;
    }
    $.ajax({
        url: "../php/calendar.php",
        type: "post",
        data: {_month:month,_year:year},
        success: function (html) {
            $(".calen").html(html);
        }
    })
    console.log(month);
}

function sumMes() {
    if (month < 11) {
        month = month + 1;
    } else {
        year = year + 1;
        month = 0;
    }
    $.ajax({
        url: "../php/calendar.php",
        type: "post",
        data: {_month:month,_year:year},
        success: function (html) {
            $(".calen").html(html);
        }
    })
    console.log(month);
}

function showAge() {
    $.ajax({
        url: "../php/age.php",
        type: "post",
        data: {},
        success: function (html) {
            $(".calen").html(html);
        }
    })
}

function calendar() {
    $.ajax({
        url: "../php/calendar.php",
        type: "post",
        data: {_month:month,_year:year},
        success: function (html) {
            $("calen").html(html);
        }
    })
}

$( document ).ready(function() {
    $(".calen").load("../php/calendar.php");
});
