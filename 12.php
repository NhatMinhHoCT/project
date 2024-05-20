public function insertProduct($productData)
{
$db = new Database();
$columns = implode(", ", array_keys($productData));
$values = "'" . implode("', '", array_values($productData)) . "'";
$sql = "INSERT INTO product ($columns) VALUES ($values)";
return $db->execute($sql);
}

// Usage
$productData = [
'name' => 'Product Name',
'code' => 'ABC123',
'idSupplier' => 1,
'image' => 'product.jpg',
'price' => 99.99,
'description' => 'Product description',
'kind' => 'Category',
'machineType' => 'Automatic',
'color' => 'Red',
'origin' => 'USA',
'diameter' => 42,
'watchChain' => 'Leather',
'guarantee' => '2 years'
];

$productController->insertProduct($productData);



Use an object as a parameter:
Another approach is to create a Product class and pass an instance of that class as a parameter to the insertProduct method. This way, you can encapsulate all the product data within the class, making it easier to manage and maintain.
class Product
{
public $name;
public $code;
// ... (other properties)

public function __construct($name, $code, /* ... */)
{
$this->name = $name;
$this->code = $code;
// ... (initialize other properties)
}
}

public function insertProduct(Product $product)
{
$db = new Database();
$sql = "INSERT INTO product (name, code, idSupplier, image, price, description, kind, machineType, color, origin, diameter, watchChain, guarantee)
VALUES ('{$product->name}', '{$product->code}', '{$product->idSupplier}', '{$product->image}', '{$product->price}', '{$product->description}', '{$product->kind}', '{$product->machineType}', '{$product->color}', '{$product->origin}', '{$product->diameter}', '{$product->watchChain}', '{$product->guarantee}')";
return $db->execute($sql);
}

// Usage
$newProduct = new Product('Product Name', 'ABC123', /* ... */);
$productController->insertProduct($newProduct);