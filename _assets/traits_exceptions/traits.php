<?php

trait ShippingTrait
{
    public function calculateShippingCost($weight, $distance)
    {
        // Esempio di calcolo del costo di spedizione
        $cost = $weight * $distance * 0.1;
        return $cost;
    }
}