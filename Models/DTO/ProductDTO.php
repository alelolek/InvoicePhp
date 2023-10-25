<?php

class ProductDTO{
    public $id;
    public $code; //string
    public $unitPrice; //sin igv double
    public $description; //string

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

    public function getUnitPrice(){
        return $this->unitPrice;
    }

    public function setUnitPrice($unitPrice){
        $this->unitPrice = $unitPrice;
    }

    public function getDescription(){
        return $this->description;
    }

    public function setDescription($description){
        $this->description =$description;
    }

}


?>