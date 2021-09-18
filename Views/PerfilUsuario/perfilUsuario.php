<?php
headerAdmin($data);?>

<div class="container">
    <main class="app-content">
        <div class="app-title">
            <div class="row">
                <div class="col-md-4">
                    <div class="row">
                        <div  style="padding-top: 3rem">
                            <p class="estilo"> Perfil de Usuario</p>
                        </div>
                        <div class="col-md-12 container-img">
                            <img src="<?=media()?>img/perfilUsuario.png" alt="" style="width: 40%">
                        </div>
                        <div class="col-md-10" style="padding-top: 5rem">
                            <h5><?=$_SESSION['userData']['nombres'];?></h5>
                            <h6><?=$_SESSION['userData']['apellidos'];?></h6>

                        </div>
                    </div>

                </div>
                <div class="col-md-8" style="padding-top: 5rem">
                    <table class="table table-bordered" >
                        <tbody>
                        <tr>
                            <td>Cedula:</td>
                            <td id="celCedula"><?=$_SESSION['userData']['cedula'];?></td>
                        </tr>

                        <tr>
                            <td>Teléfono:</td>
                            <td id="celTelefono"><?=$_SESSION['userData']['telefono'];?></td>
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td id="celEmail"><?=$_SESSION['userData']['correo'];?></td>
                        </tr>
                        <tr>
                            <td>Rol de Usuario:</td>
                            <td id="celRolUsuario"><?=$_SESSION['userData']['nombre_rol'];?></td>
                        </tr>
                        <tr>
                            <td>Usuario:</td>
                            <td id="celUsuario"><?=$_SESSION['userData']['usuario'];?></td>
                        </tr>
                        <tr>
                            <td>Estado:</td>
                            <td id="celEstado"><?php
                                if($_SESSION['userData']['estado'] == 1){
                                    echo "Activo";
                                }else{
                                   echo "Inactivo";
                                }
                                ?></td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </main>

</div>
<div style="padding-bottom: 5rem">

</div>
<?php footerAdmin($data);?>