<?php
namespace MonkeyCoders\Patterns\Structural\Adapter\PaymentGateway;
class BarPayment {
    public function payment($amount){
        return "BarPay: $amount";
    }
}