<?php

namespace Jeremy\CommandeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@JeremyCommande/Default/index.html.twig');
    }
}
