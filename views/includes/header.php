<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Orellana Matias">

    <title>El Guri Inventario</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link rel="icon" href="./assets/img/favicon.ico" type="image/x-icon">

    <link href="<?php echo RUTA . 'assets/'; ?>css/sb-admin-2.min.css" rel="stylesheet">
    <link href="<?php echo RUTA . 'assets/'; ?>css/snackbar.min.css" rel="stylesheet">
    <link href="<?php echo RUTA . 'assets/'; ?>css/iframe.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo RUTA . 'assets/'; ?>css/datatables.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo RUTA . 'assets/'; ?>css/dataTables.dateTime.min.css" />
</head>
<?php $mini = false;
if (!empty($_GET['pagina'])) {
    if ($_GET['pagina'] == 'ventas' || $_GET['pagina'] == 'compras') {
        $mini = true;
    }
}
?>

<body id="page-top" class="<?php echo ($mini) ? 'sidebar-toggled' : ''; ?>">

    <div id="wrapper">

        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion <?php echo ($mini) ? 'toggled' : ''; ?>" id="accordionSidebar">

            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="plantilla.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <img src="assets/img/logoo.jpg" alt="LOGO-JPG" width="45">
                </div>
                <div class="sidebar-brand-text mx-3">El Guri <sup>Inventario</sup></div>
            </a>

            <hr class="sidebar-divider my-0">

            <li class="nav-item <?php echo (empty($_GET['pagina'])) ? 'bg-gradient-info' : ''; ?>">
                <a class="nav-link" href="plantilla.php">
                    <i class="fas fa-chart-pie"></i>
                    <span>DASHBOARD</span></a> 
            </li>

            <hr class="sidebar-divider">

            <div class="sidebar-heading">
                PANEL MENU PRINCIPAL
            </div>
            <?php if (!empty($clientes)) { ?>
                <li class="nav-item <?php echo (!empty($_GET['pagina'])  && $_GET['pagina'] == 'clientes') ? 'bg-gradient-info' : ''; ?>">
                    <a class="nav-link" href="?pagina=clientes">
                        <i class="fas fa-fw fa-users"></i>
                        <span>CLIENTES</span>
                    </a>
                </li>
            <?php } ?>

            <?php if (!empty($proveedor)) { ?>
                <hr class="sidebar-divider d-none d-md-block">
                <li class="nav-item <?php echo (!empty($_GET['pagina'])  && $_GET['pagina'] == 'proveedor') ? 'bg-gradient-info' : ''; ?>">
                    <a class="nav-link" href="?pagina=proveedor">
                        <i class="fas fa-store"></i>
                        <span>PROVEEDORES</span>
                    </a>
                </li>
            <?php } ?>

            <?php if (!empty($usuarios)) { ?>
                <hr class="sidebar-divider d-none d-md-block">
                <li class="nav-item <?php echo (!empty($_GET['pagina'])  && $_GET['pagina'] == 'usuarios') ? 'bg-gradient-info' : ''; ?>">
                    <a class="nav-link" href="?pagina=usuarios">
                        <i class="fas fa-fw fa-user"></i>
                        <span>USUARIOS</span>
                    </a>
                </li>
            <?php } ?>

            <?php if (!empty($productos)) { ?>
                <hr class="sidebar-divider d-none d-md-block">

                <li class="nav-item <?php echo (!empty($_GET['pagina'])  && $_GET['pagina'] == 'productos') ? 'bg-gradient-info' : ''; ?>">
                    <a class="nav-link" href="?pagina=productos">
                        <i class="fas fa-fw fa-list"></i>
                        <span>PRODUCTOS</span>
                    </a>
                </li>
            <?php } ?>

            <?php if (!empty($nueva_compra) || !empty($compras)) { ?>
                <hr class="sidebar-divider d-none d-md-block">
                <li class="nav-item <?php echo (!empty($_GET['pagina'])  && $_GET['pagina'] == 'compras' || !empty($_GET['pagina'])  && $_GET['pagina'] == 'historial_compras') ? 'bg-gradient-info' : ''; ?>">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCompra" aria-expanded="true" aria-controls="collapseCompra">
                        <i class="fas fa-cart-plus"></i>
                        <span>COMPRAS</span>
                        <i class="fas fa-chevron-right float-right"></i>
                    </a>
                    <div id="collapseCompra" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <?php
                            if (!empty($nueva_compra)) { ?>
                                <a class="collapse-item" href="?pagina=compras">Realizar nueva compra</a>
                            <?php }
                            if (!empty($compras)) { ?>
                                <a class="collapse-item" href="?pagina=historial_compras">Compras realizadas</a>
                            <?php } ?>
                        </div>
                    </div>
                </li>
            <?php } ?>

            <hr class="sidebar-divider d-none d-md-block">
            <?php if (!empty($nueva_venta) || !empty($ventas)) { ?>
                <li class="nav-item <?php echo (!empty($_GET['pagina'])  && $_GET['pagina'] == 'ventas' || !empty($_GET['pagina'])  && $_GET['pagina'] == 'historial') ? 'bg-gradient-info' : ''; ?>">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseVenta" aria-expanded="true" aria-controls="collapseVenta">
                        <i class="fas fa-cash-register"></i>
                        <span>VENTAS</span>
                        <i class="fas fa-chevron-right float-right"></i>
                    </a>
                    <div id="collapseVenta" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <?php
                            if (!empty($nueva_venta)) { ?>
                                <a class="collapse-item" href="?pagina=ventas">Realizar Nueva venta</a>
                            <?php }
                            if (!empty($ventas)) { ?>
                                <a class="collapse-item" href="?pagina=historial">Historial ventas realizadas</a>
                            <?php } ?>
                        </div>
                    </div>
                </li>
            <?php } ?>

            <?php if (!empty($configuracion)) { ?>
                <hr class="sidebar-divider d-none d-md-block">

                <li class="nav-item <?php echo (!empty($_GET['pagina']) && $_GET['pagina'] == 'configuracion') ? 'bg-gradient-info' : ''; ?>">
                    <a class="nav-link" href="?pagina=configuracion">
                        <i class="fas fa-user-cog"></i>
                        <span>CONFIGURAR EMPRESA</span>
                    </a>
                </li>
            <?php } ?>
            <div class="text-center d-none d-md-inline mt-3">
                <button class="rounded-circle border-0" id="sidebarToggle"><i class="fas fa-chevron-circle-left text-gray-400"></i></button>
            </div>

        </ul>

        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">

                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>


                    <ul class="navbar-nav ml-auto">


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['nombre']; ?></span>
                                <img class="img-profile rounded-circle" src="<?php echo RUTA .  'assets/img/usuario.jpg'; ?>">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Salir Inventario
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>

                <div class="container-fluid">