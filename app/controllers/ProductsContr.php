<?php

class ProductsContr extends Controller {

    //mass delete items function
    public function delete(){
        $deleteObj = $this->model("ProductsModel");
        if ($_POST['delete']){
            $deleteObj->deleteItems($_POST['delete']);
            header("Location: http://localhost/repos/products/public/");
        }else{
            header("Location: http://localhost/repos/products/public/");
        }
    }

    //add a furniture item 
    public function furniture(){
        if ($_POST['sku']){
            $productObj = $this->model("ProductsModel");
            $description = $_POST["height"] . "x" . $_POST["width"] . "x" . $_POST["length"];
            $productObj->setItemInfo($_POST["sku"], $_POST["name"], $_POST["price"], "Furniture" , $description, "Dimension (HxWxL)");
            $productObj->addItem();
            header("Location: http://localhost/repos/products/public/");
        }else {
            header("Location: http://localhost/repos/products/public/");
        }
    }

    //add a book item
    public function book(){
        if ($_POST['sku']){
            $productObj = $this->model("ProductsModel");
            $description = $_POST["weight"];
            $productObj->setItemInfo($_POST["sku"], $_POST["name"], $_POST["price"], "Book" , $description, "Weight (KG)");
            $productObj->addItem();
            header("Location: http://localhost/repos/products/public/");
        }else {
            header("Location: http://localhost/repos/products/public/");
        }
    }

    //add a dvd item
    public function dvd(){
        if ($_POST['sku']){
            $productObj = $this->model("ProductsModel");
            $description = $_POST["size"];
            $productObj->setItemInfo($_POST["sku"], $_POST["name"], $_POST["price"], "DVD" , $description, "Size (MB)");
            $productObj->addItem();
            header("Location: http://localhost/repos/products/public/");
        }else {
            header("Location: http://localhost/repos/products/public/");
        }
    }

}