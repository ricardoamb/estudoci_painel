$(document).ready(function(){

    if($("#fail").data('fail') == 'login'){

    }

    $('.logoff-link').click(function(){
        $('.hover-panel').fadeIn(function(){
            window.location.href = $('#configs').data('url') + 'users/logoff';
        });
    });

    $('body').perfectScrollbar();
    $('.menu-layer').perfectScrollbar();
    $('#notifications').perfectScrollbar();
    $('.message-list').perfectScrollbar();
    $('.message-send-container').perfectScrollbar();

    if ($(".login-error-email").length){
        $('#inputEmail').css('border-color','#FF0000');
    }
    if ($(".login-error-senha").length){
        $('#inputPassword').css('border-color','#FF0000');
    }

});