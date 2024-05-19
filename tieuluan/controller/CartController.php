<?php
session_start();

class CartController
{
  public function __construct()
  {
    // Check if the product data is received
    if (isset($_POST['name']) && isset($_POST['price']) && isset($_POST['quantity'])) {
      $productName = $_POST['name'];
      $productPrice = $_POST['price'];
      $productQuantity = $_POST['quantity'];

      // Call the method to store the product in the cart
      $this->storeProductInCart($productName, $productPrice, $productQuantity);

      // Redirect back to the product detail page
      header('Location: ../view/productdetail.php');
      exit();
    }
  }

  public function storeProductInCart($name, $price, $quantity)
  {
    // Check if the cart session variable exists
    if (!isset($_SESSION['cart'])) {
      $_SESSION['cart'] = array();
    }

    // Create a product array
    $product = array(
      'name' => $name,
      'price' => $price,
      'quantity' => $quantity
    );

    // Add the product to the cart session variable
    $_SESSION['cart'][] = $product;
  }
}
// Check if the product index is received
if (isset($_POST['index'])) {
  $index = $_POST['index'];

  // Check if the cart session variable exists and is not empty
  if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    // Remove the product from the cart session variable
    unset($_SESSION['cart'][$index]);

    // Reindex the cart array
    $_SESSION['cart'] = array_values($_SESSION['cart']);
  }
}

// Create an instance of the CartController
$cartController = new CartController();
