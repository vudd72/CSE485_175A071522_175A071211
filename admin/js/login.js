$(document).ready(function(){
    $('.create').hide();
    // $('.login').hide();
    $('.intro').click(function(){
        $('.create').show();
        $('.login').hide();
    });
    // $('.submit-login').click(function(){
    //     $.ajax({
    //         url : "home.php",
    //         type : "POST",
    //         datatype : "text",
    //         data : {
    //             email : $("#inputEmail").val(),
    //             pass : $("#inputPass").val()
    //         }
    //     });
    // })
    $('.submit-login').submit(function(){
        var email = $("#inputEmail").val();
        var pass = $("#inputPass").val();

        $.ajax({
            url : 'check_login.php',
            type : 'post',
            dataType : 'json',
            data : {
                get_email : email,
                get_pass : pass
            }
        });
    });
    $('.submit-create-acc').click(function(){
        $.ajax({
            url : "addUser.php",
            type : "POST",
            datatype : "text",
            data : {
                email : $("#inputEmail").val(),
                pass : $("#inputPass").val(),
                name : $('#inputName').val()
            }
        });
    })
});