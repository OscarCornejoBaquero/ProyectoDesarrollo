
<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?=base_url()?>home"><img src="<?=media()?>img/logo.png" alt="logo empresa" style="width: 7rem;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <li class="nav-item">
                            <a class="nav-link linkColor" aria-current="page" href="<?=base_url()?>home">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link linkColor" aria-current="page" href="<?=base_url()?>nosotros">Nosotros</a>
                        </li>

                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle linkColor" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Productos
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item linkColor" href="#">Mix de Bocaditos</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item linkColor" href="#">Dulce</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item linkColor" href="#">Sal</a></li>

                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle linkColor" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Tematicas y Eventos
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                                <li><a class="dropdown-item linkColor" href="#">Cumplea??os</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item linkColor" href="#">Graduaci??n</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item linkColor" href="#">Infantil</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link linkColor"aria-current="page" href="#" >Contactenos</a>
                        </li>

                                  </ul>
                <div class="d-flex">
                    <a class="login linkColor" href="<?=base_url()?>login">Iniciar Sesi??n <i class="fas fa-user iconoLogin" ></i></a>
                </div>

            </div>
        </div>
    </nav>
</div>

