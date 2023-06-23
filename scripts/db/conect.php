<?php
    namespace App;
    class connect extends credentials{
        protected $con;
        function __construct(private $dsn = "mysql", private $port=0){
            parent::__construct();
            try{
                $this->con=new \PDO( $this->dsn.":host=".$this->__get('host').";dbname=".$this->__get('dbname').";user=". $this->username.";password=".$this->__get('password').";port=". $this->port);
                print_r("Se ha conectado un virus a su pc, despidase de system 32.");
            }catch(\PDOException $e){
                print_r($e->getMessage());
            }
        }
    }
?>