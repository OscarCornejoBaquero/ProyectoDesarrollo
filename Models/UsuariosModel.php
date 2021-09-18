<?php

require_once ("Librerias/Objetos/ObjetoUsuario.php");
class UsuariosModel extends Mysql
{
    private ObjetoUsuario $objetoUsuario;
    public function __construct()
    {
        parent::__construct();
    }
    public function selectUsuarios()
    {
        $sql = "SELECT u.id_usuario, u.nombres, u.apellidos, u.cedula, u.telefono, u.correo, u.usuario, u.password, u.estado,r.nombre_rol FROM usuarios u INNER JOIN rol r on u.id_rol = r.id_rol WHERE u.estado != 0";
        return $this->select_all($sql);
    }
    public function insertUsuario(ObjetoUsuario $objetoUsuario){
        try {
            $this->objetoUsuario = $objetoUsuario;
            $query_insert  = "INSERT INTO `usuarios`(`nombres`, `apellidos`, `cedula`, `telefono`, `correo`, `id_rol`, `usuario`, `password`, `estado`)
								  VALUES(?,?,?,?,?,?,?,?,?)";
            $arrData = array($this->objetoUsuario->getNombres(),
                $this->objetoUsuario->getApellidos(),
                $this->objetoUsuario->getCedula(),
                $this->objetoUsuario->getTelefono(),
                $this->objetoUsuario->getCorreo(),
                $this->objetoUsuario->getIdRol(),
                $this->objetoUsuario->getUsuario(),
                $this->objetoUsuario->getPass(),
                $this->objetoUsuario->getEstado());
            $request_insert = $this->insert($query_insert,$arrData);
            $return = $request_insert;
        }catch (Exception $e){
            $return = $e->getMessage();
        }
        return $return;
    }
    public function updateUsuario(ObjetoUsuario $objetoUsuario){
        $this->objetoUsuario = $objetoUsuario;
        try {

            if(empty($this->objetoUsuario->getPass()))
            {
                $sql = "UPDATE usuarios SET nombres=?, apellidos=?, cedula=?, telefono=?, correo=?, id_rol=?, password=?,  estado=? 
							WHERE id_usuario = '{$this->objetoUsuario->getIdUsuario()}' ";
                $arrData = array($this->objetoUsuario->getNombres(),
                    $this->objetoUsuario->getApellidos(),
                    $this->objetoUsuario->getCedula(),
                    $this->objetoUsuario->getTelefono(),
                    $this->objetoUsuario->getCorreo(),
                    $this->objetoUsuario->getIdRol(),
                    $this->objetoUsuario->getPass(),
                    $this->objetoUsuario->getEstado());
            }else{
                $sql = "UPDATE usuarios SET nombres=?, apellidos=?, cedula=?, telefono=?, correo=?, id_rol=?, estado=? 
							WHERE id_usuario = '{$this->objetoUsuario->getIdUsuario()}' ";
                $arrData = array($this->objetoUsuario->getNombres(),
                    $this->objetoUsuario->getApellidos(),
                    $this->objetoUsuario->getCedula(),
                    $this->objetoUsuario->getTelefono(),
                    $this->objetoUsuario->getCorreo(),
                    $this->objetoUsuario->getIdRol(),
                    $this->objetoUsuario->getEstado());
            }
            $request = $this->update($sql,$arrData);
        }catch (Exception $e){
            $request = $e->getMessage();
        }
        return $request;
    }


    public function selectUsuario(int $idpersona){
        $sql = "SELECT u.id_usuario, u.nombres, u.apellidos, u.cedula, u.telefono, u.correo, u.usuario, u.password, u.estado,r.nombre_rol ,r.id_rol 
                    FROM usuarios u 
                    INNER JOIN rol r 
                    on u.id_rol = r.id_rol 
                    WHERE u.id_usuario = '$idpersona'";
        return $this->select($sql);
    }
    /*Funcion que permite eliminar un usuario recibiendo un ID*/
    public function deleteUsuario(int $intIdpersona)
    {
        $sql = "DELETE FROM `usuarios` WHERE id_usuario = '$intIdpersona' ";
        return $this->delete($sql);
    }
}