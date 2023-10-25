<?php
class CompanyDTO{
    public $id;
    public $photo; //string
    public $ruc;//string
    public $email;//string
    public $owner; //string
    public $address;//string

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id=$id;
    }

    public function getPhoto(){
        return $this->foto;
    }

    public function setPhoto($photo){
        $this->photo = $photo;
    }

    public function getRuc(){
        return $this->ruc;
    }

    public function  setRuc($ruc){
        $this->ruc = $ruc;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getOwner(){
        return $this->owner;
    }

    public function setOwner($owner){
        $this->owner = $owner;
    }

    public function getAddress(){
        return $this->address;
    }

    public function setAddress($address){
        $this->address = $address;
    }
}

?>