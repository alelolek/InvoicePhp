<?php
require_once '../Models/ConnectionDB.php';
require_once '../Models/DTO/ClientDTO.php';

class CurrencyDAO {
    private $connection = null;

    public function __construct() {
        $this->connection = ConnectionDB::getInstanceConnection()->getConnection();
    }

    public function crear(ClientDTO $client)
    {
        $query = "INSERT INTO Client (razonSocial, ruc, email) VALUES (:razonSocial, :ruc, :email)";
        $stmt = $this->connection->prepare($query);
        $stmt->bindParam(':razonSocial', $client->razonSocial);
        $stmt->bindParam(':ruc', $client->ruc);
        $stmt->bindParam(':email', $client->email);
        $stmt->execute();
    }

    public function editar(ClientDTO $client)
    {
        $query = "UPDATE Client SET razonSocial = :razonSocial, email = :email WHERE ruc = :ruc";
        $stmt = $this->connection->prepare($query);
        $stmt->bindParam(':razonSocial', $client->razonSocial);
        $stmt->bindParam(':email', $client->email);
        $stmt->bindParam(':ruc', $client->ruc);
        $stmt->execute();
    }

    public function obtenerPorRuc($ruc)
    {
        $query = "SELECT id, razonSocial, ruc, email FROM Client WHERE ruc = :ruc";
        $stmt = $this->connection->prepare($query);
        $stmt->bindParam(':ruc', $ruc);
        $stmt->execute();

        $client = null;

        if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $client = new ClientDTO();
            $client->id = $row['id'];
            $client->razonSocial = $row['razonSocial'];
            $client->ruc = $row['ruc'];
            $client->email = $row['email'];
        }

        return $client;
    }

    public function obtenerPorRazonSocial($razonSocial)
    {
        $query = "SELECT id, razonSocial, ruc, email FROM Client WHERE razonSocial = :razonSocial";
        $stmt = $this->connection->prepare($query);
        $stmt->bindParam(':razonSocial', $razonSocial);
        $stmt->execute();

        $client = null;

        if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $client = new ClientDTO();
            $client->id = $row['id'];
            $client->razonSocial = $row['razonSocial'];
            $client->ruc = $row['ruc'];
            $client->email = $row['email'];
        }

        return $client;
    }

}
?>