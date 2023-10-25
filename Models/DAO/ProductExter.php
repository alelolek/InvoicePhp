
<?php
require_once '../Models/ConnectionDB.php';

class InvoiceDAO {
    private $connection = null;

    public function __construct() {
        $this->connection = ConnectionDB::getInstanceConnection()->getConnection();
    }

    public function obtenerProductoExternoPorNombre($nombreProductoExterno)
    {
        $query = "SELECT id, description, price FROM ProductsExternos WHERE description = :nombreProductoExterno";
        $stmt = $this->connection->prepare($query);
        $stmt->bindParam(':nombreProductoExterno', $nombreProductoExterno);
        $stmt->execute();

        $productoExterno = null;

        if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $productoExterno = new stdClass();//crear clases genericas
            $productoExterno->id = $row['id'];
            $productoExterno->description = $row['description'];
            $productoExterno->price = $row['price'];
        }

        return $productoExterno;
    
    }
}