<?php

namespace Areys\Recruiting\Factory;

use Areys\Recruiting\Entity\Partner;

/**
 * Represents a partner factory that makes the partner and returns it.
 */
class PartnerFactory
{
    /**
     * @param array $partnerData
     * @return Partner[]
     */
    public static function makePartner($partnerData = [])
    {
        $partners = [];
        foreach ($partnerData as $partner) {
            self::validate($partner);
            $partnerInstance = new Partner();
            $partnerInstance->name = $partner['name'];
            $partnerInstance->homepage = $partner['url'];

            $prices = PriceFactory::makePrice($partner['prices']);
            $partnerInstance->prices = $prices;

            $partners[] = $partnerInstance;
        }
        return $partners;
    }

    /**
     * @param Partner $partner
     */
    private static function validate(Partner $partner)
    {
        if (!filter_var($partner['url'], FILTER_VALIDATE_URL)) {
            throw new \InvalidArgumentException(sprintf('Given partner homepage "%s" is not valid url.', $partner['url']));
        }
    }
}
