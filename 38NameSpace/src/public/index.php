<?php

require_once '../PaymentGeteway/Stripe/Transaction.php';
require_once '../PaymentGeteway/Paddle/CustomerProfile.php';
require_once '../PaymentGeteway/Paddle/DateTime.php';
require_once '../PaymentGeteway/Paddle/Notification/Email.php';
require_once '../PaymentGeteway/Paddle/Transaction.php';

//first method using full path
// var_dump(new \PaymentGateWay\Stripe\Transaction());


//second method. Using "use" keyword
use \PaymentGateWay\Paddle\Transaction;

var_dump(new Transaction());