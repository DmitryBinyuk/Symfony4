<?php

namespace App\EventListener;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;

class ProductInfoListener
{
    public function onProductInfo(ExceptionEvent $event)
    {
        die('onProductInfo-listener');
    }
}