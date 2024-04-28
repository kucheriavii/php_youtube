<?php

declare(strict_types = 1);

namespace App\PaymentGateWay\Paddle;

use App\Enums\Status;

class Transaction{

   
    private string $status = "pending";

    public function __construct(){
        $this->setStatus(Status::PENDING);
    }
    
    public function setStatus(string $status):self /*the same as Transaction*/{
        if (! isset(Status::ALL_STATUSES[$status])){
            throw new \InvalidArgumentException(('Invalid status'));
        }
        $this->status = $status;

        return $this;
    }
};