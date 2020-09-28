$(document).ready(function() {
    $("#contrasena a").on('click', function(event) {
        event.preventDefault();
        if($('#contrasena input').attr("type") == "text"){
            $('#contrasena input').attr('type', 'password');
            $('#contrasena i').addClass( "fa-eye-slash" );
            $('#contrasena i').removeClass( "fa-eye" );
        }else if($('#contrasena input').attr("type") == "password"){
            $('#contrasena input').attr('type', 'text');
            $('#contrasena i').removeClass( "fa-eye-slash" );
            $('#contrasena i').addClass( "fa-eye" );
        }
    });
});

