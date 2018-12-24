<?php

namespace Jeremy\PanierBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@JeremyPanier/Default/index.html.twig');
    }
}
