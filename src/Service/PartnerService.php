<?php

namespace Areys\Recruiting\Service;

use Areys\Recruiting\Entity\Hotel;
use Areys\Recruiting\Factory\HotelFactory;

class PartnerService implements PartnerServiceInterface
{
    /**
     * @var PartnerServiceInterface
     */
    private $partnerService;

    /**
     * @array
     */
    private $data;

    /**
     * PartnerService constructor.
     */
    public function __construct()
    {
        $this->setDataSource();
    }

    /**
     * @param int $cityId
     * @return Hotel[]
     */
    public function getResultForCityId(int $cityId): array
    {
        if ($this->data['id'] != $cityId) {
            throw new \InvalidArgumentException(sprintf('Given city id "%s" is not mapped.', $cityId));
        }

        return HotelFactory::makeHotel($this->data);
    }

    /**
     * Set data source.
     */
    protected function setDataSource()
    {
        $this->data = json_decode(file_get_contents(__DIR__ . "/../../data/15475.json"), true);
    }
}
