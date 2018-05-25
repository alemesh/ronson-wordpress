jQuery(function($){
    // $(document).on("ready", function () {
    //     alert(222);
    // });
    $(document).on('click','.btn',function(e){

    $.ajax({
        url: '/wp-admin/admin-ajax.php', // обработчик
        data: {
            'action': 'sendermail',
            'key': 'wer'
        }, // данные
        type: 'POST', // тип запроса
        success: function (data) {
            console.log(data);
        }
    });

    });

});

