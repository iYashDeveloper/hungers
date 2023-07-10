function getdata(what) {

    //alert("hii");
    $.ajax({
        url: 'miss.php?what=' + what,
        type: 'POST',
        success: function(data) {
            $("#missdata").html(data);
        }

    });
}

function product(data, proid) {

    // alert(proid);
    $.ajax({
        url: 'miss.php?data=' + data + '&proid=' + proid,
        type: 'POST',
        success: function(data) {
            $("#missmodel").html(data);
        }

    });
}


function thali(data, proid) {

    // alert("hii");
    $.ajax({
        url: 'miss.php?data=' + data + '&proid=' + proid,
        type: 'POST',
        success: function(data) {
            $("#missthali").html(data);
        }

    });
}

function forrate(why, kone, kon, ketla) {

    //alert("hii");
    $.ajax({
        url: 'miss.php?why=' + why + '&kone=' + kone + '&kon=' + kon + '&ketla=' + ketla,
        type: 'POST',
        success: function(data) {
            $("#missrate").html(data);
        }

    });
}

function forratee(why, kone, kon, ketla) {

    // alert("hii");
    $.ajax({
        url: 'miss.php?why=' + why + '&kone=' + kone + '&kon=' + kon + '&ketla=' + ketla,
        type: 'POST',
        success: function(data) {
            $("#missrate").html(data);
        }

    });
}


function combobox(combo, comboid) {

    // alert(comboid);
    $.ajax({
        url: 'miss.php?combo=' + combo + '&comboid=' + comboid,
        type: 'POST',
        success: function(data) {
            $("#" + combo + "data").html(data);
        }

    });
}

function getcaptcha(captcha) {

    //alert(comboid);
    $.ajax({
        url: 'miss.php?captcha=' + captcha,
        type: 'POST',
        success: function(data) {
            $("#captcha").html(data);
        }

    });
}