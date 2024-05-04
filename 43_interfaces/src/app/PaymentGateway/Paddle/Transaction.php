<?php

declare(strict_types = 1);

namespace App\PaymentGateWay\Paddle;

use App\Enums\Status;

class Transaction{
    private float $amount;

    public function __construct(float $amount){
        $this->amount = $amount;
    }

    public function getAmount(){
        return $this->amount;
    }

    public function setAmount(float $amount){
        $this->amount = $amount;
    }

    public function process(){
        echo 'Processing $' . $this->amount . " transaction";
        $this->generateReceipt();

        $this->sendEmail();
    }

    private function generateReceipt(){

    }
    private function sendEmail(){

    }



  
};