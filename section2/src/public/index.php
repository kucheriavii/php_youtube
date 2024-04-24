<?php

require_once '../Transaction.php';
require_once '../Customer.php';
require_once '../PaymentProfile.php';
// Classes and objects

$transaction = new Transaction(5, 'Test');

// $transaction->customer = new Customer();

echo $transaction->getCustomer()?->getPaymentProfile()?->id ?? 'foo';