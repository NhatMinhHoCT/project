<?php
class Supplier
{
  public $idSupplier;
  public $nameSupplier;
  public $description;
  public $address;
  public $email;
  public $phone;

  public function __construct($idSupplier, $nameSupplier, $description, $address, $email, $phone)
  {
    $this->$idSupplier = $idSupplier;
    $this->nameSupplier = $nameSupplier;
    $this->description = $description;
    $this->address = $address;
    $this->email = $email;
    $this->phone = $phone;
  }
}
