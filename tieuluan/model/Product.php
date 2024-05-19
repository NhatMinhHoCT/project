<?php
class Product
{
  public $idProduct;
  public $name;
  public $code;
  public $idSupplier;
  public $image;
  public $price;
  public $description;
  public $kind;
  public $machinetype;
  public $color;
  public $origin;
  public $diameter;
  public $watchchain;
  public $guarantee;
  public function __construct($idProduct, $name, $code, $idSupplier, $image, $price, $description, $kind, $machinetype, $color, $origin, $diameter, $watchchain, $guarantee)
  {
    $this->idProduct = $idProduct;
    $this->name = $name;
    $this->code = $code;
    $this->idSupplier = $idSupplier;
    $this->image = $image;
    $this->price = $price;
    $this->description = $description;
    $this->kind = $kind;
    $this->machinetype = $machinetype;
    $this->color = $color;
    $this->origin = $origin;
    $this->diameter = $diameter;
    $this->watchchain = $watchchain;
    $this->guarantee = $guarantee;
  }
}
