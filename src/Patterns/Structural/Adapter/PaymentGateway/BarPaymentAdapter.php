<?php
namespace MonkeyCoders\Patterns\Structural\Adapter\PaymentGateway;
class BarPaymentAdapter implements IPaymentAdapter {
    public $barPay;
    public function __construct(BarPayment $barPay)
    {
        $this->barPay = $barPay;
    }
    public function pay($amount)
    {
        return $this->barPay->payment($amount);
    }
}