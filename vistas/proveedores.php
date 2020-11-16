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
                          <th><center>Descripcion</center></th>
                         <!-- <th><center>Tipo de contacto</center></th>-->
                            
                          </thead>
                          <tbody>                            
                          </tbody>
                          <tfoot>
                          <th><center>Opciones</center></th>
                          <th><center>Nombre Proveedor</center></th>
                          <th><center>Descripcion</center></th>
                         <!--<th><center>Tipo de contacto</center></th>-->
                          </tfoot>
                        </table>
                    </div>
                    <div class="panel-body" id="formularioregistros">
                        <form name="formulario" id="formulario" method="POST">
                           <div class="row">
                        
                          
                        <div class="form-group col-lg-4 col-xs-12">
                            <label>Nombre Proveedor :</label>
                            <input type="text" class="form-control" name="nombre_proveedor" id="nombre_proveedor" maxlength="50" placeholder="" keydown ="teclear()" onkeyup="javascript:this.value=this.value.toUpperCase();" required  
                            onkeypress= "return (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32) "/>
                          </div>
                         
                            
                       <div class="form-group col-lg-4 col-xs-12" id="Descripcion">
                            <label >Descripcion :</label>
                         <textarea  name="Descripcion_proveedores" id="Descripcion_proveedores" onkeyup="javascript:this.value=this.value.toUpperCase();"keydown ="teclear()" class="form-control" rows="5" cols="30" > </textarea>
                          </div>
                      </div>

              <hr size= 3 >
                       
                        <font size="3 "> <center> <label  >Informacion de Contacto</label> </center></font>            

                         


    <div class="row">
        <div class="form-group col-lg-4 col-xs-12">
            <form name="add_name" id="add_name">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dynamic_field">
                        <tr>
                           <label>Correo electronico: </label> 
                            <td><input type="email" name="name[]"  id="Correo_proveedores"maxlength="50" placeholder="" class="form-control "pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" /></td>
                            <td><button type="button" name="CE_proveedor" id="CE_proveedor" class="btn btn-primary">Agregar </button></td>
                        </tr>
                    </table>
                    
                </div>
            </form>
        </div>
    


        
        <div class="form-group col-lg-4 col-xs-12">
            <form name="add_name" id="add_name">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dynamic_Direccion">
                        <tr>

                           <label  >Direccion: </label> 
                            <td><input type="text" name="Direccion[]" id="Direccion_proveedores"placeholder="" onkeyup="javascript:this.value=this.value.toUpperCase();" maxlength="50" keydown ="teclear()"class="form-control name_list" /></td>
                            <td><button type="button" name="D_proveedor" id="D_proveedor" class="btn btn-primary">Agregar </button></td>
                        </tr>
                    </table>
                    
                </div>
            </form>
        </div>
   
    
  
        <div class="form-group col-lg-4 col-xs-12">
            <form name="add_name" id="add_name">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dynamic_Telefono">
                        <tr>

                           <label  >Telefono: </label> 
                            <td><input type="tel" name="Telefono[]" id ="Telefono_proveedores"placeholder="" value="" maxlength="14" onkeypress="return event.charCode >= 48 && event.charCode <= 57"  class="form-control name_list" /></td>
                            <td><button type="button" name="T_proveedor" id="T_proveedor" class="btn btn-primary">Agregar </button></td>
                        </tr>
                    </table>
                    
                </div>
            </form>
        </div>
    



                         
                          <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i> Guardar</button>

                             <button class="btn btn-danger" id ="cancelar" name ="cancelar" onclick="cancelarform()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
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




</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>



<script>
    $('#Telefono_proveedores').mask('0000-0000');
    


document.getElementById("nombre_proveedor").addEventListener("keydown", teclear);
document.getElementById("Descripcion_proveedores").addEventListener("keydown", teclear);
document.getElementById("Direccion_proveedores").addEventListener("keydown", teclear);
document.getElementById("dynamic_Direccion").addEventListener("keydown", teclear);

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











<script >
  


    $(document).ready(function(){
        var i = 1;

        $('#CE_proveedor').click(function () {
            i++;
            $('#dynamic_field').append('<tr id="row'+i+'">' +
                                        '<td><input type="email" name="name[]" maxlength="50" placeholder="" class="form-control name_list" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}"  /></td>' +
                                        '<td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td>' +
                                        '</tr>');
        });
        
        $(document).on('click', '.btn_remove', function () {
            var id = $(this).attr('id');
           $('#row'+ id).remove();
        });

        
    })




   
$(document).ready(function(){
        var i = 1;

        $('#D_proveedor').click(function () {
            i++;
            $('#dynamic_Direccion').append('<tr id="Direccion'+i+'">' +
                                        '<td><input type="text" name="Direccion[]" placeholder="" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control keydown ="teclear()" name_list" /></td>' +
                                        '<td><button type="button" name="remove_D" id="'+i+'" class="btn btn-danger btn_remove">X</button></td>' +
                                        '</tr>');
        });
        
        $(document).on('click', '.btn_remove', function () {
            var id = $(this).attr('id');
           $('#Direccion'+ id).remove();
        });

        
    })



$(document).ready(function(){
        var i= 1;

        $('#T_proveedor').click(function () {
            i++;
            $('#dynamic_Telefono').append('<tr id="telefono'+i+'">' +
                                        '<td><input type="text" name="Telefono[]" id="Telefonod" placeholder="" onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="8" class="form-control name_list" /></td>' +
                                        '<td><button type="button" name="remove_T" id="'+i+'" class="btn btn-danger btn_remove">X</button></td>' +
                                        '</tr>');

            
        });
        
        $(document).on('click', '.btn_remove', function () {
            var id = $(this).attr('id');
           $('#telefono'+ id).remove();
        });

        
    })





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

 


</style>

<?php 
}
ob_end_flush();
?>