<?php

namespace Jeremy\NewsletterBundle\Controller;

use Jeremy\NewsletterBundle\Entity\Newsletter;
use Jeremy\NewsletterBundle\Form\ContactType;
use Foctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\RouterInterface;
use Twig\Environment;

class DefaultController extends Controller
{

    // /**
    // * @var Environment
    // */
    // private $twig;
    //
    // public function __construct(Environment $twig)
    // {
    //     $this->twig = $twig;
    // }
    //
    //
    // /**
    // * @Route("/contact", name="contact")
    // */
    // public function contact(
    //   Request $request,
    //   FormFactoryInterface $formFactory,
    //   FlashBagInterface $flashBag,
    //   RouterInterface $router
    //   )
    // {
    //   $contact = new Contact();
    //
    //   $form = $formFactory->create(ContactType::class, $contact);
    //
    //   $form->handleRequest($request);
    //
    //   // if($form->isSubmitted() and $form->isValid())
    //   // {
    //   //   $flashBag->add( message"Votre message a bien été envoyé.");
    //   //
    //   //   return new RedirectResponse($router->generate(name "contact"));
    //   // }
    //
    //   // return new Response($this->twig->render(name "default/contact.html.twig", [
    //   //     "form" => $form->createView()
    //   // ]));
    //   }
    // }
}
