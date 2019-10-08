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
$productOne = new BookProduct(
  'Javascript Ninja',
  'John',
  'Resing',
  '30',
  '400'
);

$productTwo = new CDProduct(
  'Классическая музыка. Лучшее',
  'Антонио',
  'Вивальди',
  '10.99',
  '60.33');

//$allProducts = new ShopProductWriter();
//$allProducts->addProduct($productOne);
//$allProducts->write();


?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>CD <?php echo $productTwo->getSummaryLine(); ?> цена <?php echo $productTwo->getPrice();?></h1>
<h1>BOOK <?php echo $productOne->getSummaryLine(); ?> цена <?php echo $productOne->getPrice();?></h1>
</body>
</html>
