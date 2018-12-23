<?php

namespace Jeremy\BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProduitController extends Controller
{
    public function indexAction()
    {
      return $this->render('@JeremyBack/Produit/ajout_produit.html.twig');
    }

    public function ajouterProduitAction()
    {

      $produit = new \Jeremy\BackBundle\Entity\Produit();

      $ajoutProduit = $this->createFormBuilder($produit);

      $ajoutProduit->add('reference', \Symfony\Component\Form\Extension\Core\Type\NumberType::class, [
        'label' => 'Référence du produit :',
      ]);

      $ajoutProduit->add('categorie', \Symfony\Component\Form\Extension\Core\Type\RadioType::class, [
        'label' => 'Catégorie :',
      ]);

      $ajoutProduit->add('titre', \Symfony\Component\Form\Extension\Core\Type\TextType::class, [
        'label' => 'Titre :',
      ]);

      $ajoutProduit->add('description', \Symfony\Component\Form\Extension\Core\Type\TextareaType::class, [
        'label' => 'Description :',
      ]);

      $ajoutProduit->add('couleur', \Symfony\Component\Form\Extension\Core\Type\ColorType::class, [
        'label' => 'Couleur :',
      ]);

      $ajoutProduit->add('taille', \Symfony\Component\Form\Extension\Core\Type\RadioType::class, [
        'label' => 'Taille :',
      ]);

      $ajoutProduit->add('photo', \Symfony\Component\Form\Extension\Core\Type\FileType::class, [
        'label' => 'Photo :',
      ]);

      $ajoutProduit->add('prix', \Symfony\Component\Form\Extension\Core\Type\NumberType::class, [
        'label' => 'Prix :',
      ]);

      $ajoutProduit->add('stock', \Symfony\Component\Form\Extension\Core\Type\TextType::class, [
        'label' => 'Stock :',
      ]);

      $ajoutProduit->add('save', \Symfony\Component\Form\Extension\Core\Type\SubmitType::class, [
        'label' => 'Ajouter ce produit',
      ]);

      $form = $ajoutProduit->getForm();

      $requeteGlobal = \Symfony\Component\HttpFoundation\Request::createFromGlobals();

      $form->handleRequest($requeteGlobal);

      if($form->isSubmitted() && !$form->isEmpty())
      {
        $doctrine = $this->getDoctrine();

        $theEntitymanager = $doctrine->getManager();

        $theEntitymanager->persist($produit);

        $theEntitymanager->flush();

        return $this->redirectToRoute('jeremy_back_homepage');
      }

      $formView = $form->createView();

      return $this->render('@JeremyBack/Produit/ajout_produit.html.twig',[
        'view' => $formView,
      ]);

      }

}
