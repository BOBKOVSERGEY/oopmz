<?php

/*require_once __DIR__ . '/classes/ShopProduct.php';
require_once __DIR__ . '/classes/AddressManager.php';
require_once __DIR__ . '/classes/AddressManager.php';
*/
/*spl_autoload_register(function ($class) {
    $root = dirname(__DIR__); // get the parent directory
    $file = $root . '/' . str_replace('\\', '/', $class) . '.php';
    if (is_readable($file)) {
        require $root . '/' . str_replace('\\', '/', $class) . '.php';
    }
});*/

spl_autoload_register(function($className) {
    require __DIR__ . '/classes/' . $className . '.php';
});

$productOne = new ShopProduct(
        'OOP',
        'Зандстра',
        'Мэтт',
        1700
);
$productTwo = new ShopProduct(
        'JS NINJA',
        'Резиг',
        'Джон',
        2400
);

//$settings = simplexml_load_file(__DIR__ . '/resolve.xml');
//$manager = new AddressManager();
//$manager->outputAddresses((string)$settings);

$writer = new ShopProductWriter();



?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1><?php echo $productOne->getProducer(); ?></h1>
<p><?php echo $writer->write($productOne); ?></p>
</body>
</html>
