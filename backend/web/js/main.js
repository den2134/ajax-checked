$(function() {
    $( ".chbox" ).on( "click", function() {
        $.ajax({
            url: new_url,
            type: 'POST',
            data: {
                check: $(this).is(':checked'),
                val: $(this).val(),
            },
            success: function (data) {
                console.log(data);
            }
        });
    });
});