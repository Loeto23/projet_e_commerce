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

      // $aForm = $this->createForm(\Jeremy\FrontBundle\Form\ContactType::class);
      //
      // $aRequest = \Symfony\Component\HttpFoundation\Request::createFromGlobals();
      //
      // $aForm->handleRequest($aRequest);
      //
      // $aFormView = $aForm->createView();
      //
      // return $this->render('@JeremyFront/Contact/contact.html.twig',
      // [
      //   'view' => $aFormView,
      // ]);

      return $this->render('@JeremyFront/Contact/contact.html.twig');

    }

    public function backofficeAction()
    {
      return $this->render('@JeremyFront/Default/backoffice.html.twig');
    }

    public function nousSommesAction()
    {
      return $this->render('@JeremyFront/Noussommes/nousommes.html.twig');
    }

    public function faqAction()
    {
      return $this->render('@JeremyFront/Faq/faq.html.twig');
    }

    public function mentionAction()
    {
      return $this->render('@JeremyFront/Mention/mention.html.twig');
    }

    public function cgvAction()
    {
      return $this->render('@JeremyFront/Cgv/cgv.html.twig');
    }

    public function detailVetementAction($id_du_produit)
    {

      $em = $this->getDoctrine()->getManager();

      $theEntityRepository = $em->getRepository(\Jeremy\ProduitBundle\Entity\Produit::class);

      $voirDetail = $theEntityRepository->find($id_du_produit);

      // $voirDetail2 = $theEntityRepository->findAll();

      $queryBuilder = $em->createQueryBuilder();

      $queryBuilder
        ->select('p')
        ->from(\Jeremy\ProduitBundle\Entity\Produit::class, 'p')
        ->where('p.id = :id')
        ->setParameter('id', $id_du_produit);

      $query = $queryBuilder->getQuery();
      $result = $query->execute();

      if(empty($voirDetail))
      {
        return $this->redirectToRoute('jeremy_front_tops');
      }

      return $this->render('@JeremyFront/Vetement/detail.html.twig',
    [
     'myResults' => $result
    ]);

    }

    public function detailChaussureAction($id_du_produit)
    {

      $em = $this->getDoctrine()->getManager();

      $theEntityRepository = $em->getRepository(\Jeremy\ProduitBundle\Entity\Produit::class);

      $voirDetail = $theEntityRepository->find($id_du_produit);

      // $voirDetail2 = $theEntityRepository->findAll();

      $queryBuilder = $em->createQueryBuilder();

      $queryBuilder
        ->select('p')
        ->from(\Jeremy\ProduitBundle\Entity\Produit::class, 'p')
        ->where('p.id = :id')
        ->setParameter('id', $id_du_produit);

      $query = $queryBuilder->getQuery();
      $result = $query->execute();

      if(empty($voirDetail))
      {
        return $this->redirectToRoute('jeremy_front_botte');
      }

      return $this->render('@JeremyFront/Chaussure/detail.html.twig',
    [
     'myResults' => $result
    ]);

    }

    public function detailAccessoireAction($id_du_produit)
    {

      $em = $this->getDoctrine()->getManager();

      $theEntityRepository = $em->getRepository(\Jeremy\ProduitBundle\Entity\Produit::class);

      $voirDetail = $theEntityRepository->find($id_du_produit);

      // $voirDetail2 = $theEntityRepository->findAll();

      $queryBuilder = $em->createQueryBuilder();

      $queryBuilder
        ->select('p')
        ->from(\Jeremy\ProduitBundle\Entity\Produit::class, 'p')
        ->where('p.id = :id')
        ->setParameter('id', $id_du_produit);

      $query = $queryBuilder->getQuery();
      $result = $query->execute();

      if(empty($voirDetail))
      {
        return $this->redirectToRoute('jeremy_front_sac');
      }

      return $this->render('@JeremyFront/Accessoire/detail.html.twig',
    [
     'myResults' => $result
    ]);

    }

}
