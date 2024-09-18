<?php

namespace Payments;

interface PaymentProcessor {
    public function pay($amount);
}
