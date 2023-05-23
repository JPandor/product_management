<?php

class ProductsModel extends Database {
    //product info properties
    public $sku;
    public $name;
    public $price;
    public $type;
    public $description;
    public $descType;

    //product array from db
    public $productsArr;
    
    public function getProducts(){
        $sql = "SELECT * FROM productlist";
        $result = mysqli_query($this->getdbconnect(), $sql);
        $this->productArr = mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    public function deleteItems($sku){
        $deleteSku = $sku;
        foreach ($deleteSku as $item){
            $sql = "DELETE FROM productlist WHERE sku = '$item'";
            mysqli_query($this->getdbconnect(), $sql);
        }
    }

    public function setItemInfo($sku, $name, $price, $type, $description, $descType){
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->type = $type;
        $this->description = $description;
        $this->descType = $descType;
    }

    public function addItem(){
        $con = $this->getdbconnect();
        $stmt = mysqli_prepare($con, "INSERT INTO productlist (sku, name, price, type, description, descType) VALUES (?, ?, ?, ?, ?, ?)");
        mysqli_stmt_bind_param($stmt, "ssisss", $this->sku, $this->name, $this->price, $this->type, $this->description, $this->descType);
        mysqli_stmt_execute($stmt);
    }

}