<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\RouterInterface;

/**
 * Class IndexController
 */
class IndexController extends AbstractController
{
    /**
     * @return Response
     */
    public function index(RouterInterface $router): Response
    {
        // Passed "variable" variable is not used in the template
        $url     = $router->generate('route', ['variable' => 'value']);

        // Passed "missingVar" variable is not used in the template
        $return1 = $this->render('index.html.twig', ['existingVar' => 'yes', 'missingVar' => 'no']);

        // Passed "existingVar" variable is not used in the template
        // Passed "missingVar" variable is not used in the template
        $return2 = $this->render('index/index.html.twig', ['existingVar' => 'yes', 'missingVar' => 'no']);

        return new Response();
    }
}