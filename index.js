$(document).ready(function () {

    // Menu button focus.

    $('.logo').on('click', function () {
        $('.btn').removeClass('selected');
        $('.btn2').removeClass('selected2');
    });

    $('#learn').on('click', function () {
        $('.btn').removeClass('selected');
        $('.btn2').removeClass('selected2');
        $('#who-we-are').addClass('selected');
    });

    $('.btn').on('click', function () {
        $('.btn').removeClass('selected');
        $('.btn2').removeClass('selected2');
        $(this).addClass('selected');
    });

    $('.btn2').on('click', function () {
        $('.btn').removeClass('selected');
        $('.btn2').removeClass('selected2');
        $(this).addClass('selected2');
    });

    // Remove background if it's not home.

    $('.btn, .btn2, .btn-large').on('click', function () {
        $('body').css('background-image', 'none');
    });

    $('.logo').on('click', function () {
        $('body').css('background-image', 'url("photos/hyperloop home.jpg")');
    });

    // Capsule carousel.

    $('.carousel').carousel({
        duration: 30,
        fullWidth: true
    });
    setInterval(function () {
        $('.carousel').carousel('next');
    }, 8000);

    // Fake routing.
    $("#wwa").hide();
    $("#caps").hide();
    $("#rts").hide();
    $("#sch").hide();
    $("#tck").hide();
    $("#lgn").hide();

    $('.logo').on('click', function () {
        $("#wwa").hide();
        $("#caps").hide();
        $("#rts").hide();
        $("#sch").hide();
        $("#home").show();
        $("#tck").hide();
        $("#lgn").hide();
    });

    $('#learn').on('click', function () {
        $("#wwa").show();
        $("#home").hide();
        $("#caps").hide();
        $("#rts").hide();
        $("#sch").hide();
        $("#tck").hide();
        $("#lgn").hide();
    });

    $('#who-we-are').on('click', function () {
        $("#wwa").show();
        $("#home").hide();
        $("#caps").hide();
        $("#rts").hide();
        $("#sch").hide();
        $("#tck").hide();
        $("#lgn").hide();
    });

    $('#capsules').on('click', function () {
        $("#wwa").hide();
        $("#home").hide();
        $("#caps").show();
        $("#rts").hide();
        $("#sch").hide();
        $("#tck").hide();
        $("#lgn").hide();
    });

    $('#routes').on('click', function () {
        $("#wwa").hide();
        $("#home").hide();
        $("#caps").hide();
        $("#rts").show();
        $("#sch").hide();
        $("#tck").hide();
        $("#lgn").hide();
    });

    $('#schedule').on('click', function () {
        $("#wwa").hide();
        $("#home").hide();
        $("#caps").hide();
        $("#rts").hide();
        $("#sch").show();
        $("#tck").hide();
        $("#lgn").hide();
    });

    $('#tickets').on('click', function () {
        $("#wwa").hide();
        $("#home").hide();
        $("#caps").hide();
        $("#rts").hide();
        $("#sch").hide();
        $("#tck").show();
        $("#tck-table").hide();
        $("#lgn").hide();
    });

    $('#log-in').on('click', function () {
        $("#wwa").hide();
        $("#home").hide();
        $("#caps").hide();
        $("#rts").hide();
        $("#sch").hide();
        $("#tck").hide();
        $("#lgn").show();
        $("#lgn-table").hide();
    });

    // Submit route.

    $('#rts-submit').on('click', function () {
        var valFrom = $('#from').val();
        var valTo = $('#to').val();

        $.ajax({
            url: 'routes-duration.php',
            type: 'POST',
            data: {
                from: valFrom,
                to: valTo
            },
            success: function(data) {
                $('#rts-dur').html('<p>' + data + ' minutes</p>');
            }
        });
    });

    // Get routes list.

    $('#rts-list').on('click', function () {
        $.ajax({
            url: 'routes-list.php',
            success: function(data) {
                $('#rts-tbody').html(data);
            }
        });
    });

    // Open route list modal.

    $(document).ready(function(){
        $('.modal').modal();
      });

    // Get routes list.

    $('#schedule').on('click', function () {
        $.ajax({
            url: 'schedule-list.php',
            success: function(data) {
                $('#sch-tbody').html(data);
            }
        });
    });
    
    // Get tickets.

    $('#tck-submit').on('click', function () {
        $("#tck-table").show();

        var valFrom = $('#tck-from').val();
        var valTo = $('#tck-to').val();

        $.ajax({
            url: 'tickets-list.php',
            type: 'POST',
            data: {
                from: valFrom,
                to: valTo
            },
            success: function(data) {
                $('#tck-tbody').html(data);
            }
        });
    });

    // Get driver info.

    $('#lgn-submit').on('click', function () {
        $("#lgn-table").show();

        var valID = $('#lgn-driver').val();

        $.ajax({
            url: 'driver-info.php',
            type: 'POST',
            data: {
                driverID: valID,
            },
            success: function(data) {
                $('#lgn-tbody').html(data);
            }
        });
    });
});