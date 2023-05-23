<?php

abstract class Database {

    //localhost db details
    private $dbName = "products";
    private $host = "localhost";
    private $username = "root";
    private $password = "root";

    //webhost db details
    // private $dbName = "id19610277_products";
    // private $host = "localhost";
    // private $username = "id19610277_jp1308";
    // private $password = "r]=rc0}N&RIzeZRC";


    public function getdbconnect(){
        $conn = mysqli_connect($this->host, $this->username, $this->password, $this->dbName);
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit();
        }else {
            return $conn;
        }
    }

}