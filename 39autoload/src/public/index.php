<?php
// require_once '../app/PaymentGateway/Stripe/Transaction.php';
// require_once '../app/Notification/Email.php';
// require_once "../app/PaymentGateway/Paddle/CustomerProfile.php";
// require_once "../app/PaymentGateway/Paddle/Transaction.php";

//ось ця птиблуда загружає відповідні файли
// spl_autoload_register(function($path){
//     $path_files = __DIR__ . '/../'.lcfirst(str_replace('\\', '/', $path)).'.php';
//     echo $path_files;
//     require $path_files;    
// });


// use App\PaymentGateWay\Paddle\Transaction;
require __DIR__ . '/../vendor/autoload.php'; //замість тисячі require_once
use App\PaymentGateWay\Stripe\Transaction;

$paddleTransaction = new Transaction();

$id = new \Ramsey\Uuid\UuidFactory();
echo $id -> uuid4();

var_dump($paddleTransaction);