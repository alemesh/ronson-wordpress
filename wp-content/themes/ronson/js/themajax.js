// jQuery(function($){
//     // $(document).on("ready", function () {
//     //     alert(222);
//     // });
//     $(document).on('click','.btn',function(e){
//
//     $.ajax({
//         url: '/wp-admin/admin-ajax.php', // обработчик
//         data: {
//             'action': 'sendermail',
//             'key': 'wer'
//         }, // данные
//         type: 'POST', // тип запроса
//         success: function (data) {
//             console.log(data);
//         }
//     });
//
//     });
//
// });



$(document).on('submit', '.form', function (e) {
    e.preventDefault();
    var ajaxserialize = $(this).serialize();
    // var action = 'sendermail';
    var action = $(this).find("input[type='submit']").data('action');

    $.ajax({
        url: '/wp-admin/admin-ajax.php',
        // url: '/ronson-site/wp-admin/admin-ajax.php',
        method: 'post',
        data: {
            action: action,
            search: {
                formserialize: ajaxserialize,
            }
        },
        success: function (response) {
            console.log(response);
            // window.location.href = 'http://ronson-wordpress.local/thanks-page.html/';
            // window.location.href = 'http://campaign.gofmans.co.il/ronson-site/thanks-page/';
            window.location.href = 'http://www.ronson.co.il/thanks-page/';
        },
        error: function ($e) {
            console.log($e);
        }
    });
});


