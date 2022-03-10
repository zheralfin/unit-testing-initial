<?php

Class ShoppingCart {
    protected $cart = [];

    public const CART_LIMIT = 10;

    public function add($item) {
        if ($this->count() == static::CART_LIMIT) {
            throw new Exception("Cart is full");
        }

        return $this->cart[] = $item;
    }

    public function remove() {
        return array_pop($this->cart);
    }

    public function count() {
        return count($this->cart);
    }

    public function clear() {
        $this->cart = [];
    }
}