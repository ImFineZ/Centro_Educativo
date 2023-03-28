<?php

class conn
{
    private $servername;
    private $useremail;
    private $password;
    private $dbname;
    private $link;

    public function __construct()
    {
        $this->servername = "localhost";
        $this->useremail = "root";
        $this->password = "";
        $this->dbname = "Centro_Educativo";
    }

    private function connect()
    {
        $this->link = new mysqli($this->servername, $this->useremail, $this->password, $this->dbname);
        if (!$this->link) {
            echo "Error: No se pudo conectara Mysql" . PHP_EOL;
            echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
            echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
            exit;
        }
    }

    public function ejecutar($sql)
    {
        $this->connect();
        $rs = $this->link->query($sql);
        return $rs;
    }

    public function escapar($str)
    {
        $this->connect();
        return $this->link->real_escape_string($str);
    }

    public function cerrarConn()
    {
        $this->link->close();
    }
}



?>