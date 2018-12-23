<?php

namespace Jeremy\BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="commande")
 * @ORM\Entity(repositoryClass="Jeremy\BackBundle\Repository\CommandeRepository")
 */
class Commande
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_enregistrement", type="datetime")
     */
    private $dateEnregistrement;

    /**
     * @var string
     *
     * @ORM\Column(name="prix_total", type="decimal", precision=5, scale=2)
     */
    private $prixTotal;

    /**
     * @ORM\ManyToOne(targetEntity="Jeremy\BackBundle\Entity\Membre", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $Membre;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dateEnregistrement
     *
     * @param \DateTime $dateEnregistrement
     *
     * @return Commande
     */
    public function setDateEnregistrement($dateEnregistrement)
    {
        $this->dateEnregistrement = $dateEnregistrement;

        return $this;
    }

    /**
     * Get dateEnregistrement
     *
     * @return \DateTime
     */
    public function getDateEnregistrement()
    {
        return $this->dateEnregistrement;
    }

    /**
     * Set prixTotal
     *
     * @param string $prixTotal
     *
     * @return Commande
     */
    public function setPrixTotal($prixTotal)
    {
        $this->prixTotal = $prixTotal;

        return $this;
    }

    /**
     * Get prixTotal
     *
     * @return string
     */
    public function getPrixTotal()
    {
        return $this->prixTotal;
    }

    /**
     * Set membre
     *
     * @param \Jeremy\BackBundle\Entity\Membre $membre
     *
     * @return Commande
     */
    public function setMembre(\Jeremy\BackBundle\Entity\Membre $membre)
    {
        $this->Membre = $membre;

        return $this;
    }

    /**
     * Get membre
     *
     * @return \Jeremy\BackBundle\Entity\Membre
     */
    public function getMembre()
    {
        return $this->Membre;
    }
}
