<?php

namespace App\EventListener;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;
use Psr\Log\LoggerInterface;

class ProductInfoListener
{
    private $logger;

//    public function __construct()
//    {
//        $this->logger = $logger;
//    }

    public function onProductInfo(ExceptionEvent $event, LoggerInterface $logger)
    {
        $logger->info('onProductInfo-Listener');
    }
}