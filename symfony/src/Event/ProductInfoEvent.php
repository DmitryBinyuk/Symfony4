<?php

namespace App\Event;

use Symfony\Contracts\EventDispatcher\Event;
use Psr\Log\LoggerInterface;
use App\Entity\Product;

/**
 * Write to logs product info return
 */
class ProductInfoEvent extends Event
{
    public const NAME = 'product.info';

    public function __construct(Product $product)
    {
        // $this->getProduct();
        // $logger->info('ProductInfoEvent_info');
    }

    public function getProduct()
    {
        // die('tess');

        $logger->info('ProductInfoEvent'); 
    }
}