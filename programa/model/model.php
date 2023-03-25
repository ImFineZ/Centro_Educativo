<?php

require_once "db/conn.php";

class model
{

    private $ins_conexion;

    public function __construct()
    {
        $this->ins_conexion = new conn();
    }

    public function m_Validar_Login($obj_u)
    {

        $useremail = $this->ins_conexion->escapar($obj_u->get_useremail()); // Prevenir SQL injection
        $pass = $this->ins_conexion->escapar($obj_u->get_pass());

        $sql = "SELECT id_usuario, nombre, apellido, email, pass, tipo_usu, estado FROM usuarios WHERE email='$useremail' AND pass='$pass' LIMIT 1"; // Agregar LIMIT 1 para optimizar la consulta

        $rs = $this->ins_conexion->ejecutar($sql);

        if (!$rs) {
            // Manejo de errores
            return null;
        }

        $row = mysqli_fetch_assoc($rs);

        if (!$row) {
            // Las credenciales no son válidas
            return null;
        }

        // Asignar los valores obtenidos del registro a $obj_u

        $obj_u->set_id_usuario($row['id_usuario']);
        $obj_u->set_nombre($row['nombre']);
        $obj_u->set_apellido($row['apellido']);
        $obj_u->set_correo($row['correo']);
        $obj_u->set_tipo_usu($row['tipo_usu']);
        $obj_u->set_estado($row['estado']);

        return $obj_u;
    }
}

?>