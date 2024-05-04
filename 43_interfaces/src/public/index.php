<?php

use App\DB;
use App\PaymentGateWay\Paddle\Transaction;

require __DIR__ . '/../vendor/autoload.php'; //замість тисячі require_once

$transaction = new Transaction(25);
$transaction->setAmount(125);

$transaction->process();

// $reflectionProperty = new ReflectionProperty(Transaction::class, 'amount');
// $reflectionProperty->setAccessible(true);

// $reflectionProperty->setValue($transaction, 500);

// var_dump($reflectionProperty->getValue($transaction));
//$transaction->amount;

//ABSTRACTION

//nothing

//docker exec -it test_php bash -to run docker
//composer dump-autoload - to update autoloads


