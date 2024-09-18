<?php

namespace App;

use Models\Order;
use Adapters\PaymentAdapter;

class Ecommerce {
    public function processOrder(Order $order, PaymentAdapter $paymentAdapter) {
        // Procesamos el pago usando el adapter de pago
        $paymentStatus = $paymentAdapter->pay($order->amount);

        echo "Orden #{$order->id} procesada: $paymentStatus\n";
    }
}
