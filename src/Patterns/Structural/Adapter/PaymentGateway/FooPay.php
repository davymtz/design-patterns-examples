<?php
namespace MonkeyCoders\Patterns\Structural\Adapter\PaymentGateway;
class FooPay {
    public function makePayment($amount) {
         return "FooPay: $amount";
     }
}