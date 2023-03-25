<?php

require_once "libs/config_smarty.php";
require_once "model/model.php";
require_once "model/model_usuario.php";

class ControlException extends Exception
{
}

class Control
{
    private $obj_smarty;
    private $objModel;
    private $nombreApp = "Centro Educativo";

    public function __construct()
    {
        $this->nombreApp = "Centro Educativo";
        $this->objModel = new model();
        $this->obj_smarty = new config_smarty();
    }

    public function test()
    {
        $this->obj_smarty->setDisplay("frm_login.tpl");
        exit;
    }

    public function gestor_solicitudes()
    {
        try {
            if (isset($_REQUEST['accion'])) {
                $accion = $_REQUEST['accion'];
                switch ($accion) {
                    case 'validar_login':
                        $this->ctl_validar_login();
                        break;
                }
            } else {
                if (isset($_SESSION['USUARIO'])) {
                    $rs = unserialize($_SESSION['USUARIO']);

                    if ($rs->get_id_usuario() > 0) {
                        echo "Hola Entro al sistema";
                    } else {
                        $this->obj_smarty->setDisplay("frm_login.tpl");
                    }
                } else {
                    $this->obj_smarty->setDisplay("frm_login.tpl");
                }
            }
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function ctl_validar_login()
    {
        $obj_u = new model_usuario();
        $obj_u->set_useremail($_REQUEST['txt_usuario']);
        $obj_u->set_pass($_REQUEST['pwd_password']);

        
        $rs = $this->objModel->m_Validar_Login($obj_u);

        // Validar que el resultado de m_Validar_Login es un objeto de tipo model_usuario
        if ($rs instanceof model_usuario && $rs->get_id_usuario() > 0) {

            $_SESSION['USUARIO'] = serialize($rs);
            header("location:index.php");
        } else {
            echo "Usuario o pass Invalido";
            $this->obj_smarty->setDisplay("frm_login.tpl");
        }
    }




}

?>