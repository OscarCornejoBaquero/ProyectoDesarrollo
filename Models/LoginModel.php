<?php


class LoginModel extends Mysql
{
    public function __construct()
    {
        parent::__construct();
    }
    /*  Funcion que recibe el usuario y contraseña */
    public function loginUser(string $usuario, string $password)
    {
        $sql = "SELECT id_usuario,estado FROM usuarios WHERE 
					usuario = '$usuario' and 
					password = '$password' and 
					estado != 0 ";
        return $this->select($sql);
    }
    public function sessionLogin(int $iduser){

        //BUSCAR ROLE
        $sql = "SELECT u.id_usuario, 
                        u.nombres, 
                        u.apellidos, 
                        u.cedula, 
                        u.telefono, 
                        u.correo, 
                        u.usuario,  
                        u.estado,
                        r.nombre_rol ,r.id_rol 
                    FROM usuarios u 
                    INNER JOIN rol r 
                    on u.id_rol = r.id_rol 
                    WHERE u.id_usuario = '$iduser'";
        $request = $this->select($sql);
        return $request;
    }
}