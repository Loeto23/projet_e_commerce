<?php

namespace Jeremy\PanierBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class PanierController extends Controller
{


    public function ajouterAction(Request $request, $id )
    {

      $request = $this->get('request_stack')->getCurrentRequest();

      $session = $request->getSession();

      if (!$session->has('panier')) $session->set('panier', array());
      $panier = $session->get('panier');

      //$panier[ID du produit] => Quantité du produit en question

      if (array_key_exists($id, $panier))
      {
        if ($this->get('request_stack')->getCurrentRequest()->query->get('qte') != null) $panier['id'] = $this->get('request_stack')->getCurrentRequest()->query->get('qte');
      }
      else
      {
        if ($this->get('request_stack')->getCurrentRequest()->query->get('qte') !=null)
            $panier[$id] = $this->get('request_stack')->getCurrentRequest()->query->get('qte');
        else
        {
            $panier[$id] = 1;
        }
      }

      $panier[$id] = 1;

      $session->set('panier', $panier);


      return $this->redirectToRoute('jeremy_panier_homepage');
    }

    public function panierAction(Request $request)
    {

      $request = $this->get('request_stack')->getCurrentRequest();
      $session = $request->getSession();

      // $session->remove('panier');
      // die();

      if (!$session->has('panier')) $session->set('panier', array());

      $em = $this->getDoctrine()->getManager();
      $produit = $em->getRepository(\Jeremy\ProduitBundle\Entity\Produit::class)->findArray(array_keys($session->get('panier')));

      return $this->render('@JeremyPanier/Panier/panier.html.twig',
      array('produit' => $produit,
            'panier' => $session->get('panier')
    ));
    }

    public function supprimerAction(Request $request, $id)
    {

      $request = $this->get('request_stack')->getCurrentRequest();
      $session = $request->getSession();

      $panier = $session->get('panier');

      if (array_key_exists($id, $panier))
      {
        unset($panier[$id]);
        $session->set('panier', $panier);
        $this->get('session')->getFlashBag()->add('success', 'Article supprimé avec succès');

        return $this->redirectToRoute('jeremy_panier_homepage');

      }

      // public function menuAction(Request $request)
      // {
      //   // $request = $this->get('request_stack')->getCurrentRequest();
      //   // $session = $request->getSession();
      //   //
      //   // if (!$session->has('panier'))
      //   //   $article = 0;
      //   // else
      //   //   $article = count($session->get('panier'));
      //   //
      //   // return $this->render('@JeremyPanier/Panier/modulesUsed/panier.html.twig',
      //   //   array('article' => $article));
      //   return $this->render('@JeremyCommande/Panier/panier.html.twig');
      // }

    }
}
