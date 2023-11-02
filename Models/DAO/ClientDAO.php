<?php
require_once '../Models/ConnectionDB.php';
require_once '../Models/DTO/ClientDTO.php';

class ClientDAO {
    private $connection = null;

    public function __construct() {
        $this->connection = ConnectionDB::getInstanceConnection()->getConnection();
    }

    public function crear(ClientDTO $client)
    {
        $query = "INSERT INTO Cliente (RazonSocial, RUC, Email) VALUES (:razonSocial, :ruc, :email)";
        $stmt = $this->connection->prepare($query);
        $stmt->bindParam(':razonSocial', $client->razonSocial);
        $stmt->bindParam(':ruc', $client->ruc);
        $stmt->bindParam(':email', $client->email);
        $stmt->execute();
        echo "registrado con exito";
    }

   
    public function obtenerTodosLosClientes()
    {
        $query = "SELECT * FROM Cliente";
        $stmt = $this->connection->prepare($query);
        $stmt->execute();

        $clients = array();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $client = new ClientDTO();
            $client->id = $row['id'];
            $client->razonSocial = $row['RazonSocial'];
            $client->ruc = $row['RUC'];
            $client->email = $row['Email'];
            $clients[] = $client;
        }

        return $clients;
    }

     public function editar(ClientDTO $client)
    {
        $query = "UPDATE Cliente SET razonSocial = :razonSocial,ruc=:ruc, email = :email WHERE id = :id";
        $stmt = $this->connection->prepare($query);
        $stmt->bindParam(':id', $client->id);
        $stmt->bindParam(':razonSocial', $client->razonSocial);
        $stmt->bindParam(':email', $client->email);
        $stmt->bindParam(':ruc', $client->ruc);
        $stmt->execute();
    }


    public function obtenerPorId($id)
    {
        $query = "SELECT id, razonSocial, ruc, email FROM Cliente WHERE id = :id";
        $stmt = $this->connection->prepare($query);
        $stmt->bindParam(':id', $id);
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

    // public function obtenerPorRazonSocial($razonSocial)
    // {
    //     $query = "SELECT id, razonSocial, ruc, email FROM Client WHERE razonSocial = :razonSocial";
    //     $stmt = $this->connection->prepare($query);
    //     $stmt->bindParam(':razonSocial', $razonSocial);
    //     $stmt->execute();

    //     $client = null;

    //     if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    //         $client = new ClientDTO();
    //         $client->id = $row['id'];
    //         $client->razonSocial = $row['razonSocial'];
    //         $client->ruc = $row['ruc'];
    //         $client->email = $row['email'];
    //     }

    //     return $client;
    // }

}
?>