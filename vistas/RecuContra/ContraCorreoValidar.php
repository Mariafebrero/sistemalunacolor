  <?php
  //Hasta aquí 
  // Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require '../../public/phpmailer/vendor/autoload.php';
    if(isset($_POST['enviarcorreo']))
        {   
      include "../../config/Conglobal.php";

      $user_id=null;
      $user_name =null;
      $user_mail =null;
      $user_token = null;

      $sql= "select * from tbl_usuarios where (usuario=\"$_POST[CasillaUsuario]\") ";
      
      $query = $con->query($sql);

      while ($r=$query->fetch_array()) 
      {
        $user_id=$r["id_usuario"];
        $user=$r["usuario"];
        $user_mail=$r["correo_electronico"];
        $user_token = $r["token"];
        break;
      }
      strtoupper($user);
      if($user_id==null)
      {

    echo"<script type='text/javascript'>    
      swal('Datos incorrectos ', ' Intentélo de nuevo o contacte a su soporte técnico', 'error');
        </script>";

        //echo"<script type='text/javascript'>    
      //swal('ERROR: No se pudo enviar el correo, por favor inténtelo de nuevo o contacte a su soporte técnico.', '', 'error');
        //</script>";
        
        }

      else 
        {
//--------------------------- Proceso que envía correos INICIO--------------------------------
    function CrearToken($length = 15) 
        { 
            return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length); 
        } 
    // Creación del token
    $codigo = CrearToken(); 
    //$codigo = strval($codigo);
    // Creación de fechas
    date_default_timezone_set("America/Tegucigalpa"); 
    $sql= "SELECT valor FROM `tbl_parametros` WHERE parametro = 'ADMIN_VIGENCIA_CORREO'" ;
      
      $query = $con->query($sql);

      while ($r=$query->fetch_array()) 
      { //volver a tratar
        $VigenciaMail=$r["valor"];

        break;
      }
    $HorasToken = "+" . $VigenciaMail . " Hours";
    $fecha_inicio = strtotime("now");
    $fecha_final = strtotime($HorasToken, $fecha_inicio);

    //Formato de fechas 
    $fecha_final = date("d-m-Y H:i:s", $fecha_final);
    $fecha_inicio = date("d-m-Y H:i:s", $fecha_inicio);
    
    //echo $fecha_inicio . " ". $fecha_final;
  
    $sql= "update tbl_usuarios set token =". "'". $codigo ."'" . " ,fecha_inicio = " . "'". $fecha_inicio . "'". " ,fecha_final=" . "'". $fecha_final . "'". " WHERE usuario=" . "'". $user . "'". " ";

    $con->query($sql);
        

    $sql= "SELECT valor from tbl_parametros WHERE id_parametro = 17 ";
          
    $query = $con->query($sql);

    while ($r=$query->fetch_array()) 

      {
        $Correo_host=$r["valor"];
        break;
      } 

    $sql= "SELECT valor from tbl_parametros WHERE id_parametro = 18 ";
          
    $query = $con->query($sql);

    while ($r=$query->fetch_array()) 

      {
        $Correo_username=$r["valor"];
        break;
      } 

    $sql= "SELECT valor from tbl_parametros WHERE id_parametro = 19 ";
          
    $query = $con->query($sql);

    while ($r=$query->fetch_array()) 

      {
        $Correo_password=$r["valor"];
        break;
      }
    $sql= "SELECT valor from tbl_parametros WHERE id_parametro = 20 ";
          
    $query = $con->query($sql);

    while ($r=$query->fetch_array()) 

      {
        $Correo_smtpsecure=$r["valor"];
        break;
      }
    $sql= "SELECT valor from tbl_parametros WHERE id_parametro = 21 ";
          
    $query = $con->query($sql);

    while ($r=$query->fetch_array()) 

      {
        $Correo_port=$r["valor"];
        break;
      }

    $sql= "SELECT valor from tbl_parametros WHERE id_parametro = 22 ";
          
    $query = $con->query($sql);

    while ($r=$query->fetch_array()) 

      {
        $Correo_nombrefrom=$r["valor"];
        break;
      }           

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {

    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = $Correo_host;                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = $Correo_username;                     // SMTP username
    $mail->Password   = $Correo_password;                               // SMTP password*
    $mail->SMTPSecure = $Correo_smtpsecure;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;
    $mail->SMTPOptions = array(
        'ssl' => array
          (
          'verify_peer' => false,
          'verify_peer_name' => false,
          'allow_self_signed' => true
          )
        );                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom($Correo_username, $Correo_nombrefrom);
    $mail->addAddress($user_mail);     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');
    $Body = "  <center> <h1 > ¡Ya puedes recuperar tu cuenta " . $user . "!". " </h1> </center>
       ".   
    "<br><center><table width='600' border='2' cellspacing='0' cellpadding='0' style='border:2px' solid #F27830;>

    <tr>

<td width='170' height='170' style='border:1px solid #F27830; border-right: none; border-left: none;' align='right' valign='top'>
<img src='https://scontent.ftgu1-2.fna.fbcdn.net/v/t1.0-9/56664589_651473938616958_3796671250516934656_o.jpg?_nc_cat=109&ccb=2&_nc_sid=09cbfe&_nc_eui2=AeHWhBDah6aUVxioIXiSBgaNbjrlQYI0KPtuOuVBgjQo-_rX40eteDVsewDthEeNFLQ5dJJZ7RMTR85stIptIO1l&_nc_ohc=KY9w-1v88WoAX8WGeOf&_nc_ht=scontent.ftgu1-2.fna&oh=cbb9cb6a95ec907ba459c390738fa8ae&oe=5FC411B0' height='180' style='padding-top:15px;'> 
</td>

<td width='430' height='170' style='padding-left:25px; font-family: Helvetica, Arial, sans-serif; font-size:13px; border:1px solid #F27830; border-left: none; border-right: none; line-height:16px;' valign='bottom'>

<center><p style='font-size:18px;'><b>La petici&oacute;n para el restablecimiento de su contrase&ntilde;a ha sido aprobada</b></p></center>

<p style='font-size=15px;'><b>El siguiente enlace tiene una duraci&oacute;n de ".  $VigenciaMail . "hrs, en caso de que ingrese en un lapso de tiempo mayor, deber&aacute; enviar una nueva solicitud.</b></p>

<p style='line-height:19px;'>" .
         "<br>".
         "Para restablecer su contrase&ntilde;a " 
        . '<a href="http://localhost/sistemalunacolor/vistas/RecuContra/ValidarCorreoVista.php?user=' . $user . '&lunaverificationcode=' . $codigo . '"> click aqu&iacute; </a>'; "
<br>
[Honduras]  &middot; [Francisco Morazán]  &middot; [Distrito central]</p>
</td>

</tr>
</table>
</center>"; 
    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    // Content
    $subject ='Recuperación de contraseña';
    $subject = utf8_decode($subject);
    
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $Body;
    $mail->AltBody = strip_tags($Body);

    $mail->send();
    echo "<script >
            swal({ title: '¡Envío exitoso!',
            text: 'Revise su bandeja de entrada.',
            icon:'success',
          type: 'success'}).then(okay => 
          {
          if (okay)
          {
            window.location.href = '../login1.php';
            exit();
          }
          else 
          {
            window.location.href = '../login1.php';
            exit();
          }
          
          });
           </script>";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    //echo"<script type='text/javascript'>    
      //swal('ERROR: No se pudo enviar el correo, por favor inténtelo de nuevo o contacte a su soporte técnico.', '', 'error');
        //</script>";
//--------------------------- Proceso que envía correos FIN--------------------------------

       $sql= "select * from tbl_usuarios where (usuario=\"$_POST[CasillaUsuario]\") ";
      
      $query = $con->query($sql);

      while ($r=$query->fetch_array()) 
      {
        $user_id=$r["id_usuario"];
        $user=$r["usuario"];
        break;
      }


       $sql= 
       "INSERT INTO  tbl_bitacora(id_usuario,id_objeto,fecha,accion,descripcion,creado_por,fecha_creacion)
       VALUES('$user_id','8',(select now()),'Entró','Entró a Recuperación Contraseña por Correo','$user',(select now()))";
     $con->query($sql);

     $sql= 
       "INSERT INTO  tbl_bitacora(id_usuario,id_objeto,fecha,accion,descripcion,creado_por,fecha_creacion)
       VALUES('$user_id','8',(select now()),'Enviado','El correo de Recuperación de Contraseña fue enviado correctamente','$user',(select now()))";
     $con->query($sql);

      $sql= 
       "INSERT INTO  tbl_bitacora(id_usuario,id_objeto,fecha,accion,descripcion,creado_por,fecha_creacion)
       VALUES('$user_id','8',(select now()),'Salió','Salió de Recuperación Contraseña por Correo','$user',(select now()))";
     $con->query($sql);

      $sql= 
       "INSERT INTO  tbl_bitacora(id_usuario,id_objeto,fecha,accion,descripcion,creado_por,fecha_creacion)
       VALUES('$user_id','5',(select now()),'Entró','Entró al login','$user',(select now()))";
     $con->query($sql);

      }
      
    }     
}
        
?>