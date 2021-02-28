<?php


// require MySQL Connection
require ('database/DBController.php');

// require Product Class
require ('database/Product.php');

// require Cart Class
require ('database/Cart.php');

// require Login Class
require ('database/Login.php');

// require Session Class
require ('database/Sessions.php');

// require Register Class
require ('database/Registration.php');

// DBController object
$db = new DBController();

// Product object
$product = new Product($db);
$product_shuffle = $product->getData();

// Cart object
$Cart = new Cart($db );

$lg=new Login($db);
$reg =new Registration($db);

// $ses = new Sessions();


