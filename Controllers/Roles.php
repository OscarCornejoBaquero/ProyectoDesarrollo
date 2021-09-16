<?php


class Roles extends Controllers
{
    public function __construct()
    {
        parent::__construct();
    }
    public function roles(){
        $data['tag_page'] = "Roles";
        $data['page_title'] = "Administración de Roles de Usuarios";
        $data['page_name'] = "roles";
        $data['page_functions_js'] = "functions_roles.js";
        $this->views->getView($this,"roles",$data);
    }
    public function getSelectRoles()
    {
        $htmlOptions = "";
        $arrData = $this->model->selectRoles();
        if(count($arrData) > 0 ){
            for ($i=0; $i < count($arrData); $i++) {
                if($arrData[$i]['estado'] == 1 ){
                    $htmlOptions .= '<option value="'.$arrData[$i]['id_rol'].'">'.$arrData[$i]['nombre_rol'].'-'.$arrData[$i]['descripcion_rol'].'</option>';
                }
            }
        }
        echo $htmlOptions;
        die();
    }
}