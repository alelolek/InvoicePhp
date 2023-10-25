

<?php
require_once '../Models/ConnectionDB.php';
require_once '../Models/DTO/SaleDetailsDTO.php';

class InvoiceDAO {
    private $connection = null;

    public function __construct() {
        $this->connection = ConnectionDB::getInstanceConnection()->getConnection();
    }

    public function getListSaleDetails()
    {
        $query = "SELECT id, idProductoExterno, cantidad FROM SaleDetails";
        $stmt = $this->connection->prepare($query);
        $stmt->execute();

        $saleDetailsList = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $saleDetails = new SaleDetailsDTO();
            $saleDetails->id = $row['id'];
            $saleDetails->idProductoExterno = $row['idProductoExterno'];
            $saleDetails->cantidad = $row['cantidad'];
            $saleDetailsList[] = $saleDetails;
        }

        return $saleDetailsList;
    }

    public function listarPorId($id)
    {
        $query = "SELECT id, idProductoExterno, cantidad, idInvoice FROM SaleDetails WHERE id = :id";
        $stmt = $this->connection->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$row) {
            return null;
        }

        $saleDetails = new SaleDetailsDTO();
        $saleDetails->id = $row['id'];
        $saleDetails->idProductoExterno = $row['idProductoExterno'];
        $saleDetails->cantidad = $row['cantidad'];
        $saleDetails->invoice = $row['idInvoice'];


        return $saleDetails;
    }

    //SaleDetailDTO deberia contener IdInvoice , cosa que al mostrar una factura llaara
    //os detallesque ontengasn el id de la factura 

    public function listarPorIdInvoice($idInvoice)
    {
        $query = "SELECT id, idProductoExterno, cantidad, idInvoice FROM SaleDetails WHERE idInvoice = :idInvoice";
        $stmt = $this->connection->prepare($query);
        $stmt->bindParam(':idInvoice', $idInvoice);
        $stmt->execute();

        $saleDetailsList = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $saleDetails = new SaleDetailsDTO();
            $saleDetails->id = $row['id'];
            $saleDetails->idProductoExterno = $row['idProductoExterno'];
            $saleDetails->cantidad = $row['cantidad'];
            $saleDetails->invoice = $row['idInvoice'];
            $saleDetailsList[] = $saleDetails;
        }

        return $saleDetailsList;
    }
}

?>