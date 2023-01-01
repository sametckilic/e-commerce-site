<?php

namespace App\PaymentMethods;
use App\PaymentMethods\PaymentMethod;
use App\PaymentMethods\CreditCardStrategy;
use App\PaymentMethods\HavaleEftStrategy;


class PaymentStrategyContext{

    private PaymentMethod $strategy;

    public function __construct(string $paymentMethod){

        $this->strategy = match($paymentMethod){
            "creditcard" => new CreditCardStrategy(),
            "moneyorder" => new HavaleEftStrategy()

        };
    }

    public function pay(): string{

        return $this->strategy->pay();
    }

}