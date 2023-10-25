<?php
require_once '../Models/ConnectionDB.php';
require_once '../Models/DTO/ProductDDTO.php';

class ProductDAO {
    private $connection = null;

    public function __construct() {
        $this->connection = ConnectionDB::getInstanceConnection()->getConnection();
    }

    public function getListProduct() {
        $products = array();
        $sql = "SELECT Id, Description FROM Product";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $data = $statement->fetchAll(PDO::FETCH_ASSOC);
        foreach ($data as $item) {
            $product = new ProductDtO(); 
            $product->setId($item['Id']);
            $product->setCode($item['Code']);
            $product->setunitPrice($item['UnitPrice']);
            $product->setdescription($item['Description']);
            array_push($products, $product);
        }
        return $products;
    }

    public function getProductBydId($id) {
        $product = null;
        $sql = "SELECT Id, Description FROM Product WHERE Id = :id";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        $statement->execute();
        $data = $statement->fetch(PDO::FETCH_ASSOC);
        if ($data) {
            $product = $data["Description"];
        }
        return $product;
    }
}
?>
