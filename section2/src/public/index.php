<?php

require_once '../Transaction.php';
// Classes and objects

$transaction = (new Transaction(100, 'Transaction 1')) 
    -> addTax(100) 
    -> discount(50);

var_dump($transaction -> getAmount());
