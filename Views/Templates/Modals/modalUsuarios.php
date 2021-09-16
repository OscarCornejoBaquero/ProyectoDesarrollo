<!-- Modal de Usuarios -->
<div class="modal-dialog modal-xl">

</div>

<div class="modal fade" id="modalFormUsuario" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xl ">
        <div class="modal-content">
            <!--Div que cambia de color segun la accion -->
            <div class="modal-header headerRegister">
                <h5 class="modal-title" id="titleModal">Agregar Usuario</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="title">
                    <!-- Propiedades del Rol -->
                    <div class="tile-body">
                        <form id="formUsuario" name="formUsuario" class="form-horizontal">
                            <input type="hidden" id="idUsuario" name="idUsuario" value="">
                            <p class="text-primary">Todos los campos son obligatorios.</p>

                            <div class="row">
                                <div class="col-md-5">
                                <label for="txtIdentificacion">Cédula</label>
                                <input type="text" class="form-control" id="txtIdentificacion" name="txtIdentificacion" 
                                value="" >
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                <label for="txtNombre">Nombres</label>
                                <input type="text" class="form-control valid validText" id="txtNombre" name="txtNombre" >
                                </div>
                                <div class="col-md-6">
                                <label for="txtApellido">Apellidos</label>
                                <input type="text" class="form-control valid validText" id="txtApellido" name="txtApellido" >
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2">
                                    <label for="txtTelefono">Teléfono</label>
                                    <input type="text" class="form-control valid validNumber" id="txtTelefono" name="txtTelefono" onkeypress="return controlTag(event);">
                                </div>

                                <div class="col-md-4">
                                    <label for="txtEmail">Email</label>
                                    <input type="email" class="form-control valid validEmail" id="txtEmail" name="txtEmail" >
                                </div>
                                <div class="col-md-6">
                                    <label for="listRolid">Tipo usuario</label>
                                    <select class="form-control selectpicker" data-live-search="true" id="listRolid" name="listRolid"  >
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="txtUsuario">Usuario</label>
                                    <input type="text" class="form-control" id="txtUsuario" name="txtUsuario" >
                                </div>
                                <div class="col-md-6">
                                    <label for="txtPassword">Contraseña</label>
                                    <input type="password" class="form-control" id="txtPassword" name="txtPassword" >
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-5">
                                    <label for="listStatus">Status</label>
                                   <select class="form-control" id="listStatus" name="listStatus" >
                                    <option value="1">Activo</option>
                                    <option value="2">Inactivo</option>
                                </select>
                                </div>
                            </div>
                            <div class="title-footer" style="padding-top: 3rem;">
                                <button id="btnActionForm" class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i><span id="btnText">Guardar</span></button>&nbsp;&nbsp;&nbsp;
                                <button class="btn btn-danger" type="button" data-bs-dismiss="modal"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cerrar</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="modalViewUser" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-header header-primary">
        <h5 class="modal-title" id="titleModal">Datos del usuario</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <table class="table table-bordered">
          <tbody>
            <tr>
              <td>Cedula:</td>
              <td id="celCedula">654654654</td>
            </tr>
            <tr>
              <td>Nombres:</td>
              <td id="celNombre">Jacob</td>
            </tr>
            <tr>
              <td>Apellidos:</td>
              <td id="celApellido">Jacob</td>
            </tr>
            <tr>
              <td>Teléfono:</td>
              <td id="celTelefono">Larry</td>
            </tr>
            <tr>
              <td>Email (Usuario):</td>
              <td id="celEmail">Larry</td>
            </tr>
            <tr>
                <td>Rol de Usuario:</td>
                <td id="celRolUsuario">Larry</td>
            </tr>
            <tr>
              <td>Usuario:</td>
              <td id="celUsuario">Larry</td>
            </tr>
            <tr>
              <td>Estado:</td>
              <td id="celEstado">Larry</td>
            </tr>

          </tbody>
        </table>
      </div>
      <div class="modal-footer">
          <button class="btn btn-danger" type="button" data-bs-dismiss="modal"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cerrar</button>
      </div>
    </div>
  </div>
</div>

