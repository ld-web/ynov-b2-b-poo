<?php
require_once 'vendor/autoload.php';

use App\Email;
use App\IDisplayable;
use App\Shop\Product;
use App\Shop\ProductCirc;
use App\Shop\ProductRect;
use App\Shop\User;

try {
  $email = new Email('test@test.com');
} catch (InvalidArgumentException $e) {
  echo "Une erreur est survenue : " . $e->getMessage();
  exit;
}

var_dump($email);

$productRect = new ProductRect("Tableau", 600, "blablabla", 150, 95);
var_dump($productRect);
var_dump($productRect->getSurface());

$productCirc = new ProductCirc("Ballon", 20, "Mon beau ballon", 30);
var_dump($productCirc);
var_dump($productCirc->getSurface());

function displayProduct(Product $product): void
{
  echo $product->getName() . " - " . $product->getPrice() . "€ - " . $product->getSurface() . "<br />";
}

displayProduct($productRect);
displayProduct($productCirc);

/**
 * Displays a collection of given products
 *
 * @param Product[] $products
 * @return void
 */
function displayProducts(array $products): void
{
  foreach ($products as $product) {
    $product->display();
  }
}

displayProducts([$productRect, $productCirc]);

/**
 * Displays a collection of given products
 *
 * @param IDisplayable[] $items
 * @return void
 */
function display(array $items): void
{
  foreach ($items as $item) {
    $item->display();
  }
}


$user = new User('Bob', 'Dylan');

display([$productRect, $user, $productCirc]);
