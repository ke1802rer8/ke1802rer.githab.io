$(document).ready(function(){
    $(".b24--select--catalog span").click(function(){

        var id = $(this).attr('id');
        $.ajax({
            url:'romans.php',
            data: 'sort_id=' +id, 
            type: 'get',
            success: function(html){

                $(".section--catalog").html(html).hide().fadeIn(2000);
                
            }

        });
    });
});
