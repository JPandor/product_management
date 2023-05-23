<?php

class Home extends Controller{

    //home page 
    public function index() {
        $productObj = $this->model("ProductsModel");
        $productObj->getProducts();
        $this->view("home" , $productObj->productArr);
    }

    //add item page
    public function addItem(){
        $this->view("add-product");
    }
}