<?php


class RolesModel extends Mysql
{
    public function __construct()
    {
        parent::__construct();
    }


    public function selectRoles()
    {
        //creacion del query para solicitar los datos
        $sql = "SELECT * FROM rol WHERE estado !=0";

        $request = $this->select_all($sql);
        return $request;
    }
}