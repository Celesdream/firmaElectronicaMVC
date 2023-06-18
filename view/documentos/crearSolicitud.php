<?php session_start(); ?>
<!DOCTYPE html>
<html dir="ltr" lang="es">

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
    <title>Crear Solicitud</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/materialpro-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <!-- Custom CSS -->
    <link href="../html/css/style.min.css" rel="stylesheet">
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
                    <a class="navbar-brand ms-4" href="../html/index.php">
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
                                href="../html/index.php" aria-expanded="false"><i class="mdi me-2 mdi-gauge"></i><span
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
                                    <li class="breadcrumb-item"><a href="../html/index.php">Home</a></li>
                                    <li class="breadcrumb-item"><a href="../../config/documentos.php">Solicitar Firmas Electrónicas</a></li>
                               
                                    <li class="breadcrumb-item active" aria-current="page">Crear Solicitud</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-md-6 col-4 align-self-center">

                    </div>
                </div>
            </div>
            <div class="container-fluid">
            <nav class="navbar navbar-expand-sm bg-danger navbar-dark">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="">Complete los campos de forma correcta, cualquier error podría significar la invalidez de su firma electrónica. </a>
                </li>
            </ul>
        </div>
    </nav>
            <div>
                <br>
                <br>
            </div>
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                
                   
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            <!--columnas-->
  <div class="row">
    <div class="col bg-muted"> FIRMANTE #1 (OBLIGATORIO)
    <input type="hidden" class="form-control" placeholder="Ruta del archivo BETA" id="path" name="path" value="<?php echo $_POST['ruta'] ?>" readonly />
        <input type="hidden" class="form-control" placeholder="ID DEL DOCUMENTO" id="id" name="id" value="<?php echo $_POST['id'] ?>" readonly />
        <input type="hidden" class="form-control" placeholder="ID DEL USUARIO" id="idUSER" name="idUSER" value="<?php echo $_SESSION['sessionidusuario'] ?>" readonly />
    <div class="form-group col-6 col-sm-12">
                <input type="hidden" class="form-control" placeholder="Ruta del archivo BETA" id="path" name="path" value="<?php echo $_POST['ruta'] ?>" readonly />
                <label for="nombre"></label>
                <input type="text" class="form-control" placeholder="Nombre Completo" id="nombre1" name="nombre1"  />
                <label for="portada"></label>
                <input type="mail" class="form-control" placeholder="Correo Electronico" id="correo1" name="correo1"  onblur="this.value=removeSpaces(this.value);"  />
                <label for="cvv"></label>
                <input type="text" class="form-control" placeholder="RFC con homoclave" id="rfc1" name="rfc1" maxlength="13" onblur="this.value=removeSpaces(this.value);" />
              </div>

    </div>
    <div class="col bg-light"> FIRMANTE #2
    <div class="form-group col-6 col-sm-12">
                    <label for="nombre"></label>
                    <input type="text" class="form-control" placeholder="Nombre Completo" id="nombre2" name="nombre2"  />
                    <label for="portada"></label>
                    <input type="mail" class="form-control" placeholder="Correo Electronico" id="correo2" name="correo2" onblur="this.value=removeSpaces(this.value);" />
                    <label for="cvv"></label>
                    <input type="text" class="form-control" placeholder="RFC con homoclave" id="rfc2" name="rfc2" maxlength="13" onblur="this.value=removeSpaces(this.value);" />
                  </div>

    </div>


    <div class="col bg-muted">FIRMANTE #3

    <div class="form-group">
                      <div class="form-group col-6 col-sm-12">
                        <label for="nombre"></label>
                        <input type="text" class="form-control" placeholder="Nombre Completo" id="nombre3" name="nombre3"  />
                        <label for="portada"></label>
                        <input type="mail" class="form-control" placeholder="Correo Electronico" id="correo3" name="correo3" onblur="this.value=removeSpaces(this.value);" />
                        <label for="cvv"></label>
                        <input type="text" class="form-control" placeholder="RFC con homoclave" id="rfc3" name="rfc3" maxlength="13" onblur="this.value=removeSpaces(this.value);" />
                      </div>

                 
    </div>
    
  </div>
  <div class="form-group"> Número de días máximos para firmar si no esta seguro ingrese un 0 o deje este campo en blanco
    (Máximo 998 días, si ingresas una cantidad mayor se establecerá la cantidad máxima)


    <input name="expira" id ="expira"
    onkeypress="return isNumeric(event)"
    oninput="maxLengthCheck(this)"
    type = "number"
    maxlength = "3"
    min = "1"
    max = "998" />
  </div>
   <!--columnas-->
  <button type="button" onclick="prepararDocumento()" class="btn btn-primary btn-block mb-3" id="final">
                        Solicitar Firma
                      </button>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer"> © Firma Electronica by <a href="https://www.mifiel.com/es/">mifiel</a>
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
</div>
</div>
</div>
<script src="../assets/plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../html/js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="../html/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../view/html/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../html/js/custom.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../js/tables.js"></script>
      <script src="/js/mifielSave.js"></script>
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

      <script>
  function maxLengthCheck(object) {
    if (object.value.length > object.maxLength)
      object.value = object.value.slice(0, object.maxLength)
  }
    
  function isNumeric (evt) {
    var theEvent = evt || window.event;
    var key = theEvent.keyCode || theEvent.which;
    key = String.fromCharCode (key);
    var regex = /[0-9]|\./;
    if ( !regex.test(key) ) {
      theEvent.returnValue = false;
      if(theEvent.preventDefault) theEvent.preventDefault();
    }
  }
</script>

<script language="javascript" type="text/javascript">
function removeSpaces(string) {
 return string.split(' ').join('');
}
</script>
</body>
</html>