<?php
include "../model/Supplier.php";
include "../model/Database.php";
class SupplierController
{
  public function __construct()
  {
  }
  public function insertSupplier($nameSupplier, $importTotal)
  {
    $db = new Database();
    $sql = "INSERT INTO supplier (nameSupplier, importTotal)
    VALUES ('$nameSupplier', '$importTotal')";
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
  //   $result = $db->fetch($sql); // Use the fetch method instead of select

  //   if ($result) {
  //     foreach ($result as $row) {
  //       $data[] = new Product(
  //         $row['idProduct'],
  //         $row['name'],
  //         $row['code'],
  //         $row['idSupplier'],
  //         $row['image'],
  //         $row['price'],
  //         $row['description'],
  //         $row['kind'],
  //         $row['machineType'],
  //         $row['color'],
  //         $row['origin'],
  //         $row['diameter'],
  //         $row['watchChain'],
  //         $row['guarantee']
  //       );
  //     }
  //     return $data;
  //   }
  //   return null;
  // }
}
