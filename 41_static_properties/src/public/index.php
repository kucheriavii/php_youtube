<?php

use App\DB;
use App\PaymentGateWay\Paddle\Transaction;

require __DIR__ . '/../vendor/autoload.php'; //замість тисячі require_once

$transaction = new Transaction(25, 'Transaction 1');
$transaction = new Transaction(25, 'Transaction 1');
$transaction = new Transaction(25, 'Transaction 1');
$transaction = new Transaction(25, 'Transaction 1');
$transaction = new Transaction(25, 'Transaction 1');

var_dump(Transaction::getCount());


//docker exec -it test_php bash -to run docker
//composer dump-autoload - to update autoloads

$db = DB::getInstance([]);
$db = DB::getInstance([]);
$db = DB::getInstance([]);
$db = DB::getInstance([]);
$db = DB::getInstance([]);
$db = DB::getInstance([]);
$db = DB::getInstance([]);
$db = DB::getInstance([]);
$db = DB::getInstance([]);
