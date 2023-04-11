<?php
class model_alumno
{

    private $id_usuario;
    private $nombre;
    private $apellido;
    private $email;
    private $id_padre;
    private $tipo_usuario;

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

    public function get_tipo_usuario()
    {
        return $this->tipo_usuario;
    }
    public function set_tipo_usuario($n)
    {
        $this->tipo_usuario = $n;
    }
}
 ?>
