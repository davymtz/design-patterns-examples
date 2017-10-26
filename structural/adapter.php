<?php
interface IPaymentAdapter {
    public function pay($amount);
}
class FooPay {
    public function makePayment($amount){
        echo "FooPay: $amount \n";
    }
}

class BarPayment {
    public function payment($amount){
        echo "FooPay: $amount \n";
    }
}

class FooPaymentAdapter implements IPaymentAdapter {
    public $fooPay;
    public function __construct(FooPay $fooPay)
    {
        $this->fooPay = $fooPay;
    }

    public function pay($amount)
    {
        $this->fooPay->makePayment($amount);
    }
}
class BarPaymentAdapter implements IPaymentAdapter {
    public $barPay;
    public function __construct(BarPayment $barPay)
    {
        $this->barPay = $barPay;
    }

    public function pay($amount)
    {
        $this->barPay->payment($amount);
    }
}

$gateway = new FooPaymentAdapter(new FooPay());
$gateway->pay(100);
$gateway = new BarPaymentAdapter(new BarPayment());
$gateway->pay(200);