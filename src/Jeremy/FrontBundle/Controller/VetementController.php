<?php

namespace Jeremy\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class VetementController extends Controller
{

  // public function indexAction()
  // {
  // 
  //   $em = $this->getDoctrine()->getManager();
  //
  //   $theEntityRepository = $em->getRepository(\Jeremy\ProduitBundle\Entity\Produit::class);
  //
  //   $queryBuilder = $em->createQueryBuilder();
  //
  //   $queryBuilder
  //     ->select('p')
  //     ->from(\Jeremy\ProduitBundle\Entity\Produit::class, 'p')
  //     ->where('p.categorie = :tops')
  //     ->setParameter('tops', 'tops');
  //
  //   $query = $queryBuilder->getQuery();
  //   $result = $query->execute();
  //
  //     return $this->render('@JeremyFront/Vetement/index.html.twig',
  //     [
  //       'myResults' => $result
  //     ]);
  // }

  public function topsAction()
  {
    $em = $this->getDoctrine()->getManager();

    $theEntityRepository = $em->getRepository(\Jeremy\ProduitBundle\Entity\Produit::class);

    $queryBuilder = $em->createQueryBuilder();

    $queryBuilder
      ->select('p')
      ->from(\Jeremy\ProduitBundle\Entity\Produit::class, 'p')
      ->where('p.categorie = :categorie')
      ->setParameter('categorie', 'tops');

    $query = $queryBuilder->getQuery();
    $result = $query->execute();

    return $this->render('@JeremyFront/Vetement/tops.html.twig',
   [
     'myResults' => $result
   ]);
  }

  public function robesAction()
  {
    $em = $this->getDoctrine()->getManager();

    $theEntityRepository = $em->getRepository(\Jeremy\ProduitBundle\Entity\Produit::class);

    $queryBuilder = $em->createQueryBuilder();

    $queryBuilder
      ->select('p')
      ->from(\Jeremy\ProduitBundle\Entity\Produit::class, 'p')
      ->where('p.categorie = :categorie')
      ->setParameter('categorie', 'robe');

    $query = $queryBuilder->getQuery();
    $result = $query->execute();

    return $this->render('@JeremyFront/Vetement/robes.html.twig',
   [
     'myResults' => $result
   ]);
  }

  public function pantalonsAction()
  {
    $em = $this->getDoctrine()->getManager();

    $theEntityRepository = $em->getRepository(\Jeremy\ProduitBundle\Entity\Produit::class);

    $queryBuilder = $em->createQueryBuilder();

    $queryBuilder
      ->select('p')
      ->from(\Jeremy\ProduitBundle\Entity\Produit::class, 'p')
      ->where('p.categorie = :categorie')
      ->setParameter('categorie', 'pantalon');

    $query = $queryBuilder->getQuery();
    $result = $query->execute();

    return $this->render('@JeremyFront/Vetement/pantalons.html.twig',
   [
     'myResults' => $result
   ]);
  }

  public function jupesAction()
  {
    $em = $this->getDoctrine()->getManager();

    $theEntityRepository = $em->getRepository(\Jeremy\ProduitBundle\Entity\Produit::class);

    $queryBuilder = $em->createQueryBuilder();

    $queryBuilder
      ->select('p')
      ->from(\Jeremy\ProduitBundle\Entity\Produit::class, 'p')
      ->where('p.categorie = :categorie')
      ->setParameter('categorie', 'jupe');

    $query = $queryBuilder->getQuery();
    $result = $query->execute();

    return $this->render('@JeremyFront/Vetement/jupes.html.twig',
   [
     'myResults' => $result
   ]);
  }

  public function vestesAction()
  {
    $em = $this->getDoctrine()->getManager();

    $theEntityRepository = $em->getRepository(\Jeremy\ProduitBundle\Entity\Produit::class);

    $queryBuilder = $em->createQueryBuilder();

    $queryBuilder
      ->select('p')
      ->from(\Jeremy\ProduitBundle\Entity\Produit::class, 'p')
      ->where('p.categorie = :categorie')
      ->setParameter('categorie', 'veste/manteau');

    $query = $queryBuilder->getQuery();
    $result = $query->execute();

    return $this->render('@JeremyFront/Vetement/vestes.html.twig',
   [
     'myResults' => $result
   ]);
  }


}
