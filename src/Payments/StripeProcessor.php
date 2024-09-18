<?php

namespace Payments;

class StripeProcessor {
    public function charge($amount) {
        // Simulación de lógica Stripe
        return "Pago de $amount procesado usando Stripe.";
    }
}
