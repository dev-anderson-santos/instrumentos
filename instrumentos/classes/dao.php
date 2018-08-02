<?php
require_once dirname(__FILE__). DIRECTORY_SEPARATOR .'autoload.php';
proteger_arquivo(basename(__FILE__));

class dao extends DB {

    public function __construct() {
        parent::__construct();
    }

    private function setParams($stmt, $params = array()) {
        foreach ($params as $key => $value) {
            $this->setParam($stmt, $key, $value);
        }
    }

    private function setParam($stmt, $key, $value) {
        $stmt->bindParam($key, $value);
    }

    public function query($raw_query, $params = array()) {
        $stmt = $this->con->prepare($raw_query);
        $this->setParams($stmt, $params);               
        
        $stmt->execute();

        return $stmt;
    }

    public function select($raw_query, $params = array()) : array {
        $stmt = $this->query($raw_query, $params);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}