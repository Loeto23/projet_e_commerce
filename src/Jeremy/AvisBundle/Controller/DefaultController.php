<?php

namespace Jeremy\AvisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {

        // $em = $this->getDoctrine();
        //
        // $theEntityRepository = $em->getRepository(\Jeremy\AvisBundle\Entity\Avis::class);
        //
        // $result = $theEntityRepository->findAll();
        //
        // $query = $em->createQuery(
        //   '
        //   SELECT *
        //   FROM
        //     Jeremy\UserBundle\Entity\User u JOIN Jeremy\AvisBundle\Entity\Avis a
        //   WHERE
        //   '
        //   )


        $em = $this->getDoctrine()->getManager();

        $theEntityRepository = $em->getRepository(\Jeremy\AvisBundle\Entity\Avis::class);

        $query = $em->createQuery(
          '
          SELECT
            u.username,
            p.titre,
            p.photo,
            a.commentaire,
            a.note
          FROM
            Jeremy\AvisBundle\Entity\Avis a
          LEFT JOIN
            Jeremy\UserBundle\Entity\User u WITH a.user = u.id
          LEFT JOIN
            Jeremy\ProduitBundle\Entity\Produit p WITH a.produit = p.id
          '
          ) ;
          $result = $query->execute();
        


        return $this->render('@JeremyAvis/Default/index.html.twig',
       [
         'myResults' => $result
       ]);
    }
}
