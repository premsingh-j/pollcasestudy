<?php

class Poll {

 private $dbconn; private $host = 'localhost'; private $database = 'poll';private $user = 'root'; private $pass = '';

    public function __construct() {

        $this->dbconn = mysqli_connect($this->host, $this->user, $this->pass); 

        if (!$this->dbconn) die("Unable to connect to MySQL: " . mysqli_error());

        if (!mysqli_select_db($this->dbconn,$this->database)) die("Unable to select database: " . mysqli_error());

    }

    private function execute_query($sql_stmt) {

        $result = mysqli_query($this->dbconn,$sql_stmt); 

        return !$result ? FALSE : TRUE;

    }

    public function select($sql_stmt) {

        $result = mysqli_query($this->dbconn,$sql_stmt);

        if (!$result) die("Database access failed: " . mysqli_error());

        $rows = mysqli_num_rows($result);

        $data = array();

        if ($rows) {

            while ($row = mysqli_fetch_array($result)) {

                $data[] = $row;

            }

        }

        return $data;

    }

    public function insert($sql_stmt) {

        return $this->execute_query($sql_stmt);

    }

    public function __destruct(){

        mysqli_close($this->dbconn);

    }

}

?>