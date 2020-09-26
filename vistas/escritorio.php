<?php
//Activamos el almacenamiento en el buffer
ob_start();
session_start();

//nombre new variable para secion
if (!isset($_SESSION["nombre_usuario"]))
{
  header("Location: login.html");
}
else
{
require 'header.php';

if ($_SESSION['escritorio']==1)
{

?>
<!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">        
        <!-- Main content -->
        <section class="content">
            <div class="row">


              
              
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
<!--<script type="text/javascript" src="scripts/categoria.js"></script>-->

<?php 
}
ob_end_flush();
?>
