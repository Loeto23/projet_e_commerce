<?php

namespace Jeremy\NewsletterBundle\Model;


class Contact
{
  private $titre;

  private $contenu;

  private $email;


  /**
  * @return mixed
  */
  public function getTitre()
  {
    return $this->titre;
  }

  /**
  * @param mixed $titre
  */
  public function setContent($titre): void
  {
    $this->titre = $titre;
  }

  /**
  * @return mixed
  */
  public function getContenu()
  {
    return $this->contenu;
  }

  /**
  * @param mixed $contenu
  */
  public function setContent($contenu): void
  {
    $this->contenu = $contenu;
  }

  /**
  * @return mixed
  */
  public function getEmail()
  {
    return $this->email;
  }

  /**
  * @param mixed $email
  */
  public function setContent($email): void
  {
    $this->email = $email;
  }

}
