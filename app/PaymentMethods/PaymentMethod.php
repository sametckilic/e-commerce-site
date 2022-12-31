<?php

namespace App\PaymentMethods;

interface PaymentMethod{

        public function pay(): string;
}