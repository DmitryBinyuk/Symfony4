<?php

namespace App\EventSubscriber;

use App\Event\ProductInfoEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\ResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Psr\Log\LoggerInterface;

class ProductSubscriber implements EventSubscriberInterface
{
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public static function getSubscribedEvents()
    {
        return [
            ProductInfoEvent::NAME => 'onProductInfo',
        ];
    }

    public function onProductInfo(ProductInfoEvent $event)
    {
        $this->logger->info('onProductInfo-Subscriber-check');
    }
}