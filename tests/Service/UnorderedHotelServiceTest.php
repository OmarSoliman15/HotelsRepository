<?php
namespace Areys\Recruiting\Service;

use Areys\Recruiting\Entity\Hotel;

/**
 * @package Areys\Recruiting\Service
 * @coversDefaultClass \Areys\Recruiting\Service\UnorderedHotelService
 */
class UnorderedHotelServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers ::getHotelsForCity
     */
    public function test_getHotelsForCity_with_city_duesseldorf()
    {
        $cityResult = [
            new Hotel()
        ];

        $partnerServiceProphecy = $this->prophesize(PartnerServiceInterface::class);
        $partnerServiceProphecy
            ->getResultForCityId(15475)
            ->shouldBeCalled()
            ->willReturn($cityResult);

        $partnerService = $partnerServiceProphecy->reveal();

        $hotelService = new UnorderedHotelService($partnerService);
        $hotelResult = $hotelService->getHotelsForCity('Düsseldorf');
        $this->assertInternalType('array', $hotelResult);
        $this->assertCount(1, $hotelResult);
    }

    /**
     * @covers ::getHotelsForCity
     * @expectedException \InvalidArgumentException
     */
    public function test_getHotelsForCity_throws_InvalidArgumentException_on_unmapped_city_name()
    {
        $partnerService = $this->prophesize(PartnerServiceInterface::class)->reveal();

        $hotelService = new UnorderedHotelService($partnerService);
        $hotelService->getHotelsForCity('København');
    }
}
