<?php
    class Dbcon {
        public $servername;
        public $username;
        public $password;
        public $dbname;

        public function connect() {
            $this->servername = "localhost";
            $this->username = "root";
            $this->password = "";
            $this->dbname = "cedhosting";

            $conn = new mysqli($this->servername, $this->username,  $this->password, $this->dbname);
            return $conn;

        }
    }
?>