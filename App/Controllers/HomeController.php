<?php
require_once __DIR__ . "/../Model/ProductModel.php";
class HomeController
{
    public function index()
    {   $Product=new ProductModel();
        $productlist=$Product->getAllProducts();
        include __DIR__ . '/../Views/Home/index.php';
    }
    
}
