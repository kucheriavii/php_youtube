<?php

use App\Enums\Status;
use App\PaymentGateWay\Paddle\Transaction;

require __DIR__ . '/../vendor/autoload.php'; //замість тисячі require_once

$transaction = new Transaction();

// echo $transaction::STATUS_PAID;

// echo $transaction::class;

$transaction -> setStatus(Status::PAID);

var_dump($transaction);

//docker exec -it test_php bash -to run docker
//composer dump-autoload - to update autoloads
