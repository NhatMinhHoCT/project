<?php
class Database
{

  // specify your own database credentials
  private $servername = "localhost";
  private $dbname = "tieuluan";
  private $username = "root";
  private $password = "";
  private $conn;

  public function __construct()
  {
  }
  // get the database connection
  public function getConnection()
  {
    $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
    if ($this->conn->connect_error) {
      die("Connection failed:" . $this->conn->connect_error);
    }
    return $this->conn;
  }
  public function closeConnection()
  {
    if ($this->conn) {
      $this->conn->close();
    }
  }
  public function execute($sql)
  {
    $this->getConnection();
    if ($this->conn->query($sql) === true) {
      $result = true;
    } else {
      $result = false;
    }
    $this->closeConnection();
    return $result;
  }
  public function fetch($sql)
  {
    $this->getConnection();
    $result = $this->conn->query($sql);
    $data = [];
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        $data[] = $row;
      }
    }
    $this->closeConnection();
    return $data;
  }
  public function select($sql)
  {
    $this->getConnection();
    $result = $this->conn->query($sql);
    $this->closeConnection();
    return $result;
  }
}
