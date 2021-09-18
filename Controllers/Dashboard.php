<?php


class Dashboard extends Controllers
{
    public function __construct()
    {
        session_start();
        //session_regenerate_id(true);

        parent::__construct();
    }
    public function dashboard(){
        $data['tag_page'] = " Sistema Administrativo ";
        $data['page_title'] = "Administración del Sitio";
        $data['page_name'] = "dashboard";
        $data['page_functions_js'] = "functions_dashboard.js";
        $this->views->getView($this,"dashboard",$data);
    }
    public function contarUsuarios()
    {
        $arrData = $this->model->cantidadUsuarios();
        try {
            $arrResponse = array('status' => true, 'data' => $arrData);
        }catch (Exception $e){
            $arrResponse = array('status' => false, 'msg' => $e->getMessage());
        }
        //dep($arrResponse);
        echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
        die();
    }
}