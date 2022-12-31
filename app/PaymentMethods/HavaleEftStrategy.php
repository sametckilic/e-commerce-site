<?php


namespace App\PaymentMethods;
use App\PaymentMethods\PaymentMethod;


class HavaleEftStrategy implements PaymentMethod{

    public function pay(): string{

        return "moneyorder";
    }

}