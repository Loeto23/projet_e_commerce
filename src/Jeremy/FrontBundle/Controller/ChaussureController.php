<?php

namespace Jeremy\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ChaussureController extends Controller
{

  // public function indexAction()
  // {
  //   $em = $this->getDoctrine()->getManager();
  //
  //   $theEntityRepository = $em->getRepository(\Jeremy\ProduitBundle\Entity\Produit::class);
  //
  //   $result = $theEntityRepository->findAll();
  //
  //     return $this->render('@JeremyFront/Chaussure/index.html.twig',
  //     [
  //       'myResults' => $result
  //     ]);
  // }

  public function bottesAction()
  {
    $em = $this->getDoctrine()->getManager();

    $theEntityRepository = $em->getRepository(\Jeremy\ProduitBundle\Entity\Produit::class);

    $queryBuilder = $em->createQueryBuilder();

    $queryBuilder
      ->select('p')
      ->from(\Jeremy\ProduitBundle\Entity\Produit::class, 'p')
      ->where('p.categorie = :categorie')
      ->setParameter('categorie', 'botte');

    $query = $queryBuilder->getQuery();
    $result = $query->execute();

    return $this->render('@JeremyFront/Chaussure/bottes.html.twig',
   [
     'myResults' => $result
   ]);
  }

  public function sandalesAction()
  {
    $em = $this->getDoctrine()->getManager();

    $theEntityRepository = $em->getRepository(\Jeremy\ProduitBundle\Entity\Produit::class);

    $queryBuilder = $em->createQueryBuilder();

    $queryBuilder
      ->select('p')
      ->from(\Jeremy\ProduitBundle\Entity\Produit::class, 'p')
      ->where('p.categorie = :categorie')
      ->setParameter('categorie', 'sandale');

    $query = $queryBuilder->getQuery();
    $result = $query->execute();

    return $this->render('@JeremyFront/Chaussure/sandales.html.twig',
   [
     'myResults' => $result
   ]);
  }

  public function basketsAction()
  {
    $em = $this->getDoctrine()->getManager();

    $theEntityRepository = $em->getRepository(\Jeremy\ProduitBundle\Entity\Produit::class);

    $queryBuilder = $em->createQueryBuilder();

    $queryBuilder
      ->select('p')
      ->from(\Jeremy\ProduitBundle\Entity\Produit::class, 'p')
      ->where('p.categorie = :categorie')
      ->setParameter('categorie', 'basket');

    $query = $queryBuilder->getQuery();
    $result = $query->execute();

    return $this->render('@JeremyFront/Chaussure/baskets.html.twig',
   [
     'myResults' => $result
   ]);
  }

  public function escarpinsAction()
  {
    $em = $this->getDoctrine()->getManager();

    $theEntityRepository = $em->getRepository(\Jeremy\ProduitBundle\Entity\Produit::class);

    $queryBuilder = $em->createQueryBuilder();

    $queryBuilder
      ->select('p')
      ->from(\Jeremy\ProduitBundle\Entity\Produit::class, 'p')
      ->where('p.categorie = :categorie')
      ->setParameter('categorie', 'escarpin');

    $query = $queryBuilder->getQuery();
    $result = $query->execute();

    return $this->render('@JeremyFront/Chaussure/escarpins.html.twig',
   [
     'myResults' => $result
   ]);
  }

  public function chaussonsAction()
  {
    $em = $this->getDoctrine()->getManager();

    $theEntityRepository = $em->getRepository(\Jeremy\ProduitBundle\Entity\Produit::class);

    $queryBuilder = $em->createQueryBuilder();

    $queryBuilder
      ->select('p')
      ->from(\Jeremy\ProduitBundle\Entity\Produit::class, 'p')
      ->where('p.categorie = :categorie')
      ->setParameter('categorie', 'chausson');

    $query = $queryBuilder->getQuery();
    $result = $query->execute();

    return $this->render('@JeremyFront/Chaussure/chaussons.html.twig',
   [
     'myResults' => $result
   ]);
  }

}
