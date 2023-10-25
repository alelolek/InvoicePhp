<?php

class ClientDTO{
    public $id;
    public $razonSocial; //string
    public $ruc; //string
    public $email;//string

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getRazonSocial(){
        return $this->razonSocial;
    }

    public function setRazonSocial($razonSocial){
        $this->razonSocial = $razonSocial;
    }

    public function getRuc(){
        return $this->ruc;
    }

    public function setRuc($ruc){
        $this->ruc = $ruc;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }
}

?>