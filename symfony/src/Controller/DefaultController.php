<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Psr\Log\LoggerInterface;

class DefaultController extends AbstractController
{
    public function number()
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><body>Rundom number: '.$number.'</body></html>'
        );
    }

    /**
    * @Route("/random/number-annotations")
    */
    public function numberUsingAnnotations(LoggerInterface $logger)
    {
        $number = random_int(0, 100);

        $logger->info('numberUsingAnnotations generated!');

        return $this->render('random/number.html.twig', [
            'number' => $number,
        ]);
    }
}