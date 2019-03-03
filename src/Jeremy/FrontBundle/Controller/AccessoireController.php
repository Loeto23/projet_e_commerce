<?php

namespace Jeremy\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AccessoireController extends Controller
{

  // public function indexAction()
  // {
  //     return $this->render('@JeremyFront/Accessoire/index.html.twig');
  // }

  public function sacsAction()
  {
    $em = $this->getDoctrine()->getManager();

    $theEntityRepository = $em->getRepository(\Jeremy\ProduitBundle\Entity\Produit::class);

    $queryBuilder = $em->createQueryBuilder();

    $queryBuilder
      ->select('p')
      ->from(\Jeremy\ProduitBundle\Entity\Produit::class, 'p')
      ->where('p.categorie = :categorie')
      ->setParameter('categorie', 'sac');

    $query = $queryBuilder->getQuery();
    $result = $query->execute();

    return $this->render('@JeremyFront/Accessoire/sacs.html.twig',
   [
     'myResults' => $result
   ]);
  }

  public function echarpesAction()
  {
    $em = $this->getDoctrine()->getManager();

    $theEntityRepository = $em->getRepository(\Jeremy\ProduitBundle\Entity\Produit::class);

    $queryBuilder = $em->createQueryBuilder();

    $queryBuilder
      ->select('p')
      ->from(\Jeremy\ProduitBundle\Entity\Produit::class, 'p')
      ->where('p.categorie = :categorie')
      ->setParameter('categorie', 'foulard/echarpe');

    $query = $queryBuilder->getQuery();
    $result = $query->execute();

    return $this->render('@JeremyFront/Accessoire/echarpes.html.twig',
   [
     'myResults' => $result
   ]);
  }

  public function ceinturesAction()
  {
    $em = $this->getDoctrine()->getManager();

    $theEntityRepository = $em->getRepository(\Jeremy\ProduitBundle\Entity\Produit::class);

    $queryBuilder = $em->createQueryBuilder();

    $queryBuilder
      ->select('p')
      ->from(\Jeremy\ProduitBundle\Entity\Produit::class, 'p')
      ->where('p.categorie = :categorie')
      ->setParameter('categorie', 'ceinture');

    $query = $queryBuilder->getQuery();
    $result = $query->execute();

    return $this->render('@JeremyFront/Accessoire/ceintures.html.twig',
   [
     'myResults' => $result
   ]);
  }

  public function chapeauxAction()
  {
    $em = $this->getDoctrine()->getManager();

    $theEntityRepository = $em->getRepository(\Jeremy\ProduitBundle\Entity\Produit::class);

    $queryBuilder = $em->createQueryBuilder();

    $queryBuilder
      ->select('p')
      ->from(\Jeremy\ProduitBundle\Entity\Produit::class, 'p')
      ->where('p.categorie = :categorie')
      ->setParameter('categorie', 'bonnet/casquette/chapeau');

    $query = $queryBuilder->getQuery();
    $result = $query->execute();

    return $this->render('@JeremyFront/Accessoire/chapeaux.html.twig',
   [
     'myResults' => $result
   ]);
  }

  public function bijouxAction()
  {
    $em = $this->getDoctrine()->getManager();

    $theEntityRepository = $em->getRepository(\Jeremy\ProduitBundle\Entity\Produit::class);

    $queryBuilder = $em->createQueryBuilder();

    $queryBuilder
      ->select('p')
      ->from(\Jeremy\ProduitBundle\Entity\Produit::class, 'p')
      ->where('p.categorie = :categorie')
      ->setParameter('categorie', 'bijou');

    $query = $queryBuilder->getQuery();
    $result = $query->execute();

    return $this->render('@JeremyFront/Accessoire/bijoux.html.twig',
   [
     'myResults' => $result
   ]);
  }

}
