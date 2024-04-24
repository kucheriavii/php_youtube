<?php

class PaymentProfile{
    public int $id = 10;
    public function __construct(){
        $this->id = rand();
    }
}