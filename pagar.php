<?php 

if(!isset($_POST['producto'], $_POST['precio'])){
    exit("Hubo un error");
}

use PayPal\Api\Payer;
use PayPal\Api\Item;

require 'config.php';

$producto = htmlspecialchars($_POST['producto']);
$precio = htmlspecialchars($_POST['precio']);
$precio = (float) $precio;
$envio = 0;
$total = $precio + $envio;

$compra = new Payer();
$compra->setPaymentMethod('paypal');

$articulo = new Item();
$articulo->setName($producto)
         ->setCurrency('USD')
         ->setQuantity(1)
         ->setPrice($precio);

echo $articulo->getPrice();
