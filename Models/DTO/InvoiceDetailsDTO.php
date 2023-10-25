<?php
class SaleDetailsDTO{
    //el precio de los productos hata aca son sin igv
    // tener en cuenta que al hacer la factura tambien va valorTotal=amount*PriceProduct(sin igv)
    public $id;
    public $product; // fk tabla products
    public $amount; // double

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getProduct(){
        return $this->product;
    }

    public function setProduct($product){
        $this->product = $product;
    }

    public function getAmount(){
        return $this->amout;
    }

    public function setAmount($amount){
        $this->amount = $amount;
    }

}

?>