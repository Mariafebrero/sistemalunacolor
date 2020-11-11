<?php
if (strlen(session_id()) < 1) 
  session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Luna Color</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../public/css/font-awesome.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../public/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../public/css/_all-skins.min.css">
    <link rel="apple-touch-icon" href="../public/img/ICONOSLC.png">
    <link rel="shortcut icon" href="../public/img/favicon.ico">
    

   
    <!-- ICONOS fontawesome -->
  <link rel="stylesheet" type="text/css" href="../public/iconosfontawesome/css/all.css">
    

    <!-- DATATABLES -->
    <link rel="stylesheet" type="text/css" href="../public/datatables/jquery.dataTables.min.css">    
    <link href="../public/datatables/buttons.dataTables.min.css" rel="stylesheet"/>
    <link href="../public/datatables/responsive.dataTables.min.css" rel="stylesheet"/>
    

    <link rel="stylesheet" type="text/css" href="../public/css/bootstrap-select.min.css">

  </head>
  <body class="hold-transition skin-yellow sidebar-mini">
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="" class="logo" style="background-color: rgb(233,118,46)">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini" style="background-color: rgb(233,118,46)"><b>S</b>LC</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg" style="background-color: rgb(233,118,46)"><b> Sistema Luna Color</b></span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation" style="background-color: rgb(233,118,46)">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button" style="background-color: rgb(233,118,46)">
            <span class="sr-only" style="background-color: rgb(233,118,46)">Navegación</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu" style="background-color: rgb(233,118,46)">
            <ul class="nav navbar-nav" style="background-color: rgb(233,118,46)">
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                 <img src="../files/usuarios/<?php echo $_SESSION['imagen']; ?>" class="user-image" alt="User Image">
                  <span class="hidden-xs"><?php echo $_SESSION['nombre_usuario']; ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="../files/usuarios/<?php echo $_SESSION['imagen']; ?>" class="img-circle" alt="User Image">
                    <p>
                     <h3><?php echo $_SESSION['nombre_usuario']; ?></h3>
                     
                    </p>
                  
                  
                  <!-- Menu Footer-->
                  <li class="user-footer" >
                    <div class="pull-right">

                   
                    <a href="../ajax/usuario.php?op=salir" class="btn btn-danger"> <i class="far fa-times-circle"> Cerrar sesión</a></i>


                   

                    <!-- INCIO MODAL-->
                      
                    
                    <!-- FIN MODAL-->

                    </div>
                  </li>

                </ul>
              </li>
              
            </ul>
          </div>

        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar" style="background-color: rgb(61,61,61)">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar" style="background-color: rgb(61,61,61)">       
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu" style="background-color: rgb(61,61,61)">
            <li class="header" style="background-color: rgb(61,61,61)"></li>

            <?php 
            if ($_SESSION['id_rol']==2 || $_SESSION['id_rol']==3 || $_SESSION['id_rol']==4 )
            {
            echo 
            '<li>
              <a href="escritorio.php">
                <i class="fas fa-home"></i> <span> &nbsp;Escritorio</span>
              </a>
            </li>';
            }
            ?>


             <?php 
            if ($_SESSION['id_rol']==2 || $_SESSION['id_rol']==3 || $_SESSION['id_rol']==4 )
            {
            echo 
            ' <li class="treeview">
              <a href="#">
                <i class="fas fa-user"></i> <span> &nbsp; Cliente</span>

                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="nuevocliente.php"><i class="fa fa-circle-o"></i> Nuevo Cliente</a></li>
                
              </ul>
            </li>';
            }
            ?>


              <?php 
            if ($_SESSION['id_rol']==2 || $_SESSION['id_rol']==3 || $_SESSION['id_rol']==4 )
            {
            echo 
            '<li class="treeview">
              <a href="#">
                <i class="fas fa-shopping-cart"></i> <span> &nbsp; Pedido</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="pedido.php"><i class="fa fa-circle-o"></i> Pedido</a></li>
                 <li><a href="codcliente.php"><i class="fa fa-circle-o"></i> Cod. Cliente</a></li>
                <li><a href="productos.php"><i class="fa fa-circle-o"></i> Productos</a></li>
                <li><a href="carrito.php"><i class="fa fa-circle-o"></i> Carrito</a></li>
                <li><a href="cola.php"><i class="fa fa-circle-o"></i> Cola</a></li>
              </ul>
            </li>';
            }
            ?>


              <?php 
            if ($_SESSION['id_rol']==2 || $_SESSION['id_rol']==3 || $_SESSION['id_rol']==4 )
            {
            echo 
            '<li class="treeview">
              <a href="#">
                <i class="fas fa-file-invoice"></i> <span>  &nbsp; Factura</span>

                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="factura.php"><i class="fa fa-circle-o"></i> Factura</a></li>
              </ul>
            </li>';
            }
            ?>


              <?php 
            if ($_SESSION['id_rol']==2 || $_SESSION['id_rol']==3 || $_SESSION['id_rol']==4 )
            {
            echo 
            ' <li class="treeview">
              <a href="#">
                <i class="fas fa-dolly-flatbed"></i> <span>  &nbsp; Inventario</span>

                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="consultacompras.php"><i class="fa fa-circle-o"></i> Compras</a></li>
                 <li><a href="consultaventa.php"><i class="fa fa-circle-o"></i> Ventas</a></li>           
              </ul>
            </li>';
            }
            ?>

              <?php 
            if ($_SESSION['id_rol']==2 || $_SESSION['id_rol']==3 || $_SESSION['id_rol']==4 )
            {
            echo 
            '  <li class="treeview">
              <a href="#">
                <i class="fas fa-shopping-basket"></i> <span> &nbsp; Compras</span>

                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="compras.php"><i class="fa fa-circle-o"></i> Compras</a></li>           
              </ul>
            </li>';
            }
            ?>

              <?php 
            if ($_SESSION['id_rol']==2 || $_SESSION['id_rol']==3 || $_SESSION['id_rol']==4)
            {
             echo 
            ' <li class="treeview">
              <a href="#">
                <i class="fas fa-chart-bar"></i><span> &nbsp; Reporte</span>

                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="repmatprima.php"><i class="fa fa-circle-o"></i> Reporte Materia Prima</a></li>
                 <li><a href="repexpclientes.php"><i class="fa fa-circle-o"></i> Reporte Expedientes Clientes</a></li>                
              </ul>
            </li>';
            }
            ?>

             <?php 
            if ($_SESSION['id_rol']==2)
            {
            echo 
            '<li class="treeview">
              <a href="#">
                <i class="fas fa-tasks"></i><span> &nbsp; Administración</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="usuario.php"><i class="fa fa-circle-o"></i> Usuarios</a></li>
                <li><a href="backup.php"><i class="fa fa-circle-o"></i> Backup</a></li>
                 <li><a href="importar.php"><i class="fa fa-circle-o"></i> Restore</a></li>
                <li><a href="bitacora.php"><i class="fa fa-circle-o"></i> Bitácora</a></li>
              </ul>
            </li>';
            }
            ?>

              <?php 
            if ($_SESSION['id_rol']==2)
            {
            echo 
            '<li class="treeview">
              <a href="#">
                <i class="fas fa-shield-alt"></i><span> &nbsp; Seguridad</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="rol.php"><i class="fa fa-circle-o"></i> Roles</a></li>
                <li><a href="permiso.php"><i class="fa fa-circle-o"></i> Permisos</a></li>
                <li><a href="preguntas.php"><i class="fa fa-circle-o"></i> Preguntas de Seguridad</a></li>
                <li><a href="parametros.php"><i class="fa fa-circle-o"></i> Parámetros</a></li>          
              </ul>
            </li>';
            }
            ?>
       
            
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
