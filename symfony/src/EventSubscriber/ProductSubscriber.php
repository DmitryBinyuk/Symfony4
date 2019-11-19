<?php

namespace App\EventSubscriber;

use App\Event\ProductInfoEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\ResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;

class ProductSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return [
            ProductInfoEvent::NAME => 'onProductInfo',
        ];
    }

    public function onProductInfo(ProductInfoEvent $event)
    {
        // die('onProductInfo-test');
    }
}