<?php

// src/OC/PlatformBundle/Controller/AdvertController.php

namespace OC\PlatformBundle\Controller;

// N'oubliez pas ce use :
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ByeController extends Controller
{
    public function byebyeAction()
    {
        $content = $this->get('templating')->render('OCPlatformBundle:ByeBye:byebye.html.twig');

        return new Response($content);
    }
}