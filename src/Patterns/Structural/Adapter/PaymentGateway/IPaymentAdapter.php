<?php
namespace MonkeyCoders\Patterns\Structural\Adapter\PaymentGateway;
interface IPaymentAdapter {
    public function pay($amount);
}