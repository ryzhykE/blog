jQuery(document).ready(function($) {
    $('#commentform').on('click','#submit',function(e) {
        e.preventDefault();
        var comParent = $(this);
        $('.wrap_result').
        css('color','green').
        text('Comment save').
        fadeIn(500,function() {
            var data = $('#commentform').serializeArray();
            alert(data);
            $.ajax({
                url:$('#commentform').attr('action'),
                data:data,
                type:'POST',
                datatype:'JSON',
                success: function(html) {

                },
                error:function() {

                }

            });
        });

    });

});