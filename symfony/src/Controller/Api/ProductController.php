<?php

namespace App\Controller\Api;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Product;
use Nelmio\ApiDocBundle\Annotation\Model;
use Swagger\Annotations as SWG;
use Nelmio\ApiDocBundle\Annotation\Security;
use App\Entity\User;
use App\Event\ProductInfoEvent;
use Symfony\Contracts\EventDispatcher\Event;
use Symfony\Contracts\EventDispatcher\EventDispatcherInterface;
use App\EventListener\ProductInfoListener;
use App\Service\DiscountService;

class ProductController extends AbstractController
{
    /**
     * @Route("/api/product", methods={"GET"})
     *
     * @SWG\Get(
     *     path="/api/product",
     *     tags={"Areas of Law"},
     *     summary="get all areas of law",
     *     description="get all areas of law",
     *     produces={"application/json"},
     *     consumes={"application/json"},
     * )
     *
     * @return JsonResponse
     */
    public function info(
        EventDispatcherInterface $dispatcher,
        DiscountService $discountService
    )
    {
        $product = new Product();

        $listener = new ProductInfoListener();
        $dispatcher->addListener('product.info_listener', [$listener, 'onProductInfo']);

        $event = new ProductInfoEvent($product);
        $dispatcher->dispatch($event, ProductInfoEvent::NAME);

        $discountValue = $discountService->getDiscountValue();

        return $this->render('product1/index.html.twig', [
            'controller_name' => 'ProductController',
            'discountValue' => $discountValue
        ]);
    }
}
