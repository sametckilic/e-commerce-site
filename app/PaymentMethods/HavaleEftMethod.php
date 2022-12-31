<?php


namespace App\PaymentMethods;


class HavaleEftMethod implements PaymentMethod{

    public function pay(): string{

        return "Havele Eft";
    }

}