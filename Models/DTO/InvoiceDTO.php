<?php
class InvoiceDTO{
    public $id;
    public $invoiceCode;  //F001-123  string
    public $issueDate; //date
    public $expirationDate; //date
    public $currency;  //tipo currencydto FK de Currency
    public $sellingPrice; //valor venta(precio sin igv); 82 -> suma d eprecios sin igv
    public $totalTax; //valor total del impuesto 18  double 
    public $totalAmount; // precoi o valor total 100 doucble
    public $paymentMethod; // tipo paymentMethodDto FK
    public $client; // tipo clientdto FK
    public $product; //tipo productdto FK
    public $qrInvoice; //qr es un string ejempo -> 
    public $invoiceDetails; //tipo  FK

    // Métodos set y get para $id
    public function setId($id) {
        $this->id = $id;
    }

    public function getId() {
        return $this->id;
    }

    // Métodos set y get para $invoiceCode
    public function setInvoiceCode($invoiceCode) {
        $this->invoiceCode = $invoiceCode;
    }

    public function getInvoiceCode() {
        return $this->invoiceCode;
    }

    // Métodos set y get para $issueDate
    public function setIssueDate($issueDate) {
        $this->issueDate = $issueDate;
    }

    public function getIssueDate() {
        return $this->issueDate;
    }

    // Métodos set y get para $expirationDate
    public function setExpirationDate($expirationDate) {
        $this->expirationDate = $expirationDate;
    }

    public function getExpirationDate() {
        return $this->expirationDate;
    }

    // Métodos set y get para $currency
    public function setCurrency($currency) {
        $this->currency = $currency;
    }

    public function getCurrency() {
        return $this->currency;
    }

    // Métodos set y get para $sellingPrice
    public function setSellingPrice($sellingPrice) {
        $this->sellingPrice = $sellingPrice;
    }

    public function getSellingPrice() {
        return $this->sellingPrice;
    }

    // Métodos set y get para $totalTax
    public function setTotalTax($totalTax) {
        $this->totalTax = $totalTax;
    }

    public function getTotalTax() {
        return $this->totalTax;
    }

    // Métodos set y get para $totalAmount
    public function setTotalAmount($totalAmount) {
        $this->totalAmount = $totalAmount;
    }

    public function getTotalAmount() {
        return $this->totalAmount;
    }

    // Métodos set y get para $paymentMethod
    public function setPaymentMethod($paymentMethod) {
        $this->paymentMethod = $paymentMethod;
    }

    public function getPaymentMethod() {
        return $this->paymentMethod;
    }

    // Métodos set y get para $client
    public function setClient($client) {
        $this->client = $client;
    }

    public function getClient() {
        return $this->client;
    }

    // Métodos set y get para $product
    public function setProduct($product) {
        $this->product = $product;
    }

    public function getProduct() {
        return $this->product;
    }

    // Métodos set y get para $qrInvoice
    public function setQrInvoice($qrInvoice) {
        $this->qrInvoice = $qrInvoice;
    }

    public function getQrInvoice() {
        return $this->qrInvoice;
    }

    
}


?>