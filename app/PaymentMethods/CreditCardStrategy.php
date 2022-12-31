<?php


namespace App\PaymentMethods;

class CreditCartStrategy implements PaymentMethod{

    public function pay(): string{

        return "Credit Card";
    }


}