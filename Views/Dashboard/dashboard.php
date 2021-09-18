<?php
headerAdmin($data);?>


<div class="container" style="padding-top: 3rem">
    <main class="app-content">
        <div class="app-title">
            <div class="row">
                <div class="col-md-3">
                    <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                        <div class="card-header" style="color: black;">Total de Usuarios Activos</div>
                        <div class="card-body">
                            <div>
                                <p style="font-size: 3rem;"><span  id="nameCard"></span> <i class="fas fa-users"></i></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-white bg-warning mb-3 " style="max-width: 18rem; ">
                        <div class="card-header" style="color: black;">Total de Productos Activos</div>
                        <div class="card-body">
                            <div>
                                <p style="font-size: 3rem; "><span  id="producAct"></span> <i class="fas fa-gifts"></i></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                        <div class="card-header" style="color: black;">Total de Ventas Realizadas</div>
                        <div class="card-body">
                            <div>
                                <p style="font-size: 3rem;"><span  id="ventasR"></span> <i class="fas fa-cash-register"></i></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                        <div class="card-header" style="color: black;">Categorias de Productos</div>
                        <div class="card-body">
                            <div>
                                <p style="font-size: 3rem;"><span  id="catPro"></span> <i class="fas fa-receipt"></i></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </main>
</div>

<div style="padding-bottom: 8rem">
</div>
<?php footerAdmin($data);?>
