<?php

    namespace App;

    use PDO;
    use PDOException;

    class connect extends credenciales{
        private $conn;
        public function __construct(private $dsn = "mysql", private $port = 3306) {
            try {
                $this->conn = new \PDO($this->dsn.":host=".$this->__get('host').";dbname=".$this->__get('dbname').";user=".$this->username.";password=".$this->__get('password').";port=".$this->port);
                print_r("conectado bien felicitaciones");
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Error de conexión: " . $e->getMessage());
            }
        }

        public function getConnection() {
            return $this->conn;
        }
    }

?>