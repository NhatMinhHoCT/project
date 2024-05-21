public function processImportDat(array $data, $check): array
{
    $updateData = [];
    $insertData = [];
    $validData = [];
    $invalidData = [];

    foreach ($data as $row) {
        $isValid = $this->validateRow($row, $data, $check);

        if ($isValid === true) {
            $validData[] = $row;
            $condition = $this->verifyRow($row[2], $row[3], $check);
            $this->processValidRow($row, $condition, $updateData, $insertData);
        } else {
            $invalidData[] = $row;
        }
    }

    return [
        'updateData' => $updateData,
        'insertData' => $insertData,
        'validcount' => count($validData),
        'invalidcount' => count($invalidData),
    ];
}

private function validateRow(array $row, array $data, $check): bool
{
    $name = $row[2] ?? null;
    $email = $row[3] ?? null;
    $capBac = $row[4] ?? null;

    if (($email === null) || ($name === null) || ($capBac === null)) {
        return false;
    }

    if (strlen($name) > 40 || strlen($email) > 40) {
        return false;
    }

    if (!$this->isValidDateCell($row[1])) {
        return false;
    }

    if ($this->isDuplicate($name, $email, $data)) {
        return false;
    }

    return true;
}

private function verifyRow(string $name, string $email, $check): string
{
    // Call the verify function and return the condition
    return verify($name, $email, $check);
}

private function processValidRow(array &$row, string $condition, array &$updateData, array &$insertData): void
{
    switch ($condition) {
        case '1':
        case '2':
            $row[5] = 2;
            $updateData[] = $row;
            break;
        case '3':
            $row[5] = 4;
            break;
        case '4':
            $row[5] = 7;
            $insertData[] = $row;
            break;
        case '6':
            $row[5] = 6;
            break;
    }
}

private function isDuplicate(string $name, string $email, array $data): bool
{
    foreach ($data as $row) {
        $currentName = $row[2] ?? null;
        $currentEmail = $row[3] ?? null;

        if ($name === $currentName && $email === $currentEmail) {
            return true;
        }
    }

    return false;
}



Here's what has been done:

The main processImportDat function has been simplified by extracting the logic into separate private methods.
The validateRow method checks if a row is valid based on the provided conditions (null values, length constraints, date validation, and duplicate check).
The verifyRow method calls the verify function and returns the condition.
The processValidRow method handles the valid rows based on the condition and updates the $updateData and $insertData arrays accordingly.
The isDuplicate method checks if a row is a duplicate based on the name and email.
This refactored version separates concerns and makes the code more readable and maintainable. Each method has a specific responsibility, and the main processImportDat function is now easier to understand and follow.



Avatar for honhatminh1510-cfizq
I make a project based on psr-4 standard, which mean i use namespace instead of include or require. But how can i include the header or footer code(these are php code that are used for pages) without using include or require


When working with namespaces and following the PSR-4 standard, you can't directly include or require files. Instead, you need to use autoloading to load the necessary classes and files.

Here's how you can include the header or footer code without using include or require:

Create a separate class for the header and footer:
Create two separate classes, one for the header and one for the footer, and place them in the appropriate directory structure according to your namespace and PSR-4 autoloading rules.
For example, let's say you have a namespace App\View and your header and footer classes are named Header and Footer, respectively. You would create two files:

src/View/Header.php
src/View/Footer.php
Inside these files, you would define the respective classes and their methods to render the header and footer HTML.

// src/View/Header.php
namespace App\View;

class Header
{
    public static function render()
    {
        // Your header HTML code here
    }
}



// src/View/Footer.php
namespace App\View;

class Footer
{
    public static function render()
    {
        // Your footer HTML code here
    }
}



Register the autoloader:
Make sure you have registered the autoloader for your project. If you're using Composer, it should be done automatically. If not, you can use the spl_autoload_register function to register your autoloader.

Use the classes in your view files:
In the view files where you want to include the header or footer, simply use the respective classes and call their render methods.

// view.php
<?php

// Autoload classes
require_once __DIR__ . '/../vendor/autoload.php';

// Use the Header and Footer classes
use App\View\Header;
use App\View\Footer;

// Render the header
Header::render();

// Your view content here

// Render the footer
Footer::render();



By following this approach, you can include the header and footer code without using include or require statements directly. The autoloader will take care of loading the necessary classes based on the namespace and file structure.

Note that this is just one way to handle this scenario. You could also explore other approaches, such as using a template engine or a rendering system that separates the presentation logic from the application logic.



Avatar for honhatminh1510-cfizq
But the header contain php code alongside the html. So if it is inside a function, some variable may not be seen and the function that need these variable went wrong cause they dont find them


You're right, if the header or footer contains PHP code that relies on variables or functions from the current scope, simply putting them inside a class method might not work as expected. In such cases, you can pass the required variables or objects as arguments to the class methods.

Here's an example of how you can handle this:

Create a separate class for the header and footer:
// src/View/Header.php
namespace App\View;

class Header
{
    public static function render($data = [])
    {
        // Extract the required variables from the $data array
        extract($data);

        // Your header HTML and PHP code here
        // You can now use the variables from $data
    }
}



// src/View/Footer.php
namespace App\View;

class Footer
{
    public static function render($data = [])
    {
        // Extract the required variables from the $data array
        extract($data);

        // Your footer HTML and PHP code here
        // You can now use the variables from $data
    }
}



Pass the required variables or objects to the class methods:
// view.php
<?php

// Autoload classes
require_once __DIR__ . '/../vendor/autoload.php';

// Use the Header and Footer classes
use App\View\Header;
use App\View\Footer;

// Prepare the data array with the required variables or objects
$data = [
    'variable1' => $value1,
    'variable2' => $value2,
    'object' => $someObject,
    // Add more variables or objects as needed
];

// Render the header
Header::render($data);

// Your view content here

// Render the footer
Footer::render($data);



In this approach, you create a $data array that contains all the variables or objects required by the header and footer. You then pass this $data array as an argument to the render methods of the Header and Footer classes.

Inside the render methods, you can use the extract function to extract the variables from the $data array and make them available in the current scope. This way, you can use these variables in your header and footer HTML and PHP code.

By passing the required data as arguments, you ensure that the header and footer have access to the necessary variables and objects, even when they are encapsulated within class methods.

This approach allows you to keep your header and footer code separate while still being able to use the required variables and objects from the current scope.



 