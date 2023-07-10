var c = 0,
    log;
//alert("hiii");
clearInterval(log);


$(document).ready(function() {
    // alert("hii");
    callkro();

    $("body").mouseover(function() {
        c = 0;
    });
    $("body").click(function() {
        c = 0;
    });
    $("body").dblclick(function() {
        c = 0;
    });
    $("body").mouseup(function() {
        c = 0;
    });
    $("body").mousedown(function() {
        c = 0;
    });
    $("body").mouseleave(function() {
        c = 0;
    });
    $("body").mouseenter(function() {
        c = 0;
    });
    $("body").mousehover(function() {
        c = 0;
    });
    $("body").keypress(function() {
        c = 0;
    });
    $("body").keydown(function() {
        c = 0;
    });
    $("body").keyup(function() {
        c = 0;
    });
    $("body").foucse(function() {
        c = 0;
    });
    $("body").blur(function() {
        c = 0;
    });
    $("body").load(function() {
        c = 0;
    });
    $("body").submit(function() {
        c = 0;
    });
});

function callkro() {
    //alert("hioiiiiiiiiiiiii");
    log = setInterval(call, 1000);
}

function call() {
    // alert(c);
    c++;
    $("#tx").text(c);
    var dt = $("#tx").text();
    if (c == 1200) {
        clearInterval(log);
        if (dt.length != 0) {
            window.location.href = "logout.php";
        } else {

        }

    }
}