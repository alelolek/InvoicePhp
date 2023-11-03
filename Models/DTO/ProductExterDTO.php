<?php
class ProductExterDTO{
    public $id;
    public $code;
    public $description;
    public $unitPrice;

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }
    public function getCode(){
        return $this->code;
    }
    public function setCode($code){
        $this->code = $code;
    }
    public function getDescription(){
        return $this->description;
    }

    public function setDescription($description){
        $this->description = $description;
    }
    public function getUnitPrice(){
        return $this->unitPrice;
    }
    public function setUnitPrice($unitPrice){
        $this->unitPrice = $unitPrice;
    }
}

?>