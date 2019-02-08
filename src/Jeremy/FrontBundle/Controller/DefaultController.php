<?php

namespace Jeremy\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@JeremyFront/Default/index.html.twig');
    }

    public function contactAction()
    {

      $aForm = $this->createForm(\Jeremy\FrontBundle\Form\ContactType::class);

      $aRequest = \Symfony\Component\HttpFoundation\Request::createFromGlobals();

      $aForm->handleRequest($aRequest);

      $aFormView = $aForm->createView();

      return $this->render('@JeremyFront/Contact/contact.html.twig',
      [
        'view' => $aFormView,
      ]);
    }

    public function backofficeAction()
    {
      return $this->render('@JeremyFront/Default/backoffice.html.twig');
    }
}
