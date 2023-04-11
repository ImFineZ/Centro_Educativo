<?php
class model_profesor
{

    private $id_usuario;
    private $nombre;
    private $apellido;
    private $email;

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
  }
 ?>
