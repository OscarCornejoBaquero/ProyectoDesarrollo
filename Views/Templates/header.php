
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Grupo02
                                - BAQUE REYES CRISTI SELENE
                                - CORNEJO BAQUERO OSCAR LEONARDO
                                - VARGAS MENDEZ KIMBERLY SUGEY" />
    <meta name="copyright" content="Desarrollo Web - Software UG" />
    <meta name="keywords" content="Desarrollo Web, Reposteria, Pasteleria"/>
    <meta name="description" content="Sistema de Gestión para mejorar la venta de pasteleria y reposteria "/>

    <title><?= $data['tag_page']?></title>
    <link rel="stylesheet" href="<?=media()?>css/estilosIndex.css">
    <link rel="stylesheet" href="<?=media()?>css/estilosNosotros.css">
    <link rel="stylesheet" href="<?=media()?>css/style.css">
    <link rel="stylesheet" href="<?=media()?>css/main.css">
    <link data-require="sweet-alert@*" data-semver="0.4.2" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.2/css/dataTables.bootstrap5.min.css"/>

    <style type="text/css">
        .imagen-contacto {
            background-image:url("<?=media()?>/img/fondo2.jpg");
        }
    </style>
</head>
<body>
<div class="headerContenido">
<header class="site-navbar js-sticky-header site-navbar-target bg-light" role="banner">

    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light ">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?=base_url()?>home"><img src="<?=media()?>img/logo.png" alt="logo empresa" style="width: 7rem;"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <!--Ocultar si no es admin -->
                        <?php
                        if ($_SESSION['userData']['nombre_rol'] == "administrador" || $_SESSION['userData']['nombre_rol'] == "vendedor"){
                            ?>
                            <li class="nav-item">
                                <a class="nav-link linkColor"aria-current="page" href="<?=base_url()?>dashboard" >Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link linkColor"aria-current="page" href="<?=base_url()?>productos" >Productos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link linkColor "aria-current="page" href="<?=base_url()?>ventas" >Ventas</a>
                            </li>
                        <?php }?>
                        <?php
                        if ($_SESSION['userData']['nombre_rol'] == "administrador"){
                            ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle linkColor" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Administración
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item linkColor" href="<?=base_url()?>empresa">Empresa</a></li>
                                    <li><hr class="dropdown-divider">Usuarios</li>
                                    <li><a class="dropdown-item linkColor " href="<?=base_url()?>usuarios">Manejo de Usuarios</a></li>
                                    <li><a class="dropdown-item linkColor" href="<?=base_url()?>roles">Roles</a></li>
                                    <li><hr class="dropdown-divider">Productos</li>
                                    <li><a class="dropdown-item linkColor" href="<?=base_url()?>categoria">Categorias</a></li>

                                </ul>
                            </li>
                        <?php }?>

                        <!--Ocultar si no es admin -->
                    </ul>
                    <div class="d-flex col-md-3">
                        <ul class="nav nav-pills">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><?=$_SESSION['userData']['nombres']?> <i class="fas fa-user-circle"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="<?=base_url()?>perfilUsuario">Perfil</a></li>
                                    <li><a class="dropdown-item" href="<?=base_url()?>CerrarSesion">Cerrar Sesión</a></li>
                                </ul>
                            </li>

                        </ul>
                    </div>

                </div>
            </div>
        </nav>
    </div>


</header>
