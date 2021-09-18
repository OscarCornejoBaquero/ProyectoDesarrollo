<?php

require_once ("Librerias/Objetos/ObjetoUsuario.php");
class Usuarios extends Controllers
{
    private ObjetoUsuario $objPersona;
    public function __construct()
    {
        session_start();
        parent::__construct();
    }
    public function usuarios(){
        $data['tag_page'] = "Usuarios";
        $data['page_title'] = "Administración de Usuarios";
        $data['page_name'] = "usuarios";
        $data['page_functions_js'] = "functions_usuarios.js";
        $this->views->getView($this,"usuarios",$data);
    }
    public function asignarDatos(){
        $this->objPersona = new ObjetoUsuario();
        $this->objPersona->setIdUsuario(intval($_POST['idUsuario']));
        $this->objPersona->setNombres($_POST['txtNombre']);
        $this->objPersona->setApellidos(ucwords($_POST['txtApellido']));
        $this->objPersona->setCedula(ucwords($_POST['txtIdentificacion']));
        $this->objPersona->setTelefono(intval($_POST['txtTelefono']));
        $this->objPersona->setCorreo(strtolower($_POST['txtEmail']));
        $this->objPersona->setIdRol(intval($_POST['listRolid']));
        $this->objPersona->setUsuario($_POST['txtUsuario']);
        $this->objPersona->setPass($_POST['txtPassword']);
        $this->objPersona->setEstado(intval($_POST['listStatus']));
    }
    public function setUsuario(){
        if($_POST){
            try {
                $this->asignarDatos();
                $this->model->insertUsuario($this->objPersona);
                $arrResponse = array('status' => true, 'msg' => 'Datos de usuario guardados correctamente.');
            }catch (Exception $e) {
                $arrResponse = array("status" => false, "msg" => $e->getMessage());
            }
            echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
        }
        die();
    }
    public function getUsuarios()
    {
        $arrData = $this->model->selectUsuarios();
        for ($i=0; $i < sizeof($arrData); $i++) {
            if($arrData[$i]['estado'] == 1)
            {
                $arrData[$i]['estado'] = '<span class="badge badge-success" style="background: green">Activo</span>';
            }else{
                $arrData[$i]['estado'] = '<span class="badge badge-danger" style="background: red">Inactivo</span>';
            }
            $arrData[$i]['options'] = '<div class="text-center">
				<button class="btn btn-info btn-sm btnViewUsuario" onClick="fntViewUsuario('.$arrData[$i]['id_usuario'].')" title="Ver usuario"><i class="far fa-eye"></i></button>
				<button class="btn btn-primary  btn-sm btnEditUsuario" onClick="fntEditUsuario('.$arrData[$i]['id_usuario'].')" title="Editar usuario"><i class="fas fa-pencil-alt"></i></button>
				<button class="btn btn-danger btn-sm btnDelUsuario" onClick="fntDelUsuario('.$arrData[$i]['id_usuario'].')" title="Eliminar usuario"><i class="far fa-trash-alt"></i></button>
				</div>';
        }
        echo json_encode($arrData,JSON_UNESCAPED_UNICODE);
        die();
    }
    /*Funcion que permite seleccionar un usuario del sistema */
    public function getUsuario(int $idpersona){
        $idusuario = intval($idpersona);
        if($idusuario > 0)
        {
            $arrData = $this->model->selectUsuario($idusuario);
            try {
                $arrResponse = array('status' => true, 'data' => $arrData);
            }catch (Exception $e){
                $arrResponse = array('status' => false, 'msg' => $e->getMessage());
            }
            //dep($arrResponse);
            echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
        }
        die();
    }
    public function editUsuario(){
        if($_POST){
            try {
                $this->asignarDatos();

                $this->objPersona->setPass($_POST['txtPassword']);
                $request_user = $this->model->updateUsuario($this->objPersona);
                $arrResponse = array('status' => true, 'msg' => 'Datos de Usuario Actualizados correctamente.');
            }catch (Exception $e) {
                $arrResponse = array("status" => false, "msg" => $e->getMessage());
            }
            echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
        }
        die();
    }

    /*Funcion que permite eliminar un usuario en el sistema */
    public function delUsuario()
    {
        if($_POST){
            $intIdpersona = intval($_POST['idUsuario']);
            try {
            $requestDelete = $this->model->deleteUsuario($intIdpersona);

                $arrResponse = array('status' => true, 'msg' => 'Se ha eliminado el usuario');
            }catch (Exception $e){
                $arrResponse = array('status' => false, 'msg' => $e->getMessage());
            }
            echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
        }
        die();
    }
    /*Funcion que permite recuperar la lista de usaurios para crear un colegio
    la llamada de esta funcion esta en el controlador colegiados*/
    public function getSelectUsuarios()
    {
        $htmlOptions = "";
        $arrData = $this->model->selectUsuarios();
        if(count($arrData) > 0 ){
            for ($i=0; $i < count($arrData); $i++) {
                if($arrData[$i]['status'] == 1 ){
                    $htmlOptions .= '<option value="'.$arrData[$i]['idpersona'].'">'.$arrData[$i]['nombres'].'</option>';
                }
            }
        }
        echo $htmlOptions;
        die();
    }
}