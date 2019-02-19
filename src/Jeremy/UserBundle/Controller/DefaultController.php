<?php

namespace Jeremy\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Doctrine\ORM\EntityRepository;

class DefaultController extends Controller
{
    public function indexAction()
    {
      $doctrine = $this->getDoctrine();

      $theEntityRepository = $doctrine->getRepository(\Jeremy\UserBundle\Entity\User::class);

      $result = $theEntityRepository->findAll();

      // foreach($result as $key=>$value)
      // {
      //   $value->setPhoto(base64_encode(stream_get_contents($value->getPhoto())));
      // }

        return $this->render('@JeremyUser/Default/index.html.twig',
      [
       'myResults' => $result
      ]);
    }

    public function supprimerMembreAction($id_du_membre)
    {
      $em = $this->getDoctrine()->getManager();

      $theEntityRepository = $em->getRepository(\Jeremy\UserBundle\Entity\User::class);

      $supprimer_membre = $theEntityRepository->find($id_du_membre);

      $query = $em->createQuery(
        '
        SELECT
          u.username
        FROM
          Jeremy\UserBundle\Entity\User u
        WHERE u.id = :id
        '
        )->setParameter('id', $id_du_membre);
        $result = $query->execute();    

      if(empty($supprimer_membre))
      {
        return $this->redirectToRoute('jeremy_user_homepage');
      }

      $em->remove($supprimer_membre);

      $em->flush();

        return $this->render('@JeremyUser/Default/supprimerMembre.html.twig',
      [
        'myResults' => $result
      ]);
    }

    public function modifierMembreAction($id_du_membre)
    {
      $em = $this->getDoctrine()->getManager();

      $theEntityRepository = $em->getRepository(\Jeremy\UserBundle\Entity\User::class);

      $modifierMembre = $theEntityRepository->find($id_du_membre);

      if(empty($modifierMembre))
      {
        return $this->redirectToRoute('jeremy_user_homepage');
      }

      $aForm = $this->createForm(\Jeremy\UserBundle\Form\RegistrationType::class, $modifierMembre);

      $aRequest = \Symfony\Component\HttpFoundation\Request::createFromGlobals();

      $aForm->handleRequest($aRequest);

      $em->persist($modifierMembre);

      $em->flush();

      $aFormView = $aForm->createView();

      return $this->render('@JeremyUser/Default/modifierMembre.html.twig',
      [
        'view' => $aFormView,
      ]);

    }

    public function affichageUsernameAction($id)
    {



      // return $qb


      // $doctrine = $this->getDoctrine();
      //
      // $theEntityRepository = $doctrine->getRepository(\Jeremy\UserBundle\Entity\User::class);
      //
      // $theEntityManager = $doctrine->getManager();

      // $repository = $this
      //   ->getDoctrine()
      //   ->getManager()
      //   ->getRepository('JeremyUserBundle:User')
      // ;
      //
      // $result = $repository->findAll();



    }

}
