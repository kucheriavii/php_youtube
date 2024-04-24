<?php

class Transaction{
    private float $amount = 15;
    private string $description = "No description";

    public function __construct(float $amount, string $description){
        $this -> amount = $amount;
        $this -> description = $description;
    }

    public function addTax(float $rate): Transaction {
        $this->amount+=$this->amount * $rate / 100;

        return $this;
    }

    public function discount(float $rate): Transaction {
        $this -> amount -= $this->amount * $rate / 100;

        return $this;
    }

    public function getAmount(){
       return $this -> amount; 
    }

    public function __destruct(){
        echo 'destruct ' . $this->description . "<br />";
    }
}