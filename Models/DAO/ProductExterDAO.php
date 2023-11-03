<?php
require_once '../Models/ConnectionDB.php';
require_once '../Models/DTO/ProductExterDTO.php';

class ProductExterDAO
{
    private $connection = null;

    public function __construct()
    {
        $this->connection = ConnectionDB::getInstanceConnection()->getConnection();
    }

    public function obtenerProductosExternos()
    {
        $query = "SELECT * FROM PRODUCT_F";
        $stmt = $this->connection->prepare($query);
        $stmt->execute();

        $productosExternos = array();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $productoExterno = new ProductExterDTO();
            $productoExterno->id = $row['id'];
            $productoExterno->code = $row['code'];
            $productoExterno->description = $row['description'];
            $productoExterno->price = $row['unitPrice'];
            $productosExternos[] = $productoExterno;
        }

        return $productosExternos;
    }

    public function obtenerProductoExternoPorNombre($nombreProductoExterno)
    {
        $query = "SELECT * FROM PRODUCT_F WHERE description = :description";
        $stmt = $this->connection->prepare($query);
        $stmt->bindParam(':description', $nombreProductoExterno);
        $stmt->execute();

        $productoExterno = null;

        if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $productoExterno = new ProductExterDTO();
            $productoExterno->id = $row['id'];
            $productoExterno->code = $row['code'];
            $productoExterno->description = $row['description'];
            $productoExterno->price = $row['unitPrice'];
        }

        return $productoExterno;

    }
}