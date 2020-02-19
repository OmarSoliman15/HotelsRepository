<?php

namespace Areys\Recruiting\Service;

/**
 * This class is an (unfinished) example implementation of an unordered hotel service.
 */
class UnorderedHotelService implements HotelServiceInterface
{
    /**
     * @var PartnerServiceInterface
     */
    private $partnerService;

    /**
     * @param PartnerServiceInterface $partnerService
     */
    public function __construct(PartnerServiceInterface $partnerService)
    {
       $this->partnerService = $partnerService;
    }

    /**
     * @inheritdoc
     */
    public function getHotelsForCity(string $cityName): array
    {
        if (!isset($this->cityName2cityId[$cityName]))
        {
            throw new \InvalidArgumentException(sprintf('Given city name "%s" is not mapped.', $cityName));
        }

        $cityId = $this->cityName2cityId[$cityName];
        $partnerResults = $this->partnerService->getResultForCityId($cityId);
    }
}
