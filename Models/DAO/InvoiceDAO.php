<?php
require_once '../Models/ConnectionDB.php';
require_once '../Models/DTO/InvoiceDTO.php';

class InvoiceDAO {
    private $connection = null;

    public function __construct() {
        $this->connection = ConnectionDB::getInstanceConnection()->getConnection();
    }

    public function getListInvoice($id)
{
    $query = "SELECT * FROM INVOICE WHERE id = :id";
    $stmt = $this->connection->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    $invoice = new InvoiceDTO();
    $invoice->id = $result['id'];
    $invoice->invoiceCode = $result['invoiceCode'];
    $invoice->issueDate = $result['issueDate'];
    $invoice->expirationDate = $result['expirationDate'];
    $invoice->qrInvoice = $result['qrInvoice'];
    $invoice->paymentMethod = $result['PAYMENTMETHOD'];
    $invoice->currency = $result['currency'];
    $invoice->client = $result['cliente'];
    $invoice->sellingPrice = $result['sellingPrice'];
    $invoice->totalTax = $result['totalTax'];
    $invoice->totalAmount = $result['totalAmount'];

    return $invoice;
}

}