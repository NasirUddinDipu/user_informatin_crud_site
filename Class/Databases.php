<?php

Class Databases {

    protected $connect;
    public $isconnect;

    //PDO Mysql Connection
    public function __construct($host = "localhost", $dbname = "codepinp_db", $username = "root", $password = "dipu") {
        $this->isconnect = TRUE;
        try {
            //PDO connecting to mysql databases and assign connection to protected $connect variable
            //so that every databases function can have that connection.
            $this->connect = new PDO("mysql:host={$host}; dbname={$dbname}", $username, $password);
            //setting attribute as an default errmode exception
            $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //setting attribute as an default fetch_mode to fetch_assoc so that databases 
            //all the function can use this as an default value, if you want to change this value 
            //you can just set inside of your databases function like get_row_from_databases()
            //and set return value as numaric array $result->fetch(PDO::FETCH_NUM);  
            $this->connect->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            $this->isconnect = false;
            throw new Exception($e->getMessage());
        }
    }

    //Mysql disconnect
    public function disconnect() {
        $this->isconnect = false;
        $this->connect = null;
    }

    //Gatting Row Form Databases
    public function get_row_from_databases($param = []) {
        try {
            $query = "SELECT * FROM user WHERE id=?";
            $result = $this->connect->prepare($query);
            $result->execute($param);
            return $result->fetch();
        } catch (PDOException $e) {
            throw new Exception($e->getMessage());
        }
    }

    //Gatting Rows Form Databases
    public function get_rows_from_databases($param = []) {
        try {
            $query = "SELECT * FROM user";
            $result = $this->connect->prepare($query);
            $result->execute($param);
            return $result;
        } catch (PDOException $e) {
            throw new Exception($e->getMessage());
        }
    }

    //Insert Row into Databases
    public function insertRow($param = []) {
        try {
            $query = "INSERT INTO user (username, firstname, lastname, email)
    VALUES (?, ?, ?, ?)";
            $result = $this->connect->prepare($query);
            if ($result->execute($param) === true) {
                header("Location:view_user.php");
            }
        } catch (PDOException $e) {
            throw new Exception($e->getMessage());
        }
    }

    //Update Row into Databases
    public function updateRow($param = []) {
        try {
            $query = "UPDATE user SET username=?,firstname=?,lastname=?,email=? WHERE id=?";
            $result = $this->connect->prepare($query);
            if ($result->execute($param) === true) {
                header("Location:view_user.php");
            }
        } catch (PDOException $e) {
            throw new Exception($e->getMessage());
        }
    }

    //Delete Row from Databases
    public function deleteRow($param = []) {
        try {
            $query = "DELETE FROM user WHERE id = ?";
            $result = $this->connect->prepare($query);
            if ($result->execute($param) === true) {
                header("Location:view_user.php");
            }
        } catch (PDOException $e) {
            throw new Exception($e->getMessage());
        }
    }

}
