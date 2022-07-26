<?php

interface DbConnection {
    public function connect();
}

class MySql implements DbConnection {
    public function connect() {
        return 'MySql Connected';
    }
}
class Oracle implements DbConnection {
    public function connect() {
        return 'Oracle Connected';
    }
}

class UsuarioDao {
    private $db;

    public function __construct(DbConnection $dbCon) {
        $this->db = $dbCon;
    }
}


$dbcon = new MySql();   // instanciação de MySql ou Oracle. etc.
$usuarioDao = new UsuarioDao($dbCon);
