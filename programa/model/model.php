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
        $useremail = $this->ins_conexion->escapar($obj_u->get_useremail()); // Prevenir SQL injection
        $pass = $this->ins_conexion->escapar($obj_u->get_pass());

        $sql = "SELECT id_usuario, nombre, apellido, email, pass, tipo_usuario, estado FROM usuarios WHERE email='$useremail' AND pass='$pass' LIMIT 1"; // Agregar LIMIT 1 para optimizar la consulta

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
        $obj_u->set_tipo_usu($row['tipo_usuario']);
        $obj_u->set_estado($row['estado']);

        return $obj_u;
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
        $arrUsu['acciones'] = "<img src='img/edit.png' onclick='fn_abrir_edicion(".$row['id_alumno'].");'><img src='img/delete.png' onclick='fn_borrar_usuario(".$row['id_usuario'].");'>";

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
        $arrUsu['acciones'] = "<img src='img/edit.png' onclick='fn_abrir_edicion(".$row['id_padre'].");'><img src='img/delete.png' onclick='fn_borrar_usuario(".$row['id_usuario'].");'>";

        $matUsuarios[] = $arrUsu;
      }
      return $matUsuarios;
    }
}

?>
