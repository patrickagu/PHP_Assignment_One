<?php
require_once("database.php");
// This class is an extension of the database class and will execute the database queries
class crud extends database {
    public function __construct() {
        parent::__construct();
    }
    // This function will collect the data from the db
    public function getData($query) {
        $result = $this->conn->query($query);
        if($result === false){
            return false;
        }
        $rows = array();
        while($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
        return $rows;
    }
    public function execute($query) {
        $result = $this->conn->query($query);
        if($result === false){
            echo "<p>Error in executing query</p>";
            return false;
        }else{
            return true;
        }
    }
    public function escape_string($string) {
        return $this->conn->real_escape_string($string);
    }
}