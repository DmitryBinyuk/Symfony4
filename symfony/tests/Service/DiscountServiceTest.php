<?php

namespace App\Tests\Util;

use App\Util\Calculator;
use PHPUnit\Framework\TestCase;
use App\Service\DiscountService;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DiscountServiceTest extends WebTestCase
{
    public function testDiscountRange()
    {
    	self::bootKernel();

        // gets the special container that allows fetching private services
        $container = self::$container;

        $discountService = $container->get(DiscountService::class);

        $discountValue = $discountService->getDiscountValue();

        $this->assertGreaterThanOrEqual(1, $discountValue);

        $this->assertLessThanOrEqual(10, $discountValue);
    }
}