<?php

class Model {
    private $db = null;

    public function __construct() {
        $mysqli = new mysqli("localhost", "root", "root", "kpvz3");
        if ($mysqli->connect_errno) {
            echo "Не удалось подключиться к MySQL: " . $mysqli->connect_error;
        } else {
            $this->db = $mysqli;
        }
    }

    public function getAll() {
        $res = $this->db->query("SELECT * FROM users");
        $row = array();
        while ($row[] = $res->fetch_assoc()) {
            //
        }
        return $row;
    }

    public function saveUser($nm, $sn) {
        $res = false;
        // INSERT INTO `users` (`name`, `surname`) VALUES ('Сидір', 'Сидоров');
        $res = $this->db->query("INSERT INTO `users` (`name`, `surname`) VALUES ('".$nm."', '".$sn."')");
        return $res;
    }
}