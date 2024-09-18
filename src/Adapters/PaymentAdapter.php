<?php

namespace Adapters;

use Payments\PaymentProcessor;
use Payments\PaypalProcessor;
use Payments\StripeProcessor;

class PaymentAdapter implements PaymentProcessor {
    private $paymentGateway;

    // Recibe el procesador de pago (PayPal o Stripe)
    public function __construct($gateway) {
        $this->paymentGateway = $gateway;
    }

    public function pay($amount) {
        if ($this->paymentGateway instanceof PaypalProcessor) {
            return $this->paymentGateway->sendPayment($amount);
        } elseif ($this->paymentGateway instanceof StripeProcessor) {
            return $this->paymentGateway->charge($amount);
        }
    }
}
