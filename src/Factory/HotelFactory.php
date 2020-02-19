<?php

namespace Areys\Recruiting\Factory;

use Areys\Recruiting\Entity\Hotel;

/**
 * Represents a hotel factory that makes the hotel and returns it.
 */
class HotelFactory
{
    /**
     * @param array $data
     * @return Hotel[]
     */
    public static function makeHotel($data = [])
    {
        $hotelsArray = $data['hotels'];

        $hotels = [];

        foreach ($hotelsArray as $hotel) {
            $hotelInstance = new Hotel();
            $hotelInstance->name = $hotel['name'];
            $hotelInstance->address = $hotel['adr'];

            $partners = PartnerFactory::makePartner($hotel['partners']);
            $hotelInstance->partners = $partners;

            $hotels[] = $hotelInstance;
        }

        return $hotels;
    }
}
