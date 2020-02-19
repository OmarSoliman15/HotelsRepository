<?php

namespace Areys\Recruiting\Entity;

/**
 * Represents a single hotel in the result.
 */
class Hotel
{
    /**
     * Name of the hotel.
     *
     * @var string
     */
    public $name;

    /**
     * Street adr. of the hotel.
     *
     * @var string
     */
    public $address;

    /**
     * Unsorted list of partners with their corresponding prices.
     *
     * @var Partner[]
     */
    public $partners = [];
}
