<?php

namespace Jeremy\ReductionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@JeremyReduction/Default/index.html.twig');
    }
}
