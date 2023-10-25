<?php
require_once '../Models/ConnectionDB.php';
require_once '../Models/DTO/PaymentMethodDTO.php';

class PaymentMethodDAO {
    private $connection = null;

    public function __construct() {
        $this->connection = ConnectionDB::getInstanceConnection()->getConnection();
    }

    public function listar()
    {
        $query = "SELECT * FROM PAYMENTMETHOD";
        $stmt = $this->connection->prepare($query);
        $stmt->execute();

        $paymentMethods = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $paymentMethod = new PaymentMethodDTO();
            $paymentMethod->id = $row['id'];
            $paymentMethod->description = $row['description'];
            $paymentMethods[] = $paymentMethod;
        }

        return $paymentMethods;
    }
    public function addPaymentMethod(PaymentMethodDTO $paymentMethod) {
        
        $query = "INSERT INTO PAYMENTMETHOD (description) VALUES (:description)";
        $stmt = $this->connection->prepare($query);
        $stmt->bindParam(':description', $paymentMethod->description);
        $stmt->execute();
    }
}