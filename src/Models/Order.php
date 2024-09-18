<?php

namespace Models;

class Order {
    public $id;
    public $amount;

    public function __construct($id, $amount) {
        $this->id = $id;
        $this->amount = $amount;
    }

    // Más lógica relacionada al pedido...
}
