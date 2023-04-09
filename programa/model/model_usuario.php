<?php
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
        return $this->useremail;
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
