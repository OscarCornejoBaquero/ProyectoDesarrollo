<?php


class DashboardModel extends Mysql
{
    public function __construct()
    {
        parent::__construct();
    }
    public function cantidadUsuarios()
    {
        $sql = "SELECT COUNT(*) usuariosActivos FROM `usuarios`";
        return $this->select($sql);
    }
}