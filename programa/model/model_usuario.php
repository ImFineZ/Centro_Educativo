<?php
class model_usuario
{

    private $id_usuario;
    private $nombre;
    private $apellido;
    private $email;
    private $pass;
    private $tipo_usuario;
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
    public function get_email()
    {
        return $this->email;
    }
    public function set_email($n)
    {
        $this->email = $n;
    }
    public function get_pass()
    {
        return $this->pass;
    }
    public function set_pass($n)
    {
        $this->pass = $n;
    }
    public function get_tipo_usuario()
    {
        return $this->tipo_usuario;
    }
    public function set_tipo_usuario($n)
    {
        $this->tipo_usuario = $n;
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
