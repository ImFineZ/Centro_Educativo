<?php
/*
class model_usuario
{
private $id_usuario;
private $nombre;
private $apellido;
private $useremail;
private $pass;
private $tipo_usu;
private $estado;
public function __construct()
{
}
public function get_id_usuario()
{
return $this->id_usuario;
}
public function set_id_usuario($n)
{
if (!is_int($n)) {
throw new Exception("El id de usuario debe ser un numero entero");
}
$this->id_usuario = $n;
}
public function get_nombre()
{
return $this->nombre;
}
public function set_nombre($n)
{
if (!is_string($n)) {
throw new Exception("El nombre debe ser una cadena de caracteres");
}
$this->nombre = $n;
}
public function get_apellido()
{
return $this->apellido;
}
public function set_apellido($n)
{
if (!is_string($n)) {
throw new Exception("El apellido debe ser una cadena de caracteres");
}
$this->apellido = $n;
}
public function get_useremail()
{
return $this->useremail;
}
public function set_useremail($n)
{
if (!filter_var($n, FILTER_VALIDATE_EMAIL)) {
throw new Exception("El correo electrónico no es válido");
}
$this->useremail = $n;
}

public function get_pass()
{
return $this->pass;
}

public function set_pass($n)
{
if (!is_string($n)) {
throw new Exception("La contraseña debe ser una cadena de caracteres");
}
$this->pass = $n;
}

public function get_tipo_usu()
{
return $this->tipo_usu;
}
public function set_tipo_usu($n)
{
if (!is_string($n)) {
throw new Exception("El tipo de usuario debe ser una cadena de caracteres");
}
$this->tipo_usu = $n;
}

public function get_estado()
{
return $this->estado;
}
public function set_estado($n)
{
if (!is_string($n)) {
throw new Exception("El estado debe ser una cadena de caracteres");
}
$this->estado = $n;
}
}
*/
class model_usuario
{

    private $id_usuario;
    private $nombre;
    private $apellido;
    private $useremail;
    private $pass;
    private $tipo_usu;
    private $estado;

    public function __construct()
    {
    }

    public function get_id_usuario()
    {
        return $this->id_usuario;
    }

    public function set_id_usuario($n)
    {
        $this->id_usuario = $n;
    }

    public function get_nombre()
    {
        return $this->nombre;
    }
    public function set_nombre($n)
    {
        $this->nombre = $n;
    }
    public function get_apellido()
    {
        return $this->apellido;
    }
    public function set_apellido($n)
    {
        $this->apellido = $n;
    }
    public function get_useremail()
    {
        return $this->get_useremail();
    }
    public function set_useremail($n)
    {
        $this->useremail = $n;
    }
    public function get_pass()
    {
        return $this->pass;
    }
    public function set_pass($n)
    {
        $this->pass = $n;
    }
    public function get_tipo_usu()
    {
        return $this->tipo_usu;
    }
    public function set_tipo_usu($n)
    {
        $this->tipo_usu = $n;
    }
    public function get_estado()
    {
        return $this->estado;
    }
    public function set_estado($n)
    {
        $this->estado = $n;
    }
}
?>