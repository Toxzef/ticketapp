<?php

class Conexion {

    private $server = "den1.mysql5.gear.host:3306";
    private $username = "ticketapp";
    private $password = "tuytuy159753%";
    private $database = "ticketapp";
    private $link;

    function __construct() {
        $this->link = mysqli_connect($this->server, $this->username, $this->password, $this->database);
    }

    public function query($sql) {
        return $this->link->query($sql);
    }

}
