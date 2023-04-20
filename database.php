<?php

// Database Connectivity
class ConnectDatabase {
  private $host;
  private $username;
  private $password;
  private $database;

  public function __construct($host, $username, $password, $database) {
    $this->host = $host;
    $this->username = $username;
    $this->password = $password;
    $this->database = $database;
  }

  

  public function externalHelper() {
    // Code for external helper function
  }

  private static function internalHelper() {
    // Code for internal helper function
  }

  public function connect() {
    
    $conn = new mysqli($this->host, $this->username, $this->password, $this->database);

    
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
    $conn->close();
  }
}

//usage
$db = new ConnectDatabase("localhost", "root", "", "test");
$db->connect();
$db->externalHelper();





?>