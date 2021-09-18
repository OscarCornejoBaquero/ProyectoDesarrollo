<?php


class PerfilUsuario extends Controllers
{
    public function __construct()
    {
        session_start();
        parent::__construct();
    }
    public function perfilUsuario(){
        $data['tag_page'] = " Perfil de Usuario ";
        $data['page_title'] = "Perfil del Usuario";
        $data['page_name'] = "usuario";
        $data['page_functions_js'] = "functions_Perfilusuarios.js";
        $this->views->getView($this,"perfilUsuario",$data);
    }
}