<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="../Plantilla/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Plantilla/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../Plantilla/bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="../Plantilla/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../Plantilla/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="../Plantilla/bower_components/morris.js/morris.css">
     <link rel="stylesheet" href="../Plantilla/bower_components/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet"
        href="../Plantilla/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="../Plantilla/bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="../Plantilla/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>


<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <header class="main-header">
            <a href="index2.html" class="logo">
                <span class="logo-mini"><b>A</b>LT</span>
                <span class="logo-lg"><b>ELECTRICOM</b></span>
            </a>
            <nav class="navbar navbar-static-top">
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>

            </nav>
        </header>
        <aside class="main-sidebar">
            <section class="sidebar">
                <div class="user-panel">
                </div>

                <ul class="sidebar-menu" id="menu" data-widget="tree">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="treeview">
                        <a href="Dashboard.php" class="menu-link">
                            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                        </a>

                    </li>
                    <li class="treeview">
                        <a href="Invoice.php" class="menu-link">
                            <i class="fa fa-th"></i> <span>Invoice</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="Client.php" >
                            <i class="fa fa-edit"></i> <span>Clients</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="Reports.php">
                            <i class="fa fa-table"></i> <span>Reports</span>
                        </a>
                    </li >
                    <li class="treeview">
                        <a href="Setting.php">
                            <i class="fa fa-th"></i> <span>Setting</span>
                        </a>
                    </li>
                    <li>
                        <a href="pages/mailbox/mailbox.html">
                            <i class="fa fa-envelope"></i> <span>Mailbox</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-share"></i> <span>Sign off</span>
                        </a>
                    </li>
                </ul>
        </aside>

        <div class="content-wrapper">


       

    <script>
   document.addEventListener('DOMContentLoaded', function() {
    const menuItems = document.querySelectorAll('#menu li');

    menuItems.forEach(function(item) {
      item.addEventListener('click', function() {
        // Eliminar 'active' de todos los elementos
        menuItems.forEach(function(item) {
          item.classList.remove('active');
        });

        // Agregar 'active' al elemento clicado
        this.classList.add('active');
      });
    });

    const links = document.querySelectorAll('#menu .treeview a');
    links.forEach(function(link) {
      link.addEventListener('click', function(e) {
        e.preventDefault(); // Evita el comportamiento predeterminado del enlace
        const href = this.getAttribute('href');
        if (href) {
          window.location.href = href;
        }
      });
    });
  });
</script>

    <script src="../Plantilla/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="../Plantilla/bower_components/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>
    
    <script src="../Plantilla/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../Plantilla/bower_components/raphael/raphael.min.js"></script>
    <script src="../Plantilla/bower_components/morris.js/morris.min.js"></script>
     <script src="../Plantilla/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
       <script src="../Plantilla/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="../Plantilla/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../Plantilla/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
    <script src="../Plantilla/bower_components/moment/min/moment.min.js"></script>
    <script src="../Plantilla/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="../Plantilla/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="../Plantilla/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <script src="../Plantilla/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="../Plantilla/bower_components/fastclick/lib/fastclick.js"></script>
    <script src="../Plantilla/dist/js/adminlte.min.js"></script>
    <script src="../Plantilla/dist/js/pages/dashboard.js"></script>
    <script src="../Plantilla/dist/js/demo.js"></script>
</body>

</html>