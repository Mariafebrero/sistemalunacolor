<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistema Luna Color</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../public/css/font-awesome.css">

    <!-- ICONOS fontawesome -->
  <link rel="stylesheet" type="text/css" href="../public/iconosfontawesome/css/all.css">
   
    <!-- Theme style -->
    <link rel="stylesheet" href="../public/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../public/css/blue.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


  </head>
  <body class="hold-transition login-page" style="background-color: rgb(63,63,63)" >

    <!-- Botones atras y adelante -->
  <center>
      <!-- Boton atras -->
    <a href="../index.html" class="previous"><i class="fas fa-chevron-circle-left fa-2x" aria-hidden="true"></a></i>  
  </center>


    <div class="login-box">
      <div class="login-logo">
        <a class="login" href="login1.php"  style="background-image: url('../public/img/FL2.SVG'); position:relative;  top:-30px; " ></a>
      </div><!-- /.login-logo -->
      <div class="login-box-body" style = "position:relative;  top:-70px;">
        <H2><p class="login-box-msg">ACCESO</p></H2>

        <form method="post" action="../ajax/validalogin.php" id="frmAcceso">
         <p>
        <div class="row">
          

          <div class="col-xs-12">
              <div class="input-group">

                <input ID="usuario" type="usuario" name="usuario" Class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="Usuario" required  
                onkeypress="return (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122)" min="1">
                    <div class="input-group-append"></div>
          </div>


                
          </div>
        </div>

         </p> 
          
          <div class="row">
          <!-- Coontraseña -->  
          <div class="col-xs-12">
               <div class="input-group">
                <input ID="contrasena" type="Password" name="contrasena" Class="form-control" placeholder="Contraseña" required onselectstart="return false" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete=off/>
          <!-- boton monstrar Contraseña -->
                  <div class="input-group-append">
                    <button id="show_password" class="login100-form-btn" name="" type="button" onclick="mostrarPassword()"> 
                    <h5><span class="fas fa-eye-slash icon"></span></h5></button>

                  </div>
               </div>
          </div>
          </div>

          

          <p>

               <br>
          <!-- Boton -->
          <center>
    
              

             <input  class="boton" type="submit"  name="btningresar" value="Entrar" >
             
            
         

          </center>
            
        </p>
        </form>


        <center>
       <H5><a class="referencia" href="recuperarContraseña.php">¿Has olvidado tu contraseña?</a></H5><br>
        </center>  
        
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->



    <!-- jQuery -->
    <script src="../public/js/jquery-3.1.1.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../public/js/bootstrap.min.js"></script>
     <!-- Bootbox -->
    <script src="../public/js/bootbox.min.js"></script>

    <script type="text/javascript">
function mostrarPassword(){
    var cambio = document.getElementById("contrasena");
    if(cambio.type == "password"){
      cambio.type = "text";
      $('.icon').removeClass('fas fa-eye-slash').addClass('fas fa-eye');
    }else{
      cambio.type = "password";
      $('.icon').removeClass('fas fa-eye').addClass('fas fa-eye-slash');
    }
  } 
  
  $(document).ready(function () {
  //CheckBox mostrar contraseña
  $('#ShowPassword').click(function () {
    $('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
  });
});
</script>
          <style type="text/css">
            a{
              text-decoration: none;
              display: inline-flex;
              padding: 10px 10px;
            }
            a:hover{
              background-color: #000000;
              color: white;
              transition: 0.3s; 
              border-radius: 200px 200px 200px 200px;
                            -moz-border-radius: 200px 200px 200px 200px;
                            -webkit-border-radius: 200px 200px 200px 200px;
                            border: 0px solid #000000;
            }
            .previous{
              background-color: #E9762E;
              color:white;
              border-radius: 200px 200px 200px 200px;
                            -moz-border-radius: 200px 200px 200px 200px;
                            -webkit-border-radius: 200px 200px 200px 200px; 
                            border: 0px solid #000000;
            }
            .round{
              border-radius:100%;
            }

  

            ::placeholder {
                          color: blue;
                          font-size: 1.5em;
                          }

            .login{

                   background-size: auto auto;
                   width: auto;
                   padding: 100px 100px;
                   transition: 0.3s; 
                    border-radius: 200px 200px 200px 200px;              
                      
                   }



          .referencia{
              
                 color: #E8762F;
                  background-size: auto auto;
                   width: auto;
                   padding: 10px 10px;
                  transition: 0.3s; 
                  border-radius: 200px 200px 200px 200px;    
                      
                      }

          .boton{
            font-size: 150%;
            padding: 10px 30px;
            color: #ffff;
            background: #E8762F;
            border: 0px solid #E8762F;


          }

          .form-control{

             font-size: 170%;
              
          }

          .login100-form-btn{
            font-size: 200%;
            padding: 5px 10px;
            color: #ffff;
            background: #E8762F;
            border: 0px solid #E8762F;

          }
                              
                      
                  
          </style>

  </body>
</html> 
