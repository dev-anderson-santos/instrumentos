<?php
require_once dirname(__FILE__). DIRECTORY_SEPARATOR .'autoload.php';
proteger_arquivo(basename(__FILE__));

abstract class DB extends PDO {
    public $host            = DB_HOST;
    public $user            = DB_USER;
    public $pw              = DB_PW;
    public $db_name         = DB_NAME;
    public $con             = NULL;
    public $data_set        = NULL;
    public $linhas_afetadas = -1;
    
    public function __construct() {
        
        $this->conecta();
    }

    public function destruct() {
        if($this->con != NULL) {
            $this->con = NULL;
        }
    }

    public function conecta() {
        try{
            $this->con = new PDO("mysql:dbname=".$this->db_name.";host=".$this->host, "$this->user", "$this->pw");            
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }

        return $this->con;
    }

    
}
