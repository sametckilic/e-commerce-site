<?php


namespace App\PaymentMethods;
use App\PaymentMethods\PaymentMethod;


class CreditCardStrategy implements PaymentMethod{

    public function pay(): string{

        return "creditcart";
    }


}