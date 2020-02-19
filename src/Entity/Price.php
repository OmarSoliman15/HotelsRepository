<?php

namespace Areys\Recruiting\Entity;

/**
 * Represents a single price from a search result
 * related to a single partner.
 */
class Price
{
    /**
     * Description text for the rate/price.
     *
     * @var string
     */
    public $description;

    /**
     * Price in euro.
     *
     * @var float
     */
    public $amount;

    /**
     * Arrival date, represented by a DateTime obj
     * which needs to be converted from a string on
     * write of the property.
     *
     * @var \DateTime
     */
    public $arrivalDate;

    /**
     * Departure date, represented by a DateTime obj
     * which needs to be converted from a string on
     * write of the property
     *
     * @var \DateTime
     */
    public $departureDate;
}
