<?php

namespace Jeremy\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@JeremyUser/Default/index.html.twig');
    }

    public function showProfilAction()
    {

    }

}
