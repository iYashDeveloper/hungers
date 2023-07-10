function getdata(what) {

    // alert("hiiiii");
    $.ajax({
        url: 'mr.php?what=' + what,
        type: 'POST',
        success: function(data) {
            $("#mrdata").html(data);
        }

    });

}