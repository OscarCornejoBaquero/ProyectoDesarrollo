<?php

/**
 * Class ObjetoUsuario
 */
class ObjetoUsuario
{
    /**
     * @var int
     */
    private int $id_usuario;
    /**
     * @var string
     */
    private string $nombres;
    /**
     * @var string
     */
    private string $apellidos;
    /**
     * @var string
     */
    private string $cedula;
    /**
     * @var string
     */
    private string $telefono;
    /**
     * @var string
     */
    private string $correo;
    /**
     * @var int
     */
    private int $id_rol;
    /**
     * @var string
     */
    private string $usuario;
    /**
     * @var string
     */
    private string $pass;
    /**
     * @var int
     */
    private int $estado;

    /**
     * ObjetoUsuario constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return int
     */
    public function getIdUsuario(): int
    {
        return $this->id_usuario;
    }

    /**
     * @param int $id_usuario
     * @return ObjetoUsuario
     */
    public function setIdUsuario(int $id_usuario): ObjetoUsuario
    {
        $this->id_usuario = $id_usuario;
        return $this;
    }

    /**
     * @return string
     */
    public function getNombres(): string
    {
        return $this->nombres;
    }

    /**
     * @param string $nombres
     * @return ObjetoUsuario
     */
    public function setNombres(string $nombres): ObjetoUsuario
    {
        $this->nombres = $nombres;
        return $this;
    }

    /**
     * @return string
     */
    public function getApellidos(): string
    {
        return $this->apellidos;
    }

    /**
     * @param string $apellidos
     * @return ObjetoUsuario
     */
    public function setApellidos(string $apellidos): ObjetoUsuario
    {
        $this->apellidos = $apellidos;
        return $this;
    }

    /**
     * @return string
     */
    public function getCedula(): string
    {
        return $this->cedula;
    }

    /**
     * @param string $cedula
     * @return ObjetoUsuario
     */
    public function setCedula(string $cedula): ObjetoUsuario
    {
        $this->cedula = $cedula;
        return $this;
    }

    /**
     * @return string
     */
    public function getTelefono(): string
    {
        return $this->telefono;
    }

    /**
     * @param string $telefono
     * @return ObjetoUsuario
     */
    public function setTelefono(string $telefono): ObjetoUsuario
    {
        $this->telefono = $telefono;
        return $this;
    }

    /**
     * @return string
     */
    public function getCorreo(): string
    {
        return $this->correo;
    }

    /**
     * @param string $correo
     * @return ObjetoUsuario
     */
    public function setCorreo(string $correo): ObjetoUsuario
    {
        $this->correo = $correo;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdRol(): int
    {
        return $this->id_rol;
    }

    /**
     * @param int $id_rol
     * @return ObjetoUsuario
     */
    public function setIdRol(int $id_rol): ObjetoUsuario
    {
        $this->id_rol = $id_rol;
        return $this;
    }

    /**
     * @return string
     */
    public function getUsuario(): string
    {
        return $this->usuario;
    }

    /**
     * @param string $usuario
     * @return ObjetoUsuario
     */
    public function setUsuario(string $usuario): ObjetoUsuario
    {
        $this->usuario = $usuario;
        return $this;
    }

    /**
     * @return string
     */
    public function getPass(): string
    {
        return $this->pass;
    }

    /**
     * @param string $pass
     * @return ObjetoUsuario
     */
    public function setPass(string $pass): ObjetoUsuario
    {
        $this->pass = $pass;
        return $this;
    }

    /**
     * @return int
     */
    public function getEstado(): int
    {
        return $this->estado;
    }

    /**
     * @param int $estado
     * @return ObjetoUsuario
     */
    public function setEstado(int $estado): ObjetoUsuario
    {
        $this->estado = $estado;
        return $this;
    }

}