<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>JOYERIA BETY</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fa fa-user-circle"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Administrador</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <center>
                <a class="nav-link" href="index.html">
                 <i class="fa fa-book"></i>
                 <span>MODULO</span></a>
                    </center>
                </li>
         
            <!-- Divider -->
            <hr class="sidebar-divider">

               <!-- Modúlo cliente -->
             <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseclientes1"
                    aria-expanded="true" aria-controls="collapseTwo">
              <i class="fa fa-address-card" aria-hidden="true"></i>
                    <span>CLIENTES</span>
                </a>
                <div id="collapseclientes1" class="collapse" aria-labelledby="headingclientes1" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                         <a class="collapse-item" href="../cliente/registrar.php">Registrar</a  >
                         <a class="collapse-item" href="../cliente/registrar.php">Consultar</a>
                         <a class="collapse-item" onClick='abrirReporte()'>Reportes</a>
             
             
                    </div>
                </div>
            </li>

 <!-- Modúlo empleados -->
             <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseclientes2"
                    aria-expanded="true" aria-controls="collapseTwo">
              <i class="fa fa-user-plus" aria-hidden="true"></i>
                    <span>EMPLEADOS</span>
                </a>
                <div id="collapseclientes2" class="collapse" aria-labelledby="headingclientes2" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                         <a class="collapse-item" href="registrar.php">Registrar</a  >
                         <a class="collapse-item" href="empleados.php">Consultar</a>
                         <a class='collapse-item' onClick='abrirReporte()'>Reportes</a>
             
                    </div>
                </div>
            </li>

           

           
            <!-- Modúlo productos -->
             <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseclientes"
                    aria-expanded="true" aria-controls="collapseTwo">
                   <i class="fa fa-cart-plus"></i>
                    <span>PRODUCTOS</span>
                </a>
                <div id="collapseclientes" class="collapse" aria-labelledby="headingclientes" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                         <a class="collapse-item" href="../productos/registrar.php">Registrar</a>
                         <a class="collapse-item" href="../productos/producto.php">Consultar</a>
                         <a class="collapse-item" onClick='abrirReporte()'>Reportes</a>
                         
             
                    </div>
                </div>
            </li>


           <!-- Módulo de proveedores-->
           <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseempleados"
                    aria-expanded="true" aria-controls="collapseempleados">
                     <i class="fa fa-users"></i>
                    <span>PROVEEDORES</span>
                </a>
                <div id="collapseempleados" class="collapse" aria-labelledby="headingempleados" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                       <a class="collapse-item" href="../proveedor/registrar.php">Registrar</a>
                        <a class="collapse-item" href="../proveedor/proveedor.php">Consultar</a>
                        <a class="collapse-item" onClick='abrirReporte()'>Reportes</a>
               
                    </div>
                </div>
            </li>                                    

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->

                <!-- Topbar -->
                                
                   <center> 
<div class="container">
<img src="../img/vv.gif"></div>
</center>
            
            <center> 
<div class="container">
<img src="../img/OO.gif"></div>
</center> 
            


                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
    
                <!-- Begin Page Content -->
               
                
                <table  class="table table-bordered" border="0" cellspacing="0">
        <?php
               require_once("../bd/conexion.php");
        
               $result = mysqli_query($link, "SELECT * FROM empleados");
                    
                echo "<table class='table table-striped'>";
                echo
    "<tr>
                                      
                   <th class='success'>CURP</th> 
                   <th class='success'>FECHA</th>
                <th class='success'>DIRECCION</th>  
                <th class='success'>NOMBRE</th>
                  <th class='success'>APELLIDOS</th> 
                 <th class='success'>EMAIL</th>
                  <th class='success'>SEXO</th>
                 <th class='success'>TEL</th>
                
<th class='success'>MODIFICAR</th>  
<th class='success'>ELIMINAR</th> 
    </tr>";
                    
                    
                    
            while  (($row = mysqli_fetch_array($result))!=NULL)
            {

              
$id_empleados = $row['id_empleados'];
$curp = $row['curp'];
 $fecha_nac = $row['fecha_nac'];
$direccion = $row['direccion'];                
$nombre = $row['nombre'];
$apellidos = $row['apellidos'];
$email = $row['email'];
$sexo = $row['sexo'];
$telefono = $row['telefono'];




            
           
                                                
            echo "<tr>
            <td class='active'>$curp</td>
            <td class='active'>$fecha_nac</td>
            <td class='active'>$direccion</td>
            <td class='active'>$nombre</td>
            <td class='active'>$apellidos</td>
            <td class='active'>$email</td>
            <td class='active'>$sexo</td>
             <td class='active'>$telefono</td>


                             
            
           
                      
    <td class='active align='center'><center><a href='modificar.php?id_empleados=$id_empleados'><i class='fa fa-address-book fa-4'></i></a></center></td><td class='active' align='center'><a onClick='confirmar($id_empleados)'><i class='fa fa-times fa-4'></i></a></td>
              
            </tr>";    
            }
            echo "</table>";
            ?>                                                                                                                              
            </table> 
                
                
                <div class="container-fluid">

                    <!-- Content Row -->
                    <div class="row">

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                        
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                              
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">

                        </div>

                        <div class="col-lg-6 mb-4">

                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/chart-area-demo.js"></script>
    <script src="../js/demo/chart-pie-demo.js"></script>
        
        
  <script language="javascript"> 
    function confirmar(id_empleados){ 
    confirmar=confirm("\u00bfRealmente deseas eliminar el registro?"); 
    if (confirmar) 
    {
    document.location="eliminar_empleados.php?opcion="+id_empleados;
    }
    else  
    {
        location.reload();
    } 
    }
  </script>
   <script>
    function abrirReporte(){

    window.open('../reporte_empleados/index.php');
    }

  </script>

</body>

</html>