<?php

require_once "db/conn.php";

class model
{

    private $ins_conexion;

    public function __construct()
    {
        $this->ins_conexion = new conn();
    }

    public function m_Validar_Login($obj_u) {
        $email = $this->ins_conexion->escapar($obj_u->get_email()); // Prevenir SQL injection
        $pass = $this->ins_conexion->escapar($obj_u->get_pass());

        $sql = "SELECT id_usuario, nombre, apellido, email, pass, tipo_usuario, estado FROM usuarios WHERE email='$email' AND pass='$pass' LIMIT 1"; // Agregar LIMIT 1 para optimizar la consulta

        $rs = $this->ins_conexion->ejecutar($sql);

        if (!$rs) {
            return null;
        }

        $row = mysqli_fetch_assoc($rs);

        if (!$row) {
            return null;
        }

        $obj_u->set_id_usuario($row['id_usuario']);
        $obj_u->set_nombre($row['nombre']);
        $obj_u->set_apellido($row['apellido']);
        $obj_u->set_tipo_usuario($row['tipo_usuario']);
        $obj_u->set_estado($row['estado']);

        return $obj_u;
    }

    public function m_ingresar_usuario($obj_usuario){
      $nombre = $obj_usuario->get_nombre();
      $apellido = $obj_usuario->get_apellido();
      $email = $obj_usuario->get_email();
      $pass = $obj_usuario->get_pass();
      $tipo_usuario = $obj_usuario->get_tipo_usuario();
      $estado = $obj_usuario->get_estado();

      $sql = "INSERT INTO usuarios(nombre, apellido, email, pass, tipo_usuario, estado) VALUES ('$nombre', '$apellido', '$email', '$pass', '$tipo_usuario', '$estado')";
      $this->ins_conexion->ejecutar($sql);

      return $obj_usuario;
    }

    public function m_ingresar_Alumno($obj_Alm){
      $nombre = $obj_Alm->get_nombre();
      $apellido = $obj_Alm->get_apellido();
      $email= $obj_Alm->get_email();
      $id_padre = 0;
      $tipo_usuario = $obj_Alm->get_tipo_usuario();

      $sql = "INSERT INTO alumnos(nombre, apellido, email, id_padre, tipo_usuario) VALUES ('$nombre', '$apellido', '$email', '$id_padre', '$tipo_usuario')";
      $this->ins_conexion->ejecutar($sql);

      return $obj_Alm;
    }

    public function m_ingresar_padre($obj_Padre){
      $nombre = $obj_Padre->get_nombre();
      $apellido = $obj_Padre->get_apellido();
      $email = $obj_Padre->get_email();

      $sql = "INSERT INTO padres(nombre, apellido, email) VALUES ('$nombre', '$apellido', '$email')";
      $this->ins_conexion->ejecutar($sql);

      return $obj_Padre;
    }

    public function m_ingresar_profesor($obj_Profesor){
      $nombre = $obj_Profesor->get_nombre();
      $apellido = $obj_Profesor->get_apellido();
      $email = $obj_Profesor->get_email();

      $sql = "INSERT INTO profesor(nombre, apellido, email) VALUES ('$nombre', '$apellido', '$email')";
      $this->ins_conexion->ejecutar($sql);

      return $obj_Profesor;
    }

    public function m_listar_usuarios(){
      $sql = "SELECT * FROM alumnos";
      $rs = $this->ins_conexion->ejecutar($sql);

      $matrizUsuarios = array();
      while($row = mysqli_fetch_assoc($rs)){
        $arrUsuarios = array();
        $arrUsu['id_alumno'] = $row['id_alumno'];
        $arrUsu['nombre']   = $row['nombre'];
        $arrUsu['apellido']   = $row['apellido'];
        $arrUsu['email']   = $row['email'];
        $arrUsu['id_padre']   = $row['id_padre'];
        $arrUsu['tipo_usuario']   = $row['tipo_usuario'];
        $arrUsu['acciones'] = "<img src='img/edit.png' onclick='fn_abrir_edicion(".$row['id_alumno'].");'><img src='img/delete.png' onclick='fn_borrar_usuario(".$row['id_alumno'].");'>";

        $matUsuarios[] = $arrUsu;
      }
      return $matUsuarios;
    }

    public function m_listar_padres(){
      $sql = "SELECT * FROM padres";
      $rs = $this->ins_conexion->ejecutar($sql);

      $matrizUsuarios = array();
      while($row = mysqli_fetch_assoc($rs)){
        $arrUsuarios = array();
        $arrUsu['id_padre'] = $row['id_padre'];
        $arrUsu['nombre']   = $row['nombre'];
        $arrUsu['apellido']   = $row['apellido'];
        $arrUsu['email']   = $row['email'];
        $arrUsu['acciones'] = "<img src='img/edit.png' onclick='fn_abrir_edicion(".$row['id_padre'].");'><img src='img/delete.png' onclick='fn_borrar_usuario(".$row['id_padre'].");'>";

        $matUsuarios[] = $arrUsu;
      }
      return $matUsuarios;
    }
}

?>
