<?php
include "../model/Product.php";
include "../model/Database.php";
class ProductController
{
  public function __construct()
  {
  }
  public function insertProduct($name, $code, $idSupplier, $image, $price, $description, $kind, $machineType, $color, $origin, $diameter, $watchChain, $guarantee)
  {
    $db = new Database();
    $sql = "INSERT INTO product (name, code, idSupplier, image, price, description, kind, machineType, color, origin, diameter, watchChain, guarantee)
    VALUES ('$name', '$code', '$idSupplier', '$image', '$price', '$description', '$kind', '$machineType', '$color', '$origin', '$diameter', '$watchChain', '$guarantee')";
    return $db->execute($sql);
  }
  // public function getProduct($search = null)
  // {
  //   $db = new Database();
  //   $data = array();
  //   $sql = "SELECT * FROM product WHERE 1=1";
  //   if ($search != null) {
  //     $sql .= " AND (name LIKE '%$search%' OR idSupplier LIKE '%$search%')";
  //   }
  //   $sql .= " ORDER BY idProduct DESC";
  //   $result = $db->select($sql);
  //   if ($result) {
  //     $row = $result->fetch_assoc();
  //     return
  //       $data[] = new Product(
  //         $row['idProduct'],
  //         $row['name'],
  //         $row['code'],
  //         $row['idSupplier'],
  //         $row['image'],
  //         $row['price'],
  //         $row['description'],
  //         $row['kind'],
  //         $row['machinetype'],
  //         $row['color'],
  //         $row['origin'],
  //         $row['diameter'],
  //         $row['watchchain'],
  //         $row['guarantee']
  //       );
  //   }
  //   return null;
  // }
  public function getProduct($search = null)
  {
    $db = new Database();
    $data = array();
    $sql = "SELECT * FROM product WHERE 1=1";
    if ($search != null) {
      $sql .= " AND (name LIKE '%$search%' OR idSupplier LIKE '%$search%')";
    }
    $sql .= " ORDER BY idProduct DESC";
    $result = $db->fetch($sql); // Use the fetch method instead of select

    if ($result) {
      foreach ($result as $row) {
        $data[] = new Product(
          $row['idProduct'],
          $row['name'],
          $row['code'],
          $row['idSupplier'],
          $row['image'],
          $row['price'],
          $row['description'],
          $row['kind'],
          $row['machineType'],
          $row['color'],
          $row['origin'],
          $row['diameter'],
          $row['watchChain'],
          $row['guarantee']
        );
      }
      return $data;
    }
    return null;
  }
}
