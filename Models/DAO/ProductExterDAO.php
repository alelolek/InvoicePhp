
<?php
require_once '../Models/ConnectionDB.php';

class ProductExterDAO {
    private $connection = null;

    public function __construct() {
        $this->connection = ConnectionDB::getInstanceConnection()->getConnection();
    }

    public function obtenerProductoExternoPorNombre($nombreProductoExterno)
    {
        $query = "SELECT * FROM PRODUCT_F WHERE description = :description";
        $stmt = $this->connection->prepare($query);
        $stmt->bindParam(':description', $nombreProductoExterno);
        $stmt->execute();

        $productoExterno = null;

        if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $productoExterno = new stdClass();//crear clases genericas
            $productoExterno->id = $row['id'];
            $productoExterno->code = $row['code'];
            $productoExterno->description = $row['description'];
            $productoExterno->price = $row['unitPrice'];
        }

        return $productoExterno;
    
    }
}