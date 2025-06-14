<?php
class database {
    private $host = "172.31.22.43";
    private $username = "Patrick200626972";
    private $password = "hJQ58RlEST";
    private $database = "Patrick200626972";

    protected $conn;
    // Create function to make database connection
    public function __construct() {
        if(!isset($this->conn)) {
            $this->conn = mysqli_connect($this->host, $this->username, $this->password, $this->database);
            if(!$this->conn) {
                echo "<p>Connection failed: " . mysqli_connect_error() . "</p>";
                exit;
            }
        }
        return $this -> conn;
    }
}