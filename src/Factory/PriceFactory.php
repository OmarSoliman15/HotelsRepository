<?php

namespace Areys\Recruiting\Factory;

use Areys\Recruiting\Entity\Price;

/**
 * Represents a price factory that makes the price and returns it.
 */
class PriceFactory
{
    /**
     * @param array $priceData
     * @return Price[]
     */
    public static function makePrice($priceData = [])
    {
        $prices = [];
        foreach ($priceData as $price) {
            $priceInstance = new Price();
            $priceInstance->amount = $price['amount'];
            $priceInstance->description = $price['description'];
            $priceInstance->arrivalDate = $price['from'];
            $priceInstance->departureDate = $price['to'];
            $prices[] = $priceInstance;
        }
        return $prices;
    }
}
