<?php

namespace OpenSID\Application\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class HomepageController extends AbstractController
{
    public function __invoke()
    {
        return new Response($this->renderView('homepage.html.twig'));
    }
}
