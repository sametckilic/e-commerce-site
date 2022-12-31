<?php

namespace App\PaymentMethods;

class PaymentStrategyContext{

    private PaymentMethod $strategy;

    public function __construct(string $paymentMethod){

        $this->strategy = match($paymentMethod){
            "Creadit Cart" => new CreaditCartStrategy(),
            "Havele Eft" => new HaveleEftStrategy()
        }
    }

    public function pay(): string{

        return $this->strategy->pay();
    }

}