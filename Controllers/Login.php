<?php


class Login extends Controllers
{
    public function __construct()
    {
        session_start();
        if(isset($_SESSION['login']))
        {
            header('Location: '.base_url().'dashboard');
        }
        parent::__construct();
    }
    public function login()
    {
        $data['page_tag'] = "Sistema Administrativo Vero Cakes";
        $data['page_title'] = "Login Vero Cakes";
        $data['page_name'] = "login";
        $data['page_functions_js'] = "functions_login.js";
        $this->views->getView($this,"login",$data);
    }
    public function loginUser(){
        if($_POST){
            try {
                $this->validarCamposVacios($_POST['txtEmail'],$_POST['txtPassword']);
                $strUsuario  =  strtolower($_POST['txtEmail']);
                $strPassword = $_POST['txtPassword'];
                $requestUser = $this->model->loginUser($strUsuario, $strPassword);
                $this->validarUsuarioExiste($requestUser);
                $arrData = $requestUser;
                $this->validarStatus($arrData);
                $_SESSION['idUser'] = $arrData['id_usuario'];
                $_SESSION['login'] = true;

                $arrData = $this->model->sessionLogin($_SESSION['idUser']);
                $_SESSION['userData']= $arrData;


                $arrResponse = array('status' => true, 'msg' => 'ok');
            } catch (Exception $e) {
                $arrResponse = array('status' => false, 'msg' => $e->getMessage());
            }
            echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
        }
        die();
    }






    public function validarUsuarioExiste($requestUser){
        if(empty($requestUser)){
            throw new Exception('El usuario o la contraseña es incorrecto.');
        }
        return true;    }
    //Validar campos Vacios
    public function validarCamposVacios($user, $pass){
        if(empty($user) && empty($pass)){
            throw new Exception('Error de Datos de Usuario y Contraseña Vacios');
        }
        if(empty($user) ){
            throw new Exception('Error Datos de Usuario Vacios');
        }
        if(empty($pass) ){
            throw new Exception('Error Contraseña Vacia');
        }
        return true;      }
    //Validar el estado de la respuesta
    public function validarStatus($arrData){
        if($arrData['estado'] != 1){
            throw new Exception('Usuario inactivo');
        }
        return true;    }
    public function validarCampoEmail($user){
        if(empty($user)){
            throw new Exception('Escribir su correo Electronico para Reiniciar');
        }
        return true;      }
    public function validarVacio($arrData){
        if(empty($arrData)){
            throw new Exception('Usuario no existente');
        }
        return true;    }
    public function validarRespuestaUpdate($requestUpdate){
        if($requestUpdate == false){
            throw new Exception('No es posible realizar el proceso, intenta más tarde.');
        } return true;
    }
    public function validarVacioConfirm($params){
        if(empty($params)){
            throw new Exception('parametros');
        }
        return true;
    }
    public function validarCamposReset($id,$email,$token,$pass,$confirPass){
        if(empty($id) || empty($email) || empty($token) || empty($pass) || empty($confirPass)){
            throw new Exception('Error datos Vacios');
        }
        return true;
    }
    public function validarPassIguales($password, $passwordConfirm){
        if($password != $passwordConfirm){
            throw new Exception('Las contraseñas no son iguales.');
        }
        return true;
    }
    public function validarRespuestaReset($arrResponseUser){
        if(empty($arrResponseUser)){
            throw new Exception('Error de datos.');
        }
    }
    public function validarProcesoReset($requestPass){
        if($requestPass == false){
            throw new Exception('No es posible realizar el proceso, intente más tarde.');
        }
    }
}