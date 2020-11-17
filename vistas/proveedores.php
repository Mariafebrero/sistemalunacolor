<?php
//Activamos el almacenamiento en el buffer
ob_start();
session_start();

include '../config/conexion.php';
$idobjeto = $_GET['objeto'];
$rol = $_SESSION['id_rol'];

$sql = "SELECT * from tbl_permisos WHERE id_objeto = '$idobjeto' and id_rol = '$rol' and permiso_insercion = 1";
$stmt = mysqli_query($conexion,$sql);
if(mysqli_num_rows($stmt)>0){
  $permiso = true;
}else{
  $permiso = false;
}

 
$_SESSION["objeto"] = $_GET['objeto'];

include '../config/conexion.php';
//nombre new variable para secion
if (!isset($_SESSION["nombre_usuario"]))
{
  header("Location: login1.php");
}
else
{
require 'header.php';

if ($_SESSION['id_rol']==2 || $_SESSION['id_rol']==3 || $_SESSION['id_rol']==4)
{

   $id_usuario1=$_SESSION['id_usuario'];
   $usuario1=$_SESSION['usuario']; 
  //Hacemos el insert para la tabla usuarios y mostrar en la bitacora.
   $sql_bitacora= "INSERT INTO  tbl_bitacora(id_usuario,id_objeto,fecha,accion,descripcion,creado_por,fecha_creacion) 
   VALUES('$id_usuario1','10',(select now()),'Entró','Entró a Mantenimiento de Proveedores','$usuario1',(select now()))";
    ejecutarConsulta($sql_bitacora);
  }
  else
  {
    require 'noacceso.php';
  }





?>
<!DOCTYPE html>
<html lang="en">
<head>
 
</head>
<!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">        
        <!-- Main content -->
        <section class="content">
            <div class="row">
              <div class="col-md-12">
                  <div class="box">
                    <div class="box-header with-border">

                      

                      <!-- IMAGEN TITULO -->
                      <center> 
                          <img class="imagen" width="250" heigth="250" src="../public/img/titulos/PROVEEDORES.svg">
                      
                      </center>
                      <!-- FIN IMAGEN TITULO -->

                          <br>
                            <button class="btn btn-success" id="btnagregar" <?php echo $permiso==false ? 'disabled' : '' ?>  onclick="mostrarform(true)"><i class="fa fa-address-book-o "></i> Agregar Proveedor</button>
                 


                        <div class="box-tools pull-right">
                        </div>

                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body table-responsive" id="listadoregistros">
                        <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                          <thead>
                            
                          <th><center>Opciones</center></th>
                          <th><center>Nombre Proveedor</center></th>
                          <th><center>CAI </center></th>
                           <th><center>RTN</center></th>
                            <th><center>Telefono</center></th>
                             <th><center>Correo</center></th>
                              <th><center>Direccion</center></th>
                               <th><center>Descripcion</center></th>
                       
                         
                            
                          </thead>
                          <tbody>                            
                          </tbody>
                          <tfoot>
                             <th><center>Opciones</center></th>
                          <th><center>Nombre Proveedor</center></th>
                          <th><center>CAI </center></th>
                           <th><center>RTN</center></th>
                            <th><center>Telefono</center></th>
                             <th><center>Correo</center></th>
                              <th><center>Direccion</center></th>
                               <th><center>Descripcion</center></th>
                             

                          </tfoot>
                        </table>
                    </div>
                    <div class="panel-body"  id="formularioregistros">
                        <form name="formulario" id="formulario" method="POST">
                           <div class="row">
                        
                          
                        <div class="form-group col-lg-4 col-xs-12">
                            <label>Nombre Proveedor :</label>
                            <input type="hidden" name="id_proveedor" id="id_proveedor">
                            <input type="text" class="form-control" name="nombre_proveedor" id="nombre_proveedor" maxlength="50" placeholder="" keydown ="teclear()" onkeyup="javascript:this.value=this.value.toUpperCase();" required  
                            onkeypress= "return (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32) "/>
                          </div>

                          <div class="form-group col-lg-4 col-xs-12">
                            <label>CAI :</label>
                            <input type="text" class="form-control" name="cai_proveedor" id="cai_proveedor" maxlength="50" placeholder="" onkeypress="return event.charCode >= 48 && event.charCode <= 57"  />
                          </div>

                          <div class="form-group col-lg-4 col-xs-12">
                            <label>RTN :</label>
                            <input type="text" class="form-control" name="rtn_proveedor" id="rtn_proveedor" maxlength="50" placeholder="" keydown ="teclear()" onkeypress="return event.charCode >= 48 && event.charCode <= 57"/>
                          </div>
                         
                            
                     

                     <div class="form-group col-lg-4 col-xs-12" id="Descripcion">
                            <label >Descripcion :</label>
                         <textarea  name="Descripcion_proveedores" id="Descripcion_proveedores" onkeyup="javascript:this.value=this.value.toUpperCase();" keydown ="teclear()" class="form-control" rows="5" cols="30" > </textarea>
                          </div>
                      </div>

 <hr size= 3 >
                       
                        <font size="3 "> <center> <label  >Informacion de Contacto</label> </center></font> 

 <div class="row">
        

      <div class="form-group col-lg-4 col-xs-12">
                            <label>Correo electronico :</label>
                           
                            <input type="email" class="form-control" name="Correo_proveedores" id="Correo_proveedores" keydown ="teclear()" maxlength="50" placeholder=""  required  
                           />
                          </div>


 <div class="form-group col-lg-4 col-xs-12">
                            <label>Direccion :</label>
                            
                            <input type="text" class="form-control" name="Direccion_proveedores" id="Direccion_proveedores" onkeyup="javascript:this.value=this.value.toUpperCase();" keydown ="teclear()" maxlength="50" placeholder=""  required  
                           />
                          </div>


<div class="form-group col-lg-4 col-xs-12">
                            <label>Telefono:</label>
                            
                            <input type="text" class="form-control" name="Telefono_proveedores" id="Telefono_proveedores" keydown ="teclear()" maxlength="50" placeholder=""  title="Separe con / los diferentes números"required  onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                           />
                          </div>




                       
                       

<div class="row">
  
<hr size= 3 > 
<font size="3 "> <center> <label  >Productos</label> </center></font> 
   <div class="form-group col-lg-4 col-xs-12">
   
      <label>Nombre Producto:</label> <br>
      <input id="Nombre_pro" class="form-control" type="text"   placeholder="" ><br>
     </div>

    <div class="form-group col-lg-4 col-xs-12">
      <label>Cantidad:</label> <br>
      <input id="Cantidad_compras" class="form-control" type="text" placeholder=""><br>
       </div>

   <div class="form-group col-lg-4 col-xs-12">
      <label>Precio:</label> <br>
      <input id="Precio_compras" class="form-control" type="text" placeholder=""> <br>
      </div>

      </div>                    


<div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <button id="adicionar" class="btn btn-success" type="button">Agregar a la tabla</button>
     </div>
</div>


 <p>Articulos en la Tabla:
  <div id="adicionados"></div>
</p>
<table  id="mytable" class="table table-bordered table-hover " >

  <tr>
  <th><center>Nombre Producto</center></th>
  <th><center>Cantidad</center></th>
  <th><center>Precio</center></th>
  <th><center>Eliminar</center></th>


  </tr>
</table>


<div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i> Guardar</button>

                             <button class="btn btn-danger" id ="cancelar" name ="cancelar" onclick="cancelarform()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
                          </div>


        </div>
    

        </div>
             
                   
                        
                        </form>
                    </div>
                    <!--Fin centro -->
                  </div><!-- /.box -->
              </div><!-- /.col -->
          </div><!-- /.row -->
      </section><!-- /.content -->

    </div><!-- /.content-wrapper -->
</html>
  <!--Fin-Contenido-->
<?php
require 'footer.php';
?>

<script type="text/javascript" src="scripts/proveedores.js"></script>







<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>





<script>
    $('#Telefono_proveedores').mask('0000-0000/0000-0000/0000-0000/0000-0000/0000-0000');
    $('#rtn_proveedor').mask('0000-0000-00000');
    $('#cai_proveedor').mask('000000-A00000-A00000-A00000-A00000-00');
  


document.getElementById("nombre_proveedor").addEventListener("keydown", teclear);
document.getElementById("Descripcion_proveedores").addEventListener("keydown", teclear);
document.getElementById("Direccion_proveedores").addEventListener("keydown", teclear);


var flag = false;
var teclaAnterior = "";

function teclear(event) {
  teclaAnterior = teclaAnterior + " " + event.keyCode;
  var arregloTA = teclaAnterior.split(" ");
  if (event.keyCode == 32 && arregloTA[arregloTA.length - 2] == 32) {
    event.preventDefault();
  }
}


</script>

<script>
    $(document).ready(function() {
//obtenemos el valor de los input

$('#adicionar').click(function() {
  var Nombre_pro = document.getElementById("Nombre_pro").value;
  var Cantidad_compras= document.getElementById("Cantidad_compras").value;
  var Precio_compras = document.getElementById("Precio_compras").value;
  var i = 1; //contador para asignar id al boton que borrara la fila
  var fila = '<tr id="row' + i + '"><td><center>' + Nombre_pro + '</center></td><td><center>' + Cantidad_compras + '</td><td><center>' + Precio_compras + '</center></td><td><center><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">Quitar</center></button></td></tr>'; //esto seria lo que contendria la fila

  i++;


  $('#mytable tr:first').after(fila);
    $("#adicionados").text(""); //esta instruccion limpia el div adicioandos para que no se vayan acumulando
    var nFilas = $("#mytable tr").length;
    $("#adicionados").append(nFilas - 1);
    //le resto 1 para no contar la fila del header
    document.getElementById("Precio_compras").value ="";
    document.getElementById("Cantidad_compras").value = "";
    document.getElementById("Nombre_pro").value = "";
    document.getElementById("Nombre_pro").focus();
  });
$(document).on('click', '.btn_remove', function() {
  var button_id = $(this).attr("id");
    //cuando da click obtenemos el id del boton
    $('#row' + button_id + '').remove(); //borra la fila
    //limpia el para que vuelva a contar las filas de la tabla
    $("#adicionados").text("");
    var nFilas = $("#mytable tr").length;
    $("#adicionados").append(nFilas - 1);
  });

});




</script>


<style type="text/css">
  
  #container input {
  padding-right: 32px;
}

textarea{
resize : none;

}

div#Descripcion{

width: 80%;
}

.input-group-append {
  bottom: 10px;
  cursor: pointer;
  height: 25px;
  position: absolute;
  right: 10px;
  width: 25px;
  z-index: 10;
}

.form-clear .material-icons {
  font-size: 24px;
  position:absolute;
  top:0px;
  right:0px!important;
}

.login100-form-btn{

  border-radius: 0px 0px 0px 0px;
-moz-border-radius: 0px 0px 0px 0px;
-webkit-border-radius: 0px 0px 0px 0px;
border: 0px solid #000000;
}
.swal2-popup {
  font-size: 1.6rem !important;
}
 


</style>

<?php 
}
ob_end_flush();
?>