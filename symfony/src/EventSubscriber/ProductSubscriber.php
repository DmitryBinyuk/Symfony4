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
            // KernelEvents::RESPONSE => [
            //     ['onKernelResponsePre', 10],
            //     ['onKernelResponsePost', -10],
            // ],
            ProductInfoEvent::NAME => 'onProductInfo',
        ];
    }

    public function onProductInfo(ProductInfoEvent $event)
    {
        // die('onProductInfo-test');
        // ...
    }

    // public function onKernelResponsePre(ResponseEvent $event)
    // {
    //     die('onKernelResponsePre');
    //     // ...
    // }

    // public function onKernelResponsePost(ResponseEvent $event)
    // {
    //     // ...
    // }
}