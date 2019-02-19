<?php

namespace Jeremy\CommandeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {

        $em = $this->getDoctrine()->getManager();

        $theEntityRepository = $em->getRepository(\Jeremy\CommandeBundle\Entity\Commande::class);

        $query = $em->createQuery(
          '
          SELECT
            c.id,
            u.username,
            c.dateEnregistrement,
            c.prixTotal,
            p.titre,
            p.photo
          FROM
            Jeremy\CommandeBundle\Entity\Commande c
          LEFT JOIN
            Jeremy\UserBundle\Entity\User u WITH c.user = u.id
          LEFT JOIN
            Jeremy\ProduitBundle\Entity\Produit p WITH c.produit = p.id
          ORDER BY
            c.id ASC
          '
        );
        $result = $query->execute();


        return $this->render('@JeremyCommande/Default/index.html.twig',
       [
         'myResults' => $result
       ]);
    }

    public function supprimerCommandeAction($id_commande)
    {

      $em = $this->getDoctrine()->getManager();

      $theEntityRepository = $em->getRepository(\Jeremy\CommandeBundle\Entity\Commande::class);

      $supprimerCommande = $theEntityRepository->find($id_commande);

      $query = $em->createQuery(
        '
        SELECT
          c.id,
          u.username,
          c.dateEnregistrement,
          c.prixTotal,
          p.titre,
          p.photo
        FROM
          Jeremy\CommandeBundle\Entity\Commande c
        LEFT JOIN
          Jeremy\UserBundle\Entity\User u WITH c.user = u.id
        LEFT JOIN
          Jeremy\ProduitBundle\Entity\Produit p WITH c.produit = p.id
        WHERE c.id = :id
        '
      )->setParameter('id', $id_commande);
      $result = $query->execute();

      if(empty($supprimerCommande))
      {
        return $this->redirectToRoute('jeremy_commande_homepage');
      }

      $em->remove($supprimerCommande);

      $em->flush();

        return $this->render('@JeremyCommande/Default/supprimerCommande.html.twig',
      [
        'myResults' => $result
      ]);

    }

    public function modifierCommandeAction($id_commande)
    {
        $em = $this->getDoctrine()->getManager();

        $theEntityRepository = $em->getRepository(\Jeremy\CommandeBundle\Entity\Commande::class);

        $modifierCommande = $theEntityRepository->find($id_commande);

        if(empty($modifierCommande))
        {
          return $this->redirectToRoute('jeremy_commande_homepage');
        }

        $aForm = $this->createForm(\Jeremy\CommandeBundle\Form\CommandeType::class, $modifierCommande);

        $aRequest = \Symfony\Component\HttpFoundation\Request::createFromGlobals();

        $aForm->handleRequest($aRequest);

        $em->persist($modifierCommande);

        $em->flush();

        $aFormView = $aForm->createView();

        return $this->render('@JeremyCommande/Default/modifierCommande.html.twig',
        [
          'view' => $aFormView,
        ]);
    }
}
