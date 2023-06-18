<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, materialpro admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, materialpro admin lite design, materialpro admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Material Pro Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Detalles</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/materialpro-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <!-- Custom CSS -->
    <link href="../view/html/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
    <body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand ms-4" href="../view/html/index.php">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                        FIRMA ELECTRÓNICA

                        </b>

                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-white d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav d-lg-none d-md-block ">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white "
                                href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->


                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                               BIENVENIDO <?php echo $_SESSION['sessionNombre'] ?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown"></ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="../view/html/index.php" aria-expanded="false"><i class="mdi me-2 mdi-gauge"></i><span
                                    class="hide-menu">Dashboard</span></a></li>
                                    
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="../../config/documentos.php" aria-expanded="false">
                                <i class="mdi me-2 mdi-email-outline"></i><span class="hide-menu">Solicitar</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="../../config/status.php"" aria-expanded="false"><i class="mdi me-2 mdi-check-circle-outline"></i><span
                                    class="hide-menu">Estado</span></a></li>





                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <div class="sidebar-footer">
                <div class="row">
                    <div class="col-4 link-wrap">
                        <!-- item-->
                        <a class="link" data-toggle="tooltip" title="" data-original-title="Settings"><i
                                class=""></i></a>
                    </div>
                    <div class="col-4 link-wrap">
                        <!-- item-->
                        <a class="link" data-toggle="tooltip" title="" data-original-title="Email"><i
                                class=""></i></a>
                    </div>
                    <div class="col-4 link-wrap">
                        <!-- item-->
                        <a href="../../controller/cerrarSesion.php" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i
                                class="mdi mdi-power"></i></a>
                    </div>
                </div>
            </div>
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="page-title mb-0 p-0"></h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="../view/html/index.php">Home</a></li>
                                    <li class="breadcrumb-item"><a href="../config/status.php">Estado</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Detalles</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-md-6 col-4 align-self-center">

                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">

    
       

        <nav class="navbar navbar-expand-sm bg-info navbar-dark">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="">CONSULTA LA INFORMACIÓN DEL DOCUMENTO QUE SOLICITASTE PARA FIRMAR  </a>
                </li>
            </ul>
        </div>
    </nav>

<br>
<br>
<br>

          <form class="mb-3">

            <div class="form-group">
              <div class="form-group col-6 col-sm-12">
                <input type="hidden" class="form-control" placeholder="Ruta del archivo BETA" id="idDoc" name="idDoc" value= "<?php echo $_POST['id'] ?>"  readonly />
                <input type="hidden" class="form-control" placeholder="" id="widgetID" name="widgetID" value= "<?php echo $_POST['widgetID'] ?>"  readonly />
                <input type="hidden" class="form-control" placeholder="" id="docUser" name="docUser" value= "<?php echo $_POST['docUser'] ?>"  readonly />
              </div>

              <div class="row">
                <div class="form-group col-6 col-sm-12">
                  <label for="nombre">Nombre del Documento</label>
                  <input type="text" class="form-control" placeholder="N/A" id="nombre" name="nombre"  value= "<?php print_r( $name['nombre'] )?>" readonly/>
                </div>

              </div>

              <div class="form-group">
                <label for="portada">Estatus del Documento</label>
                <input type="text" class="form-control" placeholder="N/A" id="estado" name="estado"  value= "<?php
                if($state['status']=='pending')
                {
                        echo "PENDIENTE";
                }
                  else if($state['status']=='completed')
                  {
                          echo "COMPLETADO!!";
                  }
              
                ?>" readonly/>
              </div>

              <div class="form-group">
                <label for="cvv">Fecha de Vencimiento</label>
                <input type="text" class="form-control" placeholder="N/A" id="rfc" name="rfc"  value= "<?php print_r( $expires['fechaVencimiento'] )?>" readonly/>
              </div>


              <div class="form-group">
    <label for="exampleFormControlTextarea1">Firmantes</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" readonly cols="66">
    <?php 
    print_r($signers['signers']);
                echo "\n";
                echo "    ";
                echo( $signers2['signers'] );
                echo "\n";
                echo "    ";
                echo( $signers3['signers'] )?>

</textarea>

<label for="exampleFormControlTextarea1">Correos de los Firmantes</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" readonly cols="66">
    <?php 
    print_r($mail['mail']);
                echo "\n";
                echo "    ";
                echo( $mail2['mail'] );
                echo "\n";
                echo "    ";
                echo( $mail3['mail'] )?>

</textarea>

  </div>


              <label></label>




              <button type="button" onclick="location.href='status.php'" class="btn btn-outline-success btn-block mb-6" id="final">
              <span class="mdi mdi-keyboard-backspace">Regresar </span>
              </button>

              <button type="button" onclick="eliminar()" class="btn btn-outline-danger btn-block mb-6" id="n">
                
                <span class="mdi mdi-delete-variant">Eliminar </span>
              </button>
              
              <button type="button" onclick="infoDetallada()" class="btn btn-outline-warning btn-block mb-6" id="info">
              <span class="mdi mdi-information-outline">Mostrar información detallada </span>
              </button>

              <button type="button" onclick="download()" class="btn btn-outline-info btn-block mb-6" id="descargar">
              <span class="mdi mdi-download">Descargar Documento Firmado</span>
              </button>
          </form>

        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="crossorigin="anonymous"></script>
  <script src="../view/assets/plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../view/assets/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../view/html/js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="../view/html/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../view/html/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../view/html/js/custom.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../js/tables.js"></script>
    <script src="../js/eliminar.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>


</html>