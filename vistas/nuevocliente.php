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
                            <button class="btn btn-success" id="btnagregar" <?php echo $permiso==false ? 'disabled' : '' ?> onclick="mostrarformcn(true)"><i class="fa fa-address-book-o "></i>Particular</button>
                            <button class="btn btn-success" id="btnagregare" <?php echo $permiso==false ? 'disabled' : '' ?> onclick="mostrarformce(true)"><i class="fa fa-address-book-o "></i>Empresarial</button>
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
                            <th>Nombre</th>
                            <th>Tipo de documento</th>
                            <th> </th>
                            <th>Método de contacto</th>
                            <th> </th>
                          </thead>
                          <tbody>                            
                          </tbody>
                          <tfoot>
                            <th>Opciones</th>
                            <th>Tipo de cliente</th>
                            <th>Nombre</th>
                            <th>Tipo de documento</th>
                            <th> </th>
                            <th>Método de contacto</th>
                        <th> </th>

                          </tfoot>
                        </table>
                    </div>
                    <div class="panel-body" style="height: 500px;" id="formularioregistros">
                        <form name="formulario" id="formulario" method="POST">
<!----------------------------Inicio de contenido del FORM--------------------------------------->

                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Nombre completo:</label>
                            <input type="hidden" name="id_cliente" id="id_cliente">
                            <input type="hidden" name="id_tipo_cliente" id="id_tipo_cliente" value="1">
                            <input type="text" class="form-control" name="nombre_cn" id="nombre_cn" maxlength="100"  style="text-transform: uppercase;" required>
                          </div>

                           <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                             <label>Fecha de nacimiento:</label>
                             <input type="date"  class="form-control" style="text-align:center;" name="fecha_nacimiento" id="fecha_nacimiento" min = "1900-01-01"  max ="2015-01-01" value ="1900-01-01">
                           </div>
<hr>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Tipo de documento principal:</label>
                            <select class="form-control select-picker" name="tipo_doc_prin" id="tipo_doc_prin"  onchange ="SelectTipoDocPrin(this)">
                              <option value="0" >Seleccione:</option>
                              <option value="ID">ID</option>
                              <option value="RTN">RTN</option>
                              <option value="Pasaporte">Pasaporte</option>
                            </select>
                          </div>

                          <div class="form-group col-lg-5 col-xs-12">
                            <label>Valor del documento principal:</label>
                            <input type="text" class="form-control" name="valor_doc_prin" id="valor_doc_prin" maxlength="20" placeholder="Ingrese valor del documento" disabled="disabled">
                            <div class="form-group col-lg-5 col-xs-12">
                            <button id= "add_doc" name="add_doc" type="button" class="btn btn-info" style = "position:relative;  top:-34px; right: -350px;width: 75px;" onclick="AgregarOtroDoc(this)" disabled="disabled">Agregar</button>

                             <button id= "rem_doc" name="rem_doc" type="button" class="btn btn-info" style = "position:relative;  top:-68px; right: -430px;width: 75px;" onclick="RemoverOtroDoc(this)" disabled="disabled">Quitar</button>

                           </div>
                          </div>
<hr>

                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12" style = "position:relative;  top:-80px;"  name="div_tipo_doc_sec" id="div_tipo_doc_sec" hidden="true">
                            <label>Tipo de documento secundario:</label>
                            <select class="form-control select-picker" name="tipo_doc_sec" id="tipo_doc_sec" onchange="SelectTipoDocSec(this);" >
                              <option value="0">Seleccione:</option>
                              <option value="ID">ID</option>
                              <option value="RTN">RTN</option>
                              <option value="Pasaporte">Pasaporte</option>
                            </select>
                          </div>

                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12" style = "position:relative;  top:-80px;"  name="div_val_doc_sec" id="div_val_doc_sec" hidden="true">
                            <label>Valor del documento secundario:</label>
                            <input type="text" class="form-control" name="valor_doc_sec" id="valor_doc_sec" maxlength="20" placeholder="Ingrese valor del documento" disabled="disabled">
                          </div>

<hr>    
                           <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12" style = "position:relative;  top:-70px;">
                            <label>Tipo de contacto principal</label>
                            <select class="form-control select-picker" name="tipo_con_prin" id="tipo_con_prin" onchange="SelectTipoConPrin(this);">
                              <option value="0">Seleccione:</option>
                               <?php
                               
                               include "../config/Conglobal.php";
                               $query = $con -> query ("SELECT * FROM `tbl_tipo_contacto` ");
                                while ($DatoContacto = mysqli_fetch_array($query)) 
                                 {
                                     echo '<option value="'.$DatoContacto[id_tipo_contacto].'">'.$DatoContacto[descripcion].'</option>';
                                 }
                                 
                               ?>
                            </select>
                          </div>

                          <div class="form-group col-lg-5 col-xs-12" style = "position:relative;  top:-70px;">
                            <label>Valor del contacto principal:</label>
                            <input type="text" class="form-control" name="valor_con_prin" id="valor_con_prin" maxlength="30" placeholder="Ingrese valor del documento" disabled="disabled">
                            <button id= "add_con" name="add_con" type="button" class="btn btn-info" style = "position:relative;  top:-34px; right: -363px;width: 75px;" onclick="AgregarOtroCon(this)"disabled="disabled">Agregar</button>

                             <button id= "rem_con" name="rem_con" type="button" class="btn btn-info" style = "position:relative;  top:-34px; right: -365px;width: 75px;" onclick="RemoverOtroCon(this)"disabled="disabled">Quitar</button>
                          </div>
 <hr>
                         <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12" style = "position:relative;  top:-100px;" name="div_tipo_con_sec" id="div_tipo_con_sec" hidden="true">
                            <label>Tipo de contacto secundario</label>
                            <select class="form-control select-picker" name="tipo_con_sec" id="tipo_con_sec">
                              <option value="0">Seleccione:</option>
                               <?php
                               
                               include "../config/Conglobal.php";
                               $query = $con -> query ("SELECT * FROM `tbl_tipo_contacto` ");
                                while ($DatoContacto = mysqli_fetch_array($query)) 
                                 {
                                     echo '<option value="'.$DatoContacto[id_tipo_contacto].'">'.$DatoContacto[descripcion].'</option>';
                                 }
                                 
                               ?>
                            </select>
                          </div>

                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12" style = "position:relative;  top:-100px;" name="div_valor_con_sec" id="div_valor_con_sec" hidden="">
                            <label>Valor del contacto secundario:</label>
                            <input type="text" class="form-control" name="valor_con_sec" id="valor_con_sec" maxlength="20" placeholder="Ingrese valor del documento">
                          </div>
<hr>                          
                          <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12"  style = "position:relative;  top:-85px;">
                            <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i> Guardar</button>

                            <button class="btn btn-danger" onclick="cancelarformcn()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
                          </div>
<!-------------------------------Fin de contenido del FORM---------------------------------------------->                            
                          
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

document.getElementById("nombre_cn").addEventListener("keydown", teclear);
document.getElementById("valor_doc_prin").addEventListener("keydown", teclear);
document.getElementById("valor_doc_sec").addEventListener("keydown", teclear);
document.getElementById("valor_con_prin").addEventListener("keydown", teclear);
document.getElementById("valor_con_sec").addEventListener("keydown", teclear);


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