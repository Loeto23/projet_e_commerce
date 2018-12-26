<?php

namespace Jeremy\ProduitBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@JeremyProduit/Default/index.html.twig');
    }

    public function ajouterAction()
    {
      $ajoutProduit = new \Jeremy\ProduitBundle\Entity\Produit();

      $aForm = $this->createForm(\Jeremy\ProduitBundle\Form\ProduitType::class, $ajoutProduit);

      $aRequest = \Symfony\Component\HttpFoundation\Request::createFromGlobals();

      $aForm->handleRequest($aRequest);

      if($aForm->isSubmitted() && ! $aForm->isEmpty())
      {
        $doctrine = $this->getDoctrine();

        $theEntityManager = $doctrine->getManager();

        $theEntityManager->persist($ajoutProduit);

        $theEntityManager->flush();

        return $this->redirectToRoute('jeremy_produit_ajouter');

      }

      $aFormView = $aForm->createView();

      return $this->render('@JeremyProduit/Default/ajouterProduit.html.twig',
      [
        'view' => $aFormView,
      ]);
    }



    public function modifierProduitAction($id_du_produit)
    {
      $doctrine = $this->getDoctrine();

      $theEntityRepository = $doctrine->getRepository(\Jeremy\ProduitBundle\Entity\Produit::class);

      $modifier_produit = $theEntityRepository->find($id_du_produit);

      if(empty($modifier_produit))
      {
        return $this->redirectToRoute('jeremy_produit_homepage');
      }

      $aFormBuilder = $this->createFormBuilder($modifier_produit);

      $aForm = $this->createForm(\Jeremy\ProduitBundle\Form\ProduitType::class, $modifier_produit);

      $aRequest = \Symfony\Component\HttpFoundation\Request::createFromGlobals();

      $aForm->handleRequest($aRequest);

      if($aForm->isSubmitted() && ! $aForm->isEmpty())
      {
        $doctrine = $this->getDoctrine();

        $theEntityManager = $doctrine->getManager();

        $theEntityManager->persist($ajoutProduit);

        $theEntityManager->flush();

        return $this->redirectToRoute('jeremy_produit_homepage');

      }

      $aFormView = $aForm->createView();

      return $this->render('@JeremyProduit/Default/modifierProduit.html.twig',
      [
        'view' => $aFormView,
      ]);
    }
}
