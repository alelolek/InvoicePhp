<?php
require_once '../Models/ConnectionDB.php';
require_once '../Models/DTO/CurrencyDTO.php';

class CurrencyDAO {
    private $connection = null;

    public function __construct() {
        $this->connection = ConnectionDB::getInstanceConnection()->getConnection();
    }

    public function getCurrencies() {   
        
        $query = "SELECT * FROM CURRENCY";
        $stmt = $this->connection->prepare($query);
        $stmt->execute();

        $currencies = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $currency = new CurrencyDTO();
            $currency->id = $row['id'];
            $currency->description = $row['description'];
            $currencies[] = $currency;
        }

        return $currencies;
    }

    public function CreateCurrency(CurrencyDTO $currency)
    {
        $query = "INSERT INTO CURRENCY (description) VALUES (:description)";
        $stmt = $this->connection->prepare($query);
        $stmt->bindParam(':description', $currency->description);
        $stmt->execute();
    }

}