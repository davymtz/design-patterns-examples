<?php
namespace MonkeyCoders\Patterns\Structural\Adapter\PaymentGateway;
class FooPaymentAdapter implements IPaymentAdapter {
    public $fooPay;
    public function __construct(FooPay $fooPay)
    {
        $this->fooPay = $fooPay;
    }
    public function pay($amount)
    {
        return $this->fooPay->makePayment($amount);
    }
}