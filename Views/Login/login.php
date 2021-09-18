<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Main CSS-->
    <link data-require="sweet-alert@*" data-semver="0.4.2" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.2/css/dataTables.bootstrap5.min.css"/>
    <link rel="stylesheet" href="<?=media()?>css/login.css">

    <title><?= $data['page_title']; ?></title>
</head>
<body>
<section class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container py-1 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
                <div class="card rounded-3 text-black">
                    <div class="row g-0">
                        <div class="col-lg-6">
                            <div class="card-body p-md-3 mx-md-4">

                                <div class="text-center">
                                    <img src="<?=media()?>img/logo.png" alt=""style="width: 7rem;">
                                    <h4 class="mt-1 mb-5 pb-1"><?= $data['page_tag']; ?></h4>
                                </div>

                                <form name="formLogin" id="formLogin" action="">
                                    <p>Ingrese sus Credenciales para Iniciar</p>

                                    <div class="form-outline mb-4">
                                        <input type="text" id="txtEmail" name="txtEmail" class="form-control" >
                                        <label class="form-label" for="txtEmail">Usuario</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" id="txtPassword" name="txtPassword" class="form-control" />
                                        <label class="form-label" for="txtPassword">Contraseña</label>
                                    </div>

                                    <div class="text-center pt-1 mb-5 pb-1">
                                        <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Iniciar Sesión</button>

                                        <a href="<?=base_url()?>home" class="btn btn-primary btn-block fa-lg gradient-custom-3 mb-3">Cancelar Inicio</a>
                                    </div>

                                </form>

                            </div>
                        </div>
                        <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                            <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                <h4 class="mb-4">Bienvenido al inicio de sesión del panel administrativo de Vero Cakes</h4>
                                <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    const base_url = "<?= base_url() ?>";
</script>
<!-- Essential javascripts for application to work-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.11.2/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.11.2/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!-- The javascript plugin to display page loading on top-->

<script src="<?= media(); ?>/js/<?= $data['page_functions_js']; ?>"></script>
</body>
</html>