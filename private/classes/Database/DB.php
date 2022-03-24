<?php
namespace Database;

class DB
{
    private $conn;
    private $last_sql = '';
    public function __construct() {
        $this->conn = new \mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function __destruct() {
        $this->conn->close();
    }

    protected function getById(int $id, string $table_name) {
        $this->last_sql = "SELECT * FROM $table_name WHERE id=$id";
        $result = $this->conn->query($this->last_sql);

        return $result->fetch_assoc();
    }

    protected function selectAll(string $table_name) {
        $this->last_sql = "SELECT * FROM $table_name";
        $result = $this->conn->query($this->last_sql);

        return $result->fetch_all(MYSQLI_ASSOC);
    }


    public function getError() {
        return $this->conn->error. PHP_EOL .'SQL:' . $this->last_sql;
    }
}