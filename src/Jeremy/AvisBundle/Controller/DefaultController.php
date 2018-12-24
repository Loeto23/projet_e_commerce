<?php

namespace Jeremy\AvisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@JeremyAvis/Default/index.html.twig');
    }
}
