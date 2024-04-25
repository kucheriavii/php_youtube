<?php

declare(strict_types = 1);

namespace PaymentGateWay\Paddle;

class Transaction{
    public function __construct(){
        var_dump(new DateTime()); //DateTime custom from folder
        echo "<br>";
        var_dump(new \DateTime()); //global DateTime
        echo "<br>";
        var_dump(new \Notification\Email());
        echo "<br>";
        var_dump(explode(',',"Hello,world")); //global DateTime
        echo "<br>";
    }
};