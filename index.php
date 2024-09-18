<?php

require_once 'vendor/autoload.php';

use Models\Order;
use Payments\PaypalProcessor;
use Payments\StripeProcessor;
use Adapters\PaymentAdapter;
use App\Ecommerce;

// Creando una orden
$order = new Order(101, 250);

// Elige un procesador de pagos (PayPal o Stripe)
$paypalProcessor = new PaypalProcessor();
$stripeProcessor = new StripeProcessor();

// Adapter para PayPal
$paypalAdapter = new PaymentAdapter($paypalProcessor);

// Adapter para Stripe
$stripeAdapter = new PaymentAdapter($stripeProcessor);

// Procesando la orden usando el Adapter de PayPal
$ecommerce = new Ecommerce();
$ecommerce->processOrder($order, $paypalAdapter);

// Cambia el procesador a Stripe
$ecommerce->processOrder($order, $stripeAdapter);
