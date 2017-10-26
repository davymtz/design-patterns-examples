<?php

class FooPay {
    public function makePayment($amount){
        echo "FooPay: $amount";
    }
}

$gateway = new FooPay();
