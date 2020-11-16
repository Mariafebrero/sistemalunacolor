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
   VALUES('$id_usuario1','10',(select now()),'Entró','Entró a Mantenimiento de Compras','$usuario1',(select now()))";
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
                          <img class="imagen" width="250" heigth="250" src="../public/img/titulos/COMPRAS.svg">
                      
                      </center>
                      <!-- FIN IMAGEN TITULO -->
                            <button class="btn btn-success" id="btnagregar" <?php echo $permiso==false ? 'disabled' : '' ?>   onclick="mostrarform(true)"><i class="fa fa-address-book-o "></i> Agregar nueva Compra</button>
                 <form class="form-inline" method="POST" action="">
                            <div class="col-sm-12">
                            <div class="form-group">
                            <label id ="fi" name="fi">Fecha Inicio</label>
                          <input type="date"style="WIDTH: 300px; HEIGHT: 30px" class="form-control" name="fecha_inicio" id="fecha_inicio" >
                          <label id="ff" name ="ff">Fecha Fin</label>
                          <input type="date" style="WIDTH: 300px; HEIGHT: 30px" class="form-control" name="fecha_fin" id="fecha_fin" >
                          <button class="btn btn-primary"  id ="search"name="search"><span class="fa fa-search"></span></button> 
                          <a href="Compras.php" type="button" name ="Actualizar" id ="Actualizar"class="btn btn-success"><span class = "fa fa-sync-alt"><span></a>
                           
                           </div>
                           </div>
  
                        </form>







                        <div class="box-tools pull-right">
                        </div>

                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body table-responsive" id="listadoregistros">
                        <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                          <thead>
                          <th><center>Opciones</center></th>
                          <th><center>N° Factura</center></th>
                          <th><center>Proveedor</center></th>
                          <th><center>Total de Compra</center></th>
                            
                          </thead>
                          <tbody>                            
                          </tbody>
                          <tfoot>
                            <th><center>Opciones</center></th>
                          <th><center>N° Factura</center></th>
                          <th><center>Proveedor</center></th>
                          <th><center>Total de Compra</center></th>
                          </tfoot>
                        </table>
                    </div>
                    <div class="panel-body" id="formularioregistros">
                        <form name="formulario" id="formulario" method="POST">
                          
                     
                        <div class="row">

                           <div class="form-group col-lg-4 col-xs-12">
                            <label>Proveedor :</label>
                            <select  name="id_proveedor"  id="id_proveedor" class="form-control selectpicker" data-live-search="" >
                           <option value="0">Seleccione un Proveedor</option> 
                             <?php
                               
                               include "../config/Conglobal.php";
                               $query = $con -> query ("SELECT * FROM `tbl_proveedores` ");
                                while ($DatoContacto = mysqli_fetch_array($query)) 
                                 {
                                     echo '<option value="'.$DatoContacto[id_proveedor].'">'.$DatoContacto[nombre_proveedor].'</option>';
                                 }
                                 
                               ?>

                         
                            </select>

                          </div>
                     
                          
                        
                        
                      
                        <div class="form-group col-lg-4 col-xs-12">
                            <label>Tipo Comprobante:</label>
                            <select name="tipo_comprobante" id="tipo_comprobante" class="form-control selectpicker" required="">
                              <option value="0">Seleccione una opcion</option>
                               <option value="Boleta">Boleta</option>
                               <option value="Factura">Factura</option>
                            </select>
                          </div>

                         <div class="form-group col-lg-4 col-xs-12">
                            <label>Fecha de compra:</label>
                            <input type="date" class="form-control" name="fecha_hora" id="fecha_hora" required="">
                          </div>
                          </div> 

                  <div class="row">
                          <div class="form-group col-lg-2 col-md-2 col-sm-6 col-xs-12">
                            <label>N° Factura:</label>
                            <input type="text" class="form-control" name="nro_facturac" id="nro_facturac" maxlength="7" placeholder="">
                          </div>
                        
                         <div class="form-group col-lg-2 col-md-2 col-sm-6 col-xs-12">
                            <label>Descuento:</label>
                            <input type="text" class="form-control" name="descuento_c" id="descuento_c" maxlength="7" placeholder="">
                          </div>

                          <div class="form-group col-lg-2 col-md-2 col-sm-6 col-xs-12">
                            <label>Impuesto:</label>
                            <input type="text" class="form-control" name="impuesto_c" id="impuesto_c" maxlength="7" placeholder="">
                          </div>

                          <div class="form-group col-lg-2 col-md-2 col-sm-6 col-xs-12">
                            <label>Total:</label>
                            <input type="text" class="form-control" name="total_c" id="total_c" maxlength="7" placeholder="">
                          </div>
                        </div>

    <div class="row">
  

    <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-12">
   
      <label>Nombre Producto:</label> <br>
      <input id="Nombre_pro" class="form-control" type="text"   placeholder="" required=""><br>
     </div>

      <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-12">
      <label>Cantidad:</label> <br>
      <input id="Cantidad_compras" class="form-control" type="text" placeholder=""><br>
       </div>

     <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-12">
      <label>Precio:</label> <br>
      <input id="Precio_compras" class="form-control" type="text" placeholder=""> <br>
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

<script type="text/javascript" src="scripts/compras.js"></script>

<script>
  $('#cancelar').click(function() {
 
   var Table = document.getElementById("mytable");
   Table.innerHTML = "";

    
  });


$(document).ready(function(){
  $('#btnagregar').on('click',function(){
    if (this.checked) {
     $("#fecha_inicio").hide();
       $("#fecha_fin").hide();
         $("#search").hide();
         $("#fi").hide();
         $("#ff").hide();
          $("#Actualizar").hide();


    } else {
        $("#fecha_inicio").hide();
       $("#fecha_fin").hide();
         $("#search").hide();
         $("#fi").hide();
         $("#ff").hide();
          $("#Actualizar").hide();
         
       
         
         
      }  
  })
});

</script>
<script >
$(document).ready(function(){
  $('#cancelar').on('click',function(){
    if (this.checked) {
     $("#fecha_inicio").show();
       $("#fecha_fin").show();
         $("#search").show();
         $("#fi").show();
         $("#ff").show();
          $("#Actualizar").show();


    } else {
        $("#fecha_inicio").show();
       $("#fecha_fin").show();
         $("#search").show();
         $("#fi").show();
         $("#ff").show();
          $("#Actualizar").show();
         
       
         
         
      }  
  })
});


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