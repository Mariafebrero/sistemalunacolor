<?php
//Activamos el almacenamiento en el buffer
//Documento de diseño, html, input y botones
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




if (!isset($_SESSION["nombre_usuario"]))
{
  header("Location: login1.html");
}
else
{
require 'header.php';
if ($_SESSION['id_rol']==2)
{
?>
<!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">        
        <!-- Main content -->
        <section class="content">
            <div class="row">
              <div class="col-md-12">
                  <div class="box">
                    <div class="box-header with-border">
                          <center> <h1 ><span class="hiddenui"><i class="fas fa-users"> Mantenimiento de cliente</i></span></h1> </center>
                          <br>
                            <button class="btn btn-success" id="btnagregar" <?php echo $permiso==false ? 'disabled' : '' ?> onclick="mostrarform(true)"><i class="fa fa-address-book-o "></i>Agregar nuevo cliente</button>
                            
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body table-responsive" id="listadoregistros">
                        <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                          <thead>
                            <th>Opciones</th>
                            <th>Tipo de cliente</th>
                            <th>nombre</th>
                            <th>Contacto</th>
                            <th>Teléfono</th>
                            <th>Cargo</th>
                            <th>RTN</th>
                            <th>Correo eléctronico</th>
                            <th>Observaciones</th>
                          </thead>
                          <tbody>                            
                          </tbody>
                          <tfoot>
                            <th>Opciones</th>
                            <th>Tipo de cliente</th>
                            <th>nombre</th>
                            <th>Contacto</th>
                            <th>Teléfono</th>
                            <th>Cargo</th>
                            <th>RTN</th>
                            <th>Correo eléctronico</th>
                            <th>Observaciones</th>
                          </tfoot>
                        </table>
                    </div>
                    <div class="panel-body" style="height: 500px;" id="formularioregistros">
                        <form name="formulario" id="formulario" method="POST">
<!----------------------------Inicio de contenido del FORM--------------------------------------->
<!----------------------------- Formulario de CN Inicio  ---------------------------------------->
                          
                            <center> <span style="color: red" id="errmsg"> </span> </center>
                          
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12" name="div_tipo_cliente" id="div_tipo_cliente" >
                            <label>Tipo de cliente:</label>
                            <select class="form-control select-picker" name="tipo_cliente" id="tipo_cliente" required onchange="SelectTipoCliente(this);"  title="Elija una opción para empezar">
                              <option value="0">Elija una opción para empezar</option>
                              <option value="Particular">Particular</option>
                              <option value="Empresarial">Empresarial</option>
                            </select>
                          </div>

                           <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Nombre completo:</label>
                            <input type="hidden" name="id_cliente" id="id_cliente">
                            <input type="text" class="form-control" name="nombre_cliente" id="nombre_cliente" maxlength="100" required disabled="disabled" onkeyup="javascript:this.value=this.value.toUpperCase();" required onkeypress= "return (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32)">
                
                          </div>

                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12" id="div_contacto" name="div_contacto">
                            <label>Contacto:</label>
                            <input type="text" class="form-control" name="contacto" id="contacto" disabled="disabled" onkeyup="javascript:this.value=this.value.toUpperCase();">
                          </div>

                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12" id="div_cargo" name="div_cargo">
                            <label>Cargo:</label>
                            <input type="text" class="form-control" name="cargo" id="cargo" disabled="disabled" onkeyup="javascript:this.value=this.value.toUpperCase();">
                          </div>

                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>RTN:</label>
                            <input type="text" class="form-control" name="rtn" id="rtn" disabled="disabled">
                          </div>

                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Teléfono:</label>
                            <input type="text" class="form-control" name="telefono" id="telefono" maxlength="70" title="Separe con / los diferenres números" disabled="disabled" onkeyup="javascript:this.value=this.value.toUpperCase();"  
                onkeypress="return (event.charCode >= 47 && event.charCode <= 57) || (event.charCode == 45)">
                          </div>

                          
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Correo electrónico:</label>
                            <input type="text" style="position: static;" class="form-control" name="correo_electronico" id="correo_electronico" title="Ejemplo: LunaColor@gmail.com" disabled="disabled" >
                          </div>

                           <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Dirección:</label>
                            <textarea class="form-control" style="resize: none;"  id="direccion" name="direccion" disabled="disabled"></textarea>
                          </div>

                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Observación:</label>
                            <textarea class="form-control" style="resize: none;width: 206%;top: 50px"  id="observacion" name="observacion" disabled="disabled"></textarea>
                          </div>

                          <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i> Guardar</button>

                            <button class="btn btn-danger" onclick="cancelarform()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
                          </div>
                          
                        </form>
                    </div>
                    <!--Fin centro -->
                  </div><!-- /.box -->
              </div><!-- /.col -->
          </div><!-- /.row -->
      </section><!-- /.content -->

    </div><!-- /.content-wrapper -->
  <!--Fin-Contenido-->
<?php
}
else
{
  require 'noacceso.php';
}
require 'footer.php';
?>
<script type="text/javascript" src="scripts/cliente.js"></script>
<script type="text/javascript">

document.getElementById("nombre_cliente").addEventListener("keydown", teclear);
document.getElementById("contacto").addEventListener("keydown", teclear);
document.getElementById("cargo").addEventListener("keydown", teclear);
document.getElementById("observacion").addEventListener("keydown", teclear);
document.getElementById("direccion").addEventListener("keydown", teclear);


var flag = false;
var teclaAnterior = "";

function teclear(event) 
{
  teclaAnterior = teclaAnterior + " " + event.keyCode;
  var arregloTA = teclaAnterior.split(" ");
  if (event.keyCode == 32 && arregloTA[arregloTA.length - 2] == 32) 
  {
    event.preventDefault();
  }
}

</script>
<?php 
}
ob_end_flush();
?>